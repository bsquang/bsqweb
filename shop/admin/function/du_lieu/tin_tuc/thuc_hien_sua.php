<?php 
	chong_pha_hoai();
?>
<?php 
	$noi_dung=$_POST['noi_dung'];
	$noi_dung=addslashes($noi_dung);
	$ten_hinh=$_FILES["hinh_anh"]['name'];
	kiem_tra_anh_upload__ddd("hinh_anh");
	if($_POST['ten']!="")
	{
		if($ten_hinh!="")
		{		
			$duong_dan_upload="../hinhanh_flash/tin_tuc/".$ten_hinh;
			move_uploaded_file($_FILES['hinh_anh']['tmp_name'],$duong_dan_upload);
		}
		if($ten_hinh!="")
		{
			$ten_hinh__ccc=$ten_hinh;
		}
		else 
		{
			$ten_hinh__ccc=$_POST['hidden_hinh_anh'];
		}
		$chuoi="
			UPDATE `tin_tuc` SET `ten` = '$_POST[ten]',
			`hinh_anh` = '$ten_hinh__ccc',
			`noi_dung` = '$noi_dung'  
			where id='$_GET[id]'
		";
		mysql_query($chuoi);
		//echo $chuoi."<hr>";exit();
	}
	else 
	{
		thongbao("Không được bỏ trống tên sản phẩm");
	}
?>