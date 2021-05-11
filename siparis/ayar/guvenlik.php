<?php

function rakam($x){
$islem = preg_replace("/[^0-9]/", "", $x);
$sonuc = $islem;
return $sonuc;
}

function filtre($x){
	$bosluksil = trim($x);
	$taglaritemizle =strip_tags($bosluksil);
	$etkisizyap = htmlspecialchars($taglaritemizle);
	$sontemizlik = rakam($etkisizyap);
	$sonuc = $sontemizlik;
	return $sonuc;
}
function guvenlik($Deger){
	$BoslukSil = trim($Deger);
	$TaglariTemizle = strip_tags($BoslukSil);
	$EtkisizYap = htmlspecialchars($TaglariTemizle);
	$sonuc = $EtkisizYap;
	return $sonuc;
}
function turn($x){
	$BoslukSil = trim($x);
	$TaglariTemizle = strip_tags($BoslukSil);
	$EtkisizYap = htmlspecialchars($TaglariTemizle);
	$GeriDondur =htmlspecialchars_decode($EtkisizYap, ENT_QUOTES);
	$sonuc =$GeriDondur;
	return $sonuc;
}



?>