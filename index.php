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
        <br>

        <a href="#"> Mot de passe oublié <i class="fas fa-question-circle"></i> </a>

    </form>

</div>

    <div class="footer">
        <span class="circled">FR</span>
        <span class="circled">i</span>
    </div>
    <style>
.form-group .fa-times-circle{
    cursor: pointer;
}
.form-group .fa-times-circle:hover{
    color: white;
}
        .footer{
            position: absolute;
            bottom: 15pt;
            right: 15pt;
        }

    </style>


    <script>

var in_input=false;
        $(document).on('input','input.labeled', function () {
            in_input =true;
            $(this).closest('.input-group')[0].childNodes[3].childNodes[1].setAttribute('class','fas fa-times-circle');
        });
        $(document).on('empty','input.labeled', function () {
            in_input = false;
            $(this).closest('.input-group')[0].childNodes[3].childNodes[1].setAttribute('class','fa fa-user');
        });
        $(document).on('keyup','input.labeled', function () {
            if (!this.value) {
                $(this).closest('.input-group')[0].childNodes[3].childNodes[1].setAttribute('class','fa fa-user');
            }
        });


        $(document).on('click','i.fa-times-circle', function () {
             $(this).closest('.input-group')[0].childNodes[1].value='';
             var type= $(this).closest('.input-group')[0].childNodes[1].getAttribute('type');
             if(type=='text') $(this).closest('.input-group')[0].childNodes[3].childNodes[1].setAttribute('class','fa fa-user');
             else  $(this).closest('.input-group')[0].childNodes[3].childNodes[1].setAttribute('class','fa fa-lock');

        });

        $(document).ready(function () {
           var items = $('.circled');
           console.log(items);
           var size,l=items.length,i=0;
           console.log('items length = '+l);
          for(i=0;i<l;i++){
               size = items[i].innerText.length;

           }
        });
    </script>
<?php

include 'footer.html';
?>