-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 13, 2016 at 04:48 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `added_by`
--

CREATE TABLE `added_by` (
  `id` int(10) NOT NULL,
  `page_added_by` text NOT NULL,
  `page_uid` varchar(1000) NOT NULL,
  `page_added_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `editor colors`
--

CREATE TABLE `editor colors` (
  `id` int(10) NOT NULL,
  `color` text NOT NULL,
  `color name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `editor colors`
--

INSERT INTO `editor colors` (`id`, `color`, `color name`) VALUES
(1, '#F0F8FF ', 'AliceBlue '),
(2, '#FAEBD7 ', 'AntiqueWhite  '),
(3, '#00FFFF ', 'Aqua  '),
(4, '#7FFFD4 ', 'Aquamarine  '),
(5, '#F0FFFF ', 'Azure  '),
(6, '#F5F5DC ', 'Beige  '),
(7, '#FFE4C4 ', 'Bisque  '),
(8, '#000000 ', 'Black  '),
(9, '#FFEBCD ', 'BlanchedAlmond  '),
(10, '#0000FF ', 'Blue  '),
(11, '#8A2BE2 ', 'BlueViolet  '),
(12, '#A52A2A ', 'Brown  '),
(13, '#DEB887 ', 'BurlyWood  '),
(14, '#5F9EA0 ', 'CadetBlue  '),
(15, '#7FFF00 ', 'Chartreuse  '),
(16, '#D2691E ', 'Chocolate  '),
(17, '#FF7F50 ', 'Coral  '),
(18, '#6495ED ', 'CornflowerBlue  '),
(19, '#FFF8DC ', 'Cornsilk  '),
(20, '#DC143C ', 'Crimson  '),
(21, '#00FFFF ', 'Cyan  '),
(22, '#00008B ', 'DarkBlue  '),
(23, '#008B8B ', 'DarkCyan  '),
(24, '#B8860B ', 'DarkGoldenRod  '),
(25, '#A9A9A9 ', 'DarkGray  '),
(26, '#A9A9A9 ', 'DarkGrey  '),
(27, '#006400 ', 'DarkGreen  '),
(28, '#BDB76B ', 'DarkKhaki  '),
(29, '#8B008B ', 'DarkMagenta  '),
(30, '#556B2F ', 'DarkOliveGreen  '),
(31, '#FF8C00 ', 'DarkOrange  '),
(32, '#9932CC ', 'DarkOrchid  '),
(33, '#8B0000 ', 'DarkRed  '),
(34, '#E9967A ', 'DarkSalmon  '),
(35, '#8FBC8F ', 'DarkSeaGreen  '),
(36, '#483D8B ', 'DarkSlateBlue  '),
(37, '#2F4F4F ', 'DarkSlateGray  '),
(38, '#2F4F4F ', 'DarkSlateGrey  '),
(39, '#00CED1 ', 'DarkTurquoise  '),
(40, '#9400D3 ', 'DarkViolet  '),
(41, '#FF1493 ', 'DeepPink  '),
(42, '#00BFFF ', 'DeepSkyBlue  '),
(43, '#696969 ', 'DimGray  '),
(44, '#696969 ', 'DimGrey  '),
(45, '#1E90FF ', 'DodgerBlue  '),
(46, '#B22222 ', 'FireBrick  '),
(47, '#FFFAF0 ', 'FloralWhite  '),
(48, '#228B22 ', 'ForestGreen  '),
(49, '#FF00FF ', 'Fuchsia  '),
(50, '#DCDCDC ', 'Gainsboro  '),
(51, '#F8F8FF ', 'GhostWhite  '),
(52, '#FFD700 ', 'Gold  '),
(53, '#DAA520 ', 'GoldenRod  '),
(54, '#808080 ', 'Gray  '),
(55, '#808080 ', 'Grey  '),
(56, '#008000 ', 'Green  '),
(57, '#ADFF2F ', 'GreenYellow  '),
(58, '#F0FFF0 ', 'HoneyDew  '),
(59, '#FF69B4 ', 'HotPink  '),
(60, '#CD5C5C ', 'IndianRed   '),
(61, '#4B0082 ', 'Indigo   '),
(62, '#FFFFF0 ', 'Ivory  '),
(63, '#F0E68C ', 'Khaki  '),
(64, '#E6E6FA ', 'Lavender  '),
(65, '#FFF0F5 ', 'LavenderBlush  '),
(66, '#7CFC00 ', 'LawnGreen  '),
(67, '#FFFACD ', 'LemonChiffon  '),
(68, '#ADD8E6 ', 'LightBlue  '),
(69, '#F08080 ', 'LightCoral  '),
(70, '#E0FFFF ', 'LightCyan  '),
(71, '#FAFAD2 ', 'LightGoldenRodYellow  '),
(72, '#D3D3D3 ', 'LightGray  '),
(73, '#D3D3D3 ', 'LightGrey  '),
(74, '#90EE90 ', 'LightGreen  '),
(75, '#FFB6C1 ', 'LightPink  '),
(76, '#FFA07A ', 'LightSalmon  '),
(77, '#20B2AA ', 'LightSeaGreen  '),
(78, '#87CEFA ', 'LightSkyBlue  '),
(79, '#778899 ', 'LightSlateGray  '),
(80, '#778899 ', 'LightSlateGrey  '),
(81, '#B0C4DE ', 'LightSteelBlue  '),
(82, '#FFFFE0 ', 'LightYellow  '),
(83, '#00FF00 ', 'Lime  '),
(84, '#32CD32 ', 'LimeGreen  '),
(85, '#FAF0E6 ', 'Linen  '),
(86, '#FF00FF ', 'Magenta  '),
(87, '#800000 ', 'Maroon  '),
(88, '#66CDAA ', 'MediumAquaMarine  '),
(89, '#0000CD ', 'MediumBlue  '),
(90, '#BA55D3 ', 'MediumOrchid  '),
(91, '#9370DB ', 'MediumPurple  '),
(92, '#3CB371 ', 'MediumSeaGreen  '),
(93, '#7B68EE ', 'MediumSlateBlue  '),
(94, '#00FA9A ', 'MediumSpringGreen  '),
(95, '#48D1CC ', 'MediumTurquoise  '),
(96, '#C71585 ', 'MediumVioletRed  '),
(97, '#191970 ', 'MidnightBlue  '),
(98, '#F5FFFA ', 'MintCream  '),
(99, '#FFE4E1 ', 'MistyRose  '),
(100, '#FFE4B5 ', 'Moccasin  '),
(101, '#FFDEAD ', 'NavajoWhite  '),
(102, '#000080 ', 'Navy  '),
(103, '#FDF5E6 ', 'OldLace  '),
(104, '#808000 ', 'Olive  '),
(105, '#6B8E23 ', 'OliveDrab  '),
(106, '#FFA500 ', 'Orange  '),
(107, '#FF4500 ', 'OrangeRed  '),
(108, '#DA70D6 ', 'Orchid  '),
(109, '#EEE8AA ', 'PaleGoldenRod  '),
(110, '#98FB98 ', 'PaleGreen  '),
(111, '#AFEEEE ', 'PaleTurquoise  '),
(112, '#DB7093 ', 'PaleVioletRed  '),
(113, '#FFEFD5 ', 'PapayaWhip  '),
(114, '#FFDAB9 ', 'PeachPuff  '),
(115, '#CD853F ', 'Peru  '),
(116, '#FFC0CB ', 'Pink  '),
(117, '#DDA0DD ', 'Plum  '),
(118, '#B0E0E6 ', 'PowderBlue  '),
(119, '#800080 ', 'Purple  '),
(120, '#663399 ', 'RebeccaPurple  '),
(121, '#FF0000 ', 'Red  '),
(122, '#BC8F8F ', 'RosyBrown  '),
(123, '#4169E1 ', 'RoyalBlue  '),
(124, '#8B4513 ', 'SaddleBrown  '),
(125, '#FA8072 ', 'Salmon  '),
(126, '#F4A460 ', 'SandyBrown  '),
(127, '#2E8B57 ', 'SeaGreen  '),
(128, '#FFF5EE ', 'SeaShell  '),
(129, '#A0522D ', 'Sienna  '),
(130, '#C0C0C0 ', 'Silver  '),
(131, '#87CEEB ', 'SkyBlue  '),
(132, '#6A5ACD ', 'SlateBlue  '),
(133, '#708090 ', 'SlateGray  '),
(134, '#708090 ', 'SlateGrey  '),
(135, '#FFFAFA ', 'Snow  '),
(136, '#00FF7F ', 'SpringGreen  '),
(137, '#4682B4 ', 'SteelBlue  '),
(138, '#D2B48C ', 'Tan  '),
(139, '#008080 ', 'Teal  '),
(140, '#D8BFD8 ', 'Thistle  '),
(141, '#FF6347 ', 'Tomato  '),
(142, '#40E0D0 ', 'Turquoise  '),
(143, '#EE82EE ', 'Violet  '),
(144, '#F5DEB3 ', 'Wheat  '),
(145, '#FFFFFF ', 'White  '),
(146, '#F5F5F5 ', 'WhiteSmoke  '),
(147, '#FFFF00 ', 'Yellow  '),
(148, '#9ACD32', 'YellowGreen  ');

-- --------------------------------------------------------

--
-- Table structure for table `font types`
--

CREATE TABLE `font types` (
  `id` int(10) NOT NULL,
  `Font type` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `font types`
--

INSERT INTO `font types` (`id`, `Font type`) VALUES
(1, 'Arial'),
(2, 'Arial Narrow'),
(3, 'Arial Rounded MT Bold'),
(4, 'Book Antique'),
(5, 'Bookman Old Style'),
(6, 'Bradley Hand ITC TT'),
(7, 'Century Gothic'),
(8, 'Comic Sans MS'),
(9, 'Courier New'),
(10, 'Franklin Gothic Medium'),
(11, 'Garamond'),
(12, 'Georgia'),
(13, 'haettenschweiler'),
(14, 'Impact'),
(15, 'Lucida Bright'),
(16, 'lucida calligraphy'),
(17, 'Lucida Console'),
(18, 'Lucida Sans'),
(19, 'Lucida Sans Typewriter'),
(20, 'Lucida Sans Unicode'),
(21, 'Mistral'),
(22, 'MS Mincho'),
(23, 'Onyx'),
(24, 'Papyrus'),
(25, 'Perpetua'),
(26, 'perpetua titling mt'),
(27, 'Playbill'),
(28, 'Rockwell'),
(29, 'Rockwell Extra Bold'),
(30, 'Stencil'),
(31, 'Tamoha'),
(32, 'Times New Roman'),
(33, 'Trebuchet MS'),
(34, 'Tw Cen MT'),
(35, 'Verdana'),
(36, 'Wide Latin');

-- --------------------------------------------------------

--
-- Table structure for table `page_content`
--

CREATE TABLE `page_content` (
  `id` int(10) NOT NULL,
  `page_title` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `page_content` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `div2` text CHARACTER SET utf8 COLLATE utf8_bin,
  `div3` text CHARACTER SET utf8 COLLATE utf8_bin,
  `div4` text CHARACTER SET utf8 COLLATE utf8_bin,
  `div5` text CHARACTER SET utf8 COLLATE utf8_bin,
  `div6` text CHARACTER SET utf8 COLLATE utf8_bin,
  `div7` text CHARACTER SET utf8 COLLATE utf8_bin,
  `div8` text CHARACTER SET utf8 COLLATE utf8_bin,
  `page_type` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `page_id` varchar(100) NOT NULL,
  `page_added` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_content`
--

INSERT INTO `page_content` (`id`, `page_title`, `page_content`, `div2`, `div3`, `div4`, `div5`, `div6`, `div7`, `div8`, `page_type`, `page_id`, `page_added`) VALUES
(111, 'Home Page', '&lt;div class=&quot;col-md-7&quot;&gt;\r\n&lt;font color=&quot;#4169E1 &quot;&gt;&lt;font face=&quot;Comic Sans MS&quot;&gt;&lt;br&gt;&lt;/font&gt;&lt;font size=&quot;7&quot;&gt;&lt;b&gt;&lt;font face=&quot;Comic Sans MS&quot;&gt;Hell &lt;/font&gt;&lt;font color=&quot;#4169E1 &quot;&gt;&lt;font face=&quot;Comic Sans MS&quot;&gt;in N&lt;/font&gt;&lt;br&gt;&lt;br&gt;&lt;/font&gt;&lt;/b&gt;&lt;/font&gt;&lt;/font&gt;&lt;img src=&quot;http://localhost:8888/projects/OOPtraining/backend/assets/images/fullimage3.jpg&quot; style=&quot;display:block; height:auto; width:100%&quot;&gt;&lt;br&gt;&lt;br&gt;Great Things that she is doing.&lt;br&gt;\r\n&lt;/div&gt;&lt;div class=&quot;col-md-4&quot;&gt;\r\n\r\n\r\n&lt;/div&gt;', '', '', '', '', '', '', '', 'c1_page', 'c1_5692c6b7c903c', 'January 10, 2016, 10:02 pm'),
(114, 'iFrame', '&lt;br&gt;', '', '', '', '', '', '', '', 'c1_page', 'c1_5693352c3b853', 'January 11, 2016, 6:41 am'),
(115, 'About Us', '&lt;h1 class=&quot;art-postheader&quot; style=&quot;margin: 5px 0px; padding: 0px; font-size: 20px; color: rgb(26, 72, 97); line-height: 1em;&quot;&gt;&lt;img src=&quot;/projects/OOPtraining/backend/assets/images/temecula-electrician.jpg&quot; width=&quot;100%&quot; height=&quot;auto&quot;&gt;&lt;/h1&gt;&lt;h1 class=&quot;art-postheader&quot; style=&quot;margin: 5px 0px; padding: 0px; font-size: 20px; color: rgb(26, 72, 97); line-height: 1em;&quot;&gt;&lt;br&gt;&lt;/h1&gt;&lt;h1 class=&quot;art-postheader&quot; style=&quot;margin: 5px 0px; padding: 0px; font-size: 20px; color: rgb(26, 72, 97); line-height: 1em;&quot;&gt;&lt;br&gt;&lt;font face=&quot;Papyrus&quot;&gt;Contact Us&lt;/font&gt;&lt;/h1&gt;&lt;div class=&quot;art-postcontent&quot; style=&quot;color: rgb(46, 66, 76); font-size: 13px;&quot;&gt;&lt;h2 style=&quot;margin: 10px 0px 0px; padding: 0px; font-size: 22px; color: rgb(49, 138, 185);&quot;&gt;Dynamo Electric, Incorporated&lt;/h2&gt;&lt;p style=&quot;font-family: Arial, Helvetica, sans-serif; margin: 12px 0px; padding: 0px;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 0);&quot;&gt;&lt;strong&gt;&lt;span style=&quot;font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;&quot;&gt;Weâ€™re just a phone call or click away every day of the week!&amp;nbsp;&lt;/span&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;font-family: Arial, Helvetica, sans-serif; margin: 12px 0px; padding: 0px;&quot;&gt;&lt;strong&gt;&lt;span style=&quot;font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;&quot;&gt;Phone: 757-220-2067&lt;/span&gt;&lt;/strong&gt;&lt;span style=&quot;font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;&quot;&gt;&lt;strong&gt;&lt;img alt=&quot;&quot; src=&quot;http://dynamoelectric.com/content/images/Dynamo_Truck_Generator.jpg&quot; width=&quot;257&quot; height=&quot;204&quot; align=&quot;right&quot; border=&quot;0&quot; style=&quot;border: 0px none; margin: 7px;&quot;&gt;&lt;/strong&gt;&lt;/span&gt;&lt;strong&gt;&lt;span style=&quot;font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;&quot;&gt;&lt;br&gt;Fax: 757-220-3125&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;font-family: Arial, Helvetica, sans-serif; margin: 12px 0px; padding: 0px;&quot;&gt;&lt;span style=&quot;font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;&quot;&gt;&lt;strong&gt;Hours of Operation&lt;/strong&gt;&lt;br&gt;Monday â€“ Friday&amp;nbsp;&lt;br&gt;7:30 am â€“ 4:30 pm&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;font-family: Arial, Helvetica, sans-serif; margin: 12px 0px; padding: 0px;&quot;&gt;&lt;span style=&quot;font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;&quot;&gt;&lt;strong&gt;24 Hour Emergency Assistance&lt;/strong&gt;&lt;br&gt;Call (757) 220-2067&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;font-family: Arial, Helvetica, sans-serif; margin: 12px 0px; padding: 0px;&quot;&gt;&lt;span style=&quot;font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;&quot;&gt;&lt;strong&gt;Contact Us Via Email&lt;/strong&gt;&lt;br&gt;Short on time?&amp;nbsp;&lt;br&gt;To leave us a message, just&amp;nbsp;&lt;a href=&quot;mailto:dynamoelectric@cox.net&quot; style=&quot;margin: 0px; padding: 0px; font-family: Arial, Helvetica, sans-serif; color: rgb(88, 126, 147);&quot;&gt;click here&lt;/a&gt;,&amp;nbsp;&lt;br&gt;Please allow 2 business days for a reply.&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;font-family: Arial, Helvetica, sans-serif; margin: 12px 0px; padding: 0px;&quot;&gt;&lt;span style=&quot;font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;&quot;&gt;&lt;b&gt;Dynamo Electric, Incorporated&lt;/b&gt;&lt;br&gt;PO Box 5511&lt;br&gt;Williamsburg, VA 23188&lt;/span&gt;&lt;span style=&quot;color: rgb(0, 102, 153); font-family: ''Arial Black'';&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;font-family: Arial, Helvetica, sans-serif; margin: 12px 0px; padding: 0px;&quot;&gt;Services offered by Dynamo Electric of Williamsburg, VA include: certified electricians, electrical panel updates, wiring for residential and new construction, relocation of meter base, commercial new construction, relocation or replacement of electrical appliances, circuits and receptacles, pull cat. 5 &amp;amp; 6 cable for computers, X10 installation, installation of whole house surge protectors, fire suppression systems, conveyor systems, etc..&lt;/p&gt;&lt;/div&gt;', '', '', '', '', '', '', '', 'c1_page', 'c1_569358ef0fac5', 'January 11, 2016, 8:26 am'),
(116, 'Tickets', '&lt;br&gt;&lt;div&gt;Dear Rostom,&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;My name is Rostom and I am a developer with i-Showcase. Thank you for contacting us we will respond to you back as soon as possible.&amp;nbsp;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;hr&gt;&lt;/div&gt;&lt;div&gt;&lt;img src=&quot;&quot;&gt;&lt;/div&gt;&lt;div&gt;&lt;img src=&quot;/projects/OOPtraining/backend/assets/images/logo.jpg&quot;&gt;&lt;/div&gt;&lt;div&gt;&lt;b&gt;Best Regards,&lt;/b&gt;&lt;/div&gt;&lt;div&gt;&lt;b&gt;&lt;i&gt;Rostom Sahakian&lt;/i&gt;&lt;/b&gt;&lt;/div&gt;&lt;div&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;Developer&lt;/u&gt;&lt;/i&gt;&lt;/b&gt;&lt;/div&gt;&lt;div&gt;i-Showcase team&lt;/div&gt;', '', '', '', '', '', '', '', 'c1_page', 'c1_56935b6fc70c1', 'January 11, 2016, 8:39 am');

-- --------------------------------------------------------

--
-- Table structure for table `page_ids`
--

CREATE TABLE `page_ids` (
  `id` int(10) NOT NULL,
  `page_uid` varchar(1000) NOT NULL,
  `page_name` text NOT NULL,
  `page_type` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_ids`
--

INSERT INTO `page_ids` (`id`, `page_uid`, `page_name`, `page_type`) VALUES
(141, 'c1_5692c6b7c903c', '', 'c1_page'),
(144, 'c1_5693352c3b853', '', 'c1_page'),
(145, 'c1_569358ef0fac5', '', 'c1_page'),
(146, 'c1_56935b6fc70c1', '', 'c1_page');

-- --------------------------------------------------------

--
-- Table structure for table `page_images`
--

CREATE TABLE `page_images` (
  `id` int(10) NOT NULL,
  `page_uid` varchar(20) DEFAULT NULL,
  `image_path` text NOT NULL,
  `image_name` text NOT NULL,
  `date_added` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_images`
--

INSERT INTO `page_images` (`id`, `page_uid`, `image_path`, `image_name`, `date_added`) VALUES
(174, 'c1_5692c6b7c903c', '/projects/OOPtraining/backend/assets/images/', 'fullimage3.jpg', 'January 11, 2016, 4:32 am'),
(175, 'c1_5692c6b7c903c', '/projects/OOPtraining/backend/assets/images/', 'fullimage5.jpg', 'January 11, 2016, 4:33 am'),
(176, 'c1_5692c6b7c903c', '/projects/OOPtraining/backend/assets/images/', 'fullimage4.jpg', 'January 11, 2016, 5:13 am'),
(178, 'c1_5693352c3b853', '/projects/OOPtraining/backend/assets/images/', 'fullimage5.jpg', 'January 11, 2016, 6:44 am'),
(179, 'c1_56935b6fc70c1', '/projects/OOPtraining/backend/assets/images/', 'logo.jpg', 'January 11, 2016, 8:42 am'),
(180, 'c1_569358ef0fac5', '/projects/OOPtraining/backend/assets/images/', 'temecula-electrician.jpg', 'January 11, 2016, 8:44 am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `added_by`
--
ALTER TABLE `added_by`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editor colors`
--
ALTER TABLE `editor colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `font types`
--
ALTER TABLE `font types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_content`
--
ALTER TABLE `page_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_ids`
--
ALTER TABLE `page_ids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_images`
--
ALTER TABLE `page_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `added_by`
--
ALTER TABLE `added_by`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `editor colors`
--
ALTER TABLE `editor colors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=149;
--
-- AUTO_INCREMENT for table `font types`
--
ALTER TABLE `font types`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `page_content`
--
ALTER TABLE `page_content`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `page_ids`
--
ALTER TABLE `page_ids`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=147;
--
-- AUTO_INCREMENT for table `page_images`
--
ALTER TABLE `page_images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=181;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
