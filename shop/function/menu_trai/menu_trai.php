<?php 
	chong_pha_hoai();
?>
<!-- <li><a href="">Item 4</a></li> -->
<?php 
	function xac_dinh_menu_con__123($id_cha)
	{
		$tv="select count(*) from menu where thuoc_menu='$id_cha'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_row($tv_1);
		if($tv_2[0]==0)
		{
			return "khong";
		}
		else 
		{
			return "co";
		}
	}
	function de_quy_menu__fff($id_cha)
	{
		$tv="select * from menu where thuoc_menu='$id_cha'";
		$tv_1=mysql_query($tv);
		while($tv_2=mysql_fetch_array($tv_1))
		{
			$link="?thamso=xuat&id=$tv_2[id]";
			echo "<li>";
				echo "<a href='$link'>";
					echo $tv_2['ten'];
				echo "</a>";
				$xac_dinh_menu_con__123=xac_dinh_menu_con__123($tv_2['id']);
				if($xac_dinh_menu_con__123=="co")
				{
					echo "<ul>";
						de_quy_menu__fff($tv_2['id']);
					echo "</ul>";
				}
			echo "</li>";
		}	
	}
	
	
?>
<style>
.spanMenuText{	
	position: absolute;
	margin-left: -150px;
	margin-top: 108px;
	padding: 10px;
	color: #A70510;
	/*background-color:#a8a8a8;*/
	background-color:#fff;
}
.outBoxMenu{
	margin: 0 0 0 15px;
	position: fixed;
	top: 60px;
}
.boxMenu{
	margin: 5px;
}
.imageMenu{
	width: 150px;
	height: 150px;
}
</style>
<div class="outBoxMenu">			
	<?php 
		$tv="select * from menu where thuoc_menu=''";
		$tv_1=mysql_query($tv);
		while($tv_2=mysql_fetch_array($tv_1))
		{
			$link= $config['domain']."category-$tv_2[id]";
			//$link="?thamso=xuat&id=$tv_2[id]";			
			$picThumb = $tv_2['thumbnail'];
			$picThumb = explode('src="',$picThumb);
			$picThumb = explode('"',$picThumb[1]);
			$picThumb = $picThumb[0];
			$name = $tv_2['ten'];
			echo "<div class='boxMenu'>";
			echo "<a href='$link'>";
			echo "<img border='0' class='imageMenu' src='$picThumb'>";
			echo "<span class='spanMenuText'>$name</span>";
			//echo $tv_2['ten'];
			echo "</a>";
			echo "</div>";
			//$xac_dinh_menu_con__123=xac_dinh_menu_con__123($tv_2['id']);
			//if($xac_dinh_menu_con__123=="co")
			//{
			//	echo "<ul>";
			//		de_quy_menu__fff($tv_2['id']);
			//	echo "</ul>";
			//}				
		}
	?>		
</div>
