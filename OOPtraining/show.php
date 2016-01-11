<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if ($_GET['left'] == "left") {
    echo "left";
}
?>

<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, intial-scale=1"/>

        <link href="/projects/OOPtraining/backend/assets/css/bootstrap.min.css" rel="stylesheet"/>


        <link href="/projects/OOPtraining/backend/assets/css/styles.css" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" type="text/css" src="/projects/OOPtraining/backend/assets/css/page_styles.css"/>
        <!-- Basic stylesheet -->
        <link rel="stylesheet" href="/projects/OOPtraining/backend/assets/owl-carousel/owl.carousel.css">
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <!-- Default Theme -->
        <link rel="stylesheet" href="/projects/OOPtraining/backend/assets/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <style>
            select {
                border:1px solid #ccc;
                vertical-align:top;
                height:28px;
                width: 120px;
            }
        </style>
    </head>
    <body onload="iFrameOn();">
        <form action="index.php" name="form" id="form" method="post">
            <div class="container-fluid">

                <div class="col-md-7">
                    <div class="panel panel-default">
                        <div class="panel-body">

                            <div  class="row">
                                <div class="col-md-12">
                                    <div class="btn-group">

                                        <a class="btn btn-default" href="#" onclick="iBold()"><i class="fa fa-bold"></i></a>
                                        <a class="btn btn-default" href="#" onclick="iItalic()"><i class="fa fa-italic"></i></a>
                                        <a class="btn btn-default" href="#" onclick="iUnderLine()"><i class="fa fa-underline"></i></a>

                                        <a class="btn btn-default" href="#" onclick="iJustifyLeft()"><i class="fa fa-align-left"></i></a>
                                        <a class="btn btn-default" href="#" onclick="iJustifyCenter()"><i class="fa fa-align-center"></i></a>
                                        <a class="btn btn-default" href="#" onclick="iJustifyRight()"><i class="fa fa-align-right" ></i></a>
                                        <a class="btn btn-default" href="#" onclick="iJustifyFull()"><i class="fa fa-align-justify"></i></a>

                                        <a class="btn btn-default" href="#" onclick=""><i class="fa fa-link"></i></a>
                                        <a class="btn btn-default" href="#" onclick=""><i class="fa fa-chain-broken"></i></a>


                                    </div> 
                                </div>
                            </div>

                            <!-- LINE 2-->
                            <div class="row" style="margin-top:5px;">
                                <div class="col-md-12 clearfix">
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="#" onclick="iOrderedList()"><i class="fa fa-list-ol"></i></a>
                                        <a class="btn btn-default" href="#" onclick="iUnorderedList()"><i class="fa fa-list-ul"></i></a>                                        
                                        <a class="btn btn-default" href="#" onclick="iStrikeThrough()"><i class="fa fa-strikethrough"></i></a>
                                        <a class="btn btn-default" href="#" onclick="iHorizontalRule()"><i class="fa fa-minus"></i></a>

                                        <a class="btn btn-default" href="#" onclick="iInsertHTML()"><i class="fa fa-code"></i></a>
                                        <a class="btn btn-default" href="#" onclick="iImage()"><i class="fa fa-picture-o"></i></a>
                                        <a class="btn btn-default" href="#" onclick="iInsertParagraph()"><i class="fa fa-paragraph"></i></a>
                                        <a class="btn btn-default" href="#" onclick="iBackgroundColor()"><i class="fa fa-eyedropper"></i></a>
                                        <a class="btn btn-default" href="#" onclick="iRemoveFormat()"><i class="fa fa-eye-slash"></i></a>


                                    </div>
                                </div>
                            </div>
                            <!-- LINE 3-->
                            <div class="row" style="margin-top:5px;">
                                <div class="col-md-12 clearfix">
                                    <div class="btn-group">
                                        <select id="font-size" onchange="iFontSize()" title="Font Family">
                                            <option value="null">Font</option>
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
                                        <select id="font-size" onchange="iFontSize()" title="Font Color">
                                            <option value="1">Font Color</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </div> 

                                </div>
                            </div><!--END of line 2 -->  





                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
