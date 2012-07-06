<?php 
	chong_pha_hoai();
?>
<?php 
	if($_POST['ten_menu']=="")
	{
		alertMessage("Không được bỏ trống tên menu");
		gotoBack();
		exit();
	}
	if($_POST['lien_ket']=="")
	{
		alertMessage("Không được bỏ trống liên kết");
		gotoBack();
		exit();
	}
	$tv="
		UPDATE `menu` SET `ten` = '$_POST[ten_menu]',
		`link` = '$_POST[lien_ket]' WHERE `menu`.`id` ='$_GET[id]';
	";
	mysql_query($tv);
	
	$URL="?thamso=menu_manage";
	gotoLink($URL);
?>