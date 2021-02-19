<? include("baglanti.php");?>
	<div class="adminislemana">
		<div class="adminislemdis">
			<div class="a_basmesaj"> <b> HABER ISLEMLERI </b> </div>		
			<form id="form1" name="form1" method="post" action="haber_ekleislem.php">
			<div class="a_baslik"> Baslik: <input type="text" class="a_baslikxtboyut" name="baslik" id="baslik"> </div>
			<div class="a_icerikmesaj"> Icerik;  </div>
			<div class="a_icerik" name="icerik" id="icerik">
			 <? 
    		include("fckeditor/fckeditor.php") ; 
  			$oFCKeditor = new FCKeditor('icerik'); 
  			$oFCKeditor->BasePath = 'fckeditor/'; 
  			$oFCKeditor -> Height = 500;  	
			$oFCKeditor->Create(); 
 			?> 				
			</div>
			<div class="a_buton"> <input type="submit" value="KAYDET" class="a_buton" submit> </div>
			</form>
		</div>
	</div>
</div>