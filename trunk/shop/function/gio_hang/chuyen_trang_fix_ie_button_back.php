<?php 
	chong_pha_hoai();
	if($_SESSION[$ten_danh_dau."fix_ie_button_back__abc"]=="co")
	{
		unset($_SESSION[$ten_danh_dau."fix_ie_button_back__abc"]);
		chuyentrang("?thamso=gio_hang");
		exit();
	}
?>