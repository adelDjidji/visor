<?php

require 'head.html';

require 'top-menu.html';
/*
error_reporting(E_WARNING & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT &~E_WARNING);

echo E_DEPRECATED.", ".E_STRICT ;//& ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT


phpinfo();*/
?>
<div class="body">

<div class="col-lg-9 body-content">
    <div class="row">
        <div class="col-lg-8">
            <!-- <button class="btn btn-outline-primary">one</button> -->
        <!-- <button class="btn btn-primary">yyyy</button> -->
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-outline-primary ">
                    <input type="checkbox" checked="" autocomplete="off"> Active
                </label>
                <label class="btn btn-outline-primary active">
                    <input type="checkbox" autocomplete="off"> Check
                </label>
            </div>
        </div>
        <div class="col-lg-4">
            <button class="btn btn-outline-primary">modifier</button>
            <img src="assets/icons/doznloqd.png" alt="">
        </div>
    </div>
</div>
<!-- /fin .body-content -->
<div class="col-lg-3 right-bar">
    <div class="search">
        <i class="fas fa-search"></i>
        <input class="ronded-input" type="text" placeholder="recherche" name="recherche_inner" id="">
    </div>

</div>
<!-- /fin .right-bar -->
</div>
<!-- /Fin .body -->


</body>
</html>