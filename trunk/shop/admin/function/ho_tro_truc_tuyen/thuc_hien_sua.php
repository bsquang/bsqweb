<?php 
	chong_pha_hoai();
?>
<?php 
	if(trim($_POST['nick_yahoo'])=="")
	{
		thongbao("Không được bỏ trống nick yahoo");
		trangtruoc();
		exit();
	}
	$tv="
		UPDATE `ho_tro_truc_tuyen` SET `nick_name` = '$_POST[nick_yahoo]' WHERE `id` ='$_GET[id]';	
	";
	mysql_query($tv);
?>