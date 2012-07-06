<?php 
	chong_pha_hoai();
	//echo "trang lien he <hr>";
	$tv="select * from contact where id='2'";
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
		<?php echo $tv_2['gia_tri']; ?>
	</div>
</div>

<script>

$(window).resize(function(){
	resizeHeight();
});

function resizeHeight(){
	var _height = $(window).height() - (80+145);
	$('.outBox').css({ height: _height });	
}
resizeHeight();

if($.browser.msie)
{	
	$("#boxInfo").mCustomScrollbar("vertical",270,"easeOutCirc",1.05,"auto","yes","yes",15); 
}else{
	$("#boxInfo").mCustomScrollbar("vertical",300,"easeOutCirc",1.05,"auto","yes","yes",15); 
}

here(4);
</script>