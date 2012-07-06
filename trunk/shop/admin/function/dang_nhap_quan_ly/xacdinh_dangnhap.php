<?php 
	chong_pha_hoai();
?>
<?php 
	if($_POST['dang_nhap_quan_tri']=="dang_nhap_quan_tri")
	{
		if($_POST["ky_danh"]!="" and $_POST["mat_khau"]!="")
		{
			$kd=md5(md5($_POST["ky_danh"]));
			$mk=md5(md5($_POST["mat_khau"]));
			$tv="select count(*) from thongtin_quantri where ky_danh='$kd' and mat_khau='$mk'";
			$tv_1=mysql_query($tv);
			$tv_2=mysql_fetch_row($tv_1);
			if($tv_2[0]!=0)
			{
				$_SESSION['ky_danh__hhh']=$kd;
				$_SESSION['mat_khau__hhh']=$mk;
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
		trangtruoc();
		exit();
	}
	$kd_ccc=$_SESSION['ky_danh__hhh'];
	$mk_ccc=$_SESSION['mat_khau__hhh'];
	if($kd_ccc!="" and $mk_ccc!="")
	{
		$tv="select count(*) from thongtin_quantri where ky_danh='$kd_ccc' and mat_khau='$mk_ccc'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_row($tv_1);
		if($tv_2!=0)
		{
			$xacdinh_dangnhap="co";	
		}
	}
	else 
	{
		$xacdinh_dangnhap="khong";
	}
?>