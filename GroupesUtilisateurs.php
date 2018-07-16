<?php

require 'head.html';

require 'top-menu.html';
/*
error_reporting(E_WARNING & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT &~E_WARNING);

echo E_DEPRECATED.", ".E_STRICT ;//& ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT


phpinfo();*/
?>
<script>
    index_menu =2;
    
    var x = document.getElementById("modal-default"); 

    function closeDialog() { 
    x.close(); 
} 
</script>
<div id="container" class="body">

    <div id="left-bar-top" class="col-lg-3 left-bar">
        
            <section class="sidebar">
                
                    <ul class="sidebar-menu" data-widget="tree">
                        
                        <li><h3 class="header">Groupes</h3></li>
                        <li>
                            <form action="#" method="get" class="sidebar-form">
                    
                            <div class="search-bar">
                                    
                                <span class="input-group-btn">
                                        <button type="submit" name="rechercher" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                    <input class="form-control" type="text" name="recherche_inner" placeholder="Rechercher">
                                    
                            </div>                     
                    
                        </form>
                        </li>
                        <li>
                            
                            <div class="col-lg-12">
                                <button type="submit" name="ajouter" id="add-group-btn" class="btn btn-outline-primary large">+</button>
                            </div>      
                            
                        </li>
                </ul>
                

                    <div class="content"> 
                    
                        <div class="menu-item">
                            <label class="numberCircle">1</label><label class="separater">|</label> <a class="active" href="GroupesUtilisateurs.php"><small><i class="fa fa-circle"></i></small> <span>   Repertoire</span></a>                           
                            

                        </div>  
                        <div class="menu-item">
                            <label class="numberCircle">2</label><label class="separater">|</label> <a href="#"><i class="fa fa-circle"></i><span>    Groupe 1</span></a>                           
                            

                        </div>
                        <div class="menu-item">
                            <label class="numberCircle">3</label><label class="separater">|</label> <a href="#"><i class="fa fa-circle"></i><span>    Groupe 2</span></a>                           
                            

                        </div>
                        <div class="menu-item">
                            <label class="numberCircle">4</label><label class="separater">|</label> <a href="#"><i class="fa fa-circle"></i><span>    Groupe 3</span></a>                           
                            

                        </div>
                        <div class="menu-item">
                            <label class="numberCircle">5</label><label class="separater">|</label> <a href="#"><i class="fa fa-circle"></i><span>    Groupe 4</span></a>                           
                            

                        </div>
                        <div class="menu-item">
                            <label class="numberCircle">6</label><label class="separater">|</label> <a href="#"><i class="fa fa-circle"></i><span>    Groupe 5</span></a>                           
                            

                        </div>
                        
                     
                      
                        
                    </div> 
                    
                
            </section>  
        


    </div>


