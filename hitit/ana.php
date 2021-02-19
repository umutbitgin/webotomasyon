<? include("admin/baglanti.php");?>
<div class="slider"> <img src="resimler/slider.PNG"> </div>
			<div class="slideralt"> <img src="resimler/slideralt.PNG"> </div>
			<div class="duyuruhaberdis">
				<div class="duyurudis">
				<div class="duyurubaslik"> <b> Duyurular </b> <div class="tumuduyuru"> <b> Tumu </b> </div> </div>
				<br>
				 <? 
 				$sql=mysql_query(" select * from duyuru order by d_tarih desc limit 4 "); 
 				while($veri=mysql_fetch_assoc($sql)) 
 				{ 
				?> 
				<div class="duyurutarih"> <b> <? echo $veri['d_tarih']; ?></b> </div> <div class="duyuruicerik"><a href="index.php?s=duyuru&did=<? echo $veri['d_id'];?>"> <b><? echo $veri['d_baslik'];?></b> </a>  </div>
				<br>
				<div class="duyurutarih"> <b> <? echo $veri['d_tarih']; ?></b> </div> <div class="duyuruicerik"><a href="index.php?s=duyuru&did=<? echo $veri['d_id'];?>"> <b><? echo $veri['d_baslik'];?></b> </a>  </div>
				
				<div class="duyurutarih"> <b> <? echo $veri['d_tarih']; ?></b> </div> <div class="duyuruicerik"><a href="index.php?s=duyuru&did=<? echo $veri['d_id'];?>"> <b><? echo $veri['d_baslik'];?></b> </a>  </div>
				<div class="duyurutarih"> <b> <? echo $veri['d_tarih']; ?></b> </div> <div class="duyuruicerik"><a href="index.php?s=duyuru&did=<? echo $veri['d_id'];?>"> <b><? echo $veri['d_baslik'];?></b> </a>  </div>
				<div class="floatbitir"> </div>
				<br>
				<? } ?>
				<div class="floatbitir"></div>
				</div> 
				<div class="haberdis">
				<div class="haberbaslik"> <b> Haberler </b> <div class="tumuhaber"> <b> Tumu </b> </div> </div> 
				<br>
				 <? 
 				$sql=mysql_query(" select * from haber order by h_tarih desc limit 4 "); 
 				while($veri=mysql_fetch_assoc($sql)) 
 				{ 
				?> 
				<div class="habertarih"> <b> <? echo $veri['h_tarih']; ?> </b> </div> <div class="habericerik"> <a href="index.php?s=haber&did=<? echo $veri['h_id'];?>"> <b> <? echo $veri['h_baslik']; ?> </b> </a> </div>
				<div class="habertarih"> <b> <? echo $veri['h_tarih']; ?> </b> </div> <div class="habericerik"> <a href="index.php?s=haber&did=<? echo $veri['h_id'];?>"> <b> <? echo $veri['h_baslik']; ?> </b> </a> </div>
				<div class="habertarih"> <b> <? echo $veri['h_tarih']; ?> </b> </div> <div class="habericerik"> <a href="index.php?s=haber&did=<? echo $veri['h_id'];?>"> <b> <? echo $veri['h_baslik']; ?> </b> </a> </div>
				<div class="habertarih"> <b> <? echo $veri['h_tarih']; ?> </b> </div> <div class="habericerik"> <a href="index.php?s=haber&did=<? echo $veri['h_id'];?>"> <b> <? echo $veri['h_baslik']; ?> </b> </a> </div>
				<div class="floatbitir"> </div>
				<br>
				<? } ?>
				</div>			
			<div class="floatbitir"> </div>
			</div>
			<div class="aradis">
				<div class="araic">
					<form>
            			<input type="text" name="txtara" id="txtara" value="DUYURU VE HABERLERDE ARA">
						<input type="button" name="btnara" id="btnara" value="Ara">
					</form>					
				</div>
            </div>