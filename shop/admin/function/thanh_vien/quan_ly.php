<?php 
	chong_pha_hoai();
	//echo "trang quan ly thanh vien";
?>
<style>
	a.thua__link_1:link { font-size: 14px; text-decoration: none;  color: #0b55c4; }
	a.thua__link_1:visited { font-size: 14px; color: #0b55c4; text-decoration: none; }
	a.thua__link_1:hover { font-size: 14px; text-decoration: none; color: #084095;  font-style: normal; }
</style>
<?php 
	if($_GET['tu_khoa']=="")
	{
		$tu_khoa_input="Nhập ký danh cần tìm";
	}
	else 
	{
		$tu_khoa_input=$_GET['tu_khoa'];
	}
?>
<form action="">
	<input type="hidden" name="thamso" value="quan_ly_thanh_vien">
	<center>
		<table width="968px" style="text-align:left;clear:left">
			<tr>
				<td width="220px">
					<input name="tu_khoa" style="width:200px" value="<?php echo $tu_khoa_input; ?>" name="tu_khoa" onfocus="if (this.value=='<?php echo $tu_khoa_input; ?>'){this.value=''};this.style.backgroundColor='#fffde8';" onblur="this.style.backgroundColor='#ffffff';">
				</td>
				<td>
					<input type="hidden" name="tim_kiem_thanh_vien" value="tim_kiem_thanh_vien">
					<!--<input type="submit" value="Tìm kiếm">-->
					<input type="image" src="../hinhanh_flash/dung_chung/3.png" style="border:0px solid red">
				</td>
			</tr>
		</table>
	</center>
</form>
<?php 
	$tu_khoa=$_GET['tu_khoa'];
	$mang_tk__abc=explode(" ",$tu_khoa);
	$chuoi_or="";
	for($f=0;$f<count($mang_tk__abc);$f++)
	{
		$q=$mang_tk__abc[$f];
		if($q!="")
		{
			$chuoi_or=$chuoi_or."ky_danh like '%$q%' or ";
		}
	}
	$chuoi_or=substr($chuoi_or,0,-3);
?>
<?php 
	function tinh_st___rrr($so_gioi_han,$chuoi_or)
	{
		if($_GET['tim_kiem_thanh_vien']!="tim_kiem_thanh_vien")
		{
			$tv="select count(*) from thanh_vien";
		}
		else 
		{
			$tv="select count(*) from thanh_vien where ( $chuoi_or )";	
		}
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);		
		$st=ceil($tv_2[0]/$so_gioi_han);
		return $st;
	}
?>
<?php 
	$ssp_td=1;
	$sd=20;
	$so_gioi_han=$ssp_td*$sd;
	if($_GET['trang']=="")
	{
		$vtbd=0;
	}
	else 
	{
		$vtbd=($_GET['trang']-1)*$so_gioi_han;
	}
	$st=tinh_st___rrr($so_gioi_han,$chuoi_or);
?>
<center>
	<table width="968px" border="1" style="margin:6px" id="er" >
		<tr>
			<td width="155px" align="left"><b>Ký danh</b></td>	
			<td width="155px" align="left"><b>Mật khẩu</b></td>
			<td width="250px" align="left"><b>Email</b></td>
			<td width="200px" align="left"><b>Điện thoại</b></td>
			<td width="100px" align="center"><b>Sữa</b></td>
			<td width="100px" align="center"><b>Xóa</b></td>
		</tr>
		<?php 
			if($_GET['tim_kiem_thanh_vien']!="tim_kiem_thanh_vien")
			{
				$tv="select * from thanh_vien order by id desc limit $vtbd,$so_gioi_han";
			}
			else 
			{
				$tv="select * from thanh_vien where ( $chuoi_or ) order by id desc limit $vtbd,$so_gioi_han";
			}
			$tv_1=mysql_query($tv);
			while($tv_2=mysql_fetch_array($tv_1))
			{
				$link_sua="?thamso=sua_thanh_vien&id=$tv_2[id]&trang=$_GET[trang]";
				$link_xoa="?thamso=xoa_thanh_vien&id=$tv_2[id]";
				?>
					<tr>
						<td width="155px" align="left"><a href="<?php echo $link_sua; ?>" align="left" class="thua__link_1"><?php echo $tv_2['ky_danh']; ?></a></td>	
						<td width="155px" align="left">Đã được mã hóa</td>
						<td width="250px" align="left"><?php echo $tv_2['email']; ?></td>
						<td width="200px" align="left"><?php echo $tv_2['dien_thoai']; ?></td>
						<td width="100px" align="center"><a href="<?php echo $link_sua; ?>" class="sua_xoa" >Sữa</a></td>
						<td width="100px" align="center"><a href="<?php echo $link_xoa; ?>" class="sua_xoa" >Xóa</a></td>
					</tr>
				<?php 
			}
		?>
		<tr>
			<td colspan="6" align="center">
				<?php 
					/*for($i=1;$i<=$st;$i++)
					{
						if($_GET['tim_kiem_thanh_vien']!="tim_kiem_thanh_vien")
						{
							$link="?thamso=quan_ly_thanh_vien&trang=$i";
						}
						else 
						{
							$link="?thamso=quan_ly_thanh_vien&tim_kiem_thanh_vien=tim_kiem_thanh_vien&tu_khoa=$_GET[tu_khoa]&trang=$i";
						}
						echo "<a href='$link'>";
							echo $i;
						echo "</a>";echo " ";
					}*/
					xuat_link($st);
				?>
			</td>
		</tr>
	</table>
</center>
<script>
	table_css_2("er");
</script>