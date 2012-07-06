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
		INSERT INTO `menu_ngang` (
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