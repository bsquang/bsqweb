<?php 
	chong_pha_hoai();
	//echo "vao day <hr>";
?>
<style>
	a.link_3:link { font-size: 18px; text-decoration: none;  color: blue; }
	a.link_3:visited { font-size: 18px; color: blue; text-decoration: none; }
	a.link_3:hover { font-size: 18px; text-decoration: underline; color:#ff9900;  font-style: normal; }
	
    	#itemSlider {					
    		width: 100%;
    		height: 800px;
    	}
	.bttSize{
		background: gray;
		position: absolute;
		left: 0;
		top: 50%;
		margin: -20px 0px 0px 0px;
		padding: 5px;
		color: whiteSmoke;
		cursor: default;
	}
	.bttMove{
		background: gray;
		position: absolute;
		right: 0;
		top: 0;
		margin: 0px 15px 0 0px;
		padding: 5px;
		color: whiteSmoke;
		cursor: move;
	}
	.tipMini{
		background: url("images/ui/tipMinimize.png");
		width: 41px;
		height: 43px;
		background-repeat: no-repeat;
		position: absolute;
		left: 0;		
		top: 0;
		margin: 80px 0 0 20px;
		display: none;
	}
	.tipExpand{
		display: none;
		background: url("images/ui/tipExpand.png");
		width: 40px;
		height: 72px;
		background-repeat: no-repeat;
		position: absolute;
		left: 0;
		top: 0;
		margin: 80px 0px 0 -70px;
	}
	.tipMove{
		display: none;
		background: url("images/ui/tipDrag.png");
		width: 131px;
		height: 29px;
		background-repeat: no-repeat;
		position: absolute;
		right: 0;
		top: 0;
		margin: 32px 15px 0 0px;
	}
</style>


<?php
	$tv="select * from san_pham where id='$_GET[id]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$urlPicture="hinhanh_flash/san_pham/".$tv_2['hinh_anh'];
?>

<div style="position: fixed;top: 0;left: 0;right: 0;bottom: 0;z-index: 00;text-align: center;background: #DAD9D7;"></div>
<!--<div id="backgroundItem" style="position: absolute;left: 50%;margin: -366px 0 0 -550px;top: 50%;">-->

<div class="outerBanner" style="overflow: auto;width: 100%;position: fixed;margin-top: 34px;">
	<div id="itemSlider" class="royalSlider default" style="text-align: center">    
		<?php echo $tv_2['subdetail']; ?>	
	</div>
</div>

<!--<div id="backgItem">
	<div class="customScrollBox">
		<div class="container">
			<div class="content">
				<div id="itemSlider" class="royalSlider default" style="text-align: center">    
					
				</div>
			</div>
		</div>
		<div class="dragger_container">
			<div class="dragger"></div>
		</div>
	</div>    
</div>-->


<!--</div>  -->

<div class="detailItem clearfix" style="font-size: 13px;">
	<div class="imgItem" style="float: left">		
		<img id="image" border='0' src='<?php echo $urlPicture ?>' width='300' height='300'>		
	</div>
	<div class="outDesc" style="overflow-x: hidden; overflow-y: auto;max-height: 300px">
		<div style="width:395px;float:left;padding: 10px;">
			<div class='bttSize'>>></div>
			<div class='bttMove'>move</div>
			<div class='tipMini'></div>
			<div class='tipExpand'></div>
			<div class='tipMove'></div>
			
			<?php
				$price=number_format($tv_2['gia_ban'],0,".",".");
				$code=$tv_2['code']; if($code == '') $code='none';
				$status=$tv_2['status']; if($status == '') $status='none';
			?>
			
			<a href='#' style="font-weight: bold;font-size: 15px"><?php echo $tv_2['ten']; ?></a>			
			<br><b>Price : </b><span> <?php echo $price; ?>  VNĐ </span>
			<br><b>Code : </b><?php echo $code; ?>
			<br><b>Status : </b><?php echo $status; ?>			
			<br><br>
			<!--<div style="margin-top:5px">
			<form action=''>
				<b>Quantity : </b>
				<input style='width:50px' value='1' name='so_luong__nnn'>
				<br>
				<div style='overflow:hidden;width:5px;height:3px'></div>
				<input type='hidden' name='id_sp__nnn' value='<?php echo $tv_2[id] ?>'>
				<input type='hidden' name='them_vao_gio__nnn' value='them_vao_gio__nnn'>
				<input type="submit" value="Add to cart">				
			</form>
			</div>
			<br>-->
			<div id="contentItem">
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
		</div>
	</div>
