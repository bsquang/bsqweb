<?php 
	chong_pha_hoai();
?>
<?php 
	if($_POST['ky_danh']!="" and $_POST['mat_khau']!="")
	{
		$r_tv="select count(*) from thanh_vien where ky_danh='$_POST[ky_danh]'";
		$r_tv_1=mysql_query($r_tv);
		$r_tv_2=mysql_fetch_row($r_tv_1);
		if($r_tv_2[0]!=0)
		{
			thongbao("Ký danh này đã được đăng ký\\nXin bạn đổi ký danh");
		}
		else 
		{		
			$mk=md5(md5($_POST['mat_khau']));
			$dc=nl2br($_POST['dia_chi']);
			$tv="INSERT INTO `thanh_vien` (
				`id` ,
				`ky_danh` ,
				`mat_khau` ,
				`email` ,
				`dien_thoai` ,
				`dia_chi`
				)
				VALUES (
				NULL , '$_POST[ky_danh]', '$mk', '$_POST[email]', '$_POST[dien_thoai]', '$dc'
				);";
			mysql_query($tv);
			$_SESSION[$ten_danh_dau__kkk.'ky_danh__zzz']=$_POST['ky_danh'];
			$_SESSION[$ten_danh_dau__kkk.'mat_khau__zzz']=$mk;
			setcookie($ten_danh_dau__kkk."so_nguoi_online","khong", time() +$tg__abc);
			$tv_x="DELETE FROM `so_nguoi_online` WHERE ky_danh='' LIMIT 1";
			mysql_query($tv_x);
		}
	}
	else 
	{
		thongbao("Không được bỏ trống ký danh hoặc mật khẩu");
	}
?>