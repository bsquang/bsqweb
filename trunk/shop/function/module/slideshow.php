<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select * from slideshow order by id";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	
?>
<style>
	
</style>
<div class="outerBanner" style="position: absolute;width: 100%">
	<div id="itemSlider" class="royalSlider default">    		
		<?php echo $tv_2['html']; ?>	
	</div>
</div>

<script>
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
	slideshowEnabled: true,                // Autoslideshow enabled          
	slideshowDelay:5000,
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