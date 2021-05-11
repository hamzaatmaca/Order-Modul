<?php
session_start();
include('ayar/ayar.php');
if(isset($_POST['login'])){
	$pass = guvenlik(addslashes($_POST['password']));
	$sel_user = "select * from sifre where sifre='$pass'";
	$run_user = mysqli_query($con, $sel_user);
	$check_user = mysqli_num_rows($run_user);

	if($check_user == 0)
	{	
		echo "<script>alert('Hatalı Şifre Girdiniz')</script>";
		echo "<script>window.open('login.php','_self')</script>";
		
	}

	else if($check_user > 0){
		$_SESSION['sifre']='yonetici';
		header('location:x4o56rtyw.php');
		
	}
}

?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>RANDOM CAFE SİPARİŞ SİSTEMİ</title>
<style type="text/css">
	body{
		margin:0;
		padding:0;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;

	}
	.login{
		margin-top: 150px;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
		text-align: center;

	}
	
	h2,#geri{
		color: red;
		text-align: center;
		font-family: arial;
		text-decoration: none;
	}
	#siparisgiris{
		width: 100%;
		border: none;
		outline: none;
		cursor: pointer;
		transition: .3s;
		background: red;
		color:yellow;
		height: 25px;
		border-radius: 100px;
		font-family: arial;
		letter-spacing: 2px;
	}
	#siparisgiris:hover{
		background: green;
		color: white;
	}
	.login form{
		width: 70%;
	}
	.login input{
		border-radius: 100px;
		width: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
		width: 100%;
		height: 30px;
		border: none;
		outline: none;
		box-shadow: 0 0 1px red,inset 0 0 3px red;
		text-align: center;
		color: black
	}
	.login input:hover{
		box-shadow:   0 0 5px red,inset 0 0 5px red;
	}
</style>
</head>
<body>
<div class="login">
	<h2>Sipariş Modülü Yönetici Girişi</h2>
	<a style="margin-bottom: 10px;" id="geri" href="index.php">Anasayfaya Git</a>
    <form method="post" action="login.php">
        <input id="sifreyaz"  type="password" name="password" placeholder="Şifre" required="required" /><br><br>
        <button id="siparisgiris" type="submit"  name="login">Giriş Yap</button>
    </form>
</div>
<script type="text/javascript">
</script>
</body>
</html>
