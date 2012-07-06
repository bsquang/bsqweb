<?php 
	chong_pha_hoai();
?>
<?php 
	$tv_xoa="DELETE FROM `hoa_don` WHERE `id` = '$_GET[id]'";
	mysql_query($tv_xoa);
	chuyentrang("?thamso=quan_ly_hoa_don&trang=$_GET[trang]");
	exit();
?>