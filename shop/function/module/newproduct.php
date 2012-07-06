<?php 
	chong_pha_hoai();	
?>
<style>
	.ulItem{
		margin: 0;
		padding: 0;
		list-style-type: none;
		text-align: center;
	}
	.ulItem li{
		display: inline;
		/*margin-right: 5px;*/
	}
	.ulItem li img{
		width: 110px;
		height: 110px;
	}	
	.boxItem{				
		margin: 10px auto;
	}
	.outBoxItem{
		text-align: center;
		overflow: hidden;
		width: 100%;
		height: 130px;					
		z-index: 80;
		background: rgba(1, 1, 1, 0.1);
		position: fixed;
		bottom: 0;
		margin-bottom: 26px;
	}
	
</style>

<div class='outBoxItem'>
	<div class='boxItem'>
		<ul class='ulItem'>	
		<?php
		$tv="select * from san_pham order by id desc limit 0,8";		
		$tv_1=mysql_query($tv);
		while($tv_2=mysql_fetch_array($tv_1))
		{			
			if($tv_2['ten']!="")
			{
				//$link_chi_tiet="?thamso=chi_tiet_san_pham&id=$tv_2[id]";
				$link_chi_tiet= $config['domain']."item-$tv_2[id]";
				$link_hinh="hinhanh_flash/san_pham/".$tv_2['hinh_anh'];
				$dinh_dang_gia=number_format($tv_2['gia_ban'],0,".",".");			
				
				echo "<li class='liItem'>";
				echo "<a href='$link_chi_tiet'>";
				echo "<img border='0' src='$link_hinh' width='230px' height='230px'>";
				echo "</a>";				
				echo "</li>";				
			}			
			
		}	
		?>
		</ul>
	</div>
</div>