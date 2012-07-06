<?php 
	session_start();
	
	include("../config.php");	
	include("../function/connect.php");
	include("../function/function.php");
	
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

<link type="text/css" href="../css/cupertino/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.20.custom.min.js"></script>

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>

<body>
	<?php 
		include("function/postget.php");
		include("function/admin_logout.php");
		include("function/admin_verify.php");
	?>
	<?php				
			if($xacdinh_dangnhap=="khong")
			{				
				include("function/admin_panel.php");
			}
			else 
			{										
				include("function/menu_admin.php");				
				include("function/process.php");
			}
	?>
</body>
</html>
