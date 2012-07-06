<?php 
	chong_pha_hoai();
?>
<?php 
	$ten_hinh=$_FILES['hinh_anh']['name'];
	kiem_tra_anh_flash_upload__ddd("hinh_anh");
	if($ten_hinh!="")
	{
		$ten_file__ccc=$ten_hinh;
	}
	else 
	{
		$ten_file__ccc=$_POST['hidden___value__hinh_anh'];
	}
	$tv="
		UPDATE `quang_cao_phai` SET `file` = '$ten_file__ccc',
		`rong` = '$_POST[rong]',
		`cao` = '$_POST[cao]',
		`link` = '$_POST[lien_ket]' WHERE `id` ='$_GET[id]';
	";
	mysql_query($tv);
	if($ten_hinh!="")
	{
		$duong_dan_upload="../hinhanh_flash/quang_cao/".$ten_hinh;
		move_uploaded_file($_FILES['hinh_anh']['tmp_name'],$duong_dan_upload);
	}
?>