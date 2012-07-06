<?php 
	chong_pha_hoai();
?>
<section style='height: 100%;overflow: auto; padding: 5px'>
<?php
	switch($_GET['thamso'])
	{	
		case "bien_luan_link_menu__qcp":
			include("function/bien_luan_link_menu/bien_luan_link_menu__qcp.php");
		break;
		case "bien_luan_link_menu__qct":
			include("function/bien_luan_link_menu/bien_luan_link_menu__qct.php");
		break;
		case "bien_luan_link_menu__qctp":
			include("function/bien_luan_link_menu/bien_luan_link_menu__qctp.php");
		break;
		case "bien_luan_link_menu__httt":
			include("function/bien_luan_link_menu/bien_luan_link_menu__httt.php");
		break;
		case "bien_luan_quan_ly_du_lieu__www":
			include("function/bien_luan_link_menu/bien_luan_quan_ly_du_lieu__www.php");
		break;
		case "bien_luan_quan_ly_menu__www":
			include("function/bien_luan_link_menu/bien_luan_quan_ly_menu__www.php");
		break;
		case "bien_luan_them_du_lieu__www":
			include("function/bien_luan_link_menu/bien_luan_them_du_lieu__www.php");
		break;
		case "bien_luan_them_menu__www":
			include("function/bien_luan_link_menu/bien_luan_them_menu__www.php");
		break;
		case "thay_doi_thong_tin_quan_tri":
			include("function/dang_nhap_quan_ly/thay_doi_thong_tin_quan_tri.php");
		break;
		case "quan_ly_san_pham":
			include("function/du_lieu/san_pham/quan_ly.php");
		break;
		case "them_san_pham":
			//echo "them san pham <hr>";
			include("function/du_lieu/san_pham/them.php");
		break;
		case "sua_san_pham":
			//echo "them san pham <hr>";
			include("function/du_lieu/san_pham/sua.php");
		break;
		case "quan_ly_tin_tuc":
			include("function/du_lieu/tin_tuc/quan_ly.php");
		break;
		case "them_tin_tuc":
			include("function/du_lieu/tin_tuc/them.php");
		break;
		case "sua_tin_tuc":
			include("function/du_lieu/tin_tuc/sua.php");
		break;
		case "quan_ly_du_lieu_mot_tin":
			include("function/du_lieu/du_lieu_mot_tin/quan_ly.php");
		break;
		case "sua_du_lieu_mot_tin":
			//echo "them san pham <hr>";
			include("function/du_lieu/du_lieu_mot_tin/sua.php");
		break;
		case "quan_ly_hoa_don":
			include("function/hoa_don/quan_ly.php");
		break;
		case "xem_hoa_don":
			include("function/hoa_don/xem.php");
		break;
		case "quan_ly_thanh_vien":
			include("function/thanh_vien/quan_ly.php");
		break;
		case "sua_thanh_vien":
			include("function/thanh_vien/sua.php");
		break;
		case "them_menu_ngang":
			include("function/menu_ngang/them.php");
		break;
		case "mot_so_menu_ngang_duoc_ho_tro":
			include("function/menu_ngang/mot_so_menu_ngang_duoc_ho_tro.php");
		break;
		case "quan_ly_menu_ngang":
			include("function/menu_ngang/quan_ly.php");
		break;
		case "sua_menu_ngang":
			include("function/menu_ngang/sua.php");
		break;
		case "them_menu_doc":
			include("function/menu_doc/them.php");
		break;
		case "quan_ly_menu_doc":
			include("function/menu_doc/quan_ly.php");
		break;
		case "sua_menu_doc":
			include("function/menu_doc/sua.php");
		break;		
		
		case "quan_ly_san_pham_trang_chu":
			include("function/san_pham_trang_chu/quan_ly.php");
		break;
		case "them_nick_yahoo":
			include("function/ho_tro_truc_tuyen/them.php");
		break;
		case "quan_ly_phan_ho_tro_truc_tuyen":
			include("function/ho_tro_truc_tuyen/quan_ly.php");
		break;
		case "sua_nick_yahoo":
			include("function/ho_tro_truc_tuyen/sua.php");
		break;
		case "them_quang_cao_trai":
			include("function/quang_cao/trai/them.php");
		break;
		case "quan_ly_quang_cao_trai":
			include("function/quang_cao/trai/quan_ly.php");
		break;
		case "sua_quang_cao_trai":
			include("function/quang_cao/trai/sua.php");
		break;
		case "them_quang_cao_phai":
			include("function/quang_cao/phai/them.php");
		break;
		case "quan_ly_quang_cao_phai":
			include("function/quang_cao/phai/quan_ly.php");
		break;
		case "sua_quang_cao_phai":
			include("function/quang_cao/phai/sua.php");
		break;
	
		case "slideshow_edit":
			include("function/slideshow/sua.php");
		break;
		case "contact_edit":
			include("function/thay_doi_lien_he/thay_doi_lien_he.php");
		break;
		case "banner_edit":
			include("function/banner/sua.php");
		break;
		case "footer_edit":
			include("function/footer/sua.php");
		break;
		default:
			include("function/trang_chu/trang_chu.php");			
	}
?>
</section>