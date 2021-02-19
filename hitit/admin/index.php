<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Giris</title>
<link href="../css/style.css" type="text/css" rel="stylesheet"/>	
</head>
<body class="adminarkaplan">
	<div class="admingirisdis"> 
		<form id="form1" name="form1" method="post" action="giris_kontrol.php"> 
		<div class="admingirislogo"> <img src="../resimler/adminhititlogo.PNG" ></img> </div>
		<div class="adminkad">Kullanici Adi Giriniz: <input class="adminformsag" type="text" name="kad" id="kad"> </div>
		<div class="adminsifre">Sifre Giriniz: <input class="adminformsag"  type="password" name="ksifre" id="ksifre"> </div>
		<div class=""> <input type="submit" value="Giris" class="admingirisbuton" name="admingiris" id="admingiris"> </div>
		<div class="adminhatamesaj"> <? if( $_GET['h']==1){echo "Hatali Bilgi Girdiniz";}?>  </div>
		</form>
	</div>
</body>
</html>