<?php
/**
 * Created by PhpStorm.
 * User: Adel
 * Date: 14-Jul-18
 * Time: 19:53
 */


require 'head.html';

?>
<div class="center" style="text-align: center; padding: 21%; padding-bottom: 0px;">



    <img src="assets/icons/one.svg" alt="">
    <form action="" style="padding: 3% 24%;">

            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <div class="input-group-append">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
            </div>

        <div class="form-group">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
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
<?php

include 'footer.html';
?>