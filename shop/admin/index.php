<?php 
	session_start();
	
	include("../config.php");	
	include("../function/connect.php");
	include("../function/function.php");
	
	/*include("function/xu_ly_post_get/xu_ly_post_get.php");
	include("function/dang_nhap_quan_ly/thoat.php");
	include("function/dang_nhap_quan_ly/xacdinh_dangnhap.php");*/
	//echo md5(md5("admin"));
	
	ini_set('display_errors', 0);	
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=1024, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Quan ly</title>
<link rel="stylesheet" type="text/css" href="giao_dien/chung.css" />
<script type="text/javascript" src="giao_dien/chung.js"></script>
<link rel="stylesheet" type="text/css" href="giao_dien/menu/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="giao_dien/menu/ddsmoothmenu-v.css" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,700,600,800' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="giao_dien/jquery.min.js"></script>
<script type="text/javascript" src="giao_dien/menu/ddsmoothmenu.js"></script>

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>

<body>
	<?php 
		include("function/xu_ly_post_get/xu_ly_post_get.php");
		include("function/dang_nhap_quan_ly/thoat.php");
		include("function/dang_nhap_quan_ly/xacdinh_dangnhap.php");
	?>
	<?php				
			if($xacdinh_dangnhap=="khong")
			{				
				include("function/dang_nhap_quan_ly/khung_dang_nhap.php");
			}
			else 
			{										
				include("function/thanh_menu/thanh_menu.php");				
				include("function/bien_luan_phan_than/bien_luan_phan_than.php");
			}
	?>
</body>
</html>
