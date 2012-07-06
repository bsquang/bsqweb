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
	function title_meta__tham_so___xuat_mot_tin()
	{
		$tv="select * from page where id='$_GET[id]'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2['ten'];
	}
	switch($_GET['thamso'])
	{		
		case "lien_he":
			$title_meta="Liên hệ";
		break;		
		case "xuat_toan_bo_san_pham":
			$title_meta="Sản phẩm";
		break;
		case "page":
			$title_meta=title_meta__tham_so___xuat_mot_tin();
		break;
		case "chi_tiet_san_pham":
			$title_meta=title_meta__tham_so___chi_tiet_san_pham();
		break;
		case "xuat":
			$title_meta=title_meta__tham_so___xuat();
		break;
		default: $title_meta="Meta";
	}
?>