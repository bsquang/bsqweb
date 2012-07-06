<?php 
	chong_pha_hoai();
?>
<?php 
	$noi_dung=$_POST['detail'];
	$noi_dung=addslashes($noi_dung);
	
	$ten_hinh=$_FILES["thumbnail"]['name'];
	kiem_tra_anh_upload__ddd("thumbnail");
	if($_POST['name']!="")
	{
		if($ten_hinh!="")
		{		
			$duong_dan_upload="../resource/showcase/".$ten_hinh;
			move_uploaded_file($_FILES['thumbnail']['tmp_name'],$duong_dan_upload);
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
			UPDATE `showcase` SET `name` = '$_POST[name]',
			`thumbnail` = '$ten_hinh__ccc',
			`url` = '$_POST[url]',
			`detail` = '$noi_dung',
			`date` = '$_POST[date]',
			`slideshow` = '$_POST[slideshow]'
			where id='$_GET[id]'
		";
		mysql_query($chuoi);
		
		$URL="?thamso=showcase_manage&result=2";
		gotoLink($URL);
		
	}
	else 
	{
		alertMessage("Không được bỏ trống tên sản phẩm");
	}
?>