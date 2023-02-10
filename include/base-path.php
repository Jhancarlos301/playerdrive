<?php

 $GetDomain_full_URL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
 //echo("$GetDomain_full_URL");
 
 $GetDomainURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; 

//URL String Replace
$url = "$GetDomain_full_URL";
//URL String Replace
$search = array("$GetDomainURL", "index.php");
$replace = array("", "");
$string = "$url";
//replace
$Converted = (str_replace($search, $replace, $string));
// result ID
$path = $Converted;
$basepath = "$path";

$myfile = fopen("include/my_base_path.txt", "w") or die("Unable to open file!");
$txt = "$basepath";
fwrite($myfile, $txt);
fclose($myfile);

?>