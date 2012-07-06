<?php 
	chong_pha_hoai();

	$tv="select * from thongtin_quantri where id='1'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	//print_r($tv_2);echo "<hr>";
	//alertMessage("dung lai");
	
	$ky_danh_cu=$tv_2['ky_danh'];
	$mat_khau_cu=$tv_2['mat_khau'];
	
	if($_POST['ky_danh']=="khong_thay_doi")
	{
		$ky_danh_thay_doi=$ky_danh_cu;
	}
	else 
	{
		$ky_danh_thay_doi=md5(md5($_POST['ky_danh']));
	}
	
	if($_POST['mat_khau']=="khong_thay_doi")
	{
		$mat_khau_thay_doi=$mat_khau_cu;
	}
	else 
	{
		$mat_khau_thay_doi=md5(md5($_POST['mat_khau']));
	}
	
	$r_tv="UPDATE `thongtin_quantri` SET
	`ky_danh` = '$ky_danh_thay_doi',
	`mat_khau` = '$mat_khau_thay_doi'
	WHERE `id` =1;";
	
	mysql_query($r_tv);
	
	gotoLink("?thamso=admin_edit&result=ok");
?>