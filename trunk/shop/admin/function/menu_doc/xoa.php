<?php 
	chong_pha_hoai();
?>
<?php 
	$z_tv="select count(*) from menu where thuoc_menu='$_GET[id]'";
	$z_tv_1=mysql_query($z_tv);
	$z_tv_2=mysql_fetch_row($z_tv_1);
?>
<?php 
	//thongbao();
	if($z_tv_2[0]==0)
	{
		$r_tv="select count(*) from san_pham where thuoc_menu='$_GET[id]'";
		$r_tv_1=mysql_query($r_tv);
		$r_tv_2=mysql_fetch_row($r_tv_1);
		if($r_tv_2[0]==0)
		{
			$tv_xoa="DELETE FROM `menu` WHERE `id` = '$_GET[id]'";
			mysql_query($tv_xoa);
		}
		else 
		{
			thongbao("Menu này đã có dữ liệu nên không được xóa\\nNếu muốn xóa menu này hãy xóa các dữ liệu nằm trong menu này");
		}
	}
	else 
	{
		thongbao("Không thể xóa menu này vì vẫn còn menu con trong nó\\nNếu bạn muốn xóa hãy xóa các menu con trước");
	}
?>