</div>

<script>

var bShow = true;

// Button resize
$(".bttSize").mouseover(function(){
	if(bShow) $('.tipMini').show();
	else $('.tipExpand').show();
}).mouseout(function(){
	if(bShow) $('.tipMini').hide();
	else $('.tipExpand').hide();
});

// Button move
var is_chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
if($.browser.safari && !is_chrome){
	$(".bttMove").text('minimize');
	$(".bttMove").mousedown(function(){
		if(bShow){			
			$('.detailItem').css({
				'top': $(document).height() - 80
			});
			bShow = false;
		}
		else
		{
			$('.detailItem').css({
				'top': $(document).height()/2
			});
			bShow = true;
		}
		
		
	});
}

if(!$.browser.safari){
	$(".bttMove").bind("mouseenter",function(){
		$('.tipMove').show();	
	}).bind("mouseleave",function(){
		$('.tipMove').hide();	
	});
}


$("#backgroundItem").mousedown(function(){
	if(!bShow){
		rePosDetail();
		$(".detailItem").show("normal");
		bShow = true;
	}
});

$(".bttSize").mousedown(function(){
	if(bShow){
		//$(".imgItem").hide("slow");
		$('.tipMini').fadeOut();
		$(".imgItem").fadeOut(200,function(){
			//$(".outDesc").css({"max-height":200});
			if($.browser.mozilla){$('.detailItem').css({ 'width':'415px' });}
			
			$(".bttSize").css({"margin":'-20px 0px 0px -25px'});
			$(".bttSize").text('<<');
			bShow = false;
		});
	}else{
		$('.tipExpand').fadeOut();
		$(".imgItem").fadeIn(200,function(){
			//$(".outDesc").css({"max-height":300});
			if($.browser.mozilla){$('.detailItem').css({ 'width':'715px' });}
			$(".bttSize").css({"margin":'-20px 0px 0px 0px'});
			$(".bttSize").text('>>');
			bShow = true;
		});
	}
});

if($.browser.msie || $.browser.mozilla){
	$('.outerBanner').css({
		'margin-top':'0px'
	});	
	
	if($.browser.msie){		
		$('.detailItem').css({			
			'box-shadow':'none',
			'border':'1px solid black'
		});
	}
	
	if($.browser.mozilla)
	{
		$('.detailItem').css({			
			'width':'715px',
			'box-shadow':'none',
			'border':'1px solid black'
		});
	}
}

function rePosDetail(){
	
	var _w = $('.detailItem').width();
	var _h = $('.detailItem').height();

	$('.detailItem').css({
		left: ($(document).width()-_w)/2,
		top: (($(document).height()-_h)/2)+100
	});
	
}
rePosDetail();

$(window).resize(function(){
	rePosDetail();
	resizeOuter();
});

$('.detailItem').drag(function( ev, dd )
	{
		$( this ).css(
		{
			top: dd.offsetY,
			left: dd.offsetX
		});
	},{ handle: ".bttMove" }
);     
	
function resizeOuter()
{
	$('.outerBanner').css({
		height: $(document).height()-60
	});
};
resizeOuter();

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

$('#itemSlider').royalSlider({			
	//imageAlignCenter:true,
	//imageScaleMode: "none",	
	hideArrowOnLastSlide:true,
	slideSpacing:20	
});		
//

$("#contentItem").mCustomScrollbar("vertical",300,"easeOutCirc",1.05,"auto","yes","yes",15);
//$("#backgItem").mCustomScrollbar("vertical",300,"easeOutCirc",1.05,"auto","yes","yes",15); 
</script>