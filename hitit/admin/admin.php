<?
session_start();

if($_SESSION['giris']=="ok")
{
if(isset($_GET["s"]))
{
	$sayfa=$_GET['s'];
}
else
{
	$sayfa="ana";
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Paneli</title>
<link href="../css/style.css" type="text/css" rel="stylesheet"/>
</head>
<body class="arkaplan">
	<? include("banner.php");?>
	<? include($sayfa.".php");?> 
	<? include("footer.php");?>
</body>
</html>
<? }
else
{
header('location:index.php');	
}?>