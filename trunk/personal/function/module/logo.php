<?php 
	chong_pha_hoai();
?>
<div>

<?php 
	$tv="select * from banner where id='1'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	echo $tv_2['html'];
?>

</div>