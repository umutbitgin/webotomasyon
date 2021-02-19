<? 
include("baglanti.php"); 
$sql=" update duyuru set d_baslik='".$_POST['baslik']."' , d_icerik='".$_POST['icerik']."' where d_id='".$_GET['did']."' "; 
mysql_query($sql); 
header('location:admin.php?s=duyurular'); 
?>