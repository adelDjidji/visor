<?php

require 'head.html';
?>

        <script>
            $(document).ready(function(){
                $("#flip").click(function(){
                    $("#panel1").slideToggle("slow");
                });
            });
        </script>

        <style>
            #panel1, #flip {
                padding: 5px;
                text-align: center;
                background-color: #e5eecc;
                border: solid 1px #c3c3c3;
            }

            #panel1 {
                padding: 50px;
                display: none;
            }
        </style>



    <div id="flip">Click to slide the panel1 down or up</div>
    <div id="panel1">Hello world!</div>



<?php

include 'footer.html';
?>