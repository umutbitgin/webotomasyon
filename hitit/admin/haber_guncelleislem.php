<? 
include("baglanti.php"); 
$sql=" update haber set h_baslik='".$_POST['baslik']."' , h_icerik='".$_POST['icerik']."' where h_id='".$_GET['hid']."' "; 
mysql_query($sql); 
header('location:admin.php?s=haberler'); 
?>