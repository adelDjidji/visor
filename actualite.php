<?php
require 'head.html';
require 'top-menu.html';
?>


<script>
    index_menu =1;
</script>

<div class="body">

    <div class="col-lg-9 col-sm-8 body-content-top">
        <div class="row head">
            <div class=" col-xs-2 hidden-lg sm-hid">
                <button  class="btn btn-outline-primary rond" data-toggle="modal" data-target="#adel">+</button>
            </div>
            <div class="col-lg-8 col-sm-8 col-xs-7">

                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-outline-primary ">
                        <input type="checkbox" checked="" autocomplete="off"> Récente
                    </label>
                    <label class="btn btn-outline-primary active">
                        <input type="checkbox" autocomplete="off"> Alertes
                    </label>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-xs-3 " style="text-align: right;">
                <button class="btn btn-outline-primary sm-hid xs-hid">
                Modifier</button>
                <img class="orange-icon download" src="assets/icons/doznloqd.svg" alt="">
            </div>
        </div>
        <!-- /fin .row head -->
        <div class="row center">
        <table id="example" class="hover my-table xs-hid" style="width:100%">
        <thead>
            <tr>
                <th></th>
                <th>Date</th>
                <th>Nature</th>
                <th class="sm-hid">Lecteur</th>
                <th class="sm-hid">Identifiant</th>
                <th class="sm-hid">Nom</th>
                <th class="sm-hid">Prenom</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><span class="circled">1</span></td>
                <td>2011/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td class="sm-hid">Lecteur 05</td>
                <td class="sm-hid">655221</td>
                <td class="sm-hid">Duchamps</td>
                <td class="sm-hid">César Z</td>
            </tr>

            <tr>
                <td><span class="circled">41</span></td>
                <td>2011/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td class="sm-hid">Lecteur 05</td>
                <td class="sm-hid">655307</td>
                <td class="sm-hid">Duchamps</td>
                <td class="sm-hid">César Z</td>
            </tr>   
            <tr>
                <td><span class="circled">5</span></td>
                <td>2011/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td class="sm-hid">Lecteur 05</td>
                <td class="sm-hid">655307</td>
                <td class="sm-hid">Duchamps</td>
                <td class="sm-hid">César Z</td>
            </tr>
            <tr>
                <td><span class="circled">100</span></td>
                <td>2011/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td class="sm-hid">Lecteur 05</td>
                <td class="sm-hid">655307</td>
                <td class="sm-hid">Duchamps</td>
                <td class="sm-hid">César Z</td>
            </tr>
            <tr>
                <td><span class="circled">1</span></td>
                <td>2011/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td class="sm-hid">Lecteur 05</td>
                <td class="sm-hid">655307</td>
                <td class="sm-hid">Duchamps</td>
                <td class="sm-hid">César Z</td>
            </tr>
            <tr>
                <td><span class="circled">1</span></td>
                <td>2011/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td class="sm-hid">Lecteur 05</td>
                <td class="sm-hid">655307</td>
                <td class="sm-hid">Duchamps</td>
                <td class="sm-hid">César Z</td>
            </tr>
            <tr>
                <td><span class="circled">1</span></td>
                <td>2011/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td class="sm-hid">Lecteur 05</td>
                <td class="sm-hid">655307</td>
                <td class="sm-hid">Duchamps</td>
                <td class="sm-hid">César Z</td>
            </tr>
            <tr>
                <td><span class="circled">1</span></td>
                <td>2011/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td class="sm-hid">Lecteur 05</td>
                <td class="sm-hid">655307</td>
                <td class="sm-hid">Duchamps</td>
                <td class="sm-hid">César Z</td>
            </tr>
            <tr>
                <td><span class="circled">1</span></td>
                <td>2011/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td class="sm-hid">Lecteur 05</td>
                <td class="sm-hid">655307</td>
                <td class="sm-hid">Duchamps</td>
                <td class="sm-hid">César Z</td>
            </tr>
            <tr>
                <td><span class="circled">1</span></td>
                <td>2016/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td class="sm-hid">Lecteur 05</td>
                <td class="sm-hid">655321</td>
                <td class="sm-hid">Duchamps</td>
                <td class="sm-hid">César Z</td>
            </tr>
            <tr>
                <td><span class="circled">1</span></td>
                <td>2016/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td class="sm-hid">Lecteur 05</td>
                <td class="sm-hid">655321</td>
                <td class="sm-hid">Duchamps</td>
                <td class="sm-hid">César Z</td>
            </tr>
            <tr>
                <td><span class="circled">1</span></td>
                <td>2016/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td class="sm-hid">Lecteur 05</td>
                <td class="sm-hid">655321</td>
                <td class="sm-hid">Duchamps</td>
                <td class="sm-hid">César Z</td>
            </tr>
            <tr>
                <td><span class="circled">1</span></td>
                <td>2016/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td class="sm-hid">Lecteur 05</td>
                <td class="sm-hid">655321</td>
                <td class="sm-hid">Duchamps</td>
                <td class="sm-hid">César Z</td>
            </tr>
            <tr>
                <td><span class="circled">1</span></td>
                <td>2016/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td class="sm-hid">Lecteur 05</td>
                <td class="sm-hid">655321</td>
                <td class="sm-hid">Duchamps</td>
                <td class="sm-hid">César Z</td>
            </tr>
            <tr>
                <td><span class="circled">1</span></td>
                <td>2016/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td class="sm-hid">Lecteur 05</td>
                <td class="sm-hid">655321</td>
                <td class="sm-hid">Duchamps</td>
                <td class="sm-hid">César Z</td>
            </tr>
            <tr>
                <td><span class="circled">1</span></td>
                <td>2016/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td class="sm-hid">Lecteur 05</td>
                <td class="sm-hid">655321</td>
                <td class="sm-hid">Duchamps</td>
                <td class="sm-hid">César Z</td>
            </tr>
            <tr>
                <td><span class="circled">1</span></td>
                <td>2016/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td class="sm-hid">Lecteur 05</td>
                <td class="sm-hid">655321</td>
                <td class="sm-hid">Duchamps</td>
                <td class="sm-hid">César Z</td>
            </tr>
            <tr>
                <td><span class="circled">1</span></td>
                <td>2016/04/25 - 14:20:00</td>
                <td>System Architect</td>
                <td class="sm-hid">Lecteur 05</td>
                <td class="sm-hid">655321</td>
                <td class="sm-hid">Duchamps</td>
                <td class="sm-hid">César Z</td>
            </tr>
            
           
        </tbody>
       
    </table>

    <div class="hidden-lg sm-hid table-zone">
        <div class="panel-title">27 octobre 2017</div>
        <div class="panel">
            <div class="row line">
                <span class="circled">1</span>
                <span>unconnu identifiant</span>
                <span class="right-align">17:20</span>
            </div>
            <div class="row line">
                <span class="circled">15</span>
                <span>unconnu identifiant</span>
                <span class="right-align">17:20</span>
            </div>
            <div class="row line">
                <span class="circled">11</span>
                <span>unconnu identifiant</span>
                <span class="right-align">17:20</span>
            </div>
        </div>

        <div class="panel-title">27 octobre 2017</div>
        <div class="panel">
            <div class="row line">
                <span class="circled">1</span>
                <span>unconnu identifiant</span>
                <span class="right-align">17:20</span>
            </div>
            <div class="row line">
                <span class="circled">15</span>
                <span>unconnu identifiant</span>
                <span class="right-align">17:20</span>
            </div>
            <div class="row line">
                <span class="circled">11</span>
                <span>unconnu identifiant</span>
                <span class="right-align">17:20</span>
            </div>
        </div>

        <div class="panel-title">27 octobre 2017</div>
        <div class="panel">
            <div class="row line">
                <span class="circled">1</span>
                <span>unconnu identifiant</span>
                <span class="right-align">17:20</span>
            </div>
            <div class="row line">
                <span class="circled">15</span>
                <span>unconnu identifiant</span>
                <span class="right-align">17:20</span>
            </div>
            <div class="row line">
                <span class="circled">11</span>
                <span>unconnu identifiant</span>
                <span class="right-align">17:20</span>
            </div>
        </div>

        <div class="panel-title">27 octobre 2017</div>
        <div class="panel">
            <div class="row line">
                <span class="circled">1</span>
                <span>unconnu identifiant</span>
                <span class="right-align">17:20</span>
            </div>
            <div class="row line">
                <span class="circled">15</span>
                <span>unconnu identifiant</span>
                <span class="right-align">17:20</span>
            </div>
            <div class="row line">
                <span class="circled">11</span>
                <span>unconnu identifiant</span>
                <span class="right-align">17:20</span>
            </div>
        </div>



        <script>
            $(document).ready(function(){

                $(".panel-title").click(function(){
                    $(this).next().slideToggle("fast");

                });
            });
        </script>
    </div>

        </div>
        <!-- /fin .center -->
    </div>
    <!-- /fin .body-content-top -->

    
<div class="col-lg-3 col-sm-4 right-bar">
    <div class="search">
    <i class="fa fa-search" aria-hidden="true"></i>
        <input class="ronded-input" type="text" placeholder="Rechercher" name="recherche_inner" id="">
    </div>

    <div class="content">
            <button  class="btn btn-outline-primary large" data-toggle="modal" data-target="#adel">+</button>
            
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
include 'modal.nouvelleRequette.html';
include 'footer.html';
?>