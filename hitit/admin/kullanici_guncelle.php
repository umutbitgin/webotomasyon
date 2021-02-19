<? include("baglanti.php");?>
	<div class="adminislemana">
		<div class="adminislemdis">
			<form id="form1" name="form1" method="post" action="kullanici_guncelleislem.php?kid=<? echo $_GET['kid'];?>">
			<? 
			$sql=mysql_query(" select * from kullanici where k_id='".$_GET['kid']."' "); 
			while($veri=mysql_fetch_assoc($sql)) 
			{ 
			?>
			<div class="a_basmesaj"> <b> KULLANICI ISLEMLERI </b> </div>
			<div class="a_baslik"> Kullanici Adi: <input type="text" value="<? echo $veri['k_ad']; ?>" class="a_baslikxtboyut" name="kad" id="kad"> </div>
			<div class="a_icerikmesaj"> Kullanici Sifre: <input type="text" value="<? echo $veri['k_sifre']; ?>" class="a_iceriksifre" name="ksifre" id="ksifre"> 
				</div>
				<div class="a_butonkullanicig"> <input type="submit" value="GUNCELLE" class="a_buton" submit> </div>
				</div>
			</div>
			<? } ?>
			</form>
		</div>		
	</div>
