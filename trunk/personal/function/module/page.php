<?php 
	chong_pha_hoai();

	$tv="select * from page where id='$_GET[id]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
?>

<style>
	.outBox{
		position: relative;
		top: 45px;
		overflow: auto;
	}
</style>

<div class='outBox'>
	<div id="boxInfo">
		<?php echo $tv_2['noi_dung']; ?>
	</div>
</div>

<script>

$(window).resize(function(){
	resizeHeight();
});

function resizeHeight(){
	var _height = $(window).height() - (90+155);
	$('.outBox').css({ height: _height });	
}
resizeHeight();

if($.browser.msie)
{	
	$("#boxInfo").mCustomScrollbar("vertical",270,"easeOutCirc",1.05,"auto","yes","yes",15); 
}else{
	$("#boxInfo").mCustomScrollbar("vertical",300,"easeOutCirc",1.05,"auto","yes","yes",15); 
}
</script>