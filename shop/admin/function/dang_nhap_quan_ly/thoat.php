<?php 
	chong_pha_hoai();
?>
<?php 
	if($_GET['thamso']=="thoat")
	{
		unset($_SESSION['ky_danh__hhh']);
		unset($_SESSION['mat_khau__hhh']);
		chuyentrang("index.php");
		exit();
	}
?>