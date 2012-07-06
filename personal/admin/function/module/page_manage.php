<?php 
	chong_pha_hoai();

	$tv="select * from page";
	$tv_1=mysql_query($tv);
?>

<div class='box'>
	<div class='box-header'><h1>Page manage</h1></div>
	<table border="0" style="clear:left;margin:6px">
		<tr>
			<td width="20px" align="center"><b>ID</b></td>			
			<td width="120px"><b>Tên menu</b></td>
			<td width="120px"><b>Tiêu đề</b></td>
			<td width="300px"><b>Link menu</b></td>
			<td width="20px" align="center"><b>Action</b></td>
		</tr>
		<?php 
			while($tv_2=mysql_fetch_array($tv_1))
			{
				$link_sua="?thamso=page_modify&id=".$tv_2['id'];				
				?>
					<tr>
						<td align="center">
							<?php echo $tv_2['id']; ?>
						</td>						
						<td >
							<a href="<?php echo $link_sua; ?>">
								<?php echo $tv_2['ten_menu']; ?>
							</a>
						</td>
						<td align="left"><?php echo $tv_2['ten']; ?></td>
						<td align="left">
							<?php 
								$link_menu="?thamso=page&id=$tv_2[id]";
								echo $link_menu;
							?>
						</td>
						<td align="center">
							<a href="<?php echo $link_sua; ?>">Edit</a>
						</td>
					</tr>
				<?php
			}
		?>		
	</table>
</div>