<?php 
	chong_pha_hoai();
?>
<?php 
	if($_POST['ten_menu']=="")
	{
		thongbao("Không được bỏ trống tên menu");
		trangtruoc();
		exit();
	}
	if($_POST['lien_ket']=="")
	{
		thongbao("Không được bỏ trống liên kết");
		trangtruoc();
		exit();
	}
	$tv="
		UPDATE `menu_ngang` SET `ten` = '$_POST[ten_menu]',
		`link` = '$_POST[lien_ket]' WHERE `menu_ngang`.`id` ='$_GET[id]';
	";
	mysql_query($tv);
?>