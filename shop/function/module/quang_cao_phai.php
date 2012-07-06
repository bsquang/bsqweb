<?php 
	chong_pha_hoai();
?>
<?php 
	echo "<div class='cao_3_px'></div>";
	$tv="select * from quang_cao_phai order by id desc";
	$tv_1=mysql_query($tv);
	while($tv_2=mysql_fetch_array($tv_1))
	{
		$m=explode(".",$tv_2['file']);
		$duoi_file=$m[count($m)-1];
		$link_file="hinhanh_flash/quang_cao/".$tv_2['file'];
		$rong=$tv_2['rong'];
		$cao=$tv_2['cao'];
		$link_lien_ket=$tv_2['link'];
		if($duoi_file=="swf")
		{
			flash($link_file,$rong,$cao);
		}
		else 
		{
			echo "<a href='$link_lien_ket' target='_blank'>";
				echo "<img src='$link_file' width='$rong' height='$cao'>";
			echo "</a>";
			
		}
		echo "<br>";
		echo "<div class='cao_3_px'></div>";
	}
	echo "<div class='cao_3_px'></div>";
?>