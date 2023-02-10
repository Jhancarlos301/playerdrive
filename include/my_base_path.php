<?php
// get base path function
function get_base_path($base_txt_file_path){
$FileName = "$base_txt_file_path";
$ModeR = "r";
$data = fopen("$FileName", "$ModeR"); 
$ReadFile = fread($data, filesize($FileName));
$basepath = "$ReadFile";
return($basepath);
}

    // Usage
/*
  $base_txt_file_path = "./my_base_path.txt";
  $my_base_path = get_base_path($base_txt_file_path);
  $basepath = "$my_base_path";
*/

?>    