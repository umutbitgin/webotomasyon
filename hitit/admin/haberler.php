<? include("baglanti.php");?>
	<div class="adminislemana">
		<div class="adminislemdis">
			<div class="a_basmesaj"> <b> HABER ISLEMLERI </b> </div>			
			<div class="a_icerikekledis"> <a href="admin.php?s=haber_ekle"> Yeni icerik ekle </div> </a> 
			<div class="a_listeledis" >	
				<div class="a_listeleduyuruno"> <div class="a_listeduruyunoyazi"> Duyuru No: </div> </div>
				<div class="a_listelebaslik"> <div class="a_listebaslikyazi"> Baslik: </div> </div>
				<div class="a_listeleislem"> <div class="a_listeislemyazi"> Islem: </div></div>
				<div class="floatbitir"></div>	
			<? 
  			$i=0; 
  			$sql=mysql_query(" select * from haber order by h_id asc "); 
  			while($kayit=mysql_fetch_assoc($sql)) { 
   			$i++; 
			if($i%2==0){ 
	   		$renk="renk1"; 
	  		} 
	  		else 
	  		{ 
			$renk="renk2"; 
	  		} ?>
			<div class="<? echo $renk;?>">
			<div class="a_listeleduyuruno"> <div class="a_listeduruyunoyazi"> <? echo $i;?>  </div></div>
			<div class="a_listelebaslik"> <div class="a_listebaslikyazi"> <? echo $kayit['h_baslik'];?>  </div> </div>
			<div class="a_listeleislem"> <div class="a_listeislemyazi"><a href="admin.php?s=haber_guncelle&hid=<? echo $kayit['h_id'];?>">Guncelle</a>  
    		<a href="haber_sil.php?hid=<? echo $kayit['h_id'];?>">Sil</a> </div> </div>
			<div class="floatbitir"></div>
			</div>
			<? } ?>
			</div>
		</div>
	</div>