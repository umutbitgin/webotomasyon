<? 
include("baglanti.php");
session_start(); 
$sql=mysql_query(" select * from kullanici where ". 
"k_ad='".$_POST['kad']."' and k_sifre='".$_POST['ksifre']."'  and k_durum=1 "); 
if( mysql_num_rows($sql)>0 ) 
{ 
 $_SESSION['giris']="ok"; 
 header('location:admin.php');
} 
else 
{ 
 header('location:index.php?h=1'); 
}
?> 
 

