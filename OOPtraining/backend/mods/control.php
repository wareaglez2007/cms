<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'init.php';
global $command;
//global $pg_id;
$do = new Functions();
$GLOBALS['pg_id'] = $_GET['pg_id'];
var_dump($GLOBALS['pg_id']);
$command = (isset($_GET['command']) ? $_GET['command'] : $_POST['command']);
if (isset($_GET['command']) || isset($_POST['command'])) {



    switch ($command) {
        case "c1_page":
            $do = new Functions();
            $do->get_page_type();
            break;
        case "c2_page":
            echo "page type 2";
            break;
        case "c3_page":
            echo 'c3';
            break;
        case "c4_page":
            echo "c4";
            break;
        case "save_page":
            $do->save_page($_GET['pg_name'], $_GET['div_content']);
            //header("Location: /projects/OOPtraining/backend/mods/profile.php");
            break;
        case "image_upload":
            $do->Upload_images($_POST['uploadimage'], IMAGE_PATH, DATE_ADDED, $GLOBALS['pg_id']);
            var_dump($_POST);
            break;
    }
}




