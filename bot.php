<?php 


$icerik = file_get_contents("//www.phpr.org");
$baslik = ara("<title>", "</title>", $icerik);
echo $baslik[0];


?>
