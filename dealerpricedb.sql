-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2015 at 12:14 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dealerpricedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `affiliate_tracking`
--

CREATE TABLE IF NOT EXISTS `affiliate_tracking` (
`id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_details_id` int(11) NOT NULL,
  `counter` bigint(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `affiliate_tracking`
--

INSERT INTO `affiliate_tracking` (`id`, `product_id`, `product_details_id`, `counter`) VALUES
(1, 1, 1, 5),
(2, 1, 3, 12),
(4, 1, 2, 5),
(5, 1, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `alert_users`
--

CREATE TABLE IF NOT EXISTS `alert_users` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `target` int(11) NOT NULL,
  `mobile` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
`id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `sub_category_id`, `name`, `url`, `description`, `status`) VALUES
(1, 1, 'Samsung Mobiles', 'samsung-mobiles', '', 0),
(2, 1, 'Apple Mobiles', 'apple-mobiles', '', 0),
(3, 1, 'Nokia Mobiles', 'nokia-mobiles', '', 0),
(4, 1, 'LG Mobiles', 'lg-mobiles', '', 0),
(5, 1, 'Motorola Mobiles', 'motorola-mobiles', '', 0),
(6, 1, 'Micromax Mobiles', 'micromax-mobiles', '', 0),
(7, 1, 'Sony Mobiles', 'sony-mobiles', '', 0),
(8, 2, 'Apple Tablets', 'apple-tablets', '', 0),
(9, 2, 'Lenevo Tablets', 'lenevo-tablets', '', 0),
(10, 2, 'HP Tablets', 'hp-tablets', '', 0),
(11, 2, 'Micromax Tablets', 'micromax-tablets', '', 0),
(12, 2, 'Samsung Tablets', 'samsung-tablets', '', 0),
(13, 4, 'HP Laptops', 'hp-laptops', '', 0),
(14, 4, 'Dell Laptops', 'dell-laptops', '', 0),
(15, 4, 'Apple Laptops', 'apple-laptops', '', 0),
(16, 4, 'Asus Laptops', 'asus-laptops', '', 0),
(17, 4, 'Lenevo Laptops', 'lenevo-laptops', '', 0),
(18, 4, 'HCL Laptops', 'hcl-laptops', '', 0),
(19, 4, 'Acer Laptops', 'acer-laptops', '', 0),
(20, 6, 'Samsung Televisions', 'samsung-televisions', '', 0),
(21, 6, 'LG Televisions', 'lg-televisions', '', 0),
(22, 6, 'Sony Televisions', 'sony-televisions', '', 0),
(23, 6, 'Panasonic Televisions', 'panasonic-televisions', '', 0),
(24, 7, 'Nikon Cameras', 'nikon-cameras', '', 0),
(25, 7, 'Canon Cameras', 'canon-cameras', '', 0),
(26, 7, 'Samsung Cameras', 'samsung-cameras', '', 0),
(27, 7, 'Sony Cameras', 'sony-cameras', '', 0),
(28, 7, 'Olympus Cameras', 'olympus-cameras', '', 0),
(29, 13, 'Titan Watches', 'titan', '', 0),
(30, 13, 'Fasttrack Watches', 'fasttrack', '', 0),
(31, 13, 'Timex Watches', 'timex', '', 0),
(32, 13, 'Casio Watches', 'casio', '', 0),
(33, 13, 'Fossil Watches', 'fossil', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `url`, `description`, `status`) VALUES
(1, 'Mobiles & Tablets', 'mobiles-and-tablets', '', 0),
(2, 'Laptops & Computers', 'laptops-and-computers', '', 0),
(3, 'Televisions & Cameras', 'televisions-and-cameras', '', 0),
(4, 'Home & Kitchen Appliances', 'home-and-kitchen-appliances', '', 0),
(5, 'Men', 'men', '', 0),
(6, 'Women', 'women', '', 0),
(7, 'Kids', 'kids', '', 0),
(8, 'Health & Fitness', 'health-and-fitness', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news_letter`
--

CREATE TABLE IF NOT EXISTS `news_letter` (
`letter_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `send_to` enum('All','New Users ( < 1 Week )','New Users ( < 1 Month )','New Users ( < 3 Months )') NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news_letter`
--

INSERT INTO `news_letter` (`letter_id`, `user_id`, `send_to`, `subject`, `message`) VALUES
(1, 3, 'All', 'test', 'test test tesae'),
(2, 3, 'New Users ( < 1 Week )', 'test', 'test fdsdfd'),
(3, 3, 'New Users ( < 1 Month )', 'sdf', 'sdfsd'),
(4, 3, 'New Users ( < 3 Months )', 'sdfsd', 'fsdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `news_letter_users`
--

CREATE TABLE IF NOT EXISTS `news_letter_users` (
`news_letter_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `joined` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `news_letter_users`
--

INSERT INTO `news_letter_users` (`news_letter_id`, `email`, `joined`) VALUES
(2, 'test2@gmail.com', '2014-11-24'),
(3, 'sdfsd@sdfsdf.com', '2014-11-24'),
(4, 'sfkskd@ldsd.cm', '2014-11-24'),
(5, 'test@dlkfskd.com', '2014-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `images` text COLLATE utf8_unicode_ci NOT NULL,
  `key_features` text COLLATE utf8_unicode_ci NOT NULL,
  `specifications` text COLLATE utf8_unicode_ci NOT NULL,
  `overview` text COLLATE utf8_unicode_ci NOT NULL,
  `video_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `last_updated` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `type_id`, `brand_id`, `name`, `url`, `images`, `key_features`, `specifications`, `overview`, `video_url`, `status`, `last_updated`) VALUES
(1, 1, 7, ' Sony Xperia Z2 (Black) ', 'sony-xperia-z2-black', '[{"normal":"http:\\/\\/img6a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-400x400-imadvy7rgexautyz.jpeg","zoom":"http:\\/\\/img6a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-1100x1100-imadvy7rgexautyz.jpeg"},{"normal":"http:\\/\\/img6a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-400x400-imadvy7rqsy7zqxb.jpeg","zoom":"http:\\/\\/img5a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-1100x1100-imadvy7rqsy7zqxb.jpeg"},{"normal":"http:\\/\\/img5a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-400x400-imadvy7rykcyyds6.jpeg","zoom":"http:\\/\\/img6a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-1100x1100-imadvy7rykcyyds6.jpeg"},{"normal":"http:\\/\\/img6a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-400x400-imadvy7reguzjvx5.jpeg","zoom":"http:\\/\\/img6a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-1100x1100-imadvy7reguzjvx5.jpeg"},{"normal":"http:\\/\\/img5a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-400x400-imadvy7rvkfz9buh.jpeg","zoom":"http:\\/\\/img6a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-1100x1100-imadvy7rvkfz9buh.jpeg"},{"normal":"http:\\/\\/img5a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-400x400-imadvy7rbkfsjm6h.jpeg","zoom":"http:\\/\\/img5a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-1100x1100-imadvy7rbkfsjm6h.jpeg"},{"normal":"http:\\/\\/img5a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-400x400-imadvy7s2qfz5tcz.jpeg","zoom":"http:\\/\\/img5a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-1100x1100-imadvy7s2qfz5tcz.jpeg"},{"normal":"http:\\/\\/img6a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-400x400-imadvy7tftwdzev7.jpeg","zoom":"http:\\/\\/img6a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-1100x1100-imadvy7tftwdzev7.jpeg"},{"normal":"http:\\/\\/img6a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-400x400-imadvwwwdth7jmgj.jpeg","zoom":"http:\\/\\/img5a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-1100x1100-imadvwwwdth7jmgj.jpeg"},{"normal":"http:\\/\\/img5a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-400x400-imadvwwx7kwugetg.jpeg","zoom":"http:\\/\\/img6a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-1100x1100-imadvwwx7kwugetg.jpeg"},{"normal":"http:\\/\\/img5a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-400x400-imadvy7txkcuqs9s.jpeg","zoom":"http:\\/\\/img6a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-1100x1100-imadvy7txkcuqs9s.jpeg"},{"normal":"http:\\/\\/img5a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-400x400-imadvwwvthnqtanj.jpeg","zoom":"http:\\/\\/img5a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-1100x1100-imadvwwvthnqtanj.jpeg"},{"normal":"http:\\/\\/img5a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-400x400-imadvwwv5f2bh3e9.jpeg","zoom":"http:\\/\\/img6a.flixcart.com\\/image\\/mobile\\/h\\/k\\/h\\/sony-xperia-z2-1100x1100-imadvwwv5f2bh3e9.jpeg"}]', '<ul class="keyFeaturesList">  <li>5.2-inch Full HD TRILUMINOS Display with Live Colour LED and X-Reality for Mobile</li>  <li>Sony G Lens and 1/2.3 inches 20.7 MP Exmor RS for Mobile Image Sensor and Intelligent BIONZ for Mobile Image Processing Engine</li>  <li>Video Mode in 4K Resolution with Steadyshot Technology</li>  <li>Qualcomm Snapdragon Quad Core 2.3 GHz Processor and 3 GB RAM</li>  <li>Scratch Resistant Glass and a High level of Waterproofing (IP58 and IP55)</li>  <li>Android v4.4 (KitKat) OS</li> </ul>', '<div class="productSpecs specSection">  <h3 class="sectionTitle"> Specifications of Sony Xperia Z2 (Black) </h3>  <table cellspacing="0" class="specTable">   <tbody>   <tr>     <th class="groupHead" colspan="2">GENERAL FEATURES</th>    </tr>    <tr>     <td class="specsKey">In the Box</td>     <td class="specsValue"> Charger(with Detachable USB Cable), Battery, Start-up Guide, Headset, Handset </td>    </tr>    <tr>     <td class="specsKey">Brand</td>     <td class="specsValue"> Sony </td>    </tr>    <tr>     <td class="specsKey">Model Name</td>     <td class="specsValue"> Xperia Z2 </td>    </tr>    <tr>     <td class="specsKey">Model ID</td>     <td class="specsValue"> D6502 </td>    </tr>    <tr>     <td class="specsKey">Form</td>     <td class="specsValue"> Bar </td>    </tr>    <tr>     <td class="specsKey">SIM Size</td>     <td class="specsValue"> Micro SIM </td>    </tr>    <tr>     <td class="specsKey">SIM Type</td>     <td class="specsValue"> Single Sim, GSM </td>    </tr>    <tr>     <td class="specsKey">Touch Screen</td>     <td class="specsValue"> Yes, Capacitive </td>    </tr>    <tr>     <td class="specsKey">Business Features</td>     <td class="specsValue"> Document Viewer, Pushmail (Microsoft Exchange ActiveSync), Reader Mode </td>    </tr>    <tr>     <td class="specsKey">Call Features</td>     <td class="specsValue"> Loudspeaker </td>    </tr>    <tr>     <td class="specsKey">Handset Color</td>     <td class="specsValue"> Black </td>    </tr>   </tbody> </table>  <table cellspacing="0" class="specTable">   <tbody>   <tr>     <th class="groupHead" colspan="2">Platform</th>    </tr>    <tr>     <td class="specsKey">Operating Freq</td>     <td class="specsValue"> GSM - 850, 900, 1800, 1900; UMTS - 2100 </td>    </tr>    <tr>     <td class="specsKey">OS</td>     <td class="specsValue"> Android v4.4 (KitKat), Upgradable to v4.4 (KitKat) </td>    </tr>    <tr>     <td class="specsKey">Processor</td>     <td class="specsValue"> 2.3 GHz + Qualcomm MSM8974AB Snapdragon 801, Quad Core </td>    </tr>    <tr>     <td class="specsKey">Graphics</td>     <td class="specsValue"> Adreno 330 </td>    </tr>   </tbody> </table>  <table cellspacing="0" class="specTable">   <tbody>   <tr>     <th class="groupHead" colspan="2">Display</th>    </tr>    <tr>     <td class="specsKey">Type</td>     <td class="specsValue"> TFT </td>    </tr>    <tr>     <td class="specsKey">Size</td>     <td class="specsValue"> 5.2 Inches </td>    </tr>    <tr>     <td class="specsKey">Resolution</td>     <td class="specsValue"> Full HD, 1920 x 1080 Pixels </td>    </tr>    <tr>     <td class="specsKey">Color</td>     <td class="specsValue"> 16.7 M </td>    </tr>    <tr>     <td class="specsKey">Other Display Features</td>     <td class="specsValue"> Gesture Input, Auto Rotation, Face Unlock, Pan and Zoom, Scratch Resistant Glass, TRILUMINOS Display with X-Reality, Touch Gesture - 10 Fingers Multi-touch, IPS Display, Direct Touch, Screenshot Capturing, Live Colour LED, Throw, Stylus Pen Support </td>    </tr>   </tbody> </table>  <table cellspacing="0" class="specTable">   <tbody>   <tr>     <th class="groupHead" colspan="2">Camera</th>    </tr>    <tr>     <td class="specsKey">Primary Camera</td>     <td class="specsValue"> Yes, 20.7 Megapixel </td>    </tr>    <tr>     <td class="specsKey">Secondary Camera</td>     <td class="specsValue"> Yes, 2.2 Megapixel </td>    </tr>    <tr>     <td class="specsKey">Flash</td>     <td class="specsValue"> Pulsed LED </td>    </tr>    <tr>     <td class="specsKey">Video Recording</td>     <td class="specsValue"> Yes, 3840 x 2160 </td>    </tr>    <tr>     <td class="specsKey">HD Recording</td>     <td class="specsValue"> HD, Full HD </td>    </tr>    <tr>     <td class="specsKey">Zoom</td>     <td class="specsValue"> Digital Zoom - 8x </td>    </tr>    <tr>     <td class="specsKey">Other Camera Features</td>     <td class="specsValue">      <div class="dummy-content">       Auto Focus, Sony Exmor RS for Mobile Image Sensor, 4K Video Capture, Burst Mode, HDR for Picture and Film, Geo-tagging, Image Stabiliser, Object Tracking, Red-eye Reduction, Scene Recognition, Smile Shutter, Superior Auto, Sweep Panorama, Touch Focus, Touch Capture, White Balance, Send to Web, Image...      <a href="javascript:void(0);" onclick="$(this).parents(''.dummy-content'').hide();$(this).parents(''.dummy-content'').next().show();return false;">View More</a>      </div>      <div class="fk-hidden">      Auto Focus, Sony Exmor RS for Mobile Image Sensor, 4K Video Capture, Burst Mode, HDR for Picture and Film, Geo-tagging, Image Stabiliser, Object Tracking, Red-eye Reduction, Scene Recognition, Smile Shutter, Superior Auto, Sweep Panorama, Touch Focus, Touch Capture, White Balance, Send to Web, Image Capture, Image Playback, Face Detection, Intelligent BIONZ for Mobile Image-processing Engine, Sony G Lens, Low-light Bright Shots, Motion Detection for Blur-free Images, 3x Clear Image Zoom, Slow Down the Moment with Timeshift Video, SteadyShot, ISO - ISO 3200 Maximum in Manual Mode, Minimum Focus Distance - 100 mm, Self-timer       <p> Camera Apps: Sony Camera Apps, Background Defocus, Creative Effects, Timeshift Video, AR Effect, Vine, Info-eye, Timeshift Burst, Social Live, Sweep Panorama, Xperia Camera Apps</p>     </div> </td>    </tr>   </tbody> </table>  <table cellspacing="0" class="specTable">   <tbody>   <tr>     <th class="groupHead" colspan="2">Dimensions</th>    </tr>    <tr>     <td class="specsKey">Size</td>     <td class="specsValue"> 73.3x146.8x8.2 mm </td>    </tr>    <tr>     <td class="specsKey">Weight</td>     <td class="specsValue"> 163 g </td>    </tr>   </tbody> </table>  <table cellspacing="0" class="specTable">   <tbody>   <tr>     <th class="groupHead" colspan="2">Battery</th>    </tr>    <tr>     <td class="specsKey">Type</td>     <td class="specsValue"> 3200 mAh </td>    </tr>    <tr>     <td class="specsKey">Talk Time</td>     <td class="specsValue"> 15 hrs (2G), 19 hrs (3G) </td>    </tr>    <tr>     <td class="specsKey">Standby Time</td>     <td class="specsValue"> 690 hrs (2G), 740 hrs (3G) </td>    </tr>   </tbody> </table>  <table cellspacing="0" class="specTable">   <tbody>   <tr>     <th class="groupHead" colspan="2">Memory and Storage</th>    </tr>    <tr>     <td class="specsKey">Internal</td>     <td class="specsValue"> 16 </td>    </tr>    <tr>     <td class="specsKey">User Memory</td>     <td class="specsValue"> 12 GB </td>    </tr>    <tr>     <td class="specsKey">Expandable Memory</td>     <td class="specsValue"> microSD, upto 64 GB </td>    </tr>    <tr>     <td class="specsKey">Memory</td>     <td class="specsValue"> 3 GB RAM </td>    </tr>   </tbody> </table>  <table cellspacing="0" class="specTable">   <tbody>   <tr>     <th class="groupHead" colspan="2">Internet &amp; Connectivity</th>    </tr>    <tr>     <td class="specsKey">Internet Features</td>     <td class="specsValue"> Email </td>    </tr>    <tr>     <td class="specsKey">Preinstalled Browser</td>     <td class="specsValue"> Android, Google Chrome </td>    </tr>    <tr>     <td class="specsKey">GPRS</td>     <td class="specsValue"> Yes, 107 kbps </td>    </tr>    <tr>     <td class="specsKey">EDGE</td>     <td class="specsValue"> Yes, 296 kbps </td>    </tr>    <tr>     <td class="specsKey">3G</td>     <td class="specsValue"> Yes, 42 Mbps HSDPA; 5.8 Mbps HSUPA; HSPA+ </td>    </tr>    <tr>     <td class="specsKey">Wifi</td>     <td class="specsValue"> Yes, 802.11 a/b/g/n/ac </td>    </tr>    <tr>     <td class="specsKey">USB Connectivity</td>     <td class="specsValue"> Yes, micro USB, v2 </td>    </tr>    <tr>     <td class="specsKey">Tethering</td>     <td class="specsValue"> USB, Wi-fi Hotspot </td>    </tr>    <tr>     <td class="specsKey">Navigation Technology</td>     <td class="specsValue"> A-GPS, GLONASS, with Google Maps with Street View </td>    </tr>    <tr>     <td class="specsKey">Bluetooth</td>     <td class="specsValue"> Yes, v4, Supported Profiles (aptX, A2DP 1.2, HIDGP 1.0, HIDP, HR 1.1, PAP 1.1, HDP 1.1, DIP 1.3, GAPC / LE, AVRCP 1.3, HFP 1.6, HSP 1.2, SPP 1.1, MAP 1.0, OPP 1.1, PANP 1.0) </td>    </tr>    <tr>     <td class="specsKey">Audio Jack</td>     <td class="specsValue"> 3.5 mm </td>    </tr>    <tr>     <td class="specsKey">DLNA</td>     <td class="specsValue"> Yes </td>    </tr>    <tr>     <td class="specsKey">NFC</td>     <td class="specsValue"> Yes </td>    </tr>   </tbody> </table>  <table cellspacing="0" class="specTable">   <tbody>   <tr>     <th class="groupHead" colspan="2">Multimedia</th>    </tr>    <tr>     <td class="specsKey">Music Player</td>     <td class="specsValue"> Yes, Supports MP3, AMR-NB, FLAC, AAC, AMR-WB, Vorbis, WMA, MIDI, PCM </td>    </tr>    <tr>     <td class="specsKey">Video Player</td>     <td class="specsValue"> Yes, Supports M4V, MP4, XviD, MKV, 3GPP, AVI, WEBM, Full HD, 4K - Ultra HD </td>    </tr>    <tr>     <td class="specsKey">FM</td>     <td class="specsValue"> Yes </td>    </tr>    <tr>     <td class="specsKey">Sound Enhancement</td>     <td class="specsValue">      <div class="dummy-content">       Noise Suppression, Voice Enhancement, WALKMAN Application, 3D Surround Sound, Clear Audio+, Clear Bass, Clear Phase and Clear Stereo, TrackID Music Recognition, xLoud Experience, Stereo Speakers, Album Art, Dynamic Normaliser, Low Power Audio Playback, PlayNow Service, Talk Equaliser, HD Audio, Digi...      <a href="javascript:void(0);" onclick="$(this).parents(''.dummy-content'').hide();$(this).parents(''.dummy-content'').next().show();return false;">View More</a>      </div>      <div class="fk-hidden">      Noise Suppression, Voice Enhancement, WALKMAN Application, 3D Surround Sound, Clear Audio+, Clear Bass, Clear Phase and Clear Stereo, TrackID Music Recognition, xLoud Experience, Stereo Speakers, Album Art, Dynamic Normaliser, Low Power Audio Playback, PlayNow Service, Talk Equaliser, HD Audio, Digital Noise Cancelling Audio Jack     </div> </td>    </tr>    <tr>     <td class="specsKey">Ringtone</td>     <td class="specsValue"> Polyphonic </td>    </tr>   </tbody> </table>  <table cellspacing="0" class="specTable">   <tbody>   <tr>     <th class="groupHead" colspan="2">Other Features</th>    </tr>    <tr>     <td class="specsKey">Call Memory</td>     <td class="specsValue"> Yes </td>    </tr>    <tr>     <td class="specsKey">SMS Memory</td>     <td class="specsValue"> Yes </td>    </tr>    <tr>     <td class="specsKey">Phone Book Memory</td>     <td class="specsValue"> Yes </td>    </tr>    <tr>     <td class="specsKey">Sensors</td>     <td class="specsValue"> Ambient Light Sensor, Gyroscope, Proximity Sensor, Significant Motion Detector, Barometer Sensor, Step Detector, eCompass, Accelerometer, Magnetometer, Game Rotation Vector, Geomagnetic Rotation Vector, Step Counter </td>    </tr>    <tr>     <td class="specsKey">Additional Features</td>     <td class="specsValue">      <div class="dummy-content">       Waterproof (IP55 and IP58), Dust-resistant (IP55), STAMINA Mode, ANT+ Wireless Technology, MHL 3.0 Support + 5-pin Support, Screen Mirroring, Smart Connect, SyncML, USB Charging, Xperia Link, Xperia Socialife, Wi-Fi Certified Miracast, 3D and Motion Gaming, SensMe and SensMe Slideshow, TV Launcher, ...      <a href="javascript:void(0);" onclick="$(this).parents(''.dummy-content'').hide();$(this).parents(''.dummy-content'').next().show();return false;">View More</a>      </div>      <div class="fk-hidden">      Waterproof (IP55 and IP58), Dust-resistant (IP55), STAMINA Mode, ANT+ Wireless Technology, MHL 3.0 Support + 5-pin Support, Screen Mirroring, Smart Connect, SyncML, USB Charging, Xperia Link, Xperia Socialife, Wi-Fi Certified Miracast, 3D and Motion Gaming, SensMe and SensMe Slideshow, TV Launcher, Audio Recording, 4K Video Playback, On-screen QWERTY Keyboard, Video Chat, Bookmarks, Slow Talk, Smart Call Handling, Talk Equaliser, Handwriting Recognition, MMS Enabled, Predictive Text Input, Media Browser, PlayMemories, Audio and Video Streaming, Flight Mode, Alarm, Calculator, Calendar, Document Readers, Setup Guide, Sketch, Stopwatch, Tasks, Timer, Health Support, Media Go, Media Go, Media Transfer Protocol Support, PC Companion, USB Host, USB Charging, Wi-Fi Direct, Voice Input     </div> </td>    </tr>    <tr>     <td class="specsKey">Important Apps</td>     <td class="specsValue"> Google Hangouts, Sony Select, Web Browser (WebKit), Google Play, Google Voice Search, Google Search, Facebook, Google, YouTube, Twitter, Xperia Care, Xperia Home, Google Plus, Gmail, Instant Messaging, Google Wallet, Google Sync </td>    </tr>   </tbody> </table>  <table cellspacing="0" class="specTable">   <tbody>   <tr>     <th class="groupHead" colspan="2">Warranty</th>    </tr>    <tr>     <td class="specsKey">Warranty Summary</td>     <td class="specsValue"> 1 year manufacturer warranty for Phone and 6 months warranty for in the box accessories </td>    </tr>   </tbody> </table> </div>', '<div class="rpdSection" data-ctrl="RichProductDescription">  <h3 class="sectionTitle">Sony Xperia Z2</h3>  <p class="description">A world-class camera and camcorder enclosed within a waterproof and dust resistant body defines the powerful Xperia Z2. </p>  <div class="rpdFeatureSetList">   <div class="rpdFeatureSetContainer expanded">    <h3 class="rpdFeatureSetTitle">A 20.7 MP camera &amp; 4K Camcorder</h3>    <div class="rpdFeatureSet">     <div class="rpdFeatureSetInner">      <ul class="rpdCalloutList">       <li class="rpdCallout">        <div class="highlight">         <img src="http://img5a.flixcart.com/image/mobile/h/k/h/sony-xperia-z2-original-imadvxa7ydfzt2hk.jpeg">        </div>        <div class="subHighlight">        Image Sensor       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <img src="http://img5a.flixcart.com/image/mobile/h/k/h/sony-xperia-z2-original-imadvxa7zkazntkk.jpeg">        </div>        <div class="subHighlight">        Lens       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <img src="http://img5a.flixcart.com/image/mobile/h/k/h/sony-xperia-z2-original-imadvxa8xzctfdtd.jpeg">        </div>        <div class="subHighlight">        Engine       </div> </li>      </ul>      <div class="rpdFeatureSetBody singleFeatureLayout showLessFeatures">       <div class="rpdFeature">        <div class="rpdFeatureMediaWrapper">         <img src="http://img5a.flixcart.com/image/mobile/h/k/h/sony-xperia-z2-280x210-imadvx3evw2raafy.jpeg" class="rpdFeatureImage">        </div>        <p class="description">The Xperia Z2 comes with a 20.7 MP camera with Exmor RS for mobile image sensor. The Z2''s camera is also equipped with Sony''s award winning G Lens, 4K video capture capability, and Sony''s intelligent BIONZ engine. Built on these amazing Sony technologies, the Z2 delivers super sharp, clear and bright images always. </p>       </div>       <div class="clearFloat"></div>      </div>     </div>    </div>   </div>   <div class="rpdFeatureSetContainer expanded">    <h3 class="rpdFeatureSetTitle">Camera Features</h3>    <div class="rpdFeatureSet">     <div class="rpdFeatureSetInner">      <p class="description"></p>      <div class="rpdFeatureSetBody multipleFeatureLayout showLessFeatures">       <div class="rpdFeature">        <div class="rpdFeatureTitle">        Stunning shots in any light       </div>        <div class="rpdFeatureMediaWrapper">         <img src="http://img5a.flixcart.com/image/mobile/h/k/h/sony-xperia-z2-280x210-imadvx3erucgubzx.jpeg" class="rpdFeatureImage">        </div>        <p class="description">Enriched with Sony''s unique imaging technologies, the Z2 delivers clear, bright and detailed pictures even in the most challenging lighting conditions. The high sensitivity Exmor RS sensor, the bright F2.0 G Lens, and the Bionz image-processing engine combine to reduce noise while maintaining high resolution.</p>       </div>       <div class="rpdFeature">        <div class="rpdFeatureTitle">        Motion detection       </div>        <div class="rpdFeatureMediaWrapper">         <img src="http://img5a.flixcart.com/image/mobile/h/k/h/sony-xperia-z2-280x210-imadvx3fnzzevzty.jpeg" class="rpdFeatureImage">        </div>        <p class="description">The Xperia Z2 makes the perfect camera for blur-free images. The G Lens and Exmor RS sensor makes it possible for you to capture pictures with a high shutter speed. The BIONZ engine is equipped with the Motion Detection feature which chooses a higher shutter speed while shooting subjects in motion for a blur-free result.</p>       </div>       <div class="clearFloat"></div>       <div class="rpdFeatureSet-collapsible">        <div class="rpdFeature">         <div class="rpdFeatureTitle">         3x Clear Image Zoom        </div>         <div class="rpdFeatureMediaWrapper">          <img src="http://img5a.flixcart.com/image/mobile/h/k/h/sony-xperia-z2-280x210-imadvx3f5ykdwgnv.jpeg" class="rpdFeatureImage">         </div>         <p class="description">Enjoy sharply detailed images even while zoomed in with the Xperia Z2. The 3x clear image zoom combined with the high resolution of the sensor and the by-pixel super resolution of the image-processing engine take you to a tele-like 81 mm optical zoom.</p>        </div>        <div class="clearFloat"></div>       </div>       <div class="rpdFeatureSet-showAll-handle">        <span class="showAllMessage">View all 3 features</span>        <span class="showLessMessage">View less features</span>       </div>      </div>     </div>    </div>   </div>   <div class="rpdFeatureSetContainer expanded">    <h3 class="rpdFeatureSetTitle">Special Video Features</h3>    <div class="rpdFeatureSet">     <div class="rpdFeatureSetInner">      <p class="description"></p>      <div class="rpdFeatureSetBody multipleFeatureLayout showLessFeatures">       <div class="rpdFeature">        <div class="rpdFeatureTitle">        4K Ultra HD video recording       </div>        <div class="rpdFeatureMediaWrapper">         <img src="http://img5a.flixcart.com/image/mobile/h/k/h/sony-xperia-z2-280x210-imadvx3ftrzhhudj.jpeg" class="rpdFeatureImage">        </div>        <p class="description">Sony''s Xperia Z2 lets you capture everything you see in brilliant high resolution 4K video. Four times the detail compared to Full HD 1080p image quality, your footage is delivered in Ultra High Definition, for unparalleled sharpness full of authentic details. </p>       </div>       <div class="rpdFeature">        <div class="rpdFeatureTitle">        Timeshift video       </div>        <div class="rpdFeatureMediaWrapper">         <img src="http://img5a.flixcart.com/image/mobile/h/k/h/sony-xperia-z2-280x210-imadvx3fzhvbxcuy.jpeg" class="rpdFeatureImage">        </div>        <p class="description">Create a true cinematic experience with the Timeshift video feature which lets you shoot videos at 120 frames per second in HD 720p quality. After recording the video, just select parts of the clip that you want to slow down and mark them on a graphical timeline - the Timeshift video will do the rest.</p>       </div>       <div class="clearFloat"></div>       <div class="rpdFeatureSet-collapsible">        <div class="rpdFeature">         <div class="rpdFeatureTitle">         Perfect videos with SteadyShot        </div>         <div class="rpdFeatureMediaWrapper">          <img src="http://img5a.flixcart.com/image/mobile/h/k/h/sony-xperia-z2-280x210-imadvx3fhu9ghyfg.jpeg" class="rpdFeatureImage">         </div>         <p class="description">SteadyShot? compensates for your movements, making panning smoother and the image more stable even in Full HD 1080 video and 4K. The outcome is gorgeously steady videos.</p>        </div>        <div class="clearFloat"></div>       </div>       <div class="rpdFeatureSet-showAll-handle">        <span class="showAllMessage">View all 3 features</span>        <span class="showLessMessage">View less features</span>       </div>      </div>     </div>    </div>   </div>   <div class="rpdFeatureSetContainer expanded">    <h3 class="rpdFeatureSetTitle">Camera Apps</h3>    <div class="rpdFeatureSet">     <div class="rpdFeatureSetInner">      <p class="description">The Xperia Z2 comes with a variety of pre-installed camera apps. Besides these pre-installed apps, you can choose from a whole range of apps by clicking on the ''+Apps'' from your camera''s viewfinder and download them.</p>      <div class="rpdFeatureSetBody multipleFeatureLayout showLessFeatures">       <div class="rpdFeature">        <div class="rpdFeatureTitle">        Background defocus       </div>        <div class="rpdFeatureMediaWrapper">         <img src="http://img5a.flixcart.com/image/mobile/h/k/h/sony-xperia-z2-280x210-imadvx3fzrefe6vp.jpeg" class="rpdFeatureImage">        </div>        <p class="description">With the Background Defocus app, you can create blurred out backgrounds or foregrounds for your pictures. The background defocus simulates a shallow depth of field. It captures two pictures at different focus settings and merges the different depths.</p>       </div>       <div class="rpdFeature">        <div class="rpdFeatureTitle">        Creative effects       </div>        <div class="rpdFeatureMediaWrapper">         <img src="http://img5a.flixcart.com/image/mobile/h/k/h/sony-xperia-z2-280x210-imadvx3fzrgsadkh.jpeg" class="rpdFeatureImage">        </div>        <p class="description">Select from a wide variety of creative effects and apply them to your photos and videos.</p>       </div>       <div class="clearFloat"></div>       <div class="rpdFeatureSet-collapsible">        <div class="rpdFeature">         <div class="rpdFeatureTitle">         Other Apps        </div>         <p class="description">Other camera apps available on the Z2 are Timeshift video, AR effect, Vine, Info-eye?, Timeshift burst, Social live, and Sweep panorama.</p>        </div>        <div class="clearFloat"></div>       </div>       <div class="rpdFeatureSet-showAll-handle">        <span class="showAllMessage">View all 3 features</span>        <span class="showLessMessage">View less features</span>       </div>      </div>     </div>    </div>   </div>   <div class="rpdFeatureSetContainer expanded">    <h3 class="rpdFeatureSetTitle">Experience legendary sound</h3>    <div class="rpdFeatureSet">     <div class="rpdFeatureSetInner">      <ul class="rpdCalloutList">       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">Noise</span>         <span class="rpdCalloutHighlightText2">Control</span>        </div>        <div class="subHighlight">        Active       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">Clear</span>        </div>        <div class="subHighlight">        Stereo       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">Clear</span>        </div>        <div class="subHighlight">        Bass       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">Clear</span>        </div>        <div class="subHighlight">        Phase       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">Dual</span>         <span class="rpdCalloutHighlightText2">Stereo</span>        </div>        <div class="subHighlight">        Speakers       </div> </li>      </ul>      <div class="rpdFeatureSetBody singleFeatureLayout showLessFeatures">       <div class="rpdFeature">        <div class="rpdFeatureMediaWrapper">         <img src="http://img5a.flixcart.com/image/mobile/h/k/h/sony-xperia-z2-280x210-imadvx3gxsm8wwyz.jpeg" class="rpdFeatureImage">        </div>        <p class="description">Experience the best of sound always on the Xperia Z2. The in-built noise-cancelling technology, Active noise control, reduces up to 98% of all ambient sounds on the Z2. Moreover, the Xperia Z2 comes with Clear Stereo, Clear Bass, and Clear Phase that provides balanced, clear sound with minimal distortions.</p>       </div>       <div class="clearFloat"></div>      </div>     </div>    </div>   </div>   <div class="rpdFeatureSetContainer collapsed">    <h3 class="rpdFeatureSetTitle">Display</h3>    <div class="rpdFeatureSet">     <div class="rpdFeatureSetInner">      <ul class="rpdCalloutList">       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">5.2</span>         <span class="rpdCalloutHighlightText2">Inch</span>        </div>        <div class="subHighlight">        Display       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">Full</span>         <span class="rpdCalloutHighlightText2">HD</span>        </div>        <div class="subHighlight">        IPS Display       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">Live</span>         <span class="rpdCalloutHighlightText2">Color</span>        </div>        <div class="subHighlight">        LED       </div> </li>      </ul>      <div class="rpdFeatureSetBody singleFeatureLayout showLessFeatures">       <div class="rpdFeature">        <div class="rpdFeatureMediaWrapper">         <img src="http://img5a.flixcart.com/image/mobile/h/k/h/sony-xperia-z2-280x210-imadvx3gt5vmm3qh.jpeg" class="rpdFeatureImage">        </div>        <p class="description">With a large, high-resolution 5.2-inch Full HD display, you get razor sharp, incredibly bright, and crisp pictures on the Z2. Moreover, the Z2 comes with a Live Color LED for increased color depth and gradation, a resolution of 1920 x 1080, and IPS for excellent viewing angles and accurate colors</p>       </div>       <div class="clearFloat"></div>      </div>     </div>    </div>   </div>   <div class="rpdFeatureSetContainer collapsed">    <h3 class="rpdFeatureSetTitle">Display Technologies</h3>    <div class="rpdFeatureSet">     <div class="rpdFeatureSetInner">      <p class="description"></p>      <div class="rpdFeatureSetBody multipleFeatureLayout showLessFeatures">       <div class="rpdFeature">        <div class="rpdFeatureTitle">        TRILUMINOS Display for mobile       </div>        <div class="rpdFeatureMediaWrapper">         <img src="http://img5a.flixcart.com/image/mobile/h/k/h/sony-xperia-z2-280x210-imadvjmrkybzmuuj.jpeg" class="rpdFeatureImage">        </div>        <p class="description">Enriched with the Triluminos display technology for mobiles, the Z2 delivers a wide palette of natural and rich colors. Moreover, the Xperia Z2 comes with the Live Color LED which gives you the world''s deepest and most intense colors on a smartphone or tablet display.</p>       </div>       <div class="rpdFeature">        <div class="rpdFeatureTitle">        X-Reality for mobile       </div>        <div class="rpdFeatureMediaWrapper">         <img src="http://img5a.flixcart.com/image/mobile/h/k/h/sony-xperia-z2-280x210-imadvx3g85cuhz4g.jpeg" class="rpdFeatureImage">        </div>        <p class="description">Sony''s unique image software engine, the X-Reality for mobile analyses each image to optimise colors, sharpness and contrast, as well as reduce noise. The super resolution function reproduces missing pixels, for spectacular clarity and astonishing detail - bringing your favourite moments closer to Full HD quality.</p>       </div>       <div class="clearFloat"></div>      </div>     </div>    </div>   </div>   <div class="rpdFeatureSetContainer collapsed">    <h3 class="rpdFeatureSetTitle">Design</h3>    <div class="rpdFeatureSet">     <div class="rpdFeatureSetInner">      <ul class="rpdCalloutList">       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">One</span>         <span class="rpdCalloutHighlightText2">Piece</span>        </div>        <div class="subHighlight">        Aluminium Frame       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">Glass</span>        </div>        <div class="subHighlight">        Panels       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">Power</span>         <span class="rpdCalloutHighlightText2">Button</span>        </div>        <div class="subHighlight">        Unique       </div> </li>      </ul>      <div class="rpdFeatureSetBody singleFeatureLayout showLessFeatures">       <div class="rpdFeature">        <div class="rpdFeatureMediaWrapper">         <img src="http://img5a.flixcart.com/image/mobile/h/k/h/sony-xperia-z2-280x210-imadvx3gsfecss5m.jpeg" class="rpdFeatureImage">        </div>        <p class="description">Crafted with precision, the Xperia Z2 comes in a beautiful one-piece aluminium frame with glass panels, a uniquely designed power button, and an excellent build quality. With a stunningly high screen to phone size ratio, you get a display with maximized screen area on this slim and sleek Sony smartphone. </p>       </div>       <div class="clearFloat"></div>      </div>     </div>    </div>   </div>   <div class="rpdFeatureSetContainer collapsed">    <h3 class="rpdFeatureSetTitle">Durability</h3>    <div class="rpdFeatureSet">     <div class="rpdFeatureSetInner">      <ul class="rpdCalloutList">       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">IP 55</span>        </div>        <div class="subHighlight">        Dust Resistant       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">IP 58</span>        </div>        <div class="subHighlight">        Waterproof       </div> </li>      </ul>      <div class="rpdFeatureSetBody singleFeatureLayout showLessFeatures">       <div class="rpdFeature">        <div class="rpdFeatureMediaWrapper">         <img src="http://img5a.flixcart.com/image/mobile/h/k/h/sony-xperia-z2-280x210-imadvx3gg4uave2j.jpeg" class="rpdFeatureImage">        </div>        <p class="description">With an impressive IP55/IP58 rating, the Xperia Z2 is waterproof and dust resistant. You can take shots while swimming in freshwater up to 30 minutes or even dive up to 1.5 meters with this smartphone - just ensure that the covers for micro USB port, micro SIM slot, and micro SD card slot are firmly closed.</p>       </div>       <div class="clearFloat"></div>      </div>     </div>    </div>   </div>   <div class="rpdFeatureSetContainer collapsed">    <h3 class="rpdFeatureSetTitle">Performance</h3>    <div class="rpdFeatureSet">     <div class="rpdFeatureSetInner">      <ul class="rpdCalloutList">       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">2.3</span>         <span class="rpdCalloutHighlightText2">GHz</span>        </div>        <div class="subHighlight">        Quad Core       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">3</span>         <span class="rpdCalloutHighlightText2">GB</span>        </div>        <div class="subHighlight">        RAM       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">330</span>         <span class="rpdCalloutHighlightText2">Adreno</span>        </div>        <div class="subHighlight">        GPU       </div> </li>      </ul>      <div class="rpdFeatureSetBody singleFeatureLayout showLessFeatures">       <div class="rpdFeature">        <div class="rpdFeatureMediaWrapper">         <img src="http://img5a.flixcart.com/image/mobile/h/k/h/sony-xperia-z2-280x210-imadvx3gxzejy2ph.jpeg" class="rpdFeatureImage">        </div>        <p class="description">Run multiple apps simultaneously, play games smoothly, surf the web with little loading time and stream videos without a break on the Xperia Z2 featuring the all-new, ultra-powerful Qualcomm Snapdragon 801 quad core processor clocking at 2.3 GHz, 3 GB of RAM, and Adreno 330 GPU.</p>       </div>       <div class="clearFloat"></div>      </div>     </div>    </div>   </div>   <div class="rpdFeatureSetContainer collapsed">    <h3 class="rpdFeatureSetTitle">Battery - STAMINA Mode</h3>    <div class="rpdFeatureSet">     <div class="rpdFeatureSetInner">      <ul class="rpdCalloutList">       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">Good</span>         <span class="rpdCalloutHighlightText2">Battery</span>        </div>        <div class="subHighlight">        Life       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">Save</span>        </div>        <div class="subHighlight">        Power       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">No</span>         <span class="rpdCalloutHighlightText2">Battery</span>        </div>        <div class="subHighlight">        Drain       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">3200</span>         <span class="rpdCalloutHighlightText2">mAh</span>        </div>        <div class="subHighlight">        Battery       </div> </li>      </ul>      <div class="rpdFeatureSetBody singleFeatureLayout showLessFeatures">       <div class="rpdFeature">        <div class="rpdFeatureMediaWrapper">         <img src="http://img5a.flixcart.com/image/mobile/h/k/h/sony-xperia-z2-280x210-imadvx3g4prf5yfr.jpeg" class="rpdFeatureImage">        </div>        <p class="description">No more battery drain issues - the Battery STAMINA Mode automatically turns off unnecessary functions when you are not using your phone. Once you click the power button, every function starts running again. The Xperia Z2 houses a powerful 3200 mAh battery.</p>       </div>       <div class="clearFloat"></div>      </div>     </div>    </div>   </div>   <div class="rpdFeatureSetContainer collapsed">    <h3 class="rpdFeatureSetTitle">One-Touch Connectivity</h3>    <div class="rpdFeatureSet">     <div class="rpdFeatureSetInner">      <p class="description"></p>      <div class="rpdFeatureSetBody multipleFeatureLayout showLessFeatures">       <div class="rpdFeature">        <div class="rpdFeatureTitle">        One-Touch Connection       </div>        <div class="rpdFeatureMediaWrapper">         <img src="http://img5a.flixcart.com/image/mobile/k/2/g/sony-xperia-m2-dual-original-imadvjmsujcyjyhz.jpeg" class="rpdFeatureImage">        </div>        <p class="description">Enjoy handsfree calling while driving. With just one touch, connect your smartphone to your NFC-enabled car accessories and take complete control over your car''s audio functions.</p>       </div>       <div class="rpdFeature">        <div class="rpdFeatureTitle">        One-Touch Listening       </div>        <div class="rpdFeatureMediaWrapper">         <img src="http://img5a.flixcart.com/image/mobile/k/2/g/sony-xperia-m2-dual-original-imadvjmsrecfez3h.jpeg" class="rpdFeatureImage">        </div>        <p class="description">Play your smartphone''s music through a NFC-enabled wireless Sony headset or speaker using just one touch.</p>       </div>       <div class="clearFloat"></div>       <div class="rpdFeatureSet-collapsible">        <div class="rpdFeature">         <div class="rpdFeatureTitle">         One-Touch Mirroring        </div>         <div class="rpdFeatureMediaWrapper">          <img src="http://img5a.flixcart.com/image/mobile/k/2/g/sony-xperia-m2-dual-original-imadvjmvauchgh6y.jpeg" class="rpdFeatureImage">         </div>         <p class="description">Activate screen mirroring by touching your smartphone to the remote of your BRAVIA® TV and mirror your smartphone contents on the TV.</p>        </div>        <div class="rpdFeature">         <div class="rpdFeatureTitle">         One-Touch Sharing        </div>         <div class="rpdFeatureMediaWrapper">          <img src="http://img5a.flixcart.com/image/mobile/k/2/g/sony-xperia-m2-dual-original-imadvjmtesevf8wh.jpeg" class="rpdFeatureImage">         </div>         <p class="description">With a single touch, you can share music or photos between two devices or a NFC-enabled laptop.</p>        </div>        <div class="clearFloat"></div>        <div class="rpdFeature">         <div class="rpdFeatureTitle">         One-Touch Backup        </div>         <div class="rpdFeatureMediaWrapper">          <img src="http://img5a.flixcart.com/image/mobile/k/2/g/sony-xperia-m2-dual-original-imadvjmthwg7nnhj.jpeg" class="rpdFeatureImage">         </div>         <p class="description">Store all the pictures from your Xperia smartphone, tablet or camera on the Sony Personal Content Station? - a wireless hub for all your photos and videos.</p>        </div>        <div class="clearFloat"></div>       </div>       <div class="rpdFeatureSet-showAll-handle">        <span class="showAllMessage">View all 5 features</span>        <span class="showLessMessage">View less features</span>       </div>      </div>     </div>    </div>   </div>   <div class="rpdFeatureSetContainer collapsed">    <h3 class="rpdFeatureSetTitle">More Ways To Connect</h3>    <div class="rpdFeatureSet">     <div class="rpdFeatureSetInner">      <ul class="rpdCalloutList">       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">Throw</span>         <span class="rpdCalloutHighlightText2">Smart</span>        </div>        <div class="subHighlight">        Application       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">DLNA</span>         <span class="rpdCalloutHighlightText2">&amp;</span>        </div>        <div class="subHighlight">        Screen Mirror       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <img src="http://img5a.flixcart.com/image/mobile/w/k/k/sony-xperia-c-25x25-imadsx8ysykzwfxp.jpeg">        </div>        <div class="subHighlight">        Bluetooth       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <img src="http://img5a.flixcart.com/image/mobile/w/k/k/sony-xperia-c-25x25-imadsx8yjg5vujgq.jpeg">        </div>        <div class="subHighlight">        Wi-Fi       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <img src="http://img5a.flixcart.com/image/mobile/w/k/k/sony-xperia-c-25x25-imadsx8ymgcwdpaq.jpeg">        </div>        <div class="subHighlight">        Micro USB       </div> </li>      </ul>      <div class="rpdFeatureSetBody singleFeatureLayout showLessFeatures">       <div class="rpdFeature">        <div class="rpdFeatureMediaWrapper">         <img src="http://img5a.flixcart.com/image/mobile/h/k/h/sony-xperia-z2-280x210-imadvx3hqk8z9ads.jpeg" class="rpdFeatureImage">        </div>        <p class="description">Your Xperia smartphone comes with a "Throw" smart application which lets you find the best way to connect your phone to other devices. The Miracast Wireless Display technology can be used to stream your smartphone to your TV using Wi-Fi. Also, the phone offers connectivity through Bluetooth, Wi-Fi, 3G, and Micro-USB.</p>       </div>       <div class="clearFloat"></div>      </div>     </div>    </div>   </div>   <div class="rpdFeatureSetContainer collapsed">    <h3 class="rpdFeatureSetTitle">4K playback</h3>    <div class="rpdFeatureSet">     <div class="rpdFeatureSetInner">      <div class="rpdFeatureSetBody singleFeatureLayout showLessFeatures">       <div class="rpdFeature">        <div class="rpdFeatureMediaWrapper">         <img src="http://img5a.flixcart.com/image/mobile/h/k/h/sony-xperia-z2-280x210-imadvx3hnzexbzpr.jpeg" class="rpdFeatureImage">        </div>        <p class="description">The Xperia Z2 is powerful enough to play 4K video on a 4K TV through the latest MHL 3.0 connector, allowing you to enjoy your recorded 4K videos in their intended resolution.</p>       </div>       <div class="clearFloat"></div>      </div>     </div>    </div>   </div>   <div class="rpdFeatureSetContainer collapsed">    <h3 class="rpdFeatureSetTitle">Storage</h3>    <div class="rpdFeatureSet">     <div class="rpdFeatureSetInner">      <ul class="rpdCalloutList">       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">16</span>         <span class="rpdCalloutHighlightText2">GB</span>        </div>        <div class="subHighlight">        Internal Memory       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <span class="rpdCalloutHighlightText1">64</span>         <span class="rpdCalloutHighlightText2">GB</span>        </div>        <div class="subHighlight">        Expandable       </div> </li>      </ul>      <div class="rpdFeatureSetBody singleFeatureLayout showLessFeatures">       <div class="rpdFeature">        <p class="description">The Xperia Z2 come with an internal flash memory up to 16 GB - this internal memory comprises approximately 4 GB firmware, plus 12 GB of Internal storage for music, pictures and films, downloaded applications and their data. You can expand the memory up to 64 GB via an external micro SD card.</p>       </div>       <div class="clearFloat"></div>      </div>     </div>    </div>   </div>   <div class="rpdFeatureSetContainer collapsed">    <h3 class="rpdFeatureSetTitle">Sensors</h3>    <div class="rpdFeatureSet">     <div class="rpdFeatureSetInner">      <ul class="rpdCalloutList">       <li class="rpdCallout">        <div class="highlight">         <img src="http://img5a.flixcart.com/image/mobile/w/k/k/sony-xperia-c-25x25-imadsx8yavpgvrn5.jpeg">        </div>        <div class="subHighlight">        Light Sensor       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <img src="http://img5a.flixcart.com/image/mobile/w/k/k/sony-xperia-c-25x25-imadsx8yfzkgrjew.jpeg">        </div>        <div class="subHighlight">        Accelerometer       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <img src="http://img5a.flixcart.com/image/mobile/w/k/k/sony-xperia-c-25x25-imadsx8c3ef68nf5.jpeg">        </div>        <div class="subHighlight">        Proximity Sensor       </div> </li>       <li class="rpdCallout">        <div class="highlight">         <img src="http://img5a.flixcart.com/image/mobile/w/k/k/sony-xperia-c-original-imadsx8chyszhrk3.jpeg">        </div>        <div class="subHighlight">        E-Compass       </div> </li>      </ul>      <div class="rpdFeatureSetBody singleFeatureLayout showLessFeatures">       <div class="rpdFeature">        <p class="description">The Xperia Z2 comes with the following sensors - Ambient Light Sensor, Gyroscope, Proximity Sensor, Significant Motion Detector, Barometer Sensor, Step Detector, eCompass, Accelerometer, Magnetometer, Game Rotation Vector, Geomagnetic Rotation Vector, and a Step Counter.</p>       </div>       <div class="clearFloat"></div>      </div>     </div>    </div>   </div>  </div> </div>', '<iframe width="560" height="315" src="https://www.youtube.com/embed/VZ9HkICDuOI" frameborder="0" allowfullscreen></iframe>', 0, 1427099393);

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE IF NOT EXISTS `product_details` (
`id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `affiliate_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mrp` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount` int(11) NOT NULL,
  `rating` float NOT NULL,
  `rating_people` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `store_id`, `affiliate_url`, `mrp`, `price`, `discount`, `rating`, `rating_people`) VALUES
(1, 1, 1, 'http://dl.flipkart.com/dl/sony-xperia-z2/p/itmefjdaaajrcyes?pid=MOBDVW6SVHFYDHKH&srno=t_1&query=xperia+z2&affid=roddambal', '0.00', '32825.00', 0, 4, 404),
(2, 1, 2, 'http://www.amazon.in/exec/obidos/ASIN/B00NPTLX0Y/bigbusco-21', '39199.00', '37799.00', 4, 3.7, 15),
(3, 1, 3, 'http://www.snapdeal.com/product/sony-xperia-z2-black/1788644000?utm_source=aff_prog&utm_campaign=afts&offer_id=17&aff_id=38830', '39999.00', '32434.00', 19, 4.3, 136),
(4, 1, 4, 'http://www.infibeam.com/Mobiles/sony-xperia-z2/P-mobi-54208932491-cat-z.html?trackId=kbal', '44990.00', '33149.00', 26, 4, 19),
(5, 2, 1, 'http://dl.flipkart.com/dl/moto-g-2nd-gen/p/itme5z8n9mt77ajr?pid=MOBDYGZ6SHNB7RFC&srno=b_1&affid=roddambal', '0.00', '12999.00', 0, 4.2, 24534),
(6, 2, 2, 'http://www.amazon.in/exec/obidos/ASIN/B00IMF5D7A/bigbusco-21', '0.00', '90.00', 0, 4, 15);

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE IF NOT EXISTS `product_reviews` (
`review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `reviewer_name` varchar(255) NOT NULL,
  `review_title` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `rating` tinyint(4) NOT NULL,
  `posted` int(11) NOT NULL,
  `verified` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE IF NOT EXISTS `product_type` (
`id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=80 ;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `sub_category_id`, `name`, `url`, `description`, `status`) VALUES
(1, 3, 'Mobile Cases & Cover', 'mobile-cases-and-cover', '', 0),
(2, 3, 'Mobile Chargers', 'mobile-chargers', '', 0),
(3, 3, 'Mobile Power Banks', 'mobile-power-banks', '', 0),
(4, 3, 'Mobile Bluetooth Headsets', 'mobile-bluetooth-headsets', '', 0),
(5, 3, 'Mobile Headphones', 'mobile-headphones', '', 0),
(6, 3, 'Mobile Battries', 'mobile-battries', '', 0),
(7, 3, 'Mobile Memory Cards', 'mobile-memory-cards', '', 0),
(8, 3, 'Mobile Screen Protector', 'mobile-screen-protector', '', 0),
(9, 5, 'Computer Keyboards', 'computer-keyboards', '', 0),
(10, 5, 'Computer Mouse', 'computer-mouse', '', 0),
(11, 5, 'Computer Hard Disk', 'computer-hard-disk', '', 0),
(12, 5, 'Computer Processors', 'computer-processors', '', 0),
(13, 5, 'Computer Speakers', 'computer-speakers', '', 0),
(14, 5, 'Computer Headphones', 'computer-headphones', '', 0),
(15, 5, 'Computer Printers', 'computer-printers', '', 0),
(16, 5, 'Computer Networking Devices', 'computer-networking-devices', '', 0),
(17, 6, 'LCD Televisions', 'lcd-televisions', '', 0),
(18, 6, 'LED Televisions', 'led-televisions', '', 0),
(19, 6, 'Smart Televisions', 'smart-televisions', '', 0),
(20, 6, '4K Televisions', '4k-televisions', '', 0),
(21, 7, 'Point & Shoot Cameras', 'point-and-shoot-cameras', '', 0),
(22, 7, 'DSLR Cameras', 'dslr-cameras', '', 0),
(23, 7, 'Camcoder Cameras', 'camcoder-cameras', '', 0),
(24, 8, 'Refrigerators', 'refrigerators', '', 0),
(25, 8, 'Air Conditioners', 'air-conditioners', '', 0),
(26, 8, 'Washing Machine', 'washing-machine', '', 0),
(27, 8, 'Vacuum Cleaners', 'vacuum-cleaners', '', 0),
(28, 9, 'Electric Cookers', 'electric-cookers', '', 0),
(29, 9, 'Induction Cooktops', 'induction-cooktops', '', 0),
(30, 9, 'Juicer/Mixer/Grinders', 'juicer-mixer-grinders', '', 0),
(31, 9, 'JMicrowave Ovens', 'jmicrowave-ovens', '', 0),
(32, 9, 'Food Processors', 'food-processors', '', 0),
(33, 10, 'Water Purifiers', 'water-purifiers', '', 0),
(34, 10, 'Iron Appliances', 'iron-appliances', '', 0),
(35, 10, 'Room Heaters', 'room-heaters', '', 0),
(36, 10, 'Coffee Makers', 'coffee-makers', '', 0),
(37, 10, 'Inverters', 'inverters', '', 0),
(38, 11, 'Men Jeans', 'men-jeans', '', 0),
(39, 11, 'Men Polos & Tees', 'men-polos-and-tees', '', 0),
(40, 11, 'Men Shirts', 'men-shirts', '', 0),
(41, 11, 'Men Trousers', 'men-trousers', '', 0),
(42, 11, 'Men Suits & Blazers', 'men-suits-and-blazers', '', 0),
(43, 11, 'Men Winterwear', 'men-winterwear', '', 0),
(44, 11, 'Men Cargos', 'men-cargos', '', 0),
(45, 11, 'Men Shorts', 'men-shorts', '', 0),
(46, 11, 'Men Sweatshirts', 'men-sweatshirts', '', 0),
(47, 12, 'Men Casual Shoes', 'men-casual-shoes', '', 0),
(48, 12, 'Men Formal Shoes', 'men-formal-shoes', '', 0),
(49, 12, 'Men Sports Shoes', 'men-sports-shoes', '', 0),
(50, 12, 'Men Sandals & Floaters', 'men-sandals-and-floaters', '', 0),
(51, 12, 'Men Slippers & Flip Flops', 'men-slippers-and-flip-flops', '', 0),
(52, 12, 'Men Loafers', 'men-loafers', '', 0),
(53, 13, 'Men Analog', 'men-analog', '', 0),
(54, 13, 'Men Chronograph', 'men-chronograph', '', 0),
(55, 13, 'Men Digital', 'men-digital', '', 0),
(56, 14, 'Men Sun Glasses', 'men-sun-glasses', '', 0),
(57, 14, 'Men Wallets', 'men-wallets', '', 0),
(58, 14, 'Men Bags & Backpacks', 'men-bags-and-backpacks', '', 0),
(59, 14, 'Men Belts, Ties & Cufflinks', 'men-belts-ties-and-cufflinks', '', 0),
(60, 14, 'Men Jewellery', 'men-jewellery', '', 0),
(61, 15, 'Women Jeans', 'women-jeans', '', 0),
(62, 15, 'Women Tops & Tees', 'women-tops-and-tees', '', 0),
(63, 15, 'Women Dresses', 'women-dresses', '', 0),
(64, 15, 'Women Shorts & Skirts', 'women-shorts-and-skirts', '', 0),
(65, 15, 'Women Leggings & Capris', 'women-leggings-and-capris', '', 0),
(66, 15, 'Women Ethnic Wear', 'women-ethnic-wear', '', 0),
(67, 15, 'Women Sweaters & Sweatshirts', 'women-sweaters-and-sweatshirts', '', 0),
(68, 16, 'Women Sandals', 'women-sandals', '', 0),
(69, 16, 'Women Flats', 'women-flats', '', 0),
(70, 16, 'Women Bellies', 'women-bellies', '', 0),
(71, 16, 'Women Wedges', 'women-wedges', '', 0),
(72, 16, 'Women Slippers & Flip Flops', 'women-slippers-and-flip-flops', '', 0),
(73, 16, 'Women Heels', 'women-heels', '', 0),
(74, 17, 'Women Analog', 'women-analog', '', 0),
(75, 17, 'Women Chronograph', 'women-chronograph', '', 0),
(76, 17, 'Women Digital', 'women-digital', '', 0),
(77, 18, 'Women Sun Glasses', 'women-sun-glasses', '', 0),
(78, 18, 'Women Bags & Wallets', 'women-bags-and-wallets', '', 0),
(79, 18, 'Women Jewellery', 'women-jewellery', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
`profile_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`profile_id`, `user_id`, `photo`, `gender`, `phone`) VALUES
(1, 10, '', 'Male', '348959834'),
(2, 11, '', 'Male', '');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE IF NOT EXISTS `stores` (
`id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `name`, `key`) VALUES
(1, 'Flipkart', 'roddambal'),
(2, 'Amazon', 'bigbusco-21'),
(3, 'Snapdeal', '?utm_source=aff_prog&utm_campaign=afts&offer_id=17&aff_id=38830'),
(4, 'Infibeam', 'kbal');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE IF NOT EXISTS `sub_categories` (
`id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `url`, `description`, `status`) VALUES
(1, 1, 'Mobiles', 'mobiles', '', 0),
(2, 1, 'Tablets', 'tablets', '', 0),
(3, 1, 'Mobile Accessories', 'mobile-accessories', '', 0),
(4, 2, 'Laptops', 'laptops', '', 0),
(5, 2, 'Computer Accessories', 'computer-accessories', '', 0),
(6, 3, 'Televisions', 'televisions', '', 0),
(7, 3, 'Cameras', 'cameras', '', 0),
(8, 4, 'Home Appliances', 'home-appliances', '', 0),
(9, 4, 'Kitchen Appliances', 'kitchen-appliances', '', 0),
(10, 4, 'Other Appliances', 'other-appliances', '', 0),
(11, 5, 'Men Clothing', 'men-clothing', '', 0),
(12, 5, 'Men Footwear', 'men-footwear', '', 0),
(13, 5, 'Men Watches', 'men-watches', '', 0),
(14, 5, 'Men Accessories', 'men-accessories', '', 0),
(15, 6, 'Women Clothing', 'women-clothing', '', 0),
(16, 6, 'Women Footwear', 'women-footwear', '', 0),
(17, 6, 'Women Watches', 'women-watches', '', 0),
(18, 6, 'Women Accessories', 'women-accessories', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `social_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `provider` enum('Own','Google','Facebook') NOT NULL,
  `role` enum('SuperAdmin','Admin','ContentWriter','Customer') NOT NULL,
  `present` int(11) NOT NULL,
  `past` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `social_id`, `name`, `email`, `password`, `provider`, `role`, `present`, `past`) VALUES
(3, 0, 'Irfan Ali', 'irfan@appture.com', 'irfan', 'Own', 'SuperAdmin', 1427102027, 1427088301),
(10, 0, 'test', 'test@gmail.com', 'test', 'Own', 'Customer', 1427106381, 1427099385),
(11, 2147483647, 'Mirza Irfan Ali', 'irfanhydar@gmail.com', 'd8b5c1', 'Facebook', 'Customer', 1427108703, 1427108424);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
`wishlist_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affiliate_tracking`
--
ALTER TABLE `affiliate_tracking`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alert_users`
--
ALTER TABLE `alert_users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letter`
--
ALTER TABLE `news_letter`
 ADD PRIMARY KEY (`letter_id`);

--
-- Indexes for table `news_letter_users`
--
ALTER TABLE `news_letter_users`
 ADD PRIMARY KEY (`news_letter_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
 ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
 ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
 ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `affiliate_tracking`
--
ALTER TABLE `affiliate_tracking`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `alert_users`
--
ALTER TABLE `alert_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `news_letter`
--
ALTER TABLE `news_letter`
MODIFY `letter_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news_letter_users`
--
ALTER TABLE `news_letter_users`
MODIFY `news_letter_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
