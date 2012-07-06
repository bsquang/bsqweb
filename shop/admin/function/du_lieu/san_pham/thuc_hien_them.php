<?php 
	chong_pha_hoai();
?>
<?php 
	$m_tv="select max(sap_xep_trang_chu) from san_pham";
	$m_tv_1=mysql_query($m_tv);
	$m_tv_2=mysql_fetch_row($m_tv_1);
	$max__sxtt=$m_tv_2[0]+1;
	kiem_tra_anh_upload__ddd("hinh_anh");
	
	if($_POST['ten']!="")
	{
		$ten_hinh=$_FILES['hinh_anh']['name'];
		
		if($ten_hinh!="")
		{			
			$duong_dan_upload="../hinhanh_flash/san_pham/".$ten_hinh;			
			move_uploaded_file($_FILES['hinh_anh']['tmp_name'],$duong_dan_upload);
			
			$chuoi="
				INSERT INTO `san_pham` (
				`id` ,
				`ten` ,
				`hinh_anh` ,
				`gia_ban` ,
				`noi_dung` ,
				`thuoc_menu`,
				`so_luong_mua`,
				`trang_chu`,
				`sap_xep_trang_chu`,
				`subdetail`,
				`code`,
				`status`
				)
				VALUES ( 
				NULL , 
				'$_POST[ten]', 
				'$ten_hinh', 
				'$_POST[gia]', 
				'$_POST[noi_dung]', 
				'$_POST[cap_do]',
				0,
				'$_POST[trang_chu]',
				'$max__sxtt',
				'$_POST[subdetail]',
				'$_POST[code]',
				'$_POST[status]'
				);
			";			
			
			if (mysql_query($chuoi))
			{
				thongbao("Added item !");
				$URL="?thamso=quan_ly_san_pham&result=1";
				header ("Location: $URL"); 
			}
			else
			{
				thongbao("Error creating database: " . mysql_error());
			}
			
			$_SESSION[$ten_danh_dau__kkk."cap_do___kkk"]=$_POST['cap_do'];
		}
		else 
		{
			thongbao("Phải upload cả hình");
		}
	}
	else 
	{
		thongbao("Không được bỏ trống tên sản phẩm");
	}
?>