<?php 
	chong_pha_hoai();
?>

<nav class='primary' >
<ul class='nav'>
	<li><a class='nav-top no-sub' href="index.php">Trang chủ</a></li>	
	<li>
		<a class='nav-top' href="#">Manage</a>	
		<ul>
			<?php if($config['menu']==true) echo '<li><a href="?thamso=menu_manage">Menu</a></li>' ?>
			<?php if($config['showcase']==true) echo '<li><a href="?thamso=showcase_manage">Showcase</a></li>' ?>
			<?php if($config['project']==true) echo '<li><a href="?thamso=project_manage">Project</a></li>' ?>
			<?php if($config['page']==true) echo '<li><a href="?thamso=page_manage">Page</a></li>' ?>			
		</ul>
	</li>	
	<li>
		<a class='nav-top' href="#">Cụm chức năng</a>	
		<ul>	
			<?php if($config['adminInfo']==true) echo '<li><a href="?thamso=admin_edit">Thông tin quản trị</a></li>' ?>
			<?php if($config['banner']==true) echo '<li><a href="?thamso=banner_edit">Thay đổi banner</a></li>' ?>
			<?php if($config['footer']==true) echo '<li><a href="?thamso=footer_edit">Thay đổi footer</a></li>' ?>
			<?php if($config['contact']==true) echo '<li><a href="?thamso=contact_edit">Thay đổi contact</a></li>' ?>			
			
		</ul>
	</li>
	<li><a href="\home">View web</a></li>
	<li><a href="?function=admin_logout">Thoát</a></li>
</ul>
</nav>
<script>
	$('.nav li ul').hide();
	$(".nav li a.nav-top").click( // When a top menu item is clicked...
			function () {
				$(this).parent().siblings().find("ul").slideUp("normal"); // Slide up all sub menus except the one clicked
				$(this).next().slideToggle("normal"); // Slide down the clicked sub menu
				return false;
			}
		);
	$(".no-sub").click( // When a menu item with no sub menu is clicked...
			function () {
				window.location.href=(this.href); // Just open the link instead of a sub menu
				return false;
			}
		);
	$(".nav li a.nav-top").hover(
			function () {
				$(this).stop().animate({ paddingRight: "25px" }, 200);
			}, 
			function () {
				$(this).stop().animate({ paddingRight: "10px" });
			}
		);	
	
</script>