<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="UPDATE `lien_he` SET `gia_tri` = '$_POST[email_lien_he]' WHERE `id` ='1';";
	mysql_query($tv);
?>
<?php 
	//$noi_dung=addslashes($_POST['noi_dung']);
	$noi_dung=($_POST['noi_dung']);
	$r_tv="UPDATE `lien_he` SET `gia_tri` = '$noi_dung' WHERE `id` ='2';";
	mysql_query($r_tv);
?>