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
    index_menu =3;
    index_left_menu =0;
    
    var x = document.getElementById("modal-default"); 

    function closeDialog() { 
    x.close(); 
} 
</script>
<div id="container" class="body">
    <?php
        include 'left-group-menu.html';
    ?>
    <div class="col-lg-9 body-content-top">
        <div class="row head-no-border">
                <div class="col-lg-8 col-sm-5">
                    <button type="submit" class="btn btn-outline-primary circle">+</button> <span class="header">Nouvel utilisateur</span>
                </div>
                <div class="col-lg-2 col-sm-3">
                </div>
                <div class="col-lg-2 col-sm-4">
                    <button type="submit" class="btn btn-outline-primary">Modifier</button>
                </div>
        </div>
        <!--Fin head -->
        <div class="row center-no-img">
            <div class="box-body table-responsive no-padding">
                <table id="table-alphabet" class="table table-hover">
                    
                        <thead>
                            <tr>
                                <th><img class="sm-hid" src="assets/icons/thead.png" alt="image no valide"><label class="sepa">Nom</label></th>
                                <th><img class="sm-hid" src="assets/icons/thead.png" alt="image no valide"><label class="sepa">Pèsence</label></th>
                                <th class="sm-hid"><img src="assets/icons/thead.png" alt="image no valide"><label class="sepa">Dérnier passage le</label></th>
                                <th class="sm-hid"><img src="assets/icons/thead.png" alt="image no valide"><label class="sepa">Identifiant</label></th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        <tr>
                            <td><div class="txt-gray-2"><i class="fa fa-circle"></i><span>       A</span></div></td>
                            <td></td>
                            <td class="sm-hid"></td>
                            <td class="sm-hid"></td>
                        </tr>
                        <tr data-toggle="modal" data-target="#modal-default">
                            <td>
                                <div class="name-block">
                                    <img class="img-circle img-bordered-sm" src="assets/images/user.jpg" alt="user image">
                                        <span class="username">
                                        <a href="#" data-toggle="modal" data-target="#modal-default">Sophie Hones</a>
                                        </span>
                                    <span class="description">Vauban system - security team</span>
                                </div> 
                                </td>
                                <td>Ideterminée</td>
                                <td class="sm-hid">11/7/2014 - 09:17:32</td>
                                <td class="sm-hid">48151623</td>
                        </tr>
                        <tr data-toggle="modal" data-id="1" data-target="#modal-default">
                        <td>
                            <div class="name-block">
                                <img class="img-circle img-bordered-sm" src="assets/images/user.jpg" alt="user image">
                                    <span class="username">
                                    <a href="#" data-toggle="modal" data-target="#modal-default">Sophie Hones</a>
                                    </span>
                                <span class="description">Vauban system - security team</span>
                            </div> 
                        </td>
                        <td>Ideterminée</td>
                        <td class="sm-hid">11/7/2014 - 09:17:32</td>
                        <td class="sm-hid">48151623</td>
                        </tr>
                        <tr data-toggle="modal" data-id="1" data-target="#modal-default">
                        <td>
                            <div class="name-block">
                                <img class="img-circle img-bordered-sm" src="assets/images/user.jpg" alt="user image">
                                    <span class="username">
                                    <a href="#" data-toggle="modal" data-target="#modal-default">Sophie Hones</a>
                                    </span>
                                <span class="description">Vauban system - security team</span>
                            </div> 
                        </td>
                        <td>Ideterminée</td>
                        <td class="sm-hid">11/7/2014 - 09:17:32</td>
                        <td class="sm-hid">48151623</td>
                        </tr>
                        <tr data-toggle="modal" data-id="1" data-target="#modal-default">
                            <td>
                                <div class="name-block">
                                    <img class="img-circle img-bordered-sm" src="assets/images/user.jpg" alt="user image">
                                        <span class="username">
                                        <a href="#" data-toggle="modal" data-target="#modal-default">Jonathan Burke Jr.</a>
                                        </span>
                                    <span class="description">Shared publicly - 7:30 PM today</span>
                                </div> 
                            </td>
                            <td>Ideterminée</td>
                            <td class="sm-hid">11/7/2014 - 09:17:32</td>
                            <td class="sm-hid">48151623</td>
                        </tr>
                        <tr>
                            <td><div class="txt-gray-2"><i class="fa fa-circle"></i><span>       B</span></div></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr data-toggle="modal" data-id="1" data-target="#modal-default">
                            <td>
                                <div class="name-block">
                                    <img class="img-circle img-bordered-sm" src="assets/images/user.jpg" alt="user image">
                                        <span class="username">
                                        <a href="#" data-toggle="modal" data-target="#modal-default">Jonathan Burke Jr.</a>
                                        </span>
                                    <span class="description">Shared publicly - 7:30 PM today</span>
                                </div> 
                            </td>
                            <td>Ideterminée</td>
                            <td class="sm-hid">11/7/2014 - 09:17:32</td>
                            <td class="sm-hid">48151623</td>
                        </tr>
                        <tr data-toggle="modal" data-id="1" data-target="#modal-default">
                            <td>
                                <div class="name-block">
                                    <img class="img-circle img-bordered-sm" src="assets/images/user.jpg" alt="user image">
                                        <span class="username">
                                        <a href="#" data-toggle="modal" data-target="#modal-default">Jonathan Burke Jr.</a>
                                        </span>
                                    <span class="description">Shared publicly - 7:30 PM today</span>
                                </div> 
                            </td>
                            <td>Ideterminée</td>
                            <td class="sm-hid">11/7/2014 - 09:17:32</td>
                            <td class="sm-hid">48151623</td>
                        </tr>   
                        <tr data-toggle="modal" data-id="1" data-target="#modal-default">
                            <td>
                                <div class="name-block">
                                    <img class="img-circle img-bordered-sm" src="assets/images/user.jpg" alt="user image">
                                        <span class="username">
                                        <a href="#" data-toggle="modal" data-target="#modal-default">Jonathan Burke Jr.</a>
                                        </span>
                                    <span class="description">Shared publicly - 7:30 PM today</span>
                                </div> 
                            </td>
                            <td>Ideterminée</td>
                            <td class="sm-hid">11/7/2014 - 09:17:32</td>
                            <td class="sm-hid">48151623</td>
                        </tr>
                        <tr data-toggle="modal" data-id="1" data-target="#modal-default">
                            <td>
                                <div class="name-block">
                                    <img class="img-circle img-bordered-sm" src="assets/images/user.jpg" alt="user image">
                                        <span class="username">
                                        <a href="#" data-toggle="modal" data-target="#modal-default">Jonathan Burke Jr.</a>
                                        </span>
                                    <span class="description">Shared publicly - 7:30 PM today</span>
                                </div> 
                            </td>
                            <td>Ideterminée</td>
                            <td class="sm-hid">11/7/2014 - 09:17:32</td>
                            <td class="sm-hid">48151623</td>
                        </tr>
                    
                    </tbody>
                </table>
            </div>
            
        <div>

    </div>
    <!-- /fin .right-bar -->
</div>

<script>
$(function(){
    $('#modal-default').modal({
        keyboard: true,
        backdrop: "static",
        show:false,

    }).on('show', function(){ //subscribe to show method
          var getIdFromRow = $(event.target).closest('tr').data('id'); //get the id from tr
        //make your ajax call populate items or what even you need
        $(this).find('#modal-default').html($('<b> Order Id selected: ' + getIdFromRow  + '</b>'))
    });
});
</script>



<?php

include 'modal.ficheContact.html';
include 'footer.html';
?>