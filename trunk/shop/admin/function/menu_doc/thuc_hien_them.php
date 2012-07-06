<?php 
	chong_pha_hoai();
?>
<?php 
	$_SESSION[$ten_danh_dau__kkk."selected_cd_mnd__789"]=$_POST['cap_do'];
	if($_POST['ten_menu']=="")
	{
		thongbao("Không được bỏ trống tên menu");
		trangtruoc();
		exit();
	}
	$tv="
		INSERT INTO `menu` (
		`id` ,
		`ten` ,
		`thuoc_menu`,
		`thumbnail`
		)
		VALUES (
		NULL , '$_POST[ten_menu]', '$_POST[cap_do]','$_POST[thumbnail]'
		);
	";
	mysql_query($tv);
	
?>