<?php 
	chong_pha_hoai();
	//echo "chao <hr>";
	$so=count($_SESSION[$ten_danh_dau__kkk.'id_giohang']);
	$so_abc=0;
	for($r=0;$r<$so;$r++)
	{
		$sl=$_SESSION[$ten_danh_dau__kkk.'sl_abc'][$r];
		$so_abc=$so_abc+$sl;
	}
?>
<style>
	span.g8
	{
		font-size:16px;
		font-weight:bold;
		color:#4362d3
	}
	a.link_12:link { font-size: 16px; text-decoration: none;  color: red; font-weight: bold;}
	a.link_12:visited { font-size: 16px; color: red; text-decoration: none; font-weight: bold;}
	a.link_12:hover { font-size: 16px; text-decoration: underline; color:red; font-weight: bold; font-style: normal; }
</style>
<div class="tdk___456">
	<span>Giỏ hàng</span>
</div>
<div class="ndk___456" >
	<div style="margin-left:18px">
		<span class="g8">Bạn đang có </span><b style="color:red"><?php echo $so_abc; ?></b> <span class="g8">sản phẩm trong giỏ hàng</span>
		<br>
		<div class="cao_3_px"></div>
		<div class="cao_3_px"></div>
		<a href="?thamso=gio_hang" class="link_12" >Xem giỏ hàng</a>
		</div><div class="cao_3_px">
	</div>
</div>