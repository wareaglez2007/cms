<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Functions
 *
 * @author rostomsahakian
 */
//require_once 'init.php';

class Functions {

    private $db;
    private $mysqli;
    private $success;
    private $_prefix;
    public $p_id;
    public $error_message;
    public $success_message;
    private $_cmd;
    private $_images = array();
    public $_nums = array();
    public $_values = array();

    public function __construct() {
        $this->db = db_connect::getInstance();
        $this->mysqli = $this->db->getConnection();

        echo $this->ReturnCommand();
    }

    public function SaveCommand($cmd) {
        $this->_cmd = $cmd;
        session_start();
        $_SESSION['cmd'] = $this->_cmd;
        var_dump($_SESSION['cmd']);
    }

    public function ReturnCommand() {
        return $this->_cmd;
    }

    public function get_page_type($page_name) {

        switch ($page_name) {
            case "c1_page":
                $c1 = new c1();
                $c1->UploadImages();
                $c1->GetAllCarouselImages();
                $c1->SetCarouselImages();

                $c1->getContent($page_name);
                break;
            case "c2_page":
                $c1 = new c1();
                $c1->UploadImages();
                $c1->GetAllCarouselImages();
                $c1->SetCarouselImages();
                $c1->getContent($page_name);
                break;
            case "c3_page":
                $c1 = new c1();
                $c1->UploadImages();
                $c1->getContent($page_name);
                break;
            case "c4_page":
                $c1 = new c1();
                $c1->UploadImages();
                $c1->getContent($page_name);
                break;
            case "c5_page":
                $c1 = new c1();
                $c1->UploadImages();
                $c1->getContent($page_name);
                break;
            case "c6_page":
                $c1 = new c1();
                $c1->UploadImages();
                $c1->getContent($page_name);
                break;
            case "c7_page":
                $c1 = new c1();
                $c1->UploadImages();
                $c1->getContent($page_name);
                break;
            case "c8_page":
                $c1 = new c1();
                $c1->UploadImages();
                $c1->getContent($page_name);
                break;
            case "c9_page":
                $c1 = new c1();
                $c1->UploadImages();
                $c1->getContent($page_name);
                break;
            case "c10_page":
                $c1 = new c1();
                $c1->UploadImages();
                $c1->getContent($page_name);
                break;
            case "c11_page":
                $c1 = new c1();
                $c1->UploadImages();
                $c1->getContent($page_name);
                break;
            case "c12_page":
                $c1 = new c1();
                $c1->UploadImages();
                $c1->getContent($page_name);
                break;
            case "c13_page":
                $c1 = new c1();
                $c1->UploadImages();
                $c1->getContent($page_name);
                break;
            case "c14_page":
                $c1 = new c1();
                $c1->UploadImages();
                $c1->getContent($page_name);
                break;
            case "c15_page":
                $c1 = new c1();
                $c1->UploadImages();
                $c1->getContent($page_name);
                break;
            case "c16_page":
                $c1 = new c1();
                $c1->UploadImages();
                $c1->getContent($page_name);
                break;
            case "c17_page":
                $c1 = new c1();
                $c1->UploadImages();
                $c1->getContent($page_name);
                break;
            case "c18_page":
                $c1 = new c1();
                $c1->UploadImages();
                $c1->getContent($page_name);
                break;
            case "c19_page":
                $c1 = new c1();
                $c1->UploadImages();
                $c1->getContent($page_name);
                break;
            case "c20_page":
                $c1 = new c1();
                $c1->UploadImages();
                $c1->getContent($page_name);
                break;
        }
    }

    public function save_page($pg_name, $pg_content) {

        if (isset($_GET['save_pg']) && $_GET['save_pg'] == "Save" && !empty($pg_name) && !empty($pg_content)) {
            $date = date("F j, Y, g:i a");

            $sql = "INSERT INTO `page_content`(`page_title`, `page_content`, `page_added`) VALUES ('$pg_name','$pg_content','$date')";

            $result = $this->mysqli->query($sql);
            //$this->success = $result;
            $this->Redirect($result, "Location: /projects/OOPtraining/backend/mods/profile.php");
        }
    }

