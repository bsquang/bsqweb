<?php 
	chong_pha_hoai();
?>
<?php 
	//thongbao("vao day");
	if($xac_dinh_dang_nhap_thanh_vien=="co")
	{
		$so=count($_SESSION[$ten_danh_dau__kkk.'id_giohang']);
		$khach_mua="";
		for($r=0;$r<$so;$r++)
		{
			$id_sp=$_SESSION[$ten_danh_dau__kkk.'id_giohang'][$r];
			$sl_sp=$_SESSION[$ten_danh_dau__kkk.'sl_abc'][$r];
			if($sl_sp!=0)
			{
				$khach_mua=$khach_mua.$id_sp."___".$sl_sp."______";
			}
		}
		$khach_mua=substr($khach_mua,0,-6);
		if($_POST['ho_ten']!="" and $_POST['dia_chi']!="" and $_POST['hom_thu']!="" and $_POST['dien_thoai']!="" and $_POST['noi_dung']!="")
		{
			$kd_ccc=$_SESSION[$ten_danh_dau__kkk.'ky_danh__zzz'];
			$dc=nl2br($_POST['dia_chi']);
			$nd=nl2br($_POST['noi_dung']);
			$chuoi="
				INSERT INTO `hoa_don` (
				`id` ,
				`khach_mua` ,
				`ho_ten` ,
				`dia_chi` ,
				`hom_thu` ,
				`dien_thoai` ,
				`noi_dung`,
				`ky_danh`
				)
				VALUES (
				NULL , '$khach_mua', '$_POST[ho_ten]', '$dc', '$_POST[hom_thu]', '$_POST[dien_thoai]', '$nd','$kd_ccc'
				);
			";
			mysql_query($chuoi);
			
			for($r=0;$r<$so;$r++)
			{
				$id_sp=$_SESSION[$ten_danh_dau__kkk.'id_giohang'][$r];
				$sl_sp=$_SESSION[$ten_danh_dau__kkk.'sl_abc'][$r];
				$update="UPDATE `san_pham` SET `so_luong_mua` = '$sl_sp' WHERE `id` ='$id_sp';";
				mysql_query($update);
			}
			unset($_SESSION[$ten_danh_dau__kkk.'id_giohang']);
			unset($_SESSION[$ten_danh_dau__kkk.'sl_abc']);
			thongbao("Cảm ơn bạn đã mua hàng tại cửa hàng của chúng tôi");
			chuyentrang("index.php");
		}
		else 
		{
			thongbao("Không được bỏ trống họ tên , địa chỉ , hòm thư , điện thoại , nội dung");
		}
	}
	else 
	{
		thongbao("Cần phải đăng ký thành viên để mua hàng");
		chuyentrang("?thamso=dang_ky");
		exit();
	}
?>