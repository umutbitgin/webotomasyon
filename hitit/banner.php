<? include("admin/baglanti.php"); ?>

<div class="ana">
		<div class="bannerust">  
			<div class="sosyalbanner"> <img src="resimler/instagram.PNG"> </div>
			<div class="sosyalbanner"> <img src="resimler/youtube.PNG"> </div>
			<div class="sosyalbanner"> <img src="resimler/facebook.PNG"> </div>
			<div class="sosyalbanner"> <img src="resimler/twitter.PNG"> </div>
			<div class="bannertren"> <div class="yazibannerust"> TR      EN </div> </div>
			<div class="bannerusticerik"><div class="yazibannerust"> EBYS </div></div>
			<div class="bannerusticerik"> <div class="yazibannerust"> HUBIS </div></div>
			<div class="bannerusticerik"><div class="yazibannerust"> ogre-posta </div></div>
			<div class="bannerusticerik"><div class="yazibannerust"> e-posta </div></div>
		<div class="floatbitir"> </div>
		</div>
			<div class="banner"> <img src="resimler/hititbanner.PNG"> </div>
			<div class="menudis"> 
				<div class="menuanasayfa"> <a href="index.php?s=ana"> <img src="resimler/menuana.PNG"> </a> </div>
					 <? 
 				$sql=mysql_query(" select * from sayfa "); 
 				while($veri=mysql_fetch_assoc($sql)) 
 				{ 
				?> 
				<div class="menu"> <div class="menuyazi"> <a href="index.php?s=menuicerik&did=<? echo $veri['s_id'];?> "> <b> <? echo $veri['s_baslik'];?></ </b> </a> </div> </div>
				<? } ?> 
				<div class="menuara"> <div class=""> <img src="resimler/aramenu.PNG"> </div> </div>
				<div class="floatbitir"> </div>
			</div>
			
			