<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select * from showcase where id='$_GET[id]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$link_hinh="../resource/showcase/".$tv_2['thumbnail'];
	unlink($link_hinh);
	
	$tv_xoa="DELETE FROM `showcase` WHERE `id` = '$_GET[id]'";
	mysql_query($tv_xoa);
	
	$URL="?thamso=showcase_manage&result=3";
	gotoLink($URL);
	
?>