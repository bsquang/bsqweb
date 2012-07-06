<?php 
	chong_pha_hoai();
?>
<?php 
	kiem_tra_anh_upload__ddd("hinh_anh");
	if($_POST['ten']!="")
	{
		$ten_hinh=$_FILES['hinh_anh']['name'];
		if($ten_hinh!="")
		{
			$duong_dan_upload="../hinhanh_flash/tin_tuc/".$ten_hinh;
			move_uploaded_file($_FILES['hinh_anh']['tmp_name'],$duong_dan_upload);
			$chuoi="
				INSERT INTO `tin_tuc` (
				`id` ,
				`ten` ,
				`hinh_anh` ,
				`noi_dung`
				)
				VALUES (
				NULL , '$_POST[ten]', '$ten_hinh',  '$_POST[noi_dung]'
				);
			";
			//thongbao($chuoi);
			mysql_query($chuoi);
			//$_SESSION[$ten_danh_dau__kkk."cap_do___kkk"]=$_POST['cap_do'];
		}
		else 
		{
			thongbao("Phải upload cả hình");
		}
	}
	else 
	{
		thongbao("Không được bỏ trống tên sản phẩm");
	}
?>