    /*
     * REDIRECTING FUNCTION WHEN NEEDED CAN BE CALLED LOCATION NEEDS TO BE PROVIDED
     */

    public function Redirect($suc = false, $location) {

        $this->success = $suc;

        if ($this->success == true) {
            header($location);
        } else {
            return FALSE;
        }
    }

    /*
     * SAVES CONTENT INTO THE SQL PAGE
     */

    public function SaveContent(array $content, $date_added) {
        /*
         * Make sure the aposhtrophies are taken care of.
         */

        $page_content = mysql_real_escape_string($content['page_content']);
        $page_title = mysql_real_escape_string($content['page_title']);
        $div2 = mysql_real_escape_string($content['div2']);
        $div3 = mysql_real_escape_string($content['div3']);
        $div4 = mysql_real_escape_string($content['div4']);
        $div5 = mysql_real_escape_string($content['div5']);
        $div6 = mysql_real_escape_string($content['div6']);
        $div7 = mysql_real_escape_string($content['div7']);
        $div8 = mysql_real_escape_string($content['div8']);
        $page_type = mysql_real_escape_string($content['type']);
        $page_id = mysql_real_escape_string($content['pg_id']);

        //var_dump($content);


        /*
         * 1st check to see if this page id has any content
         */
        $sql = "SELECT * FROM `page_content` WHERE `page_id` = '$page_id'";
        $result = $this->mysqli->query($sql);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            $this->CheckOldContent($content);
        } else {

            if (($page_title == NULL)) {
                $this->ErrorMessages("Please fill in the required fields.");
            } else {
                /*
                 * NEED TO WORK ON THIS SECTION---->
                 */
                $this->SavePageUID($page_id, $page_type);

                $sql = "INSERT INTO `page_content` (`page_title`, `page_content`,`div2`,`div3`,`div4`,"
                        . "`div5`,`div6`,`div7`,`div8`,`page_type`,`page_id`,`page_added`) "
                        . "VALUES ('$page_title', '$page_content','$div2','$div3',"
                        . "'$div4','$div5','$div6','$div7',"
                        . "'$div8', '$page_type', '$page_id','$date_added')";
                $result = $this->mysqli->query($sql);

                if ($result == true) {
                    $this->SuccessMessages("Page was added.");
                } else {
                    $this->ErrorMessages("Page was not added (ERORR 104 aphostrophie).");
                }
            }
        }
    }

    public function GetContentForPageFields($page_uid) {
        
    }

    /*
     * SAVES PAGE UID INTO "page_ids"  
     */

    public function SavePageUID($page_uid, $page_type) {
        if ($this->CHECKUID($page_uid, "page_uid", "page_ids") == 0) {

            $sql = "INSERT INTO `page_ids` (`page_uid`,`page_type`) VALUES ('$page_uid', '$page_type')";
            $result = $this->mysqli->query($sql);

            if ($result == true) {
                $this->SuccessMessages("Page ID registered.");
            } else {
                $this->ErrorMessages("Page ID not registered.");
            }
        }
    }

    /*
     * UPLOEADS IMAGES TO THE DIRECTORY AS WELL AS IMAGE PATH, NAME AND UID INTO SQL TABLE
     */

    public function Do_Upload_images($image, $path, $date_added, $page_uid, $page_type) {

        $dir = "/Applications/MAMP/htdocs/projects/OOPtraining/backend/assets/images/";
        $image_file = $dir . basename($_FILES["uploadimage"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($image_file, PATHINFO_EXTENSION);
        if (isset($_POST['imgupload'])) {
            $check = getimagesize($_FILES["uploadimage"]["tmp_name"]);
            if ($check !== FALSE) {
                $this->SuccessMessages("File is an image - " . $check["mime"] . ".");

                $uploadOk = 1;
            } else {
                $this->ErrorMessages("File is not an image.");
                $uploadOk = 0;
            }
        }
//        if (file_exists($image_file)) {
//            $this->ErrorMessages("Sorry, file already exists.");
//            $uploadOk = 0;
//        }
        if ($_FILES['uploadimage']["size"] > 5000000) {
            $this->ErrorMessages("Sorry, your file is too large.");
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $this->ErrorMessages("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            $this->ErrorMessages("Sorry, your file was not uploaded.");
        } else {
            if (move_uploaded_file($_FILES["uploadimage"]["tmp_name"], $image_file)) {
                $this->SuccessMessages("<br/>The file " . basename($_FILES["uploadimage"]["name"]) . " has been uploaded.");
                $image_name = basename($_FILES["uploadimage"]["name"]);

                $this->SavePageUID($page_uid, $page_type);




                $this->_values['one'] = $page_uid;
                $this->_values['two'] = $page_type;
                $this->_values['three'] = $date_added;
                $this->Insert_Into_generic("page_content", "page_id", "page_type", "page_added", NULL, $this->_values);

                $sql = "INSERT INTO `page_images`(`page_uid`,`image_path`, `image_name`, `date_added`) VALUES ('$page_uid','$path','$image_name','$date_added')";

                $result = $this->mysqli->query($sql);
            } else {
                $this->ErrorMessages("Sorry, there was an error uploading your file.");
            }
        }
    }

    /*
     * 
     * GENERIC INSERT up to four fieilds
     * 
     */

    public function Insert_Into_generic($table, $filed1 = NULL, $field2 = NULL, $field3 = NULL, $field4 = NULL, array $values) {

        if ($this->CHECKUID($values['one'], $filed1, $table) == 0) {



            if ($filed1 != NULL && $field2 != NULL && $field3 != NULL && $field4 != NULL) {

                $returned_results_array = array();



                $sql = "INSERT INTO `$table` ($filed1,$field2,$field3,$field4) VALUES ('" . $values['one'] . "','" . $values['two'] . "','" . $values['three'] . "','" . $values['four'] . "')";
                $result = $this->mysqli->query($sql);
                if ($result == TRUE) {
                    $this->SuccessMessages("Data added. (FROM GENERIC)");
                } else {

                    $this->ErrorMessages("Unable to add data check you inputs. (Generic 4)");
                }
            } elseif ($filed1 != NULL && $field2 != NULL && $field3 != NULL && $field4 == NULL) {


                $sql = "INSERT INTO `$table` ($filed1,$field2,$field3) VALUES ('" . $values['one'] . "','" . $values['two'] . "','" . $values['three'] . "')";
                $result = $this->mysqli->query($sql);
                if ($result == TRUE) {
                    $this->SuccessMessages("Data added. (FROM GENERIC)");
                } else {

                    $this->ErrorMessages("Unable to add data check you inputs. (Generic 3)");
                }
            } elseif ($filed1 != NULL && $field2 != NULL && $field3 == NULL && $field4 == NULL) {


                $sql = "INSERT INTO `$table` ($filed1,$field2) VALUES ('" . $values['one'] . "','" . $values['two'] . "')";
                $result = $this->mysqli->query($sql);
                if ($result == TRUE) {
                    $this->SuccessMessages("Data added. (FROM GENERIC)");
                } else {

                    $this->ErrorMessages("Unable to add data check you inputs. (Generic 2)");
                }
            } elseif ($filed1 != NULL && $field2 == NULL && $field3 == NULL && $field4 == NULL) {


                $sql = "INSERT INTO `$table` ($filed1) VALUES ('" . $values['one'] . "')";
                $result = $this->mysqli->query($sql);
                if ($result == TRUE) {
                    $this->SuccessMessages("Data added. (FROM GENERIC)");
                } else {

                    $this->ErrorMessages("Unable to add data check you inputs. (Generic 1)");
                }
            }
        } else {
            $this->ErrorMessages("Page ID has been added to the table");
        }
    }

    /*
     * Counts number of rows
     */

    public function CountNums($distinct = NULL, $field, $table) {
        $num = array();
        $sql = "SELECT COUNT($distinct $field) AS Number FROM `$table`";
        $result = $this->mysqli->query($sql);
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

            $num[] = $row;
        }
        $this->_nums = $num;
        return $num;
    }

    /*
     * NOT USED CURRENTLY
     */

    public function setValue($p_value) {
        $this->p_id = $p_value;
    }

    /*
     * NOT USED CURRENTLY
     */

    public function getValue() {
        return $this->p_id;
    }

    /*
     * GENERATES UINIQUE ID NUMBERS FOR PAGES IT HAS PRE FIX PROPRETY SET
     */

    public function UniqIDGen($prefix) {
        $this->_prefix = $prefix;
        return uniqid($this->_prefix, FALSE);
    }

    /*
     * SELECT THE PAGE TYPE YOU WOULD LIKE TO ADD
     */

    public function SelectPageType() {
        ?>
        <h1 class="h3">Add New pages</h1>
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <form action="profile.php">
                    <a href="#" class="thumbnail">
                        <input type="submit" name="pg_type1" value="" id="c1_page"/>
                        <input type="hidden" name="type" value="c1_page"/>
                        <input type="hidden" name="pg_id" value="<?= $this->UniqIDGen("c1_") ?>"/>
                        <input type="hidden" name="command" value="c1_page"/>
                    </a>
                </form>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <form action="profile.php">
                        <input type="submit" name="pg_type1" value="" id="c2_page"/>
                        <input type="hidden" name="type" value="c2_page"/>
                        <input type="hidden" name="pg_id" value="<?= $this->UniqIDGen("c2_") ?>"/>

                        <input type="hidden" name="command" value="c2_page"/>
                    </form>
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <form action="profile.php">
                        <input type="submit" name="pg_type1" value="" id="c3_page"/>
                        <input type="hidden" name="type" value="c3_page"/>
                        <input type="hidden" name="pg_id" value="<?= $this->UniqIDGen("c3_") ?>"/>

                        <input type="hidden" name="command" value="c3_page"/>
                    </form>
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">

                    <form action="profile.php">           
                        <input type="submit" name="pg_type1" value="" id="c4_page"/>     
                        <input type="hidden" name="type" value="c4_page"/>
                        <input type="hidden" name="pg_id" value="<?= $this->UniqIDGen("c4_") ?>"/>

                        <input type="hidden" name="command" value="c4_page"/></form>
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">

                    <form action="profile.php">                            
                        <input type="submit" name="pg_type1" value="" id="c5_page"/>  
                        <input type="hidden" name="type" value="c5_page"/>
                        <input type="hidden" name="pg_id" value="<?= $this->UniqIDGen("c5_") ?>"/>

                        <input type="hidden" name="command" value="c5_page"/></form>
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">

                    <form action="profile.php">                            
                        <input type="submit" name="pg_type1" value="" id="c6_page"/>   
                        <input type="hidden" name="type" value="c6_page"/>
                        <input type="hidden" name="pg_id" value="<?= $this->UniqIDGen("c6_") ?>"/>

                        <input type="hidden" name="command" value="c6_page"/></form>
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">

                    <form action="profile.php">                            
                        <input type="submit" name="pg_type1" value="" id="c7_page"/>   
                        <input type="hidden" name="type" value="c7_page"/>
                        <input type="hidden" name="pg_id" value="<?= $this->UniqIDGen("c7_") ?>"/>

                        <input type="hidden" name="command" value="c7_page"/></form>
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">

                    <form action="profile.php">                            
                        <input type="submit" name="pg_type1" value="" id="c8_page"/>   
                        <input type="hidden" name="type" value="c8_page"/>
                        <input type="hidden" name="pg_id" value="<?= $this->UniqIDGen("c8_") ?>"/>

                        <input type="hidden" name="command" value="c8_page"/></form>
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">

                    <form action="profile.php">                            
                        <input type="submit" name="pg_type1" value="" id="c9_page"/>   
                        <input type="hidden" name="type" value="c9_page"/>
                        <input type="hidden" name="pg_id" value="<?= $this->UniqIDGen("c9_") ?>"/>

                        <input type="hidden" name="command" value="c9_page"/></form>
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">

                    <form action="profile.php">                            
                        <input type="submit" name="pg_type1" value="" id="c10_page"/>   
                        <input type="hidden" name="type" value="c10_page"/>
                        <input type="hidden" name="pg_id" value="<?= $this->UniqIDGen("c10_") ?>"/>

                        <input type="hidden" name="command" value="c10_page"/></form>
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">

                    <form action="profile.php">                            
                        <input type="submit" name="pg_type1" value="" id="c11_page"/>    
                        <input type="hidden" name="type" value="c11_page"/>
                        <input type="hidden" name="pg_id" value="<?= $this->UniqIDGen("c11_") ?>"/>

                        <input type="hidden" name="command" value="c11_page"/></form>
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">

                    <form action="profile.php">                            
                        <input type="submit" name="pg_type1" value="" id="c12_page"/>     
                        <input type="hidden" name="type" value="c12_page"/>
                        <input type="hidden" name="pg_id" value="<?= $this->UniqIDGen("c12_") ?>"/>

                        <input type="hidden" name="command" value="c12_page"/></form>
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">

                    <form action="profile.php">                            
                        <input type="submit" name="pg_type1" value="" id="c13_page"/>  
                        <input type="hidden" name="type" value="c13_page"/>
                        <input type="hidden" name="pg_id" value="<?= $this->UniqIDGen("c13_") ?>"/>

                        <input type="hidden" name="command" value="c13_page"/></form>
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">

                    <form action="profile.php">                            
                        <input type="submit" name="pg_type1" value="" id="c14_page"/> 
                        <input type="hidden" name="type" value="c14_page"/>
                        <input type="hidden" name="pg_id" value="<?= $this->UniqIDGen("c14_") ?>"/>

                        <input type="hidden" name="command" value="c14_page"/></form>
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">

                    <form action="profile.php">                            
                        <input type="submit" name="pg_type1" value="" id="c15_page"/>  
                        <input type="hidden" name="type" value="c15_page"/>
                        <input type="hidden" name="pg_id" value="<?= $this->UniqIDGen("c15_") ?>"/>

                        <input type="hidden" name="command" value="c15_page"/></form>
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">

                    <form action="profile.php">                            
                        <input type="submit" name="pg_type1" value="" id="c16_page"/> 
                        <input type="hidden" name="type" value="c16_page"/>
                        <input type="hidden" name="pg_id" value="<?= $this->UniqIDGen("c16_") ?>"/>

                        <input type="hidden" name="command" value="c16_page"/></form>
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">

                    <form action="profile.php">                            
                        <input type="submit" name="pg_type1" value="" id="c17_page"/> 
                        <input type="hidden" name="type" value="c17_page"/>
                        <input type="hidden" name="pg_id" value="<?= $this->UniqIDGen("c17_") ?>"/>

                        <input type="hidden" name="command" value="c17_page"/></form>
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">

                    <form action="profile.php">                            
                        <input type="submit" name="pg_type1" value="" id="c18_page"/>  
                        <input type="hidden" name="type" value="c18_page"/>
                        <input type="hidden" name="pg_id" value="<?= $this->UniqIDGen("c18_") ?>"/>

                        <input type="hidden" name="command" value="c18_page"/></form>
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">

                    <form action="profile.php">                            
                        <input type="submit" name="pg_type1" value="" id="c19_page"/>   
                        <input type="hidden" name="type" value="c19_page"/>
                        <input type="hidden" name="pg_id" value="<?= $this->UniqIDGen("c19_") ?>"/>

                        <input type="hidden" name="command" value="c19_page"/></form>
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">

                    <form action="profile.php">                            
                        <input type="submit" name="pg_type1" value="" id="c20_page"/>    
                        <input type="hidden" name="type" value="c20_page"/>
                        <input type="hidden" name="pg_id" value="<?= $this->UniqIDGen("c20_") ?>"/>

                        <input type="hidden" name="command" value="c20_page"/></form>
                </a>
            </div>
        </div>

        <?php
    }

    /*
     * ECHO ERROR MESSAGES
     */

    public function ErrorMessages($message) {
        $this->error_message = $message;
        ?>
        <div class="col-md-8">
            <div class="alert alert-danger" role="alert">
                <p class="danger"><?= $this->error_message; ?></p>
            </div>
        </div>
        <?php
    }

    /*
     * ECHO SUCCESS MESSAGES
     */

    public function SuccessMessages($message) {
        $this->success_message = $message;
        ?>
        <div class="col-md-8">
            <div class="alert alert-success" role="alert">
                <p class="success"><?= $this->success_message ?></p>
            </div>
        </div>
        <?php
    }

    /*
     * FETCHES ALL THE IMAGES AND PUTS IT INTO AN ARRAY USED BY (ShowUploadedImage())
     */

    public function getAllImages() {
        $sql = "SELECT * FROM page_images";
        $result = $this->mysqli->query($sql);
        $images = array();
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $images[] = $row;
        }
        $this->_images = $images;
        return $images;
    }

    /*
     * SHOWS UPLOADED IMAGES WHEN COMMAND IS "Uploaded Images"
     */

    public function ShowUploadedImages() {
        ?>

        <div class="row">
            <?php
            foreach ($this->_images as $image) {
                ?>
                <div class="col-xs-6 col-md-3">

                    <a href="#" class="thumbnail">

                        <img src="<?= $image['image_path'] . $image['image_name'] ?>" alt="<?= $image['image_name'] ?>">


                    </a>
                    <span class="info"><?= $image['image_name'] ?></span>
                </div>
                <?php
            }
            ?>
        </div>

        <?php
    }

    /*
     * ASKS THE QUESTION IF THE USER WANTS TO DELETE THE PAGE CONTENT OR NOT
     */

    public function CheckOldContent(array $content) {
        ?>
        <div class="col-md-8">

            <div class="panel panel-warning">
                <p class="panel-heading">What would you like to do?</p>
                <div class="panel-body">
                    <form action="profile.php" method="get">

                        <input type="submit" class="btn btn-danger" value="Delete" name="delete"/>
                        <input type="submit" class="btn btn-success" value="Update" name="update"/>
                        <input type="hidden" name="command" value="warning message"/>
                        <input type="hidden" name="pg_id" value="<?= $content['pg_id'] ?>"/>
                        <input type="hidden" name="type" value="<?= $content['type'] ?>"/>
                        <input type="hidden" name="page_title" value="<?= $content['page_title'] ?>"/>
                        <input type="hidden" name="page_content" value="<?= $content['page_content'] ?>"/>
                        <input type="hidden" name="div2" value="<?= $content['div2'] ?>"/>
                        <input type="hidden" name="div3" value="<?= $content['div3'] ?>"/>
                        <input type="hidden" name="div4" value="<?= $content['div4'] ?>"/>
                        <input type="hidden" name="div5" value="<?= $content['div5'] ?>"/>
                        <input type="hidden" name="div6" value="<?= $content['div6'] ?>"/>
                        <input type="hidden" name="div7" value="<?= $content['div7'] ?>"/>
                        <input type="hidden" name="div8" value="<?= $content['div8'] ?>"/>



                    </form>
                </div>
            </div>
        </div>
        <?php
    }

    /*
     * DELETES DATA AFTER CONFIRMATION FROM USER
     */

    public function ConfirmDelete($page_uid, $page_type) {


        if (!empty($page_uid) && !empty($page_type)) {

            $sql = "DELETE FROM `page_content` WHERE `page_id` = '$page_uid'";
            $result = $this->mysqli->query($sql);
            $sql = "DELETE FROM `page_images` WHERE `page_uid` = '$page_uid'";
            $result = $this->mysqli->query($sql);
            $sql = "DELETE FROM `page_ids` WHERE `page_uid` = '$page_uid'";
            $result = $this->mysqli->query($sql);
            $sql = "DELETE FROM `page_content` WHERE `page_id` = '$page_uid'";
            $result = $this->mysqli->query($sql);
            if ($result == true) {
                $this->SuccessMessages("Page content have been deleted.");
            } else {
                $this->ErrorMessages("Unable to delete content");
            }
        } else {

            $this->ErrorMessages("Page ID and Page Type are missing values");
        }
    }

    /*
     * UPDATE DATA IN DATA TABLE
     */

    public function ConfirmUpdate(array $content) {


        if (!empty($content['pg_id']) && !empty($content['type'])) {
            $c1 = new c1();
            $c1->GetContentForEditing($content['pg_id'], $content['type']);
            $c1->ShowContent();
            switch ($content['type']) {

                case "c1_page":


                    if ($c1->_contents != $content['page_content'] || !empty($c1->_title) && $c1->_title != $content['page_title']) {

                        $sql = "UPDATE `page_content` SET `page_title`='" . mysql_escape_string($content['page_title']) . "', `page_content`='" . mysql_escape_string($content['page_content']) . "' WHERE `page_id` ='" . $content['pg_id'] . "'";
                        $result = $this->mysqli->query($sql);
                        if ($result == true) {
                            $this->SuccessMessages("Data was updated.");
                        } else {
                            $this->ErrorMessages("Uable to update data check again.");
                        }
                    } else {
                        $this->ErrorMessages("Nothing to update");
                    }

                    break;
                case "c2_page":
                    break;
                case "c3_page":
                    break;
                case "c4_page":
                    break;
                case "c5_page":
                    break;
                case "c6_page":
                    break;
                case "c7_page":
                    break;
                case "c8_page":
                    break;
                case "c9_page":
                    break;
                case "c10_page":
                    break;
                case "c11_page":
                    break;
                case "c12_page":
                    break;
                case "c13_page":
                    break;
                case "c14_page":
                    break;
                case "c15_page":
                    break;
                case "c16_page":
                    break;
                case "c17_page":
                    break;
                case "c18_page":
                    break;
                case "c19_page":
                    break;
                case "c20_page":
                    break;
            }
        }
    }

    public function CHECKUID($page_uid, $field, $table) {
        $error = 0;
        if (!empty($page_uid) && !empty($field) && !empty($table)) {
            $sql = "SELECT * FROM `$table` WHERE `$field` = '$page_uid'";
            $result = $this->mysqli->query($sql);
            $num_res = $result->num_rows;
            if ($num_res > 0) {
                return $error = 1;
                $this->SuccessMessages("Page ID Exisits");
            } else {
                return $error = 0;
            }
        }
    }

    /*
     * LEFT JOIN
     */

    public function UniversalQuery() {
        $rows = array();
        $sql = "SELECT page_content.page_title, page_content.page_content,page_content.div2,"
                . "page_content.div3,page_content.div4,page_content.div5,page_content.div6,"
                . "page_content.div7,page_content.div8,"
                . "page_content.page_type,page_content.page_id, page_images.image_path, page_images.image_name  "
                . "FROM page_content LEFT JOIN page_images ON page_content.page_id = page_images.page_uid";
        $result = $this->mysqli->query($sql);
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

            $rows[] = $row;
        }
        return $rows;
    }

    public function TableQuery($table) {
        $data_rows = array();
        $sql = "SELECT * FROM `$table`";
        $result = $this->mysqli->query($sql);
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

            $data_rows[] = $row;
        }
        return $data_rows;
    }

    public function UIDQuery($table, $page_id) {
        $data_rows = array();
        $sql = "SELECT * FROM `$table` WHERE page_id = '$page_id'";
        $result = $this->mysqli->query($sql);
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

            $data_rows[] = $row;
        }
        return $data_rows;
    }

    public function CountNumsImages($distinct = NULL, $field, $table, $value) {
        $num = array();
        $sql = "SELECT COUNT(`$field`) AS Number FROM `$table` WHERE `$field` = '$value'";
        $result = $this->mysqli->query($sql);
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

            $num[] = $row;
        }
        $this->_nums = $num;
        return $num;
    }

}
