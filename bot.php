<?php 


$icerik = file_get_contents("http://www.google.com");
$baslik = ara("<title>", "</title>", $icerik);
echo $baslik[0];


?>
