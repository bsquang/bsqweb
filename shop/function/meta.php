<?php 
	//$title_meta="Quần áo";
	function title_meta__tham_so___xuat()
	{
		$tv="select * from menu where id='$_GET[id]'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2['ten'];
	}
	function title_meta__tham_so___chi_tiet_san_pham()
	{
		$tv="select * from san_pham where id='$_GET[id]'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2['ten'];
	}
	function title_meta__tham_so___chi_tiet_tin_tuc()
	{
		$tv="select * from tin_tuc where id='$_GET[id]'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2['ten'];
	}
	function title_meta__tham_so___xuat_mot_tin()
	{
		$tv="select * from du_lieu_mot_tin where id='$_GET[id]'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2['ten'];
	}
	switch($_GET['thamso'])
	{
		case "sua_thong_tin_ca_nhan":
			$title_meta="Sữa thông tin cá nhân";
		break;
		case "lay_lai_mat_khau":
			$title_meta="Lấy lại mật khẩu";
		break;
		case "thoat":
			$title_meta="Thoát";
		break;
		case "tim_kiem":
			$title_meta=$_GET['tu_khoa'];
		break;
		case "gio_hang":
			$title_meta="Giỏ hàng";
		break;
		case "chi_tiet_tin_tuc":
			$title_meta=title_meta__tham_so___chi_tiet_tin_tuc();
		break;
		case "lien_he":
			$title_meta="Liên hệ";
		break;
		case "tin_tuc":
			$title_meta="Tin tức";
		break;
		case "dang_ky":
			$title_meta="Đăng ký";
		break;
		case "xuat_toan_bo_san_pham":
			$title_meta="Sản phẩm";
		break;
		case "xuat_mot_tin":
			$title_meta=title_meta__tham_so___xuat_mot_tin();
		break;
		case "chi_tiet_san_pham":
			$title_meta=title_meta__tham_so___chi_tiet_san_pham();
		break;
		case "xuat":
			$title_meta=title_meta__tham_so___xuat();
		break;
		default:
			$title_meta="Quần áo";
	}
?>