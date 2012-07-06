<?php 
	chong_pha_hoai();
?>
<?php 
	//echo $_POST['them_san_pham'];
	//alertMessage("dung lai");
	
	if($_POST['function']=="showcase_add_action")
	{
		include("function/module/showcase_add_action.php");
		gotoBack();
		exit();
	}
	
	if($_POST['function']=="showcase_modify_action")
	{
		include("function/module/showcase_modify_action.php");
		gotoBack();
		exit();
	}
	
	if($_POST['function']=="project_add_action")
	{
		include("function/module/project_add_action.php");
		gotoBack();
		exit();
	}
	
	if($_POST['function']=="project_modify_action")
	{
		include("function/module/project_modify_action.php");
		gotoBack();
		exit();
	}
	
	if($_POST['function']=="page_modify_action")
	{
		include("function/module/page_modify_action.php");
		gotoBack();
		exit();
	}
	
	
	if($_POST['function']=="menu_add_action")
	{
		include("function/module/menu_add_action.php");
		gotoBack();
		exit();
	}
	if($_POST['function']=="menu_modify_action")
	{
		include("function/module/menu_modify_action.php");
		gotoBack();
		exit();
	}
	if($_GET['function']=="menu_remove")
	{
		include("function/module/menu_remove.php");
		gotoBack();
		exit();
	}
	
	if($_POST['function']=="contact_modify_action")
	{
		include("function/module/contact_modify_action.php");
		gotoBack();
		exit();
	}
	if($_POST['function']=="banner_modify_action")
	{
		include("function/module/banner_modify_action.php");
		gotoBack();
		exit();
	}
	if($_POST['function']=="footer_modify_action")
	{
		include("function/module/footer_modify_action.php");
		gotoBack();
		exit();
	}
	if($_POST['function']=='admin_modify_action')
	{
		include("function/module/admin_modify_action.php");
		gotoBack();
		exit();
	}
?>