<?php 
	chong_pha_hoai();
	switch($_GET['thamso'])
	{
		case "sua_thong_tin_ca_nhan":
			include("function/dang_ky_dang_nhap/sua_thong_tin_ca_nhan.php");
		break;
		case "lay_lai_mat_khau":
			include("function/dang_ky_dang_nhap/lay_lai_mat_khau.php");
		break;
		case "tim_kiem":
			include("function/tim_kiem/xuat.php");
		break;
		case "dang_ky":
			include("function/dang_ky_dang_nhap/dang_ky.php");
		break;
		case "gio_hang":
			include("function/gio_hang/gio_hang.php");
		break;
		case "xuat":
			//echo $_GET['id'];echo "<hr>";
			include("function/san_pham/xuat.php");
		break;
		case "chi_tiet_san_pham":
			include("function/san_pham/chi_tiet_san_pham.php");
		break;
		case "xuat_mot_tin":
			include("function/xuat_mot_tin/xuat_mot_tin.php");
		break;
		case "tin_tuc":
			include("function/tin_tuc/xuat.php");
		break;
		case "chi_tiet_tin_tuc":
			include("function/tin_tuc/chi_tiet.php");
		break;
		case "xuat_toan_bo_san_pham":
			include("function/san_pham/xuat_toan_bo_san_pham.php");
		break;
		case "lien_he":
			include("function/lien_he/lien_he.php");
		break;
		default:
			//echo "trang chu";
			include("function/trang_chu/trang_chu.php");
	}
?>
