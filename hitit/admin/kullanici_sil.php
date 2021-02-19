<? 
include("baglanti.php"); 
 $sql=" delete from kullanici where k_id='".$_GET['kid']."' "; 
 mysql_query($sql); 
 header('location:admin.php?s=kullanicilar'); 
?>