<?php 
	chong_pha_hoai();

	function tinh_st___rrr($so_gioi_han)
	{
		$tv="select count(*) from hoa_don";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);		
		$st=ceil($tv_2[0]/$so_gioi_han);
		return $st;
	}

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
	$st=tinh_st___rrr($so_gioi_han);
?>
<div class="box">
  <div class="box-header">
    <h1>menu ngang</h1>
  </div>
<table>
<thead>
	<tr>
		<th width="155px" align="left"><b>Người gửi hóa đơn</b></th>			
		<th width="250px" align="left"><b>Email</b></th>
		<th width="200px" align="left"><b>Điện thoại</b></th>
		<th width="200px" align="center"><b>Hành động</th>
	</tr>
</thead>
<tbody>
<?php 
	$tv="select * from hoa_don order by id desc limit $vtbd,$so_gioi_han ";
	$tv_1=mysql_query($tv);
	while($tv_2=mysql_fetch_array($tv_1))
	{
		$link_xem_hoa_don="?thamso=xem_hoa_don&id=$tv_2[id]&trang=$_GET[trang]";
		$link_xoa_hoa_don="?thamso=xoa_hoa_don&id=$tv_2[id]";
		?>
			<tr>
				<td width="155px" align="left"><a href="<?php echo $link_xem_hoa_don; ?>" class="thua__link_1"><?php echo $tv_2['ho_ten'];?></a></td>						
				<td width="250px" align="left"><?php echo $tv_2['hom_thu'];?></td>
				<td width="200px" align="left"><?php echo $tv_2['dien_thoai'];?></td>
				<td width="200px" align="center"><a href="<?php echo $link_xem_hoa_don; ?>" class="sua_xoa" >Xem</a>|<a href="<?php echo $link_xoa_hoa_don; ?>" class="sua_xoa" >Xóa</a></td>
			</tr>
		<?php 	
	}
?>

<tr>
	<td colspan="6" align="center">
		<?php 
			/*for($i=1;$i<=$st;$i++)
			{
				$link="?thamso=quan_ly_hoa_don&trang=$i";
				echo "<a href='$link'>";
					echo $i;
				echo "</a>";echo " ";
			}*/
			xuat_link($st);
		?>
	</td>
</tr>
</tbody>
</table>
</div>