<div class="col-lg-9 body-content-top">
    <div class="row head-no-border">
            <div class="col-lg-8">
                <button type="submit" class="btn btn-outline-primary circle">+</button> <span class="header">Nouvel utilisateur</span>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2">
                <button type="submit" class="btn btn-outline-primary">Modifier</button>
            </div>
    </div>
    <!--Fin head -->
    <div class="row center-no-img">
    <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                <thead>
                    <tr>
                        <th><img src="assets/icons/thead.png" alt="image no valide"><label class="sepa">nom</label> <i class= "fa fa-caret-down"></i></th>
                        <th><img src="assets/icons/thead.png" alt="image no valide"><label class="sepa">Pèsence</label><i class= "fa fa-caret-down"></i></th>
                        <th><img src="assets/icons/thead.png" alt="image no valide"><label class="sepa">Dérnier passage le</label><i class= "fa fa-caret-down"></i></th>
                        <th><img src="assets/icons/thead.png" alt="image no valide"><label class="sepa">Identifiant</label><i class= "fa fa-caret-down"></i></th>
                    </tr>
                </thead>
                <tr>
                    <td><div><i class="fa fa-circle"></i><span>       A</span></div></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="name-block">
                            <img class="img-circle img-bordered-sm" src="assets/images/user.jpg" alt="user image">
                                <span class="username">
                                <a href="#">Sophie Hones</a>
                                </span>
                            <span class="description">Vauban system - security team</span>
                        </div> 
                        </td>
                        <td>Ideterminée</td>
                        <td>11/7/2014 - 09:17:32</td>
                        <td>48151623</td>
                </tr>
                <tr>
                  <td>
                    <div class="name-block">
                        <img class="img-circle img-bordered-sm" src="assets/images/user.jpg" alt="user image">
                            <span class="username">
                            <a href="#">Sophie Hones</a>
                            </span>
                        <span class="description">Vauban system - security team</span>
                    </div> 
                  </td>
                  <td>Ideterminée</td>
                  <td>11/7/2014 - 09:17:32</td>
                  <td>48151623</td>
                </tr>
                <tr>
                <td>
                    <div class="name-block">
                        <img class="img-circle img-bordered-sm" src="assets/images/user.jpg" alt="user image">
                            <span class="username">
                            <a href="#">Sophie Hones</a>
                            </span>
                        <span class="description">Vauban system - security team</span>
                    </div> 
                </td>
                <td>Ideterminée</td>
                <td>11/7/2014 - 09:17:32</td>
                <td>48151623</td>
              </tr>
              <tr>
              <tr>
              <td>
                <div class="name-block">
                    <img class="img-circle img-bordered-sm" src="assets/images/user.jpg" alt="user image">
                        <span class="username">
                        <a href="#">Jonathan Burke Jr.</a>
                        </span>
                    <span class="description">Shared publicly - 7:30 PM today</span>
                </div> 
              </td>
              <td>Ideterminée</td>
              <td>11/7/2014 - 09:17:32</td>
              <td>48151623</td>
            </tr>
            <tr class="alphabet">
                    <td><div><i class="fa fa-circle"></i><span>       B</span></div></td>
            </tr>
            <td>
                <div class="name-block">
                    <img class="img-circle img-bordered-sm" src="assets/images/user.jpg" alt="user image">
                        <span class="username">
                        <a href="#">Jonathan Burke Jr.</a>
                        </span>
                    <span class="description">Shared publicly - 7:30 PM today</span>
                </div> 
              </td>
              <td>Ideterminée</td>
              <td>11/7/2014 - 09:17:32</td>
              <td>48151623</td>
            </tr>
            <td>
                <div class="name-block">
                    <img class="img-circle img-bordered-sm" src="assets/images/user.jpg" alt="user image">
                        <span class="username">
                        <a href="#">Jonathan Burke Jr.</a>
                        </span>
                    <span class="description">Shared publicly - 7:30 PM today</span>
                </div> 
              </td>
              <td>Ideterminée</td>
              <td>11/7/2014 - 09:17:32</td>
              <td>48151623</td>
            </tr>
            <td>
                <div class="name-block">
                    <img class="img-circle img-bordered-sm" src="assets/images/user.jpg" alt="user image">
                        <span class="username">
                        <a href="#">Jonathan Burke Jr.</a>
                        </span>
                    <span class="description">Shared publicly - 7:30 PM today</span>
                </div> 
              </td>
              <td>Ideterminée</td>
              <td>11/7/2014 - 09:17:32</td>
              <td>48151623</td>
            </tr>
            <td>
                <div class="name-block">
                    <img class="img-circle img-bordered-sm" src="assets/images/user.jpg" alt="user image">
                        <span class="username">
                        <a href="#">Jonathan Burke Jr.</a>
                        </span>
                    <span class="description">Shared publicly - 7:30 PM today</span>
                </div> 
              </td>
              <td>Ideterminée</td>
              <td>11/7/2014 - 09:17:32</td>
              <td>48151623</td>
            </tr>
                
              </tbody></table>
            </div>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Launch Default Modal</button>
        <div class="modal fade in" id="modal-default" style="display: block; padding-right: 17px;">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="row head-no-border">
                    <div class="col-lg-8">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary active small">
                                <input type="checkbox" autocomplete="off"> Informations
                            </label>
                            <label class="btn btn-outline-primary small">
                                <input type="checkbox" checked="" autocomplete="off"> Flux d'actualités 
                            </label>
                            <label class="btn btn-outline-primary small">
                                <input type="checkbox" checked="" autocomplete="off"> Localisations
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-2">
                        <button class="btn btn-outline-primary small">Modifier</button>
                    </div>
                </div>
                <div class="row head-no-border">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <div class="profile-block">
                            <img class="img-circle img-bordered-sm" src="assets/images/user.jpg" alt="user image">
                        </div>
                        <span class="username">
                            <a href="#">Sophie Hones</a>
                            <span class="description">Vauban system-security team</span>
                        </span>
                    </div>   
                    <div class="col-lg-4"></div>    
                </div>
                <div class="row head-no-border">
                    <div class="col-lg-4"><label class="txt-org">Présence :</label><span class="txt-gray-c"> Indétérminée</span></div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-6"><label class="txt-org">Dérnier passage :</label><span class="txt-gray-c"> 15/11/2015 - 9:48</span></div>
                </div>
                <div class="head-no-border">
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td><div class="txt-gray-c"><span> Identifiant 1 : 48151642</span></div></td>
                                </tr>
                                <tr>
                                    <td><div class="txt-gray-c"><span> AUTORISATIONS</span></div></td>
                                </tr>
                                <tr>
                                    <td><div class="txt-gray-c"><span> Statut : autorisé</span></div></td>
                                </tr>
                                <tr>
                                    <td><div class="txt-gray-c"><span> Plage horaire : plage du groupe</span></div></td>
                                </tr>
                            <tbody>    
                        </table>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" onclick="closeDialog()" id="close" class="btn btn-default">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
    </div>



</div>
<!-- /fin .right-bar -->
</div>

<!-- /Fin .body -->
</body>
</html>