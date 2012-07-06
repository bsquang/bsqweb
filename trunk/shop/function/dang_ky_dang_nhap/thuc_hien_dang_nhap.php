<?php 
	chong_pha_hoai();
	if($_POST['ky_danh_dn__jjj']!="" and $_POST['mat_khau_dn__jjj']!="")
	{
		$kd_www=$_POST['ky_danh_dn__jjj'];
		$mk_www=md5(md5($_POST['mat_khau_dn__jjj']));
		$r_tv="select count(*) from thanh_vien where ky_danh='$kd_www' and mat_khau='$mk_www'";
		$r_tv_1=mysql_query($r_tv);
		$r_tv_2=mysql_fetch_row($r_tv_1);
		if($r_tv_2[0]!=0)
		{
			$_SESSION[$ten_danh_dau__kkk.'ky_danh__zzz']=$kd_www;
			$_SESSION[$ten_danh_dau__kkk.'mat_khau__zzz']=$mk_www;
			setcookie($ten_danh_dau__kkk."so_nguoi_online","khong", time() +$tg__abc);
			$tv_x="DELETE FROM `so_nguoi_online` WHERE ky_danh='' LIMIT 1";
			mysql_query($tv_x);
		}
		else 
		{
			thongbao("Sai ký danh hoặc mật khẩu");
		}
	}
	else 
	{
		thongbao("Không được bỏ trống ký danh hoặc mật khẩu");
	}
?>