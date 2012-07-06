<?php 
	chong_pha_hoai();
	//echo "vao day <hr>";
	$tv="select * from tin_tuc where id='$_GET[id]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$link_hinh="hinhanh_flash/san_pham/".$tv_2['hinh_anh'];
	/*echo "<center>";
		echo "<h1 style='color:red'>";
			echo $tv_2['ten'];
		echo "</h1>";
	echo "</center>";*/
	echo "<center>";
		echo "<div class='tdg___ggg'>";
			echo "<a href='#'>";
				echo $tv_2['ten'];
			echo "</a>";
		echo "</div>";
		echo "<div class='ndg___ggg'>";
			echo "<div style='margin-left:5px'>";
				echo $tv_2['noi_dung'];
			echo "</div>";
		echo "</div>";
	echo "</center>";
?>