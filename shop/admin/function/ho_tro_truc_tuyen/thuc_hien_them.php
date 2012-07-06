<?php 
	chong_pha_hoai();
?>
<?php 
	if(trim($_POST['nick_yahoo'])=="")
	{
		thongbao("Không được bỏ trống nick yahoo");
		trangtruoc();
		exit();
	}
	$tv="
		INSERT INTO `ho_tro_truc_tuyen` (
		`id` ,
		`nick_name`
		)
		VALUES (
		NULL , '$_POST[nick_yahoo]'
		);	
	";
	mysql_query($tv);
?>