# Php Site Başlığı Çeken Bot


Merhaba  ! Bu bot sayesinde istediğiniz websitenin başlığını çekebilirsiniz .Veya bu botu geliştirip kendi yazılımlarınızda kullanabilirsiniz :)



<?php 
$site=file_get_contents("http://www.google.com");
preg_match_all('@<title>(.*?)</title>@si',$site,$baslik);
echo $baslik[0][0];
echo '<br>Sitenizin Basligina Bakin :)';
?>

http://www.google.com adresi yerine istediğiniz site adresini yazabilirsiniz.
