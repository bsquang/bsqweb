<?php 
	chong_pha_hoai();
?>
<div style="padding: 4px 20px 0 0px;float: right;">
<?php 
	$tv="select * from footer where id='1'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	echo $tv_2['html'];
?>
</div>