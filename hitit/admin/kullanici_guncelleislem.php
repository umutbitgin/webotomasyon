<? 
include("baglanti.php"); 
$sql=" update kullanici set k_ad='".$_POST['kad']."' , k_sifre='".$_POST['ksifre']."' where k_id='".$_GET['kid']."' "; 
mysql_query($sql); 
header('location:admin.php?s=kullanicilar'); 
?>