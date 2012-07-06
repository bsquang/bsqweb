<?php 
	chong_pha_hoai();
?>
<?php 
	
	kiem_tra_anh_upload__ddd("thumbnail");
	
	if($_POST['name']!="")
	{
		$ten_hinh=$_FILES['thumbnail']['name'];
		
		if($ten_hinh!="")
		{			
			$duong_dan_upload="../resource/project/".$ten_hinh;			
			move_uploaded_file($_FILES['thumbnail']['tmp_name'],$duong_dan_upload);
			
			$chuoi="
				INSERT INTO `project` (
				`id` ,
				`name` ,
				`thumbnail` ,
				`detail` ,
				`url`,
				`date`,
				`slideshow`
				)
				VALUES ( 
				NULL , 
				'$_POST[name]', 
				'$ten_hinh', 
				'$_POST[detail]', 
				'$_POST[url]',
				'$_POST[date]',
				'$_POST[slideshow]'
				);
			";			
			
			if (mysql_query($chuoi))
			{
				alertMessage("Added item !");
				$URL="?thamso=project_manage&result=1";
				gotoLink($URL); 
			}
			else
			{
				alertMessage("Error creating database: " . mysql_error());
			}			
		}
		else 
		{
			alertMessage("Phải upload cả hình");
		}
	}
	else 
	{
		alertMessage("Không được bỏ trống tên sản phẩm");
	}
?>