<?php 
	chong_pha_hoai();
?>

<nav class='primary' >
<ul class='nav'>
	<li><a class='nav-top no-sub' href="index.php">Trang chủ</a></li>
	<li>
		<a class='nav-top' href="#">Menu</a>	
		<ul>			
			<?php if($config['category']==true) echo '<li><a href="?thamso=quan_ly_menu_doc">Quản lý menu dọc</a></li>' ?>
			<?php if($config['menu']==true) echo '<li><a href="?thamso=quan_ly_menu_ngang">Quản lý menu ngang</a></li>' ?>
		</ul>
	</li>
	<li>
		<a class='nav-top' href="#">Quản lý dữ liệu</a>	
		<ul>			
			<?php if($config['item']==true) echo '<li><a href="?thamso=quan_ly_san_pham">Sản phẩm</a></li>' ?>
			<?php if($config['page']==true) echo '<li><a href="?thamso=quan_ly_du_lieu_mot_tin">Trang</a></li>' ?>
		</ul>
	</li>	
	<li>
		<a class='nav-top' href="#">Cụm chức năng</a>	
		<ul>			
			<?php if($config['homeItem']==true) echo '<li><a href="?thamso=quan_ly_san_pham_trang_chu">Sản phẩm trang chủ</a></li>' ?>			
			<?php if($config['adminInfo']==true) echo '<li><a href="?thamso=thay_doi_thong_tin_quan_tri">Thông tin quản trị</a></li>' ?>
			<?php if($config['banner']==true) echo '<li><a href="?thamso=banner_edit">Thay đổi banner</a></li>' ?>
			<?php if($config['footer']==true) echo '<li><a href="?thamso=footer_edit">Thay đổi footer</a></li>' ?>
			<?php if($config['contact']==true) echo '<li><a href="?thamso=contact_edit">Thay đổi contact</a></li>' ?>
			<li><a href="?thamso=slideshow_edit">Thay đổi slideshow</a></li>
			
		</ul>
	</li>
	<li><a href="\home">View web</a></li>
	<li><a href="?thamso=thoat">Thoát</a></li>
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
<?php
//<li><a href="?thamso=bien_luan_link_menu__httt">Hỗ trợ trực tuyến</a>
//<ul>
//	<li><a href="?thamso=them_nick_yahoo">Thêm liên lạc</a></li>
//	<li><a href="?thamso=quan_ly_phan_ho_tro_truc_tuyen">Quản lý</a></li>
//</ul>
//</li>
//<li><a href="?thamso=bien_luan_link_menu__qctp">Quãng cáo</a>
//<ul>
//	<li><a href="?thamso=bien_luan_link_menu__qct">Quãng cáo trái</a>
//		<ul>
//			<li><a href="?thamso=them_quang_cao_trai">Thêm</a></li>
//			<li><a href="?thamso=quan_ly_quang_cao_trai">Quản lý</a></li>
//		</ul>
//	</li>
//	<li><a href="?thamso=bien_luan_link_menu__qcp">Quãng cáo phải</a>
//		<ul>
//			<li><a href="?thamso=them_quang_cao_phai">Thêm</a></li>
//			<li><a href="?thamso=quan_ly_quang_cao_phai">Quản lý</a></li>
//		</ul>
//	</li>
//</ul>
//</li>
//<li><a href="?thamso=thay_doi_banner">Thay đổi banner</a></li>
?>