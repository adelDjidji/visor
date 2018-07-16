<?php
/**
 * Created by PhpStorm.
 * User: Adel
 * Date: 14-Jul-18
 * Time: 19:53
 */

require 'head.html';

?>

<div class="col-lg-3 col-sm-6 col-xs-11 center-login" style="text-align: center;    margin: auto;">


    <img src="assets/images/big-logo.png" alt="" style="    width: 60%;">
    <form action="" style=" ">

            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="text" class="form-control labeled" aria-label="" placeholder="Username ou email">
                    <div class="input-group-append">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
            </div>

        <div class="form-group">
                <div class="input-group mb-3">
                    <input type="password" class="form-control labeled" aria-label="" placeholder="Mot de passe">
                    <div class="input-group-append">
                        <i class="fa fa-lock"></i>
                    </div>
                </div>
            </div>

        <input type="submit" class="btn btn-outline-primary active" value="Se connecter">
        <br><br>
        <a href="#"> Mot de passe oublié ?</a>

    </form>
<div class="footer">

</div>


</div>

    <style>

    </style>


    <script>

        $(document).on('click','input.labeled', function () {
            alert('ademin');
            var o =$(this).closest('.input-group').find('.fa').getAttribute('class');
            alert(o);
        });

    </script>
<?php

include 'footer.html';
?>