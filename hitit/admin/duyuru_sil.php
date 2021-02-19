<? 
include("baglanti.php"); 
 $sql=" delete from duyuru where d_id='".$_GET['did']."' "; 
 mysql_query($sql); 
 header('location:admin.php?s=duyurular'); 
?>