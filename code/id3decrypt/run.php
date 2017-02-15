
<?php 
// include getID3() library (can be in a different directory if full path is specified)
require_once('getid3/getid3.php');
// Initialize getID3 engine
$getID3 = new getID3;
// Analyze file and store returned data in $ThisFileInfo
$ThisFileInfo = $getID3->analyze("sal.mp3");
/*
 Optional: copies data from all subarrays of [tags] into [comments] so
 metadata is all available in one location for all tag formats
 metainformation is always available under [tags] even if this is not called
*/
echo $ThisFileInfo['tags']['id3v2']['title'][0];
echo $ThisFileInfo['tags']['id3v2']['artist'][0];


 ?>
