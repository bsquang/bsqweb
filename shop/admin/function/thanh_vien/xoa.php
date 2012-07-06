<?php 
	chong_pha_hoai();
?>
<?php 
	$tv_xoa="DELETE FROM `thanh_vien` WHERE `id` = '$_GET[id]'";
	mysql_query($tv_xoa);
?>