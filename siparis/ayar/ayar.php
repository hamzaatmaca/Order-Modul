<?php
date_default_timezone_set('Europe/Istanbul');
include("guvenlik.php");
$con=mysqli_connect("localhost","root","","siparis");
$con -> set_charset("utf8");
if($con){
	/*echo "evet";*/
}else{
	echo "Bağlantı Hatası Mevcut";
}

if(isset($_POST['gonder'])){
	$mesaj=guvenlik($_POST['mesaj']);
	$ad=guvenlik($_POST['ad']);
	$tel=guvenlik($_POST['tel']);
	$adres=guvenlik($_POST['adres']);
	$ode=guvenlik($_POST['ode']);
	$zaman=date('d.m.Y H:i:s');

	$insert_siparis ="insert into gelen(gelen_mesaj,gelen_ad,gelen_telefon,gelen_adres,gelen_odeme,gelen_zaman) values ('".addslashes($mesaj)."','".addslashes($ad)."','".addslashes($tel)."','".addslashes($adres)."','".addslashes($ode)."','$zaman')";
	$insert_sip = mysqli_query($con,$insert_siparis);
	if($insert_sip){
			header('location:index.php');
		}
		else{
			echo "<script>alert('Bir Hata Oluştu')</script>";
			
		}
}




?>