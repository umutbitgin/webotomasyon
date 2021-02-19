<?
if( isset($_GET['s']) )
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
<title>T.C. Hitit Universitesi</title>
<link href="css/style.css" type="text/css" rel="stylesheet"/>	
</head>
<body class="arkaplan">	
<? include("banner.php"); ?>
<? include($sayfa.".php");?>
<? include("footer.php"); ?>
</body>
</html>