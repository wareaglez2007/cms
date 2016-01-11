<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c1
 *
 * @author rostomsahakian
 */
class c1 {

    //C1 page type
    private $_images = array();
    private $_div = array();
    private $_class = array();
    private $_styles = array();
    private $db;
    private $mysqli;
    private $success;
    public $page_name = "Add Page Type C1";
    public $_uid;
    public $_type;
    private $_content = array();
    public $_contents;
    public $_title;
    public $_div1;
    public $_div2;
    public $_div3;
    public $_div4;
    public $_div5;
    public $_div6;
    public $_div7;
    public $_div8;

    public function __construct() {
        $this->db = db_connect::getInstance();
        $this->mysqli = $this->db->getConnection();


        //return $this->getImages();
    }

    public function SetCarouselImages() {
        ?>
        <div class="container page_carousel">
            <div class="row">
                <div class="col-md-7">
                    <div id="owl-demo" class="owl-carousel">
                        <?php
                        foreach ($this->_images as $image) {
                            ?>
                            <div class="item"><img src="<?= $image['image_path'] . $image['image_name'] ?>" alt="<?= $image['image_name'] ?>"></div>
                            <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>

        <?php
    }

    public function GetAllCarouselImages() {
        $sql = "SELECT * FROM page_images WHERE page_uid = '$this->_uid' ";

        $result = $this->mysqli->query($sql);
        $images = array();
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $images[] = $row;
        }
        $this->_images = $images;
        return $images;
    }

    /*
     * Uplaod images FORM
     */

    public function UploadImages() {

        $type = (isset($_GET['type']) ? $_GET['type'] : $_POST['type']);
        $page_id = (isset($_GET['pg_id']) ? $_GET['pg_id'] : $_POST['pg_id']);
        $this->_uid = $page_id;
        $this->_type = $type;
        ?>
        <div class="container">

            <div class="col-md-8">
                <div class="list-group content">
                    <form action="profile.php" method="post" enctype="multipart/form-data">

                        <!-- Buttons -->
                        <input type="hidden" name="pg_id" value="<?= $page_id; ?>"/>
                        <input type="hidden" name="type" value="<?= $type ?>"/>
                        <input type="hidden" name="command" value="image_upload"/>
                        <span class="list-group-item">
                            <input type="file" name="uploadimage" class="btn btn-default "/>
                            <input type="submit" class="btn btn-primary" name="imageup" value="Upload Image"/>


                        </span>
                        <span class="list-group-item">

                        </span>

                    </form>
                </div>




                <?php
            }

            /*
             * Show page forms besed on selection 
             */

            public function getContent($page_type) {

                $type = (isset($_GET['type']) ? $_GET['type'] : $_POST['type']);
                $page_id = (isset($_GET['pg_id']) ? $_GET['pg_id'] : $_POST['pg_id']);
                $this->_uid = $page_id;
                $this->_type = $type;
                switch ($page_type) {

                    case "c1_page":
                        $this->GetContentForEditing($this->_uid, $this->_type);
                        $this->ShowContent();
                        ?>
                        <?php
                        $editor = new TextEditor();
                        ?>
                        <form action="profile.php" method="get" id="form">
                            <div class="panel panel-default content">
                                <div class="panel-heading"><i class="fa fa-file-image-o"></i> Image names</div>
                                <div class="panel-body">
                                    <ul >
                                        <?php
                                        $imageNames = $this->GetAllCarouselImages($this->_uid);
                                        foreach ($imageNames as $imageName) {
                                            ?>

                                            <li><?= $imageName['image_name']; ?></li>

                                            <?php
                                        }
                                        ?>
                                    </ul>
                                    <span>Image path: <b><?= $imageName['image_path']; ?></b></span>
                                </div>
                            </div>

                            <div class="panel panel-default content" id="htmlcodediv"  style="display: none;">
                                <div class="panel-heading">Insert HTML Code Here:<i class="fa fa-code"></i></div>
                                <div class="panel-body">
                                    <textarea  class="form-control" rows="10" name="textAreaDiv" id="textAreaDiv" ></textarea>
                                    <br/>
                                    <div class="btn-group">
                                        <input type="button" name="htmlcode" id="htmlcode" value="Insert Code" class="btn btn-default" onclick="javascript:iInsertHTML()"/>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default content">
                                <div class="panel-body">
                                    <label>Page Title <span class="required">*</span>:</label>
                                    <input type="text" class="form-control" name="page_title" value="<?= $this->_title; ?>"/>
                                    <input type="hidden" name="command" value="Save page content"/>
                                    <input type="hidden" name="pg_id" value="<?= $page_id; ?>"/>
                                    <input type="hidden" name="type" value="<?= $type ?>"/>
                                    <label>Page Content <span class="required">*</span>:</label>
                                    <iframe name="richTextfield" id="richTextfield" style="border:#CECECE 1px solid; border-radius:5px; box-shadow:inset 0 0 1px 1px #888; width:100%; height:700px; overflow: visible;" ></iframe>                                    
                                    <input type="button" class="btn btn-success" name="save" value="Save Page" onclick="javascript:submit_form();"/>                      
                                    <input type="button" class="btn btn-primary" name="command" value="Publish"/>


                                    <textarea  style="display:none;" class="form-control" rows="15" name="page_content" id="myTextArea"><?= htmlspecialchars_decode($this->_contents); ?></textarea>

                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-md-8">
                        <div class="panel panel-default content">
                            <div class="panel-heading">

                                Preview

                            </div>
                            <div class="panel-body">

                                <?= htmlspecialchars_decode($this->_contents); ?>
                            </div>
                        </div>
                    </div>

                    <?php
                    break;

                case "c2_page":
                    $this->GetContentForEditing($this->_uid, $this->_type);
                    $this->ShowContent();
                    ?>

                    <form action="profile.php" method="get">
                        <div class="panel panel-default content">
                            <div class="panel-body">
                                <label>Page Title <span class="required">*</span>:</label>
                                <input type="text" class="form-control" name="page_title" value="<?= $this->_title; ?>"/>

                                <div class="row">
                                    <div class="col-md-4">

                                        <label>Div 1 <span class="required">*</span>:</label>
                                        <textarea class="form-control" rows="15" name="div2" ><?= $this->_div2; ?></textarea>
                                    </div>
                                    <div class="col-md-4">

                                        <label>Div 2 <span class="required">*</span>:</label>
                                        <textarea class="form-control" rows="15" name="div3"><?= $this->_div3; ?></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Div 3 <span class="required">*</span>:</label>
                                        <textarea class="form-control" rows="15" name="div4"><?= $this->_div4; ?></textarea>
                                    </div>   
                                    <input type="hidden" name="command" value="Save page content"/>
                                    <input type="hidden" name="pg_id" value="<?= $page_id; ?>"/>
                                    <input type="hidden" name="type" value="<?= $type ?>"/>
                                    <input type="submit" class="btn btn-success" name="save" value="Save Page"/>                      
                                    <input type="submit" class="btn btn-primary" name="command" value="Publish"/>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <?php
                break;
            case "c3_page":
                ?>
                <form action="profile.php" method="get">
                    <div class="panel panel-default content">
                        <div class="panel-body">
                            <label>Page Title <span class="required">*</span>:</label>
                            <input type="text" class="form-control"/>
                            <input type="hidden" name="command" value="Save page content"/>
                            <label>Page Content <span class="required">*</span>:</label>
                            <textarea class="form-control" rows="15"></textarea>
                            <input type="submit" class="btn btn-success" name="save" value="Save Page"/>                      
                            <input type="submit" class="btn btn-primary" name="command" value="Publish"/>


                            </form>
                        </div>
                    </div>
                </div>


                <?php
                break;
        }
    }

