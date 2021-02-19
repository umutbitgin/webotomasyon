<? 
include("baglanti.php"); 
$tarih=date("y-m-d"); 
$sql=" insert into haber values('','".$_POST['baslik']."', '".$_POST['icerik']."','".$tarih."') "; 
mysql_query($sql); 
header('location:admin.php?s=haberler'); 
?> 