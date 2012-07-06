<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select * from project where id='$_GET[id]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$link_hinh="../resource/project/".$tv_2['thumbnail'];
	unlink($link_hinh);
	
	$tv_xoa="DELETE FROM `project` WHERE `id` = '$_GET[id]'";
	mysql_query($tv_xoa);
	
	$URL="?thamso=project_manage&result=3";
	gotoLink($URL); 
?>