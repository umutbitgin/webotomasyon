<? include("admin/baglanti.php"); ?>

	 <? 
	$sql=mysql_query(" select * from sayfa where s_id='".$_GET['did']."'"); 
	while($veri=mysql_fetch_assoc($sql)) 
	{ 
		$s_baslik = $veri['s_baslik'];
		$s_icerik = $veri['s_icerik'];
	}
?>
<div class="icerikmenudis">
	
		<div class="icerikmenubaslikdis">
			<div class="incerikmenubaslik"> <b> <? echo $s_baslik;?> </b> </div>	
		</div>
		<div class="icerlikmenubaslikdis"> <div class="icerikmenubaslikyazi"><? echo $s_icerik;?></div> </div> 
		
		<div class="icerikmenu"> <? echo $s_baslik;?></</div>
</div>
	<div class="floatbitir"></div>
