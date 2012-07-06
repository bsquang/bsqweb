<?php 
	ob_start();
	setcookie("gido","gido", time() +3600);
	session_start();
	
	ini_set('display_errors', 0);
	
	include("config.php");
	include("function/connect.php");
	include("function/meta.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<base href="<?php echo $config['hostBase'] ?>" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $config['name'] ?> - <?php echo $title_meta; ?></title>
<meta name="keywords" content="<?php echo $title_meta; ?>" />
<meta name="description" content="<?php echo $title_meta; ?>" />

<link rel="stylesheet" type="text/css" href="style/chung.css" />
<script type="text/javascript" src="style/chung.js"></script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.event.drag.min.js"></script>

<script type="text/javascript" src="js/royal-slider-8.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="js/slider/css/royalslider.css" />
<link rel="stylesheet" type="text/css" href="js/slider/css/royalslider-def.css" />

<!--<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
<meta name="viewport" content="width=device-width"/>-->

<link rel="stylesheet" type="text/css" href="js/jquery.mCustomScrollbar.css" />
<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>

</head>
<body>

<?php 
	include("function/function.php");
	//include("function/dang_ky_dang_nhap/xac_dinh_dang_nhap_thanh_vien.php");
	//include("function/postget.php");
	//include("function/gio_hang/chuyen_trang_fix_ie_button_back.php");
?>	
	<div id="page">
		<div id="header" >
			<div>
				<div id="logo">
					<?php 
						include("function/logo.php");				
					?>
				</div>
				<div id="menu">
					<?php 
						include("function/menu.php");
					?>
				</div>				
			</div>			
		</div>
		
		<div id="mainbody">		
			<?php 
				include("function/process.php");
			?>
		</div>
		
		<div id="footer">
			<?php 
				include("function/footer.php");
			?>
		</div>	
	</div>
	<script type = "text/javascript" >
	
	if($.browser.msie){		
		alert("We do not support Internet Explore ! Please use Firefox or Google Chrome !");
		window.location = 'http://www.google.com/chrome';
	}
	
	</script>
</body>
</html>

<?php ob_flush(); ?>

</body>
</html>