    public function SetDivs(array $divs, array $classes) {
        $this->_div = $divs;
        $this->_class = $classes;
    }

    public function SetStyles(array $styles) {
        $this->_styles = $styles;
    }

    public function GetContentForEditing($page_id, $type) {

        $content = array();
        $sql = "SELECT * FROM `page_content` WHERE `page_id` = '$page_id'";
        $result = $this->mysqli->query($sql);
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

            $content[] = $row;
        }
        $this->_content = $content;
        return $content;
    }

    public function ShowContent() {
        foreach ($this->_content as $content) {

            $this->_title = $content['page_title'];
            $this->_contents = $content['page_content'];
            $this->_div1 = $content['div1'];
            $this->_div2 = $content['div2'];
            $this->_div3 = $content['div3'];
            $this->_div4 = $content['div4'];
            $this->_div5 = $content['div5'];
            $this->_div6 = $content['div6'];
            $this->_div7 = $content['div7'];
            $this->_div8 = $content['div8'];
        }
    }

    /*
     * MAKING THE PAGE FOR "Edit Exisiting Pages"
     */

    public function SeePageTable(array $data_rows) {
        ?>

        <div class="panel panel-primary pages">
            <div class="panel-heading">Saved pages</div>
            <table class="table av_pages">
                <tr>
                    <th>Page ID</th>
                    <th>Page Title</th>
                    <th>Page Type</th>
                    <th>Number of Images</th>
                    <th>Added Date</th>
                    <th>Delete Page</th>
                    <th>Edit Page</th>
                </tr>

                <?php
                foreach ($data_rows as $data_row) {
                    ?>
                    <form action="profile.php" method="get">
                        <tr>
                            <td>
                                <input type="submit" name="id" value="<?= $data_row['id'] ?>"/>
                            </td>
                            <td>
                                <input type="submit" name="pg_title" value="<?= $data_row['page_title'] ?>"/>
                            </td>
                            <td>
                                <input type="submit" name="type" value="<?= $data_row['page_type'] ?>"/>
                            </td>
                            <td>
                                <?php
                                $func = new Functions();
                                foreach ($func->CountNumsImages("Distinct", "page_uid", "page_images", $data_row['page_id']) as $num_images_per) {
                                    ?>
                                    <input type="submit" name="num_image" value="<?= $num_images_per['Number']; ?>"/>
                                <?php } ?>
                            </td>
                            <td>
                                <input type="submit" name="date_added" value="<?= $data_row['page_added'] ?>"/>
                                <input type="hidden" name="command" value="Show saved pages"/>
                                <input type="hidden" name="pg_id" value="<?= $data_row['page_id'] ?>"/>
                            </td>
                    </form>
                    <td>
                        <form action="profile.php" method="get">
                            <input type="hidden" name="command" value="del this page"/>
                            <input type="hidden" name="pg_id" value="<?= $data_row['page_id'] ?>"/>
                            <input type="hidden" name="type" value="<?= $data_row['page_type'] ?>"/>
                            <button type="submit" name="delete_page" value="Delete"><i class="glyphicon glyphicon-remove-sign delete"></i></button>
                        </form>


                    </td>
                    <td>
                        <form action="profile.php" method="get">
                            <input type="hidden" name="command" value="Edit Page"/>
                            <input type="hidden" name="pg_id" value="<?= $data_row['page_id'] ?>"/>
                            <input type="hidden" name="type" value="<?= $data_row['page_type'] ?>"/>
                            <button type="submit" name="edit_page" value="Edit"><i class="glyphicon glyphicon-pencil edit"></i></button>
                        </form>


                    </td>

                    </tr>

                    <?php
                }
                ?>
            </table>

        </div>

        <?php
    }

}
