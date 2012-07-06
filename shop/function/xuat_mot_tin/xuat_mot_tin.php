<?php 
	chong_pha_hoai();
?>
<?php 
	//echo "day la trang xuat mot tin";
	$tv="select * from du_lieu_mot_tin where id='$_GET[id]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
?>
<?php if($tv_2['html']!=''){ ?>
<div class="outerBanner" style="position: absolute;width: 100%">
	<div id="itemSlider" class="royalSlider default">    		
		<?php echo $tv_2['html']; ?>	
	</div>
</div>
<?php }else{ ?>
<div style="position: fixed;top: 0;left: 0;right: 0;bottom: 0;z-index: 1;text-align: center;background: rgba(242,241,240,1);"> </div>
<?php } ?>

<style>
	.btHide{
		background: gray;
		position: absolute;
		right: 0;
		top: 0;
		margin: 0px 20px 0 0px;
		padding: 5px;
		color: whiteSmoke;
		cursor: pointer;
	}
	.btShow{
		display: none;
		background: gray;
		position: absolute;
		right: 0;
		top: 0;
		margin: 0px 30px 0 0px;
		padding: 5px;
		color: whiteSmoke;
		cursor: pointer;
	}
</style>

<div class='btShow' id='btShow'>Show</div>
<div id="boxInfo">
	<?php if($tv_2['html']!=''){ ?><div class='btHide' id='btHide'>Hide</div><?php } ?>
	<div style="margin-bottom: 10px;font-size: 14px;font-weight: bold;"><?php echo $tv_2['ten']; ?></div>
	<div class="customScrollBox">
		<div class="container">
			<div class="content">
				<?php echo $tv_2['noi_dung']; ?>
			</div>
		</div>
		<div class="dragger_container">
			<div class="dragger"></div>
		</div>
	</div>    
</div>
<?php if($tv_2['html']!=''){ ?>
<script>

$('#btShow').click(function(){
	$('#boxInfo').fadeIn("slow");
	$('#btShow').fadeOut("slow");
});
$('#btHide').click(function(){
	$('#boxInfo').fadeOut("slow");
	$('#btShow').fadeIn("slow");
});
//

var imgArr = $('#itemSlider').find('img');
var tempUL = "<ul class='royalSlidesContainer'>";
for(var i=0;i<imgArr.length;i++)
{
	var temp = '<li class="royalSlide">'+imgArr[i].outerHTML+'</li>';
	tempUL+=temp;
}
tempUL+='</ul>';
$('#itemSlider').html(tempUL);

// After add element, resize instant !!
resizeSlider();

$('#itemSlider').royalSlider({
	hideArrowOnLastSlide:true,
	slideSpacing:0
});		
//

function resizeSlider()
{	
	var _height = $(window).height()-60;
	var _width = $(window).width();
	
	$('.outerBanner').css({ height: _height	});
	
	$('#itemSlider').css({ width: _width	});
	$('#itemSlider').css({ height: _height	});	
	
	$('.royalSlide').css({ width: _width	});
	$('.royalSlide').css({ height: _height  });
	
	var imgArr = $('#itemSlider').find('img');
	$(imgArr).width(_width);
	$(imgArr).css({ height: 'auto'  });
};

$(window).resize(function(){ resizeSlider(); });
</script>
<?php } ?>

<script>
if($.browser.msie)
{
	$('#boxInfo').css({
		'margin-top':'-100px',
		'height':'300px'
	});
	
	$('#boxInfo .customScrollBox').css({		
		'height':'270px'
	});
	$('#boxInfo .dragger_container').css({		
		'height':'270px'
	});
	
	$("#boxInfo").mCustomScrollbar("vertical",270,"easeOutCirc",1.05,"auto","yes","yes",15); 
}else{
	$("#boxInfo").mCustomScrollbar("vertical",300,"easeOutCirc",1.05,"auto","yes","yes",15); 
}
</script>