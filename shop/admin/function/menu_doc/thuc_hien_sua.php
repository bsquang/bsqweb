<?php 
	chong_pha_hoai();
?>
<?php 
	if($_POST['ten_menu']=="")
	{
		thongbao("Không được bỏ trống tên menu");
		trangtruoc();
		exit();
	}
	$tv=" UPDATE `menu` SET
	`ten` = '$_POST[ten_menu]',	
	`thumbnail`= '$_POST[thumbnail]'
	WHERE `menu`.`id` ='$_GET[id]';		
	";
	
	mysql_query($tv);
?>