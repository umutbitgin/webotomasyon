<? include("baglanti.php");?>
	<div class="adminislemana">
		<div class="adminislemdis">
			<div class="a_basmesaj"> <b> MENU ISLEMLERI </b> </div>			
			<div class="a_icerikekledis"> <a href="admin.php?s=sayfa_ekle"> Yeni icerik ekle </div> </a> 
			<div class="a_listeledis" >	
				<div class="a_listeleduyuruno"> <div class="a_listeduruyunoyazi"> Duyuru No: </div> </div>
				<div class="a_listelebaslik"> <div class="a_listebaslikyazi"> Baslik: </div> </div>
				<div class="a_listeleislem"> <div class="a_listeislemyazi"> Islem: </div></div>
				<div class="floatbitir"></div>	
			<? 
  			$i=0; 
  			$sql=mysql_query(" select * from sayfa order by s_id asc "); 
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
			<div class="a_listelebaslik"> <div class="a_listebaslikyazi"> <? echo $kayit['s_baslik'];?>  </div> </div>
			<div class="a_listeleislem"> <div class="a_listeislemyazi"><a href="admin.php?s=sayfa_guncelle&sid=<? echo $kayit['s_id'];?>">Guncelle</a>  
    		<a href="sayfa_sil.php?sid=<? echo $kayit['s_id'];?>">Sil</a> </div> </div>
			<div class="floatbitir"></div>
			</div>
			<? } ?>
			</div>
		</div>
	</div>