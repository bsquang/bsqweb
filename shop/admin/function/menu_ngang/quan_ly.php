<?php 
	chong_pha_hoai();
	//echo "trang quan ly menu doc";
?>
<?php 
	function tinh_st___rrr($so_gioi_han)
	{
		$tv="select count(*) from menu_ngang ";
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
	$st=tinh_st___rrr($so_gioi_han);
?>
<?php 
	$tv="select * from menu_ngang order by id limit $vtbd,$so_gioi_han ";
	$tv_1=mysql_query($tv);
?>

<div class="box">
<div class="box-header"><h1>menu ngang</h1></div>
<table style='margin: 5px;'>
	<thead>
		<tr>        
			<th>Name</th>
			<th>Actions</th>        
		</tr>
	</thead>
	<tbody>
	<?php 	
		while($tv_2=mysql_fetch_array($tv_1))
		{
			$link_sua="?thamso=sua_menu_ngang&id=$tv_2[id]&trang=$_GET[trang]";
			$link_xoa="?thamso=xoa_menu_ngang&id=$tv_2[id]";
			?>
			<tr>
				<!--<td><input type="checkbox" id="checkbox1" class="hiddenCheckbox"><label for="checkbox1" class="prettyCheckbox checkbox list"><span class="holderWrap" style="width: 18px; height: 19px; "><span class="holder" style="width: 18px; "></span></span></label></td>-->
				<td><a href="<?php echo $link_sua; ?>"><?php echo $tv_2['ten']; ?></a></td>
				<td><a href="<?php echo $link_sua; ?>">Edit</a>|<a href="<?php echo $link_xoa; ?>">Delete</a></td>
			</tr>
			<?php
		}	
	?>        
	</tbody>
</table>
</div>