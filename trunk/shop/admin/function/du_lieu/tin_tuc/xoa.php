<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select * from tin_tuc where id='$_GET[id]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$link_hinh="../hinhanh_flash/tin_tuc/".$tv_2['hinh_anh'];
	unlink($link_hinh);
?>
<?php 
	$tv_xoa="DELETE FROM `tin_tuc` WHERE `id` = '$_GET[id]'";
	mysql_query($tv_xoa);
?>