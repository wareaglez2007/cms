<?php
require 'init.php';
$site_tb = new backend_site();
$do = new Functions();

///--HEADER
$site_tb->setHeader(HEADER);
$site_tb->setFooter(FOOTER);
?>

<?= $site_tb->getHeader(); ?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CMS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Help</a></li>
            </ul>

        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">Options<span class="sr-only">(current)</span></a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><form action="profile.php" method="get"><input type="submit" value="Add New Page" name="command" class="alert-info"/></form></li>
                <li><form action="profile.php" method="get"><input type="submit" value="Edit Existing Pages" name="command" class="alert-info"/>
                        <span class="badge">
                            <?php
                            foreach ($do->CountNums("DISTINCT", "page_uid", "page_ids") as $num) {
                                echo $num['Number'];
                            }
                            ?>
                        </span>
                    </form></li>

                <li><form action="profile.php" method="get"><input type="submit" value="Uploaded Images" name="command" class="alert-info"/><span class="badge"><?php
                            foreach ($do->CountNums("", "id", "page_images") as $num) {
                                echo $num['Number'];
                            }
                            ?></span></form></li>
                <li><form action="profile.php" method="get"><input type="submit" value="Add New user" name="command" class="alert-info"/></form></li>
                <li><form action="profile.php" method="get"><input type="submit" value="Edit Header" name="command" class="alert-info"/></form></li>
                <li><form action="profile.php" method="get"><input type="submit" value="Edit Footer" name="command" class="alert-info"/></form></li>
                <li><form action="profile.php" method="get"><input type="submit" value="Contact Manager" name="command" class="alert-info"/></form></li>
                <li><form action="profile.php" method="get"><input type="submit" value="Costum Forms" name="command" class="alert-info"/></form></li>                
                <li><form action="profile.php" method="get"><input type="submit" value="Google Analytics" name="command" class="alert-info"/></form></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">


            <?php
            $build = new c1();



            $cmd = (isset($_GET['command']) ? $_GET['command'] : $_POST['command']);
            $contents = array();
            $contents['page_title'] = $_GET['page_title'];
            $contents['page_content'] = htmlspecialchars($_GET['page_content'],ENT_COMPAT, 'UTF-8');
            $contents['div1'] = $_GET['div1'];
            $contents['div2'] = $_GET['div2'];
            $contents['div3'] = $_GET['div3'];
            $contents['div4'] = $_GET['div4'];
            $contents['div5'] = $_GET['div5'];
            $contents['div6'] = $_GET['div6'];
            $contents['div7'] = $_GET['div7'];
            $contents['div8'] = $_GET['div8'];
            $contents['type'] = $_GET['type'];
            $contents['pg_id'] = $_GET['pg_id'];
            switch ($cmd) {

                case 'Add New Page':
                    $pgtypeselection = new Functions();
                    echo $pgtypeselection->SelectPageType();
                    break;
                case 'Edit Existing Pages':
                    $images = array();
                    echo "show all the current pages<br/>";
                    $data_rows = $do->TableQuery("page_content");
                    $build->SeePageTable($data_rows);
                    break;
                case 'Uploaded Images':
                    echo "Upload images module";
                    $do->getAllImages();
                    echo $do->ShowUploadedImages();
                    break;
                case 'Add New user':
                    echo "Add new user module";
                    break;
                case 'Edit Header':
                    echo 'edit header';
                    break;
                case 'Edit Footer':
                    echo 'Edit footer';
                    break;
                case 'Contact Manager':
                    echo 'contacts manager module';
                    break;
                case 'Costum Forms':
                    echo 'custom forms module';
                    break;
                case 'Google Analytics':
                    echo 'Google Analytics module';
                    break;
                case "c1_page":
                    $do->get_page_type($cmd);
                    break;
                case "c2_page":
                    $do->get_page_type($cmd);

                    break;
                case "c3_page":
                    $do->get_page_type($cmd);

                    break;
                case "c4_page":
                    $do->get_page_type($cmd);

                    break;
                case "c5_page":
                    $do->get_page_type($cmd);

                    break;
                case "c6_page":
                    $do->get_page_type($cmd);

                    break;
                case "c7_page":
                    $do->get_page_type($cmd);

                    break;
                case "c8_page":
                    $do->get_page_type($cmd);

                    break;
                case "c9_page":
                    $do->get_page_type($cmd);

                    break;
                case "c10_page":
                    $do->get_page_type($cmd);

                    break;
                case "c11_page":
                    $do->get_page_type($cmd);

                    break;
                case "c12_page":
                    $do->get_page_type($cmd);

                    break;
                case "c13_page":
                    $do->get_page_type($cmd);

                    break;
                case "c14_page":
                    $do->get_page_type($cmd);

                    break;
                case "c15_page":
                    $do->get_page_type($cmd);

                    break;
                case "c16_page":
                    $do->get_page_type($cmd);

                    break;
                case "c17_page":
                    $do->get_page_type($cmd);

                    break;
                case "c18_page":
                    $do->get_page_type($cmd);

                    break;
                case "c19_page":
                    $do->get_page_type($cmd);

                    break;
                case "c20_page":
                    $do->get_page_type($cmd);

                    break;
                case "save_page":
                    $do->save_page($_GET['pg_name'], $_GET['div_content']);
                    //header("Location: /projects/OOPtraining/backend/mods/profile.php");
                    break;
                case "image_upload":
                    $do->Do_Upload_images($_POST['uploadimage'], IMAGE_PATH, DATE_ADDED, $_POST['pg_id'], $_POST['type']);
                    $do->get_page_type($_POST['type']);

                    break;
                case "Save page content":

                    $do->SaveContent($contents, DATE_ADDED);
                    $do->get_page_type($_GET['type']);


                    break;
                case "warning message":
                    if (isset($_GET['delete']) && $_GET['delete'] == "Delete") {

                        $do->ConfirmDelete($contents['pg_id'], $contents['type']);
                        $do->get_page_type($contents['type']);
                    } else if (isset($_GET['update']) && $_GET['update'] == "Update") {


                        $do->ConfirmUpdate($contents);
                        $do->get_page_type($contents['type']);
                    }

                    break;
                case "del this page":
                    $pagedata = $do->UIDQuery("page_content", $contents['pg_id']);

                    if (isset($_GET['delete_page']) && $_GET['delete_page'] == "Delete") {
                        $do->ConfirmDelete($contents['pg_id'], $contents['type']);
                        $data_rows = $do->TableQuery("page_content");
                        $build->SeePageTable($data_rows);
                    }

                    break;
                case "Edit Page":
                    $pagedata = $do->UIDQuery("page_content", $contents['pg_id']);
                    //$build->getContent($contents['type']);
                    $do->get_page_type($contents['type']);
                    //var_dump($pagedata);

                    break;
                case "Show saved pages":

                    $pagedata = $do->UIDQuery("page_content", $_GET['pg_id']);
                    var_dump($_GET['pg_id']);
                    foreach ($pagedata as $data) {
                        var_dump($data['id']);
                        $data_rows = $do->TableQuery("page_content");
                        $build->SeePageTable($data_rows);
                    }
                    break;

                default:
                    $pgtypeselection = new Functions();
                    echo $pgtypeselection->SelectPageType();
                    break;
            }
            ?>
        </div>
    </div>
</div>



<?= $site_tb->getFooter(); ?>