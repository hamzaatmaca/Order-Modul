<?php
session_start();
date_default_timezone_set('Europe/Istanbul');
include('ayar/ayar.php');
if(!isset($_SESSION['sifre'])){
	echo "<script>window.open('login.php','_self')</script>";
	exit();
}else{
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html charset= UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RANDOM CAFE ADMİN PANELİ</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
	<div id="container">
		<div id="siparisler">
		<div id="sbildirim">

			<h2>Sipariş Listesi</h2>
			<?php
			$veri ="SELECT * FROM gelen ORDER BY gelen_id DESC";
			$vericek=mysqli_query($con,$veri);
			while ($cek=mysqli_fetch_array($vericek)) {
				$id=$cek['gelen_id'];
				$ad=guvenlik($cek['gelen_ad']);
				$tel=guvenlik($cek['gelen_telefon']);
				$ode=guvenlik($cek['gelen_odeme']);
				$adres=guvenlik($cek['gelen_adres']);
				$mesaj=guvenlik($cek['gelen_mesaj']);
				$gon=guvenlik($cek['gelen_gon']);
				$tes=guvenlik($cek['gelen_tes']);
				$zaman=$cek['gelen_zaman'];
				

				?>	
			<div class="print">
			<button class="btns" onclick="window.print()">Yazdır</button>
			<span class="orderinfo">Müşteri Sipariş Bilgisi</span>
			<div class="in">
			<?php echo"<div class='g'>$gon&nbsp</div>"?>
			<?php echo"<div class='t'>$tes&nbsp</div>"?>
			<div class='n'>No: <?php echo $id;?></div>
			</div>
			<span class="orderinfo">Sipariş Tarihi</span><div class="in"><?php echo $zaman;?></div>
			<span class="orderinfo">Adı-Soyadı</span><div class="in"><?php echo $ad;?></div>
			<span class="orderinfo">Telefonu</span><div class="in"><?php echo $tel;?></div>
			<span class="orderinfo">Ödeme Şekli</span><div class="in" ><?php echo $ode;?></div>
			<span class="orderinfo">Adresi</span><div class="mesaj">
				<a class="butonbag" href="x4o56rtyw.php?xykl3mipl5k20&harita=<?php echo $adres;?>"><?php echo $adres;?></a>
			</div>
			<span class="orderinfo">Yemek Sipariş Listesi</span><div class="sipariss"><?php echo $mesaj;?></div>
			<div class="btns">
			<a class="btns" href="buton.php?gon=<?php echo $id;?>">GÖNDER</a>
			<a class="btns" href="buton.php?tes=<?php echo $id;?>">TESLİM</a>
			<a class="btns" href="buton.php?sil=<?php echo $id;?>">SİL</a>
			</div>
			</div>
			<br><br><br>
			<hr>
			<br><br><br>

			

		<?php } ?>
		</div>
		<button id="tablosifirla" onclick="x()" >Sipariş Listesini Sıfırla</button>
		<button id="yok" ><a class="butonbag" href="buton.php?yoket">Tüm Siparişleri Sıfırla</a></button>
		<button id="sifresifirla" onclick="y()">Yönetici Şifre İşlemi</button>
		<button class="asayfa"><a id="anasayfadon" href="index.php" target="_blank"> Anasayfaya Git</a></button>
		<button id="doviz" class="asayfa"><a id="anasayfadon"> Hesap Makinesi</a></button>
		<form id="sifreform" action="buton.php" method="post">
		<input id="enterpsw" type="text" placeholder="Yeni Şifrenizi Giriniz" name="entr">
		<button id="onayla" name="okey">Şifreyi Değiştir</button>
		</form>
		</div>
		
		<audio id="muzik">
		<source src="muzik.mp3">
		</audio>
		<script>
			/*
			var print = document.querySelectorAll('.print');
			var ses = document.getElementById('muzik');
			print.forEach(cal=>{
				cal.addEventListener("",()=>{
					ses.play();
				});
			});
		</script>
			<div id="harita">
			<span style="color:yellow;background: red; border-radius: 4px;"><a style="text-decoration: none; color: yellow;" href="logout.php">ÇIKIŞ YAP</a></span>
			<iframe style="margin-bottom: 10px; margin-top: 10px;"
			  width="350"
			  height="260"
			  style="border:0"
			  loading="lazy"
			  allowfullscreen
			  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBVIkpMaTL_7TLOOTWUnZhZHzTQzZAx43Y
			  &q=<?php 
			  if(isset($_GET['harita'])){
			   		echo $_GET['harita'];
			   }
			   else{
			   	echo 'didim belediyesi';
			   }
			    ?>">
				</iframe>
			<div id="kayitliurun">
				<h3 style="color:yellow">YEMEK VE TATLILAR</h3>
				<div id="kayitliyemek">
					
				<?php
					$yiyecek="select * from yemekler";
					$yemeklerial=mysqli_query($con,$yiyecek);
					while ($yi=mysqli_fetch_array($yemeklerial)) {
						$yemek_id=$yi['yemek_id'];
						$yemek_isim=$yi['yemek_isim'];
						$yemek_resim=$yi['yemek_resim'];
						$yemek_fiyat=$yi['yemek_fiyat'];
				?>

				<div class="foodsdrinks">
					<div class="names">
						
						<span class="fooddrinksnames"><?php echo $yemek_isim; ?></span>
					</div>
					<div class="resim">
						<img class="images" src="resimler/<?php echo $yemek_resim; ?>">
					</div>
					<div class="prices">
						<span class="price"><?php echo $yemek_fiyat; ?></span>&nbsp<span class="price">TL</span>
					</div>
					<a class="delete" href="buton.php?deleteyemek=<?php echo $yemek_id;?>"><span id="fooddrinksnam">Sil</span></a>
				</div>
			
		<?php }?>
			</div>
			<h3 style="color:yellow">İÇECEKLER</h3>
			<div id="kayitliicecek">
				
				<?php
					$icecek="select * from icecekler";
					$icecekial=mysqli_query($con,$icecek);
					while ($i=mysqli_fetch_array($icecekial)) {
						$icecek_id=$i['icecek_id'];
						$icecek_isim=$i['icecek_isim'];
						$icecek_resim=$i['icecek_resim'];
						$icecek_fiyat=$i['icecek_fiyat'];
				?>

				<div class="foodsdrinks">
					<div class="names">
						<span class="fooddrinksnames"><?php echo $icecek_isim; ?></span>
					</div>
					<div class="resim">
						<img class="images" src="resimler/<?php echo $icecek_resim; ?>">
					</div>
					<div class="prices">
						<span class="price"><?php echo $icecek_fiyat; ?></span>&nbsp<span class="price">TL</span>

					</div>
					<a class="delete" href="buton.php?delete=<?php echo $icecek_id;?>"><span id="fooddrinksna">Sil</span></a>
				</div>
			
				<?php }?>
			</div>
		</div>
			</div>

			
	</div>
	
	<span style="width:100% ;font-weight: bolder; font-size: 20px;letter-spacing: 4px;color: yellow;display: flex;justify-content: center;align-items: center; background: rgba(255,0,0,0.8);text-align: center; height: 40px;">ÜRÜN EKLE</span>
	

	<div id="yemekekle">
		<form action="buton.php" method="post" enctype="multipart/form-data">
			<input type="text" placeholder="Yemek İsmi Giriniz" name="yemekisim">
			<input type="file" name="yemekresim">
			<input type="text" name="yemekfiyat" placeholder="Yemek Fiyatı Giriniz">
			<input class="sub" type="submit" name="yekle" value="Yemek Ekle">
		</form>

		<form action="buton.php" method="post" enctype="multipart/form-data">
			<input type="text" name="iisim" placeholder="İçecek İsmi Giriniz">
			<input type="file" name="iresim">
			<input type="text" name="ifiyat" placeholder="İçecek Fiyatı Giriniz">
			<input class="sub" type="submit" name="iekle" value="İçecek Ekle">
		</form>
	</div>
<script type="text/javascript">
setTimeout(function(){

 window.location.reload(1);
}, 60000);


var sifresifirla=document.getElementById('sifresifirla');
var enterpsw = document.getElementById('enterpsw');
var onayla = document.getElementById('onayla');
var yok = document.getElementById('yok');
var sifir = document.getElementById('tablosifirla');
yok.style.display="none";
enterpsw.style.display="none";
onayla.style.display="none";
var pass;
var pass2;


function x(){
	pass = prompt("Şifrenizi Giriniz :");

if (pass != "") 
{
    if (pass == "123") 
    {
        
		alert('Dikkat Tüm Siparişler Sıfırlanacaktır.Lütfen Kontrol Ediniz');
		yok.style.display="block";
		sifir.style.display="none";
		
    }
    else
    {
        alert(" Giriş Yetkiniz Yok."); 
    }
}
else 
{
alert("BOŞ DEĞER GİRİLEMEZ");
}
}
function y(){
	pass2 = prompt("Şifrenizi Giriniz :");

if (pass2 != "") 
{
    if (pass2 == "123") 
    {
        
		alert('Şifreniz Değiştirmek Üzeresiniz. Değiştirdiğiniz Şifreyi Mutlaka Not Alınız');
		enterpsw.style.display="block";
		onayla.style.display="block";
		sifresifirla.style.display="none";
		
    }
    else
    {
        alert(" Giriş Yetkiniz Yok."); 
    }
}
else 
{
alert("BOŞ DEĞER GİRİLEMEZ");
}
}

var doviz = document.getElementById('doviz');
	doviz.addEventListener('click',()=>{
	window.open('hesap.html','doviz','_blank');
})
if(window.close()){
	window.open('logout.php','_self');
}

</script>
</body>
</html>
<?php
}
//ob_end_flush();

mysqli_close($con);
?>