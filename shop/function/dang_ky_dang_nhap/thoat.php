<?php 
	chong_pha_hoai();
?>
<?php 
	$kd=$_SESSION[$ten_danh_dau__kkk.'ky_danh__zzz'];
	unset($_SESSION[$ten_danh_dau__kkk.'ky_danh__zzz']);
	unset($_SESSION[$ten_danh_dau__kkk.'mat_khau__zzz']);
	$tv_u="UPDATE `so_nguoi_online` SET `ky_danh` = '' WHERE `so_nguoi_online`.`ky_danh` = '$kd' LIMIT 1 ";
	mysql_query($tv_u);
?>