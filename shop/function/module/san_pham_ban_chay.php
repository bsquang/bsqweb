<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select * from san_pham order by so_luong_mua desc limit 0,3";
	$tv_1=mysql_query($tv);
	echo "<div class='cao_3_px'></div>";
	while($tv_2=mysql_fetch_array($tv_1))
	{
		echo '<div class="khung_bao_ngoai___j90">';
			$link_hinh="hinhanh_flash/san_pham/".$tv_2['hinh_anh'];
			$link_chi_tiet="?thamso=chi_tiet_san_pham&id=$tv_2[id]";
			echo "<div>";
				echo "<center>";
					echo "<a href='$link_chi_tiet'  >";					
						echo "<img src='$link_hinh' border='0' width='90px' height='102px'>";
					echo "</a>";
					echo "<br>";
					echo "<a href='$link_chi_tiet' class='link_8' >";
						echo $tv_2['ten'];
					echo "</a>";
					echo "<br>";
					//echo $tv_2['gia_ban']; echo " VNĐ";
					$dinh_dang_gia=number_format($tv_2['gia_ban'],0,".",".");
					echo "<span class='gia_ban'>";
						echo $dinh_dang_gia; echo " VNĐ";
					echo "</span>";
				echo "</center>";
			echo "</div>";
		echo "</div>";
		echo "<div class='cao_3_px'></div>";
	}
?>