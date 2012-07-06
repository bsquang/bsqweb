<?php 
	chong_pha_hoai();
?>
<section style='height: 100%;overflow: auto; padding: 5px'>
<?php
	switch($_GET['thamso'])
	{
		case "admin_edit":
			include("function/module/admin_modify.php");
		break;
		
		case "contact_edit":
			include("function/module/contact_modify.php");
		break;
		case "banner_edit":
			include("function/module/banner_modify.php");
		break;
		case "footer_edit":
			include("function/module/footer_modify.php");
		break;
	
		//Showcase
		case "showcase_add":
		    include("function/module/showcase_add.php");
		break;
		
		case "showcase_manage":
		    include("function/module/showcase_manage.php");
		break;
		
		case "showcase_modify":
		    include("function/module/showcase_modify.php");
		break;
		
		case "showcase_remove_action":
		    include("function/module/showcase_remove_action.php");
		break;
		//Project
		case "project_add":
		    include("function/module/project_add.php");
		break;
		
		case "project_manage":
		    include("function/module/project_manage.php");
		break;
		
		case "project_modify":
		    include("function/module/project_modify.php");
		break;
		
		case "project_remove_action":
		    include("function/module/project_remove_action.php");
		break;	    
		//Page
		case "page_modify":
		    include("function/module/page_modify.php");
		break;
	    
		case "page_manage":
		    include("function/module/page_manage.php");
		break;
		//Menu
		case "menu_add":
		    include("function/module/menu_add.php");
		break;
		
		case "menu_modify":
		    include("function/module/menu_modify.php");
		break;
	    
		case "menu_remove":
		    include("function/module/menu_remove.php");
		break;
	    
		case "menu_manage":
		    include("function/module/menu_manage.php");
		break;
	    
		default: include("function/trang_chu/trang_chu.php");
	}
?>
</section>