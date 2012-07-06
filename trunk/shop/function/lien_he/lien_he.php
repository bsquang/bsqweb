<?php 
	chong_pha_hoai();
	//echo "trang lien he <hr>";
	$tv="select * from lien_he where id='2'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
?>
<style>
	table.ghk input
	{
		width:300px
	}
	table.ghk textarea
	{
		height:75px;
		width:400px;
		margin-bottom:-1px
	}
	.bttSize{
		background: gray;
		position: absolute;
		right: 0;
		top: 0;
		margin: 160px 15px 0px 0px;
		padding: 5px;
		color: whiteSmoke;
		width: 30px;
		text-align: center;
	}
	.bttMove{
		font-size: 13px;
		background: gray;
		position: absolute;
		right: 0;
		top: 0;
		margin: 0px 15px 0 0px;
		padding: 5px;
		color: whiteSmoke;
		cursor: move;
	}
	.outMain{
		position: fixed;
		width: 100%;		
		top: 35px;
	}
	.mainMap{
		width:100%;
		height: 800px;
	}
	.tipMove{		
		background: url("images/ui/tipDrag2.png");
		width: 124px;
		height: 43px;
		background-repeat: no-repeat;
		position: absolute;
		right: 0;
		top: 0;
		margin: 10px 70px 0 0px;
		display: none;
	}
</style>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>


<script type="text/javascript">

var latlng2 = new google.maps.LatLng(10.7615,106.70029);

var currentLocation;
var map;
var geocoder;

var directionsDisplay;
var directionsService = new google.maps.DirectionsService();


function initialize() {
    var myOptions = {
        zoom: 16,
        center: latlng2,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    geocoder = new google.maps.Geocoder();
    directionsDisplay = new google.maps.DirectionsRenderer();
    directionsDisplay.setMap(map);

    currentLocation = latlng2;    

    createdMarker(latlng2, map, "BSQ","<span class='iwstyle'><p><h3>BSQ</h3></p><p>Address: Số 7 lô N cư xá Vĩnh Hội, phường 6 quận 4, TP.HCM</p><p>Phone: 01264814025</p><p>Email: adquang@gmail.com</p></span>", false);    
}
function createdMarker(pos, map, title, content, open) {
    var marker = new google.maps.Marker({
        position: pos,
        title:title
    });
    marker.setMap(map);

    var infowindow = new google.maps.InfoWindow({content: content});
    if (open == true)infowindow.open(map, marker);
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
    });
    
    
}

$(document).ready(function(){
	initialize();
});

$('.logo').hide();

</script>

<div class="outMain">
<div id="map_canvas" class="mainMap" ></div><br>
</div>
<script>
function reHeightMap(){
	$('.mainMap').css({height:$(document).height()-60});
}
reHeightMap();
$(window).resize(function(){
	reHeightMap();
});

</script>

<!--<div style="position: fixed;top: 0;left: 0;right: 0;bottom: 0;z-index: 30;text-align: center;background: rgba(242,241,240,1);"> </div>-->
<div class="boxContact">
<div style='margin-left:5px;margin-bottom: 10px;font-size:13px;width: 300px;'>
	<?php echo $tv_2['gia_tri']; ?>
</div>

<div class='bttMove'>move</div>
<div class='tipMove'></div>
<!--<div style="font-size: 13px;" class="boxForm">-->
<!--<div class='bttSize'>-</div>-->
<!--<div style="padding-top: 10px;padding-bottom: 5px;" class="titleContact"><span style="font-size:14px;"><strong>contact</strong></span></div>
<div class="formContact clearfix">
<form action="" method="post" style="margin:0">
	<table class="ghk">
		<tr>
			<td width="80px" align="right">Name : </td>
			<td><input name="ho_ten"></td>
		</tr>
		<tr>
			<td align="right">Address :</td>
			<td><input name="dia_chi"></td>
		</tr>
		<tr>
			<td align="right">Email :</td>
			<td><input name="email"></td>
		</tr>
		<tr>
			<td align="right">Phone :</td>
			<td><input name="dien_thoai"></td>
		</tr>
		<tr>
			<td align="right">Content :</td>
			<td><textarea name="noi_dung"></textarea></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<input type="hidden" name="gui_lien_he__abc" value="gui_lien_he__abc">
				<input type="submit" value="Send" style="width:60px">
			</td>
		</tr>
	</table>
</form>
</div>-->
<!--</div>-->
</div>

<script>

var is_chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
if($.browser.safari && !is_chrome){
	$('.boxContact').css({'display':'none'});
}

function rePosDetail(){
	var _w = $('.boxContact').width();
	var _h = $('.boxContact').height();
	
	$('.boxContact').css({
	left: ($(document).width()-_w)/2,
	top: (($(document).height()-_h)/2)
	});
}
rePosDetail();
$(window).resize(function(){
	rePosDetail();	
});

$(".bttMove").bind("mouseenter",function(){
	$('.tipMove').show();	
}).bind("mouseleave",function(){
	$('.tipMove').hide();	
});

$('.boxContact').drag(function( ev, dd ){
	$( this ).css({
	   top: dd.offsetY,
	   left: dd.offsetX
	});
},{ handle: ".bttMove" });  

//var bShow = true;
//$(".bttSize").mousedown(function(){
//	if(bShow){
//		//$(".imgItem").hide("slow");		
//		$(".formContact").fadeOut(200,function(){			
//			//$(".bttSize").css({"margin":'-20px 0px 0px -25px'});
//			$(".bttSize").text('+');
//			bShow = false;
//		});
//	}else{
//		$(".formContact").fadeIn(200,function(){			
//			//$(".bttSize").css({"margin":'-20px 0px 0px 0px'});
//			var test = $(document).width() - 505;
//			var posLeft = $(".boxContact").css('left');
//			if(posLeft > test){
//				$(".boxContact").css({
//					'left':test
//				});
//			}
//			
//			$(".bttSize").text('-');
//			bShow = true;
//		});
//	}
//});


</script>