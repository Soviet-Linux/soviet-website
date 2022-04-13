<?php
// directory we use - FIX THIS USING __DIR__??
$dir="./images";
// Initialize filecount variable
$filecount=0;
// count the files
$files=glob($dir."/*.jpg");
// randomize
$bgi=array_rand($files,5);
// individual file names
// needs a safety check to make sure the # of files exists
$bg_image_1=$files[$bgi[0]];
$bg_image_2=$files[$bgi[1]];
$bg_image_3=$files[$bgi[2]];
?>
