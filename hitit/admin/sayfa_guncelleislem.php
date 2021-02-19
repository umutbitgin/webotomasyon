<? 
include("baglanti.php"); 
$sql=" update sayfa set s_baslik='".$_POST['baslik']."' , s_icerik='".$_POST['icerik']."' where s_id='".$_GET['sid']."' "; 
mysql_query($sql); 
header('location:admin.php?s=sayfalar'); 
?>