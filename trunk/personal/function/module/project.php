<?php 
	chong_pha_hoai();
?>
<style>
/**** Isotope Filtering ****/
.item{
	width:200px;
	height:200px;
	float: left;
	overflow: hidden;
	position: relative;
	
	margin-left:2px;
	margin-bottom: 2px;
	
	cursor: pointer;
	
	opacity: 0;
	
	animation:myfirst 2s;
	-moz-animation:myfirst 2s; /* Firefox */
	-webkit-animation:myfirst 2s; /* Safari and Chrome */
	
	animation-fill-mode:forwards;
	-webkit-animation-fill-mode:forwards;
}

@keyframes myfirst
{
from {opacity: 0;}
to {opacity: 1;}
}

@-moz-keyframes myfirst /* Firefox */
{
from {opacity: 0;}
to {opacity: 1;}
}

@-webkit-keyframes myfirst /* Safari and Chrome */
{
from {opacity: 0;}
to {opacity: 1;}
}

.item img{	
	width:200px;
	height: auto;        
        
}

#itemSlider {					
	width: 400px;
	height: 200px;
}

.pageTitle{
	margin: 20px 20px 10px;
	font-size: 22px;
}

</style>

<div class='outBoxItem'>
<div class='pageTitle'>Showcase</div>
<div class='boxItem'>
<table>
	<tr>
		<td>
			<div id="container" class='clearfix'></div>
		</td>
	</tr>
</table>	
</div>
</div>

<script>
var heightHF = 148+80+5;
function reWidthOutBoxItem(){	
	$('.outBoxItem').css({
		width: $(document).width()
	});
	$('.boxItem').css({
		width: $('.outBoxItem').width()
	});
}

function reHeightOutBoxItem(){
	$('.outBoxItem').css({ height: $(document).height()-heightHF });
}

reWidthOutBoxItem();
reHeightOutBoxItem();
</script>

<div class='fixedBackground'></div>
<div class="detailItem" style="font-size:13px;top:80px;background: gray;display: none">
        <div class='slideshow' style='background: white;height: 360px;width: 300px;'>
            <div id="itemSlider" class="royalSlider default">
                <ul class='royalSlidesContainer'>
                    <li class="royalSlide"><img alt="" src="/Shop/personal/upload/images/285577_SW100_4000_A_1100x800.jpg" style="width: 1015px; height: auto; "></li>
                </ul>
            </div>
        </div>
	<div class="outDesc" style="overflow-x: hidden; overflow-y: auto;max-height: 300px;position: absolute;bottom: 0;right: 0">
		<div style="width:395px;float:left;padding: 10px;">			
			<div class='bttClose'>close</div>			
						
			<a href='#' style="font-weight: bold;font-size: 15px;color: white" class='aName'>NAME</a>			
			<br><span class='aDate'>DATE</span>
			<br><br>
			<div id="contentItem">
				<div class="customScrollBox">
					<div class="container"><div class="content"><span class='aContent'>Content</span></div></div>
					<div class="dragger_container"><div class="dragger"></div></div>
				</div>    
			</div>
		</div>
	</div>
</div>


<script>

//
function active(){
    var imgArr = $('#itemSlider').find('img');
    var tempUL = "<ul class='royalSlidesContainer'>";
    for(var i=0;i<imgArr.length;i++)
    {
            var temp = '<li class="royalSlide">'+imgArr[i].outerHTML+'</li>';
            tempUL+=temp;
    }
    tempUL+='</ul>';
    
    $('#itemSlider').html(tempUL);    
    $('#itemSlider').royalSlider({hideArrowOnLastSlide:true,slideSpacing:20});
}

function resizeSlideshow(){
    var temp = $(window).height() - (80+145);
    var _height = temp;
    var _width = $(window).width() - 415;
    
    $('#itemSlider').css({ width: _width });
    $('#itemSlider').css({ height: _height });	
    
    $('.royalSlide').css({ width: _width });
    $('.royalSlide').css({ height: _height  });
    
    var imgArr = $('#itemSlider').find('img');
    $(imgArr).width(_width);
    $(imgArr).css({ height: 'auto'  });
}
resizeSlideshow();
//

$(window).resize(function(){
	reWidthOutBoxItem();
	reHeightOutBoxItem();
        
        reSizeDetail();
        resizeSlideshow();
});

function reSizeDetail(){
    var temp = $(window).height() - (80+145);
    $('.detailItem').css({
            width: $(window).width(),
            height: temp
    });
    
    var temp = $(window).width() - 415;
    $('.slideshow').css({
            width: temp,
            height : $('.detailItem').height()
    });
}
reSizeDetail();

var testJson;
function getInfomation(id){
	$.ajax({
		type: "GET",
		url: "",
		data: "type=item_project&id=" + id,
		beforeSend: function(){
			//alert('Before'); 
		},
		success: function(msg){
			testJson = jQuery.parseJSON(msg);
			viewInfo(testJson);
		}		
	});	
}
function howMany(){
	var area1 = $('.outBoxItem').width() * $('.outBoxItem').height();
	return area1 / (200*200);
}

var limit = Math.ceil(howMany());
var startIndex = 0;
var bNext = true;
var bSucess = false;
testPage(startIndex,limit);
function testPage(page,limit)
{
	if(bNext){
		$.ajax({
			type: "GET",
			url: "",
			data: "type=item_project_page&page="+page+"&limit="+limit,
			beforeSend: function(){
				//alert('Before'); 
			},
			success: function(msg){
				testJson = jQuery.parseJSON(msg);
				
				if(testJson[0] == '.')
				{
					bNext = false;
				}else{
					for(var i=0;i<testJson.length;i++)
					{
						$('#container').append(testJson[i]);
					}
					console.log(startIndex);
					startIndex += limit;
					console.log(startIndex);
				}
				
				bSucess = true;
				$('.item').unbind("mouseover");
				$('.item').unbind("click");
				
				$('.item').click(function(){
					var id = $(this).attr('data-id');
					getInfomation(id);
				});
				$('.item').mouseover(function(){					
					$(this).find('div.bgr').stop().fadeTo("slow", 1);
					
				});				
				$('.item').mouseout(function(){
					$(this).find('div.bgr').stop().fadeTo("slow", 0.0);
				});
			}
		});
	}
}

$('.outBoxItem').scroll(function(){
	var a = $('.boxItem').height() - $('.outBoxItem').height();	
	if(a > $('.outBoxItem').scrollTop()){}else{if(bSucess){ testPage(startIndex,limit); bSucess = false; }}
});


function viewInfo(json){
	$('.detailItem').fadeIn('slow');
	$('.fixedBackground').fadeIn('slow');	
        
	$('.aName').text(json.name);	
	$('.aDate').text(json.date);
	$('.aContent').html(json.detail);
	
        $('#itemSlider').html(json.slideshow);
        active();
        resizeSlideshow();
        
	$("#contentItem").mCustomScrollbar("vertical",300,"easeOutCirc",1.05,"auto","yes","yes",15);
}

$('.bttClose').click(function(){
	$('.detailItem').fadeOut('slow');
	$('.fixedBackground').fadeOut('slow');
});

here(2);

</script>