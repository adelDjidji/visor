(function(){
    
   // Search function
   $.fn.dataTable.Api.register( 'alphabetSearch()', function ( searchTerm ) {
       this.iterator( 'table', function ( context ) {
           context.alphabetSearch = searchTerm;
       } );
    
       return this;
   } );
    
   // Recalculate the alphabet display for updated data
   $.fn.dataTable.Api.register( 'alphabetSearch.recalc()', function ( searchTerm ) {
       this.iterator( 'table', function ( context ) {
           draw(
               new $.fn.dataTable.Api( context ),
               $('div.alphabet', this.table().container())
           );
       } );
    
       return this;
   } );
    
    
   // Search plug-in
   $.fn.dataTable.ext.search.push( function ( context, searchData ) {
       // Ensure that there is a search applied to this table before running it
       if ( ! context.alphabetSearch ) {
           return true;
       }
    
       if ( searchData[0].charAt(0) === context.alphabetSearch ) {
           return true;
       }
    
       return false;
   } );
    
    
   // Private support methods
   function bin ( data ) {
       var letter, bins = {};
    
       for ( var i=0, ien=data.length ; i<ien ; i++ ) {
           letter = data[i].charAt(0).toUpperCase();
    
           if ( bins[letter] ) {
               bins[letter]++;
           }
           else {
               bins[letter] = 1;
           }
       }
    
       return bins;
   }
    
   function draw ( table, alphabet )
   {
       alphabet.empty();
       alphabet.append( '' );
    
       var columnData = table.column(0).data();
       var bins = bin( columnData );
    
       $('<span class="clear active"/>')
           .data( 'letter', '' )
           .data( 'match-count', columnData.length )
           .html( 'Aucun' )
           .appendTo( alphabet );
    
       for ( var i=0 ; i<26 ; i++ ) {
           var letter = String.fromCharCode( 65 + i );
    
           $('<span/>')
               .data( 'letter', letter )
               .data( 'match-count', bins[letter] || 0 )
               .addClass( ! bins[letter] ? 'empty' : '' )
               .html( letter )
               .appendTo( alphabet );
       }
    
       $('<div class="alphabetInfo"></div>')
       .appendTo( alphabet );
   }
    
    
   $.fn.dataTable.AlphabetSearch = function ( context ) {
       var table = new $.fn.dataTable.Api( context );
       var alphabet = $('<div class="alphabet"/>');
    
       draw( table, alphabet );
    
       // Trigger a search
       alphabet.on( 'click', 'span', function () {
           alphabet.find( '.active' ).removeClass( 'active' );
           $(this).addClass( 'active' );
    
           table
               .alphabetSearch( $(this).data('letter') )
               .draw();
       } );
    
       // Mouse events to show helper information
       alphabet
           .on( 'mouseenter', 'span', function () {
               alphabet
                   .find('div.alphabetInfo')
                   .css( {
                       opacity: 1,
                       left: $(this).position().left,
                       width: $(this).width()
                   } )
                   .html( $(this).data('match-count') )
           } )
           .on( 'mouseleave', 'span', function () {
               alphabet
                   .find('div.alphabetInfo')
                   .css('opacity', 0);
           } );
    
       // API method to get the alphabet container node
       this.node = function () {
           return alphabet;
       };
   };
    
   $.fn.DataTable.AlphabetSearch = $.fn.dataTable.AlphabetSearch;
    
    
   // Register a search plug-in
   $.fn.dataTable.ext.feature.push( {
       fnInit: function ( settings ) {
           var search = new $.fn.dataTable.AlphabetSearch( settings );
           return search.node();
       },
       cFeature: 'A'
   } );
    
   }());
    
    
   $(document).ready(function() {
       var table = $('#table-alphabet').DataTable( {
           dom: 'Alfrtip',
           paging: false,
       } );
   } );