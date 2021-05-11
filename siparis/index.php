<?php
include("ayar/ayar.php");
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>RANDOM CAFE SİPARİŞ SİSTEMİ</title>
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<div id="logo"><span><span id="mental">MentalKod</span><span id="sipa">Sipariş</span></span>&nbsp <span id="tanit">Online Sipariş Sistemi</span></div>
<div id="container">
<div id="up">
	<?php include('dil.php');?>
	<a id="kulgir" href="login.php" target="_blank">Kullanıcı Girişi</a>
	<h2>YİYECEKLER</h2>
	<div class="product">
		
		<?php
	
			$yemeksec="SELECT * FROM yemekler";
			$yemek=mysqli_query($con,$yemeksec);
			while($runyemek=mysqli_fetch_array($yemek))
			{
				$yemek_isim=guvenlik($runyemek['yemek_isim']);
				$yemek_resim=guvenlik($runyemek['yemek_resim']);
				$yemek_fiyat=guvenlik($runyemek['yemek_fiyat']);
			

		?>
		<div class="foodsdrinks">

			<div class="names">
				<span class="fooddrinksnames"><?php echo $yemek_isim;?> </span>
			</div>
			<div class="resim">
				<img class="images" src="resimler/<?php echo $yemek_resim;?>">
			</div>
			<div class="prices">
				<span class="price"><?php echo $yemek_fiyat;?></span>&nbsp<span class="price">TL</span>
			</div>

		</div>

		<?php } ?>

	</div>


<!-- İÇECEKLER--><!-- İÇECEKLER--><!-- İÇECEKLER--><!-- İÇECEKLER--><!-- İÇECEKLER--><!-- İÇECEKLER-->

	<h2>İÇECEKLER</h2>
	<div class="product">
		
		<?php
	
			$iceceksec="SELECT * FROM icecekler";
			$icecek=mysqli_query($con,$iceceksec);
			while($runicecek=mysqli_fetch_array($icecek))
			{
				$icecek_isim=guvenlik($runicecek['icecek_isim']);
				$icecek_resim=guvenlik($runicecek['icecek_resim']);
				$icecek_fiyat=guvenlik($runicecek['icecek_fiyat']);
			

		?>
		<div class="foodsdrinks">
			<div class="names">
				<span class="fooddrinksnames"><?php echo $icecek_isim; ?></span>
			</div>
			<div class="resim">
				<img class="images" src="resimler/<?php echo $icecek_resim; ?>">
			</div>
			<div class="prices">
				<span  class="price"><?php echo $icecek_fiyat; ?></span>&nbsp<span class="price">TL</span>
			</div>
		</div>
	<?php } ?>
	</div>
</div>

<!-- İÇECEKLER--><!-- İÇECEKLER--><!-- İÇECEKLER--><!-- İÇECEKLER--><!-- İÇECEKLER--><!-- İÇECEKLER-->

	<div id="info">
		<button id="azal">Siparişlerinizi Aşağı Bölüme Yazınız</button>
		<form action="index.php" method="post">
			<textarea placeholder="Değerli Müşterilerimiz, Bu Bölümden Bizlere Her Türlü İstek Şikayet Ve Sipariş Bildirimlerinizi Gönderebilirsiniz, Afiyet Olsun.." name="mesaj" id="ftablo"></textarea>
			<input type="text" placeholder="Adı Soyadı" name="ad">
			<input type="text" placeholder="Telefon" name="tel">
			<input type="text" placeholder="Adres" name="adres">
			<input type="text" placeholder="Ödeme Yöntemi (POS veya NAKİT Yazınız)" name="ode">
			<input onclick="si()" id="sip" type="submit" value="Gönder" name="gonder">
		</form>
	</div>

</div>

<script type="text/javascript">
	function si(){
		alert('Siparişiniz Gönderilmiştir.Afiyet Olsun..');
	}
</script>
</body>
</html>
<?php
mysqli_close($con);

?>