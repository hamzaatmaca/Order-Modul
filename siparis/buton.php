<?php
include('ayar/ayar.php');



			if(isset($_GET['gon'])){
				$id=$_GET['gon'];
				$ekle="update gelen set gelen_gon='GÖNDERİLDİ' where gelen_id='$id'";
				$x=mysqli_query($con,$ekle);
				if($x){
					header('location:x4o56rtyw.php');
				}

			}
			if(isset($_GET['tes'])){
				$id=$_GET['tes'];
				$ekle="update gelen set gelen_tes='VERİLDİ' where gelen_id='$id'";
				$x=mysqli_query($con,$ekle);
				if($x){
					header('location:x4o56rtyw.php');
				}

				} 

			if(isset($_GET['sil']))
			{
				$id=$_GET['sil'];
				$ekle="delete from gelen where gelen_id='$id'";
				$x=mysqli_query($con,$ekle);
				if($x)
				{
					header('location:x4o56rtyw.php');
				}

			} 
			if(isset($_GET['yoket']))
			{	
				$x=mysqli_query($con,"TRUNCATE TABLE gelen");
				if($x)
				{
					header('location:x4o56rtyw.php');
				}
			} 
			if(isset($_GET['delete']))
			{	
				$delete=$_GET['delete'];

				$sicekveri="SELECT * FROM icecekler where icecek_id='$delete'";
				$sicekrun=mysqli_query($con,$sicekveri);
				$sii=mysqli_fetch_array($sicekrun);
				$si_resim=$sii['icecek_resim'];
				unlink("resimler/$si_resim");

				$sil="delete from icecekler where icecek_id='$delete'";
				$queryy=mysqli_query($con,$sil);
				if(!$sil)
				{
					echo 'hata';
				}
				else{
					header('location:x4o56rtyw.php');
				}
			} 
			if(isset($_GET['deleteyemek']))
			{	
				$delet=$_GET['deleteyemek'];

				$syemekcekveri="SELECT * FROM yemekler where yemek_id='$delet'";
				$syemekcekrun=mysqli_query($con,$syemekcekveri);
				$sk=mysqli_fetch_array($syemekcekrun);
				$syemek_resim=$sk['yemek_resim'];
				unlink("resimler/$syemek_resim");
				$si="delete from yemekler where yemek_id='$delet'";
				$queyy=mysqli_query($con,$si);
				if(!$si)
				{
					echo 'hata';
				}else{
					header('location:x4o56rtyw.php');
				}
				
			}
			if(isset($_POST['yekle'])){
				$yemek_isim=guvenlik($_POST['yemekisim']);
				$yemek_fiyat=guvenlik($_POST['yemekfiyat']);

				$yemekresim=$_FILES['yemekresim']['name'];
				$yemekresim_tmp=$_FILES['yemekresim']['tmp_name'];
				move_uploaded_file($yemekresim_tmp,"resimler/$yemekresim");


				$insert_yemek="insert into yemekler(yemek_isim,yemek_resim,yemek_fiyat) values ('".addslashes($yemek_isim)."','".addslashes($yemekresim)."','".addslashes($yemek_fiyat)."')";
				$insert_sa = mysqli_query($con,$insert_yemek);

				if($insert_sa){
				echo "<script>alert('Yemekler Başarı İle Eklendi')</script>";
				header('location:x4o56rtyw.php');
				
					}
					else{
						 echo 'hata';
						
					}
			}
			if(isset($_POST['iekle'])){
				$iisim=guvenlik($_POST['iisim']);
				$ifiyat=guvenlik($_POST['ifiyat']);

				$iresim=$_FILES['iresim']['name'];
				$iresim_tmp=$_FILES['iresim']['tmp_name'];
				move_uploaded_file($iresim_tmp,"resimler/$iresim");


				$insert_i="insert into icecekler (icecek_isim,icecek_resim,icecek_fiyat) values ('".addslashes($iisim)."','".addslashes($iresim)."','".addslashes($ifiyat)."')";
				$insert_s = mysqli_query($con,$insert_i);
				if($insert_s){
				echo "<script>alert('İçecekler Başarı İle Eklendi')</script>";
				header('location:x4o56rtyw.php');
					}
			}
			if(isset($_POST['okey'])){
				$psw=guvenlik($_POST['entr']);
				$insert_entr="update sifre set sifre='$psw' where sifre_id='1'";
				$insert_psw=mysqli_query($con,$insert_entr);
				if($insert_psw){
					header('location:x4o56rtyw.php');
					echo "<script>alert('Şifre Değiştirildi')</script>";
				}

			}

?>