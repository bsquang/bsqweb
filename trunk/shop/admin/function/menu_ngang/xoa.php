<?php 
	chong_pha_hoai();
?>
<?php 
	$tv_xoa="DELETE FROM `menu_ngang` WHERE `id` = '$_GET[id]'";
	mysql_query($tv_xoa);
?>