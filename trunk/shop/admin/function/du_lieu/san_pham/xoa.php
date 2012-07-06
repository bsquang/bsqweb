<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select * from san_pham where id='$_GET[id]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$link_hinh="../hinhanh_flash/san_pham/".$tv_2['hinh_anh'];
	unlink($link_hinh);
?>
<?php 
	$tv_xoa="DELETE FROM `san_pham` WHERE `id` = '$_GET[id]'";
	mysql_query($tv_xoa);
	$URL="?thamso=quan_ly_san_pham&result=3";
	header ("Location: $URL"); 
?>