<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TextEditor
 *
 * @author rostomsahakian
 */
class TextEditor {

    //put your code here

    public function __construct() {
        $this->db = db_connect::getInstance();
        $this->mysqli = $this->db->getConnection();
        return $this->EditorOptions();
    }

    public function EditorOptions() {
        $get_res = new Functions();
        ?>


        <div class="panel panel-default">
            <div class="panel-body">
                <!-- Lin 1 -->
                <div  class="row">
                    <div class="col-md-12">
                        <div class="btn-group">
                            <a class="btn btn-default"  onclick="iBold()"><i class="fa fa-bold"></i></a>
                            <a class="btn btn-default"  onclick="iItalic()"><i class="fa fa-italic"></i></a>
                            <a class="btn btn-default"  onclick="iUnderLine()"><i class="fa fa-underline"></i></a>
                            <a class="btn btn-default"  onclick="iJustifyLeft()"><i class="fa fa-align-left"></i></a>
                            <a class="btn btn-default"  onclick="iJustifyCenter()"><i class="fa fa-align-center"></i></a>
                            <a class="btn btn-default"  onclick="iJustifyRight()"><i class="fa fa-align-right" ></i></a>
                            <a class="btn btn-default"  onclick="iJustifyFull()"><i class="fa fa-align-justify"></i></a>
                            <a class="btn btn-default"  onclick="iLink()"><i class="fa fa-link"></i></a>
                            <a class="btn btn-default"  onclick="iUnLink()"><i class="fa fa-chain-broken"></i></a>
                        </div> 
                    </div>
                </div>

                <!-- LINE 2-->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-12 clearfix">
                        <div class="btn-group">
                            <a class="btn btn-default"  onclick="iOrderedList()"><i class="fa fa-list-ol"></i></a>
                            <a class="btn btn-default"  onclick="iUnorderedList()"><i class="fa fa-list-ul"></i></a>                                        
                            <a class="btn btn-default"  onclick="iStrikeThrough()"><i class="fa fa-strikethrough"></i></a>
                            <a class="btn btn-default"  onclick="iHorizontalRule()"><i class="fa fa-minus"></i></a>
                            <a class="btn btn-default"  onclick="toggle_visibility()" id="showhide"><i class="fa fa-code"></i></a>
                            <a class="btn btn-default"  onclick="iImage()"><i class="fa fa-picture-o"></i></a>
                            <a class="btn btn-default"  onclick="iInsertParagraph()"><i class="fa fa-paragraph"></i></a>
                            <a class="btn btn-default"  onclick="iSelectAll()"><i class="fa fa-arrows-v"></i></a>
                            <a class="btn btn-default"  onclick="iRemoveFormat()"><i class="fa fa-eye-slash"></i></a>
                        </div>
                    </div>
                </div>

                <!-- LINE 3-->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-12 clearfix">
                        <div class="btn-group">
                            <select id="font-type" onchange="iFontFamily()" title="Font Family">
                                <option value="null">Font</option>
                                <?php
                                $fonts = $get_res->TableQuery("font types");
                                foreach ($fonts as $font) {
                                    ?>
                                    <option value="<?= $font['Font type'] ?>" style="font-family: <?= $font['Font type'] ?>;"><?= $font['Font type'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div> 

                        <div class="btn-group">
                            <select id="font-size" onchange="iFontSize()" title="Font Size">
                                <option value="null">Size</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                            </select>
                        </div> 

                        <div class="btn-group">
                            <select id="font-color" onchange="iFontColor()" title="Font Color">
                                <option value="1">Font Color</option>
                                <?php
                                $colors = $get_res->TableQuery("editor colors");
                                foreach ($colors as $color) {
                                    ?>
                                    <option value="<?= $color['color']; ?>"style="margin-top:2px;padding:2px; border: 0.06em solid black; background-color: <?= $color['color'] ?>"><?= $color['color name'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div> 

                        <div class="btn-group">
                            <select id="bg-color" onchange="iBackgroundColor()" title="Background Color">
                                <option value="1">Background Color</option>
                                <?php
                                $colors = $get_res->TableQuery("editor colors");
                                foreach ($colors as $color) {
                                    ?>
                                    <option value="<?= $color['color name']; ?>"style="margin-top:2px;padding:2px; border: 0.06em solid black; background-color: <?= $color['color'] ?>"><?= $color['color name'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                    </div>
                </div><!--END of line 3 -->  
                <!-- LINE 3-->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-12 clearfix">
                        <div class="btn-group">
                            <a class="btn btn-default"  onclick="iRefresh()"><i class="fa fa-pencil-square-o"></i></a>

                        </div>
                    </div>
                </div>




            </div>
        </div>


        <?php
    }

}
