<?php 
	chong_pha_hoai();
?>
<style>	
	ul.menu_ngang
	{
		margin:0;
		padding:0;		
	}
	ul.menu_ngang li
	{		
		float:left;
		list-style:none;		
	}
	ul.menu_ngang li a
	{	
		padding-bottom: 5px;
		padding-right: 10px;
		padding-left: 10px;
		font-size: 20px;
		color: white;
		padding-top: 5px;
		
	}
	ul.menu_ngang li a:hover
	{
		background: #dc366e;
		color: #FFFFFF;
	}
</style>

	<table>
		<tr>
			<td>
				<ul class="menu_ngang">
					<?php 
						$tv="select * from menu order by id";
						$tv_1=mysql_query($tv);
						while($tv_2=mysql_fetch_array($tv_1))
						{
							$link=$config['domain']."".$tv_2['link'];
							echo "<li class='liMenu'>";
								echo "<a href='$link'>";
									echo $tv_2['ten'];
								echo "</a>";
							echo "</li>";
						}
					?>
				</ul>
			</td>
		</tr>
	</table>

<script>
	function here(id){	
		
		var obj = $('.liMenu')[id];
		$(obj).css({
			'background': '#dc366e',
			'color': '#FFFFFF'
		});
	}
</script>
