<? 
include("baglanti.php"); 
 $sql=" delete from haber where h_id='".$_GET['hid']."' "; 
 mysql_query($sql); 
 header('location:admin.php?s=haberler'); 
?>