<?php 
	chong_pha_hoai();
	switch($_GET['thamso'])
	{	
		case "showcase":
			include("function/module/showcase.php");
		break;
		case "project":
			include("function/module/project.php");
		break;
		case "page":
			include("function/module/page.php");
		break;				
		case "lien_he":
			include("function/module/lien_he.php");
		break;
		default: include("function/module/home.php");
	}
?>
