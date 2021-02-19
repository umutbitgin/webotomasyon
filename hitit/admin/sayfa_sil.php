<? 
include("baglanti.php"); 
 $sql=" delete from sayfa where s_id='".$_GET['sid']."' "; 
 mysql_query($sql); 
 header('location:admin.php?s=sayfalar'); 
?>