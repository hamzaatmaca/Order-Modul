<?php
include('ayar.php');
$xxx="select * from sifre";
$xxxx=mysqli_query($con,$xxx);
while($x=mysqli_fetch_array($xxxx)){
		$password=$x['sifre'];
		echo "password:".$password;
}



?>