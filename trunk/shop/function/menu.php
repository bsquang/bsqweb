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
		
		display:inline-block;
		padding:5px 15px 10px 15px;
		
	}
	ul.menu_ngang li a:hover
	{
		background: rgba(222,222,222,1);
		color: #A70510;
	}
</style>

	<table cellpadding="0" cellspacing="0" style='margin-left: 48px;margin-top: 1px;'>
		<tr>
			<td>
				<ul class="menu_ngang">
					<?php 
						$tv="select * from menu_ngang order by id";
						$tv_1=mysql_query($tv);
						while($tv_2=mysql_fetch_array($tv_1))
						{
							$link=$config['domain']."".$tv_2['link'];
							echo "<li>";
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
