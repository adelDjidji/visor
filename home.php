<?php

require 'head.html';

require 'top-menu.html';

?>




<script>
    index_menu =1;

    var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    $('#example').DataTable( {
        "columnDefs": [
            {
                "targets": [ 4 ],
                "visible": false
            },
            {
                "targets": [ 5 ],
                "visible": false
            }
        ]
    } );
    function myFunction(x) {
    if (x.matches) { // If media query matches
        
        document.body.style.backgroundColor = "green";
        
    
    } else {
        document.body.style.backgroundColor = "pink";
    }
}

var x = window.matchMedia("(max-width: 990px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes

</script>

<div class="body">



    <div class="col-lg-9 body-content-top">
        <div class="row head">
            <div class="col-lg-8">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-outline-primary ">
                        <input type="checkbox" checked="" autocomplete="off"> Récente
                    </label>
                    <label class="btn btn-outline-primary active">
                        <input type="checkbox" autocomplete="off"> Alertes
                    </label>
                </div>
            </div>
            <div class="col-lg-4">
                <button class="btn btn-outline-primary sm-hid">Modifier</button>
                <img class="orange-icon download" src="assets/icons/doznloqd.svg" alt="">
            </div>
        </div>
        <!-- /fin .row head -->
        <div class="row center">
        <table id="example" class="hover my-table" style="width:100%">
        <thead>
            <tr>
                <th></th>
                <th>Date</th>
                <th>Nature</th>
                <th>Lecteur</th>
                <th>Identifiant</th>
                <th>Nom</th>
                <th>Prenom</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2011/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td>Lecteur 05</td>
                <td>655221</td>
                <td>Duchamps</td>
                <td>César Z</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2011/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td>Lecteur 05</td>
                <td>655307</td>
                <td>Duchamps</td>
                <td>César Z</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2011/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td>Lecteur 05</td>
                <td>655307</td>
                <td>Duchamps</td>
                <td>César Z</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2011/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td>Lecteur 05</td>
                <td>655307</td>
                <td>Duchamps</td>
                <td>César Z</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2011/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td>Lecteur 05</td>
                <td>655307</td>
                <td>Duchamps</td>
                <td>César Z</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2011/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td>Lecteur 05</td>
                <td>655307</td>
                <td>Duchamps</td>
                <td>César Z</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2011/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td>Lecteur 05</td>
                <td>655307</td>
                <td>Duchamps</td>
                <td>César Z</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2011/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td>Lecteur 05</td>
                <td>655307</td>
                <td>Duchamps</td>
                <td>César Z</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2011/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td>Lecteur 05</td>
                <td>655307</td>
                <td>Duchamps</td>
                <td>César Z</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2016/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td>Lecteur 05</td>
                <td>655321</td>
                <td>Duchamps</td>
                <td>César Z</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2011/2/25 - 14:20:00</td>
                <td>System Architect</td>
                <td>Lecteur 05</td>
                <td>6532221</td>
                <td>Duchamps</td>
                <td>César Z</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2011/04/25 - 2:20:00</td>
                <td>System Architect</td>
                <td>Lecteur 05</td>
                <td>65532228</td>
                <td>Duchamps</td>
                <td>César Z</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2011/04/25 - 11:20:00</td>
                <td>System Architect</td>
                <td>Lecteur 05</td>
                <td>655374</td>
                <td>Duchamps</td>
                <td>César Z</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2011/04/15 - 14:20:00</td>
                <td>System Architect</td>
                <td>Lecteur 05</td>
                <td>65532221</td>
                <td>Duchamps</td>
                <td>César Z</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2011/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td>Lecteur 05</td>
                <td>65532221</td>
                <td>Duchamps</td>
                <td>César Z</td>
            </tr>
           
        </tbody>
       
    </table>
        </div>
    </div>
    <!-- /fin .body-content-top -->

    
<div class="col-lg-3 col-sm-4 right-bar">
    <div class="search">
    <i class="fa fa-search" aria-hidden="true"></i>
        <input class="ronded-input" type="text" placeholder="recherche" name="recherche_inner" id="">
    </div>

    <div class="content">
            <button class="btn btn-outline-primary large">+</button>

            <div class="lecteur-item">
               <p> <b>Lecteur 34 </b></p>
                <p>Jogn smmlith</p>
            </div>
            <div class="lecteur-item">
               <p> <b>Lecteur 34 </b></p>
                <p>Jogn smmlith</p>
            </div>
            <div class="lecteur-item">
               <p> <b>Lecteur 34 </b></p>
                <p>Jogn smmlith</p>
            </div>
    </div>  
    
</div>
<!-- /fin .right-bar -->
</div>
<!-- /Fin .body -->




<?php
include 'footer.html';
?>