<?php 
	chong_pha_hoai();

	//$noi_dung=addslashes($_POST['noi_dung']);
	$noi_dung=($_POST['noi_dung']);
	$r_tv="UPDATE `banner` SET `html` = '$noi_dung' WHERE `id` ='1';";
	mysql_query($r_tv);

?>