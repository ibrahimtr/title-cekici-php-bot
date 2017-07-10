<?php 
$site=file_get_contents("http://www.google.com");
preg_match_all('@<title>(.*?)</title>@si',$site,$baslik);
echo $baslik[0][0];
echo '<br>Sitenizin Basligina Bakin :)';
?>
