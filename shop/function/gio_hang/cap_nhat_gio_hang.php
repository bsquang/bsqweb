<?php 
	chong_pha_hoai();
	//thongbao("vao day");
?>
<?php
for($i=0;$i<count($_SESSION[$ten_danh_dau__kkk.'id_giohang']);$i++)
{
	$name="sl_kkk__$i";
	$_SESSION[$ten_danh_dau__kkk.'sl_abc'][$i]=$_POST[$name];
}
?>