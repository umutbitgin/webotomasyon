<? include("baglanti.php");?>
	<div class="adminislemana">
		<div class="adminislemdis">
			<form id="form1" name="form1" method="post" action="sayfa_guncelleislem.php?sid=<? echo $_GET['sid'];?>">
			<? 
			$sql=mysql_query(" select * from sayfa where s_id='".$_GET['sid']."' "); 
			while($veri=mysql_fetch_assoc($sql)) 
			{ 
			?>
			<div class="a_basmesaj"> <b> MENU ISLEMLERI </b> </div>
			<div class="a_baslik"> Baslik: <input type="text" value="<? echo $veri['s_baslik']; ?>" class="a_baslikxtboyut" name="baslik" id="baslik"> </div>
			<div class="a_icerikmesaj"> Icerik;  </div>
			<div class="a_icerik" name="icerik" id="icerik">			
			 <? 
    		include("fckeditor/fckeditor.php") ; 
  			$oFCKeditor = new FCKeditor('icerik'); 
  			$oFCKeditor->BasePath = 'fckeditor/'; 
			$oFCKeditor->Value = $veri['s_icerik']; 
  			$oFCKeditor -> Height = 500;  	
			$oFCKeditor->Create(); 
 			?> 							
			</div>			 
			<div class="a_buton"> <input type="submit" value="GUNCELLE" class="a_buton" submit> </div>
			<? } ?>
			</form>
		</div>		
	</div>
