<?php 
	chong_pha_hoai();
?>
<?php 
	$kd=$_SESSION[$ten_danh_dau__kkk.'ky_danh__zzz'];
	$mkm=md5(md5($_POST['mat_khau']));
	$dc=nl2br($_POST['dia_chi']);
	if(trim($_POST['mat_khau']==""))
	{
		thongbao("Không được bỏ trống mật khẩu");
		trangtruoc();
		exit();
	}
	if($_POST['mat_khau']!="khong_thay_doi")
	{
		$tv="
			UPDATE `thanh_vien` SET `mat_khau` = '$mkm',
			`email` = '$_POST[email]',
			`dien_thoai` = '$_POST[dien_thoai]',
			`dia_chi` = '$dc' WHERE `ky_danh` ='$kd';
		";	
		$_SESSION[$ten_danh_dau__kkk.'mat_khau__zzz']=$mkm;
	}
	else 
	{
		$tv="
			UPDATE `thanh_vien` SET 
			`email` = '$_POST[email]',
			`dien_thoai` = '$_POST[dien_thoai]',
			`dia_chi` = '$dc' WHERE `ky_danh` ='$kd';
		";	
	}
	mysql_query($tv);
?>