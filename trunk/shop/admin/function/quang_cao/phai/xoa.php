<?php 
	chong_pha_hoai();
?>
<?php 
	$tv_xoa="DELETE FROM `quang_cao_phai` WHERE `id` = '$_GET[id]'";
	mysql_query($tv_xoa);
?>