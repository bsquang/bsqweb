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
		INSERT INTO `menu` (
		`id` ,
		`ten` ,
		`link`
		)
		VALUES (
		NULL , '$_POST[ten_menu]', '$_POST[lien_ket]'
		);
	";
	
	mysql_query($tv);
?>