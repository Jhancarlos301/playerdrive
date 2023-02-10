<?php

$url = $_GET['url'];
$name = $_GET['name'];
$format =  $_GET['format'];
$setname ="true";

if($setname === "true"){
header("Content-Disposition: attachment; filename=$name"); 
readfile("$url");
} else if($setname === "false"){
header("Content-type: $format");
$formatDefault = "video/mp4";
header("Content-Disposition: inline; filename=$name"); 
!isset($format) && $format = "$formatDefault";
readfile("$url");
} else if(!readfile("$url")){
echo "<script type='text/javascript'>alert('Unsupported File Source!');</script>";
echo "<script type='text/javascript'> document.location = '../index.php'; </script>";
}


?>