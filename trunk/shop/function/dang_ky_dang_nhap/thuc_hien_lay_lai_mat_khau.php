<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select * from thanh_vien where ky_danh='$_POST[ky_danh]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	if(trim($_POST['ky_danh'])=="")
	{
		thongbao("Không được bỏ trống ký danh");
		trangtruoc();
		exit();
	}
	$r_tv="select count(*) from thanh_vien where ky_danh='$_POST[ky_danh]'";
	$r_tv_1=mysql_query($r_tv);
	$r_tv_2=mysql_fetch_row($r_tv_1);
	if($r_tv_2[0]!=0)
	{
		$mat_khau_moi=mt_rand();
		$tinnhan="
				<b>Mật khẩu của bạn :</b> $mat_khau_moi
			";
		$to      = $tv_2['email'];// lay ten email
		$subject = 'Lấy lại mật khẩu';
		$message = $tinnhan;
		$headers = 'Content-type: text/html;charset=utf-8';
		mail($to, $subject, $message, $headers);
		//echo $tinnhan."<hr>";
		$mat_khau_moi__update=md5(md5($mat_khau_moi));
		$tv_sua="UPDATE `thanh_vien` SET `mat_khau` = '$mat_khau_moi__update' WHERE `thanh_vien`.`ky_danh` ='$_POST[ky_danh]';";
		mysql_query($tv_sua);
		thongbao("Đã gửi mật khẩu vào email của bạn");
	}
	else 
	{
		thongbao("Không có ký danh này , mời bạn nhập lại");
	}
?>