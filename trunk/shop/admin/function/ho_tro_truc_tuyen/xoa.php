<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="DELETE FROM `ho_tro_truc_tuyen` WHERE `id` = '$_GET[id]' ";
	mysql_query($tv);
?>