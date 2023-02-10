<?php
error_reporting(0);

$url = $_GET['url'];
$name = $_GET['name'];
$format =  $_GET['format'];
$setname ="false";

if($setname === "true"){
header("Content-Disposition: attachment; filename=$name"); 
readfile("$url");
} else if($setname === "false"){
header("Content-type: $format");
$formatDefault = "video/mp4";
header("Content-Disposition: inline; filename=$name"); 
!isset($format) && $format = "$formatDefault";
readfile("$url");
} 

?>