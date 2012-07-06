<?php 
	chong_pha_hoai();
?>
<?php 
	echo "<div class='cao_3_px'></div>";
	echo "<div class='cao_3_px'></div>";
	$tv="select * from ho_tro_truc_tuyen order by id desc";
	$tv_1=mysql_query($tv);
	while($tv_2=mysql_fetch_array($tv_1))
	{
		//<a href="ymsgr:sendim?tphcm1990dokhacluan"><img src="http://opi.yahoo.com/online?u=tphcm1990dokhacluan&m=g&t=2" border="0"></a>
		echo "<a href='ymsgr:sendim?$tv_2[nick_name]'>";
			echo "<img src='http://opi.yahoo.com/online?u=$tv_2[nick_name]&m=g&t=2' border='0' >";
		echo "</a>";
		echo "<br>";
		echo "<div class='cao_3_px'></div>";
	}
	echo "<div class='cao_3_px'></div>";
?>