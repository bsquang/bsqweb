<?php 
	chong_pha_hoai();
?>
<?php 
	$ten_hinh=$_FILES['hinh_anh']['name'];
	if($ten_hinh=="")
	{
		thongbao("Phải upload cả file");
		trangtruoc();
		exit();
	}
	kiem_tra_anh_flash_upload__ddd("hinh_anh");
	$tv="
		INSERT INTO `quang_cao_phai` (
		`id` ,
		`file` ,
		`rong` ,
		`cao` ,
		`link`
		)
		VALUES (
		NULL , '$ten_hinh', '$_POST[rong]', '$_POST[cao]', '$_POST[lien_ket]'
		);
	";
	mysql_query($tv);
	$duong_dan_upload="../hinhanh_flash/quang_cao/".$ten_hinh;
	move_uploaded_file($_FILES['hinh_anh']['tmp_name'],$duong_dan_upload);
?>