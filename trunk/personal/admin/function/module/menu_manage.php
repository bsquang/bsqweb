<?php 
	chong_pha_hoai();
	
	$tv="select * from menu";
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
			$link_sua="?thamso=menu_modify&id=$tv_2[id]";
			$link_xoa="?thamso=menu_remove&id=$tv_2[id]";
			?>
			<tr>
				<td><a href="<?php echo $link_sua; ?>"><?php echo $tv_2['ten']; ?></a></td>
				<td><a href="<?php echo $link_sua; ?>">Edit</a>|<a href="<?php echo $link_xoa; ?>">Delete</a></td>
			</tr>
			<?php
		}	
	?>        
	</tbody>
</table>
</div>