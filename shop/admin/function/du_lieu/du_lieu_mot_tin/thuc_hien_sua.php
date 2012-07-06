<?php 
	chong_pha_hoai();
?>
<?php 
	$noi_dung=$_POST['noi_dung'];
	//$noi_dung=addslashes($noi_dung);	
	
	$noi_dung2=$_POST['noi_dung2'];
	//$noi_dung2=addslashes($noi_dung2);
	
	$ten_hinh=$_FILES["hinh_anh"]['name'];
	
	if($_POST['ten']!="")
	{
		$chuoi="
			UPDATE `du_lieu_mot_tin` SET `ten` = '$_POST[ten]',
			`ten_menu` = '$_POST[ten_menu]',
			`noi_dung` = '$noi_dung',
			`html` = '$noi_dung2'
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