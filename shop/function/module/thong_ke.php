<?php 
	chong_pha_hoai();
?>
<style>
	span.span__1
	{
		font-size:14px;
		color:#4362d3;
		font-weight:bold
	}
	span.span__2
	{
		font-size:14px;
		color:red;
		font-weight:bold
	}
</style>
<?php 
	function luot_truy_cap()
	{
		$tv="select * from luot_truy_cap where id='1'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2['luot_truy_cap'];
	}
	function tang_truy_cap()
	{
		$ltc=luot_truy_cap();
		$ltc_1=$ltc+1;
		$chuoi="UPDATE `luot_truy_cap` SET `luot_truy_cap` = '$ltc_1' WHERE `luot_truy_cap`.`id` ='1' LIMIT 1 ;";
		mysql_query($chuoi);
	}
	tang_truy_cap();
	$luot_truy_cap=luot_truy_cap();
?>
<?php 
	$tg__abc=900;
	$time=time();
	$time_1=$time-$tg__abc;
	//echo $_COOKIE[$ten_danh_dau__kkk."so_nguoi_online"]; echo "<hr>";
	if($_COOKIE[$ten_danh_dau__kkk."so_nguoi_online"]!="co")
	{
		//$_COOKIE[$ten_danh_dau."so_nguoi_online"]="co";
		setcookie($ten_danh_dau__kkk."so_nguoi_online","co", time() +$tg__abc);
		$kd=$_SESSION[$ten_danh_dau__kkk.'ky_danh__zzz'];
		$chuoi="INSERT INTO `so_nguoi_online` ( `id` , `time`,`ky_danh` )
			VALUES (
			NULL , '$time','$kd'
			);";
		mysql_query($chuoi);
	}
	$tv_xoa__ppp="DELETE FROM `so_nguoi_online` WHERE time<$time_1";
	mysql_query($tv_xoa__ppp);
	$b_tv="select count(*) from so_nguoi_online";
	$b_tv_1=mysql_query($b_tv);
	$b_tv_2=mysql_fetch_array($b_tv_1);
	$so_nguoi_on_line=$b_tv_2[0];
?>
<?php 
	$tv_online="select count(*) from so_nguoi_online where ky_danh!=''";
	$tv_online_1=mysql_query($tv_online);
	$tv_online_2=mysql_fetch_row($tv_online_1);
	$so_thanh_vien=$tv_online_2[0];
	$so_khach=$so_nguoi_on_line-$so_thanh_vien;
?>
<div class="tdk___456">
	<span>Thống kê</span>
</div>
<div class="ndk___456" >
	<div style="margin-left:10px">
		<span class="span__1">Lượt truy cập : </span><span class="span__2"><?php echo $luot_truy_cap; ?></span><br>
		<span class="span__1">Số người online : </span><span class="span__2"><?php echo $so_nguoi_on_line; ?></span> <br>
		<span class="span__1">+ Khách : </span><span class="span__2"><?php echo $so_khach; ?></span> <br>
		<span class="span__1">+ Thành viên : </span><span class="span__2"><?php echo $so_thanh_vien; ?></span>
	</div>
</div>