<?php 
	chong_pha_hoai();
?>
<?php 
	$dc=nl2br($_POST['dia_chi']);
	$mk=md5(md5($_POST['mat_khau']));
	if(trim($_POST['ky_danh'])=="")
	{
		thongbao("Không được bỏ trống ký danh");
		trangtruoc();
		exit();
	}
	if(trim($_POST['mat_khau'])=="")
	{
		thongbao("Không được bỏ trống mật khẩu");
		trangtruoc();
		exit();
	}
	if($_POST['mat_khau']!="khong_thay_doi")
	{
		$tv="
			UPDATE `thanh_vien` SET `ky_danh` = '$_POST[ky_danh]',
			`mat_khau` = '$mk',
			`email` = '$_POST[email]',
			`dien_thoai` = '$_POST[dien_thoai]',
			`dia_chi` = '$dc' WHERE `thanh_vien`.`id` ='$_GET[id]';
			";
	}
	else 
	{
		$tv="
			UPDATE `thanh_vien` SET `ky_danh` = '$_POST[ky_danh]',
			`email` = '$_POST[email]',
			`dien_thoai` = '$_POST[dien_thoai]',
			`dia_chi` = '$dc' WHERE `thanh_vien`.`id` ='$_GET[id]';
			";
	}
	mysql_query($tv);
?>