<?php
error_reporting(0);

// Define BasePath
$basepath = "$basepath";

// Define "download.php" File full path
$DownloaderPath = "$GetDomainURL$basepath"."include/download.php";

// Define "playback.php" File full path
$PlaybackPath = "include/playback.php";


//GET file_URL-
$file_URL = $_GET['file_URL'];

//URL String Replace (to support all Google Drive URL's
$search1 = array("https://drive.google.com/file/d/", "/view?usp=drivesdk", "/view", "/preview");
$replace1 = array("https://drive.google.com/uc?export=download&confirm=yTib&id=", "", "", "");
$string1 = "$file_URL";
//replace
$Converted1 = (str_replace($search1, $replace1, $string1));
//Converted URL
$file_URL = $Converted1;

// GET file_Name
$file_Name = $_GET['file_Name'];

// GET file_Format
$file_Format = $_GET['file_Format'];


// Download Form Configuration
$DownloaderPath = "$DownloaderPath";

$Form_attribute1 = "?url=";
$Form_value1 = "$file_URL";
$Form_value1 = urlencode("$Form_value1");

$Form_attribute2 = "&name=";
$Form_value2 ="$file_Name";
$Form_value2 = urlencode("$Form_value2");

$Form_attribute3 = "&format=";
$Form_value3 ="$file_Format";
$Form_value3 = urlencode("$Form_value3");

$Form_ConvertedURL = "$DownloaderPath$Form_attribute1$Form_value1$Form_attribute2$Form_value2$Form_attribute3$Form_value3";
 
$Download_action = "$Form_ConvertedURL";

//Download File Link-URL
$Download_URL = "$Download_action";


// Playback Path Configuration
$PlaybackPath = "$PlaybackPath";

$Form_ConvertedURL2 = "$PlaybackPath$Form_attribute1$Form_value1$Form_attribute2$Form_value2$Form_attribute3$Form_value3";

$Playback_action = "$Form_ConvertedURL2";

//Playback File Full-URL
$Playback_URL = $Playback_action;


// Default Iframe Page Set if variable is empty
if (empty($file_URL)) {
  $Playback_URL = "include/default-iframe-page.php";
}else if (isset($file_URL)) {
$Playback_URL = $Playback_action;
}


?>
