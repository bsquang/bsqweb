<?php 
	chong_pha_hoai();

	$noi_dung=($_POST['noi_dung']);
	
	$r_tv="UPDATE `footer` SET `html` = '$noi_dung' WHERE `id` ='1';";
	mysql_query($r_tv);
?>