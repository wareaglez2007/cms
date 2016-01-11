<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define("ABSOLUT_PATH", $_SERVER['DOCUMENT_ROOT'] . "/projects/OOPtraining/");
define("IMAGE_PATH", "/projects/OOPtraining/backend/assets/images/");
define("DATE_ADDED",date("F j, Y, g:i a"));
define("HEADER", ABSOLUT_PATH . "backend/backend_classes/backend_template/header.php");
define("FOOTER", ABSOLUT_PATH . "backend/backend_classes/backend_template/footer.php");
define("MODS_PATH", "/projects/OOPtraining/backend/mods/");
function __autoload($class) {

    include ABSOLUT_PATH . 'backend/backend_classes/' . $class . '.php';
    

}


