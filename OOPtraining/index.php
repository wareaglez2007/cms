<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//function __autoload($class) {
//    include 'classes/' . $class . '.php';
//    include 'backend/backend_classes/'.$class.'.php';
//}
header('Location: backend/mods/profile.php') ;
//echo $_POST['pg_name'] . "  " . stripslashes($_POST['myTextArea']);
//?>

<!--<html>
    <head>
        <script type="text/javascript" src="texteditor.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>
    <body onload="iFrameOn();">
        <h2>Text Editor</h2>
        <form action="index.php" name="form" id="form" method="post">
            <p>
                Page Name:
                <i class="fa fa-align-left"></i>
                <input type="text" name="pg_name" id="pg_name" />
            </p>
            <p>
                Page Content:<br>
            <div id="texteditor_cp" style="padding: 8px; width: 700px;">

                <button class="btn btn-default" onclick="javascript:iBold()" ><i class="fa fa-align-left"></i></button>

                <input type="button" onclick="iUnderLine()" value="U"/>
                <input type="button" onclick="iItalic()" value="I"/>
                <input type="button" onclick="iInsertHTML()" value="HTML"/>
                <input type="button" onclick="iRemoveFormat()" value="Remove"/>
                <input type="button" onclick="iStrikeThrough()" value="strike"/>
                <input type="button" onclick="iInsertParagraph()" value="P"/>
                <input type="button" onclick="iSelectAll()" value="selectall"/>
                <input type="button" onclick="iJustifyCenter()" value="center"/>
                <input type="button" onclick="iJustifyLeft()" value="Left"/>
                <input type="button" onclick="iJustifyRight()" value="Right"/>
                <input type="button" onclick="iJustifyFull()" value="full"/>
                <input type="button" onclick="iRedo()" value="Redo"/>
                <select id="font-type" onchange="iFontFamily()" title="Font type">
                    <option value="Arial">Arial</option>
                    <option value="Arial Narrow">Arial Narrow</option>
                    <option value="Comic Sans MS">Comic Sans MS</option>
                   
                </select>
                
                






                <select id="font-size" onchange="iFontSize()" title="Font Size">
                    <option value="1">1</option>
                    <option value="2" selected="selected">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>

                <select id="font-color" onchange="iFontColor()">
                    <option value="	#F0F8FF 	" style="color: 	#F0F8FF 	;">	AliceBlue 	</option>
                    <option value="#FAEBD7 	" style="color: 	#FAEBD7 	;">	AntiqueWhite  	</option>
                    <option value="#00FFFF 	" style="color: 	#00FFFF 	;">	Aqua  	</option>
                    <option value="#7FFFD4 	" style="color: 	#7FFFD4 	;">	Aquamarine  	</option>
                    <option value="#F0FFFF 	" style="color: 	#F0FFFF 	;">	Azure  	</option>
                    <option value="#F5F5DC 	" style="color: 	#F5F5DC 	;">	Beige  	</option>
                    <option value="#FFE4C4 	" style="color: 	#FFE4C4 	;">	Bisque  	</option>
                    <option value="#000000 	" style="color: 	#000000 	;">	Black  	</option>
                    <option value="#FFEBCD 	" style="color: 	#FFEBCD 	;">	BlanchedAlmond  	</option>
                    <option value="#0000FF 	" style="color: 	#0000FF 	;">	Blue  	</option>
                    <option value="#8A2BE2 	" style="color: 	#8A2BE2 	;">	BlueViolet  	</option>
                    <option value="#A52A2A 	" style="color: 	#A52A2A 	;">	Brown  	</option>
                    <option value="#DEB887 	" style="color: 	#DEB887 	;">	BurlyWood  	</option>
                    <option value="#5F9EA0 	" style="color: 	#5F9EA0 	;">	CadetBlue  	</option>
                    <option value="#7FFF00 	" style="color: 	#7FFF00 	;">	Chartreuse  	</option>
                    <option value="#D2691E 	" style="color: 	#D2691E 	;">	Chocolate  	</option>
                    <option value="#FF7F50 	" style="color: 	#FF7F50 	;">	Coral  	</option>
                    <option value="#6495ED 	" style="color: 	#6495ED 	;">	CornflowerBlue  	</option>
                    <option value="#FFF8DC 	" style="color: 	#FFF8DC 	;">	Cornsilk  	</option>
                    <option value="#DC143C 	" style="color: 	#DC143C 	;">	Crimson  	</option>
                    <option value="#00FFFF 	" style="color: 	#00FFFF 	;">	Cyan  	</option>
                    <option value="#00008B" style="color: 	#00008B 	;">	DarkBlue  	</option>
                    <option value="#008B8B" style="color: 	#008B8B 	;">	DarkCyan  	</option>
                    <option value="#B8860B" style="color: 	#B8860B 	;">	DarkGoldenRod  	</option>
                    <option value="#A9A9A9 	" style="color: 	#A9A9A9 	;">	DarkGray  	</option>
                    <option value="#A9A9A9 	" style="color: 	#A9A9A9 	;">	DarkGrey  	</option>
                    <option value="#006400 	" style="color: 	#006400 	;">	DarkGreen  	</option>
                    <option value="#BDB76B 	" style="color: 	#BDB76B 	;">	DarkKhaki  	</option>
                    <option value="#8B008B 	" style="color: 	#8B008B 	;">	DarkMagenta  	</option>
                    <option value="#556B2F 	" style="color: 	#556B2F 	;">	DarkOliveGreen  	</option>
                    <option value="#FF8C00 	" style="color: 	#FF8C00 	;">	DarkOrange  	</option>
                    <option value="#9932CC 	" style="color: 	#9932CC 	;">	DarkOrchid  	</option>
                    <option value="#8B0000 	" style="color: 	#8B0000 	;">	DarkRed  	</option>
                    <option value="#E9967A 	" style="color: 	#E9967A 	;">	DarkSalmon  	</option>
                    <option value="#8FBC8F 	" style="color: 	#8FBC8F 	;">	DarkSeaGreen  	</option>
                    <option value="#483D8B 	" style="color: 	#483D8B 	;">	DarkSlateBlue  	</option>
                    <option value="#2F4F4F 	" style="color: 	#2F4F4F 	;">	DarkSlateGray  	</option>
                    <option value="#2F4F4F 	" style="color: 	#2F4F4F 	;">	DarkSlateGrey  	</option>
                    <option value="#00CED1 	" style="color: 	#00CED1 	;">	DarkTurquoise  	</option>
                    <option value="#9400D3 	" style="color: 	#9400D3 	;">	DarkViolet  	</option>
                    <option value="#FF1493 	" style="color: 	#FF1493 	;">	DeepPink  	</option>
                    <option value="#00BFFF 	" style="color: 	#00BFFF 	;">	DeepSkyBlue  	</option>
                    <option value="#696969 	" style="color: 	#696969 	;">	DimGray  	</option>
                    <option value="#696969 	" style="color: 	#696969 	;">	DimGrey  	</option>
                    <option value="#1E90FF 	" style="color: 	#1E90FF 	;">	DodgerBlue  	</option>
                    <option value="#B22222 	" style="color: 	#B22222 	;">	FireBrick  	</option>
                    <option value="#FFFAF0 	" style="color: 	#FFFAF0 	;">	FloralWhite  	</option>
                    <option value="#228B22 	" style="color: 	#228B22 	;">	ForestGreen  	</option>
                    <option value="#FF00FF 	" style="color: 	#FF00FF 	;">	Fuchsia  	</option>
                    <option value="#DCDCDC 	" style="color: 	#DCDCDC 	;">	Gainsboro  	</option>
                    <option value="#F8F8FF 	" style="color: 	#F8F8FF 	;">	GhostWhite  	</option>
                    <option value="#FFD700 	" style="color: 	#FFD700 	;">	Gold  	</option>
                    <option value="#DAA520 	" style="color: 	#DAA520 	;">	GoldenRod  	</option>
                    <option value="#808080 	" style="color: 	#808080 	;">	Gray  	</option>
                    <option value="#808080 	" style="color: 	#808080 	;">	Grey  	</option>
                    <option value="#008000 	" style="color: 	#008000 	;">	Green  	</option>
                    <option value="#ADFF2F 	" style="color: 	#ADFF2F 	;">	GreenYellow  	</option>
                    <option value="#F0FFF0 	" style="color: 	#F0FFF0 	;">	HoneyDew  	</option>
                    <option value="#FF69B4 	" style="color: 	#FF69B4 	;">	HotPink  	</option>
                    <option value="#CD5C5C 	" style="color: 	#CD5C5C 	;">	IndianRed   	</option>
                    <option value="#4B0082 	" style="color: 	#4B0082 	;">	Indigo   	</option>
                    <option value="#FFFFF0 	" style="color: 	#FFFFF0 	;">	Ivory  	</option>
                    <option value="#F0E68C 	" style="color: 	#F0E68C 	;">	Khaki  	</option>
                    <option value="#E6E6FA 	" style="color: 	#E6E6FA 	;">	Lavender  	</option>
                    <option value="#FFF0F5 	" style="color: 	#FFF0F5 	;">	LavenderBlush  	</option>
                    <option value="#7CFC00 	" style="color: 	#7CFC00 	;">	LawnGreen  	</option>
                    <option value="#FFFACD 	" style="color: 	#FFFACD 	;">	LemonChiffon  	</option>
                    <option value="#ADD8E6 	" style="color: 	#ADD8E6 	;">	LightBlue  	</option>
                    <option value="#F08080 	" style="color: 	#F08080 	;">	LightCoral  	</option>
                    <option value="#E0FFFF 	" style="color: 	#E0FFFF 	;">	LightCyan  	</option>
                    <option value="#FAFAD2 	" style="color: 	#FAFAD2 	;">	LightGoldenRodYellow  	</option>
                    <option value="#D3D3D3 	" style="color: 	#D3D3D3 	;">	LightGray  	</option>
                    <option value="#D3D3D3 	" style="color: 	#D3D3D3 	;">	LightGrey  	</option>
                    <option value="#90EE90 	" style="color: 	#90EE90 	;">	LightGreen  	</option>
                    <option value="#FFB6C1 	" style="color: 	#FFB6C1 	;">	LightPink  	</option>
                    <option value="#FFA07A 	" style="color: 	#FFA07A 	;">	LightSalmon  	</option>
                    <option value="#20B2AA 	" style="color: 	#20B2AA 	;">	LightSeaGreen  	</option>
                    <option value="#87CEFA 	" style="color: 	#87CEFA 	;">	LightSkyBlue  	</option>
                    <option value="	#778899 	" style="color: 	#778899 	;">	LightSlateGray  	</option>
                    <option value="	#778899 	" style="color: 	#778899 	;">	LightSlateGrey  	</option>
                    <option value="	#B0C4DE 	" style="color: 	#B0C4DE 	;">	LightSteelBlue  	</option>
                    <option value="	#FFFFE0 	" style="color: 	#FFFFE0 	;">	LightYellow  	</option>
                    <option value="	#00FF00 	" style="color: 	#00FF00 	;">	Lime  	</option>
                    <option value="	#32CD32 	" style="color: 	#32CD32 	;">	LimeGreen  	</option>
                    <option value="	#FAF0E6 	" style="color: 	#FAF0E6 	;">	Linen  	</option>
                    <option value="	#FF00FF 	" style="color: 	#FF00FF 	;">	Magenta  	</option>
                    <option value="	#800000 	" style="color: 	#800000 	;">	Maroon  	</option>
                    <option value="	#66CDAA 	" style="color: 	#66CDAA 	;">	MediumAquaMarine  	</option>
                    <option value="	#0000CD 	" style="color: 	#0000CD 	;">	MediumBlue  	</option>
                    <option value="	#BA55D3 	" style="color: 	#BA55D3 	;">	MediumOrchid  	</option>
                    <option value="	#9370DB 	" style="color: 	#9370DB 	;">	MediumPurple  	</option>
                    <option value="	#3CB371 	" style="color: 	#3CB371 	;">	MediumSeaGreen  	</option>
                    <option value="	#7B68EE 	" style="color: 	#7B68EE 	;">	MediumSlateBlue  	</option>
                    <option value="	#00FA9A 	" style="color: 	#00FA9A 	;">	MediumSpringGreen  	</option>
                    <option value="	#48D1CC 	" style="color: 	#48D1CC 	;">	MediumTurquoise  	</option>
                    <option value="	#C71585 	" style="color: 	#C71585 	;">	MediumVioletRed  	</option>
                    <option value="	#191970 	" style="color: 	#191970 	;">	MidnightBlue  	</option>
                    <option value="	#F5FFFA 	" style="color: 	#F5FFFA 	;">	MintCream  	</option>
                    <option value="	#FFE4E1 	" style="color: 	#FFE4E1 	;">	MistyRose  	</option>
                    <option value="	#FFE4B5 	" style="color: 	#FFE4B5 	;">	Moccasin  	</option>
                    <option value="	#FFDEAD 	" style="color: 	#FFDEAD 	;">	NavajoWhite  	</option>
                    <option value="	#000080 	" style="color: 	#000080 	;">	Navy  	</option>
                    <option value="	#FDF5E6 	" style="color: 	#FDF5E6 	;">	OldLace  	</option>
                    <option value="	#808000 	" style="color: 	#808000 	;">	Olive  	</option>
                    <option value="	#6B8E23 	" style="color: 	#6B8E23 	;">	OliveDrab  	</option>
                    <option value="	#FFA500 	" style="color: 	#FFA500 	;">	Orange  	</option>
                    <option value="	#FF4500 	" style="color: 	#FF4500 	;">	OrangeRed  	</option>
                    <option value="	#DA70D6 	" style="color: 	#DA70D6 	;">	Orchid  	</option>
                    <option value="	#EEE8AA 	" style="color: 	#EEE8AA 	;">	PaleGoldenRod  	</option>
                    <option value="	#98FB98 	" style="color: 	#98FB98 	;">	PaleGreen  	</option>
                    <option value="	#AFEEEE 	" style="color: 	#AFEEEE 	;">	PaleTurquoise  	</option>
                    <option value="	#DB7093 	" style="color: 	#DB7093 	;">	PaleVioletRed  	</option>
                    <option value="	#FFEFD5 	" style="color: 	#FFEFD5 	;">	PapayaWhip  	</option>
                    <option value="	#FFDAB9 	" style="color: 	#FFDAB9 	;">	PeachPuff  	</option>
                    <option value="	#CD853F 	" style="color: 	#CD853F 	;">	Peru  	</option>
                    <option value="	#FFC0CB 	" style="color: 	#FFC0CB 	;">	Pink  	</option>
                    <option value="	#DDA0DD 	" style="color: 	#DDA0DD 	;">	Plum  	</option>
                    <option value="	#B0E0E6 	" style="color: 	#B0E0E6 	;">	PowderBlue  	</option>
                    <option value="	#800080 	" style="color: 	#800080 	;">	Purple  	</option>
                    <option value="	#663399 	" style="color: 	#663399 	;">	RebeccaPurple  	</option>
                    <option value="	#FF0000 	" style="color: 	#FF0000 	;">	Red  	</option>
                    <option value="	#BC8F8F 	" style="color: 	#BC8F8F 	;">	RosyBrown  	</option>
                    <option value="	#4169E1 	" style="color: 	#4169E1 	;">	RoyalBlue  	</option>
                    <option value="	#8B4513 	" style="color: 	#8B4513 	;">	SaddleBrown  	</option>
                    <option value="	#FA8072 	" style="color: 	#FA8072 	;">	Salmon  	</option>
                    <option value="	#F4A460 	" style="color: 	#F4A460 	;">	SandyBrown  	</option>
                    <option value="	#2E8B57 	" style="color: 	#2E8B57 	;">	SeaGreen  	</option>
                    <option value="	#FFF5EE 	" style="color: 	#FFF5EE 	;">	SeaShell  	</option>
                    <option value="	#A0522D 	" style="color: 	#A0522D 	;">	Sienna  	</option>
                    <option value="	#C0C0C0 	" style="color: 	#C0C0C0 	;">	Silver  	</option>
                    <option value="	#87CEEB 	" style="color: 	#87CEEB 	;">	SkyBlue  	</option>
                    <option value="	#6A5ACD 	" style="color: 	#6A5ACD 	;">	SlateBlue  	</option>
                    <option value="	#708090 	" style="color: 	#708090 	;">	SlateGray  	</option>
                    <option value="	#708090 	" style="color: 	#708090 	;">	SlateGrey  	</option>
                    <option value="	#FFFAFA 	" style="color: 	#FFFAFA 	;">	Snow  	</option>
                    <option value="	#00FF7F 	" style="color: 	#00FF7F 	;">	SpringGreen  	</option>
                    <option value="	#4682B4 	" style="color: 	#4682B4 	;">	SteelBlue  	</option>
                    <option value="	#D2B48C 	" style="color: 	#D2B48C 	;">	Tan  	</option>
                    <option value="	#008080 	" style="color: 	#008080 	;">	Teal  	</option>
                    <option value="	#D8BFD8 	" style="color: 	#D8BFD8 	;">	Thistle  	</option>
                    <option value="	#FF6347 	" style="color: 	#FF6347 	;">	Tomato  	</option>
                    <option value="	#40E0D0 	" style="color: 	#40E0D0 	;">	Turquoise  	</option>
                    <option value="	#EE82EE 	" style="color: 	#EE82EE 	;">	Violet  	</option>
                    <option value="	#F5DEB3 	" style="color: 	#F5DEB3 	;">	Wheat  	</option>
                    <option value="	#FFFFFF 	" style="color: 	#FFFFFF 	;">	White  	</option>
                    <option value="	#F5F5F5 	" style="color: 	#F5F5F5 	;">	WhiteSmoke  	</option>
                    <option value="	#FFFF00 	" style="color: 	#FFFF00 	;">	Yellow  	</option>
                    <option value="	#9ACD32	" style="color: 	#9ACD32	;">	YellowGreen  	</option>
                </select>

                <input type="button" onclick="iHorizontalRule()" value="HR"/>
                <input type="button" onclick="iUnorderedList()" value="UL"/>
                <input type="button" onclick="iOrderedList()" value="OL"/>
                <input type="button" onclick="iLink()" value="Link"/>
                <input type="button" onclick="iUnLink()" value="Unlink"/>
                <input type="button" onclick="iImage()" value="Image"/>
            </div>
            <textarea name="myTextArea" style="display: none;" id="textarea" cols="100" rows="14"></textarea>
            <iframe name="richTextfield" id="richTextfield" style="border:#0000 1px solid; width: 700px; height:300px; "></iframe>
        </p>
        <p>
            <input type="button" name="mybtn" value="Save Page" onclick="javascript:submit_form();"/>

        </p>
    </form>
    <a href="show.php">Go</a>


</body>
</html>


-->
