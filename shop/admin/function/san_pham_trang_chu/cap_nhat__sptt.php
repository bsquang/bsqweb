<?php 
	chong_pha_hoai();
?>
<?php 
	//print_r($_POST);echo "<hr>";
	//echo $_POST['so_jem'];echo "<hr>";
	$so_jem=$_POST['so_jem'];
	//thongbao("sssss");
	if($_POST['cn___trang_chu']=="Cập nhật")
	{
		//thongbao("cap nhat trang chu");
		for($i=1;$i<$so_jem;$i++)
		{
			$name="cn___trang_chu____$i";
			$post_name=$_POST[$name];
			//echo $post_name."<hr>";
			$ten_id="ten_id___$i";
			$id=$_POST[$ten_id];
			$tv="UPDATE `san_pham` SET `trang_chu` = '$post_name' WHERE `id` ='$id';";
			//echo $tv."<hr>";
			mysql_query($tv);
		}		
		//thongbao("dung lai");
		trangtruoc();
		exit();
	}
	if($_POST['cn___sap_xep']=="Cập nhật")
	{
		//thongbao("cap nhat sap xep trang chu");
		for($i=1;$i<$so_jem;$i++)
		{
			$name="cn___sap_xep____$i";
			$post_name=$_POST[$name];
			//echo $post_name."<hr>";
			$ten_id="ten_id___$i";
			$id=$_POST[$ten_id];
			$tv="UPDATE `san_pham` SET `sap_xep_trang_chu` = '$post_name' WHERE `id` ='$id';";
			//echo $tv."<hr>";
			mysql_query($tv);
		}		
		//thongbao("dung lai");
		trangtruoc();
		exit();
	}
?>