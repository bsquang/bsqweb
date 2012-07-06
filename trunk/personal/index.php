<?php 
	ob_start();
	setcookie("gido","gido", time() +3600);
	session_start();
	
	ini_set('display_errors', 0);
	
	include("config.php");
	include("function/connect.php");
	include("function/meta.php");
	
	include("function/ajax/process.php");
	
	//BSQ Post
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

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.event.drag.min.js"></script>

<script type="text/javascript" src="js/royal-slider-8.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="js/slider/css/royalslider.css" />
<link rel="stylesheet" type="text/css" href="js/slider/css/royalslider-def.css" />

<link rel="stylesheet" type="text/css" href="js/jquery.mCustomScrollbar.css" />
<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>

</head>
<body>

<?php 
	include("function/function.php");
?>	
	<div id="page">
		<div id="header" >
			<div>
				<div id="logo">
					<?php 
						//include("function/module/logo.php");				
					?>
				</div>
				<div id="menu">
					<?php 
						include("function/module/menu.php");
					?>
				</div>				
			</div>			
		</div>
		<div class="bar"></div>
		<div id="mainbody">		
			<?php 
				include("function/process.php");
			?>
		</div>
		
		<div id="footer">
			<?php 
				include("function/module/footer.php");
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