<?php 
	chong_pha_hoai();
?>
<div style="position: fixed;top: 0;left: 0;right: 0;bottom: 0;z-index: 0;text-align: center;background: rgba(242,241,240,1);"> </div>
<div style="float: left;z-index: 31">
<?php include("function/menu_trai/menu_trai.php"); ?>
</div>
<?php 
	function lay_chuoi_menu_con__uuu($id_cha,$c="")
	{
		$tv="select * from menu where thuoc_menu='$id_cha'";
		$tv_1=mysql_query($tv);
		while($tv_2=mysql_fetch_array($tv_1))
		{
			$c=$c."_".$tv_2['id'];
			$a_tv="select count(*) from menu where thuoc_menu='$tv_2[id]'";
			$a_tv_1=mysql_query($a_tv);
			$a_tv_2=mysql_fetch_row($a_tv_1);
			if($a_tv_2[0]!=0)
			{
				$c=lay_chuoi_menu_con__uuu($tv_2['id'],$c);
			}
		}
		return $c;
	}
	function lay_chuoi_menu_con__ppp($id_cha)
	{
		$c=lay_chuoi_menu_con__uuu($id_cha);
		if($c=="")
		{
			return $id_cha;
		}
		else 
		{
			return $id_cha.$c;
		}
	}
	function lay_mang_menu_con__ppp($id_cha)
	{
		$c=lay_chuoi_menu_con__ppp($id_cha);
		$m=explode("_",$c);
		return $m;
	}
	
	function tinh_chuoi_union__ppp()
	{
		$m=lay_mang_menu_con__ppp('');
	
		$tv="";
		for($i=1;$i<count($m);$i++)
		{
			$id=$m[$i];
			$r_tv="select count(*) from san_pham where thuoc_menu='$id'";
			$r_tv_1=mysql_query($r_tv);
			$r_tv_2=mysql_fetch_row($r_tv_1);
			$so=$r_tv_2[0];
			$tv=$tv." ( select * from san_pham where thuoc_menu='$id' order by id desc limit 0,$so ) union";
		}
		$tv=substr($tv,0,-6);
		return $tv;
	}
	
	function tinh_so_trang__ppp($so_gioi_han)
	{
		$m=lay_mang_menu_con__ppp('');
		$so=0;
		for($i=0;$i<count($m);$i++)
		{
			$id=$m[$i];
			$r_tv="select count(*) from san_pham where thuoc_menu='$id'";
			$r_tv_1=mysql_query($r_tv);
			$r_tv_2=mysql_fetch_row($r_tv_1);
			$so=$so+$r_tv_2[0];
		}
		$st=ceil($so/$so_gioi_han);
		return $st;
	}
		
	$sd=8;
	$so_gioi_han=$sd;
	if($_GET['trang']=="")
	{
		$vtbd=0;
	}
	else 
	{
		$vtbd=($_GET['trang']-1)*$so_gioi_han;
	}
	$st=tinh_so_trang__ppp($so_gioi_han);
	$chuoi_union=tinh_chuoi_union__ppp();
?>

<style>
	.liItem{
		float: left;
	}
	.boxItem{
		width: 800px;
		float: left;
		z-index: 35;
	}
	.outBoxItem{
		width: 800px;
		height: 470px;
		overflow-y: auto;
		overflow-x: hidden;
		position: fixed;
		top: 62px;
		left: 160px;
	}
</style>

<div class='outBoxItem'>
<div class='boxItem'>
<table>
	<tr>
		<td>
			<ul style="list-style: none;margin: 0">
			<?php
			
				$tv="select * from san_pham where thuoc_menu='$_GET[id]' order by id desc limit $vtbd,$so_gioi_han";
				$tv=$chuoi_union." limit $vtbd,$so_gioi_han";
				
				//$tv="select * from san_pham";
				$tv_1=mysql_query($tv);
				while($tv_2=mysql_fetch_array($tv_1))
				{		
					if($tv_2['ten']!="")
					{
						$link_chi_tiet= $config['domain']."item-$tv_2[id]";
						$link_hinh="hinhanh_flash/san_pham/".$tv_2['hinh_anh'];
						$dinh_dang_gia=number_format($tv_2['gia_ban'],0,".",".");
						
						echo "<li class='liItem'>";
						echo "<a href='$link_chi_tiet'>";
						echo "<img class='imgItem' border='0' src='$link_hinh' width='230' height='230'>";
						echo "</a>";
						echo "</li>";
						//echo "<br>";
						
						//echo "<a href='$link_chi_tiet' class='ten_san_pham' >";echo $tv_2['ten'];echo "</a>";							
						//echo "<br>";							
						
						//echo "<span class='gia_ban'>";echo $dinh_dang_gia; echo " VNĐ";echo "</span>";							
						//echo "<br>";
						// echo "<form action=''>";
							// echo "Số lượng : ";
							// echo "<input style='width:50px' value='1' name='so_luong__nnn'>";
							// echo "<br>";
							// echo "<div style='overflow:hidden;width:5px;height:3px'></div>";
							// echo "<input type='hidden' name='id_sp__nnn' value='$tv_2[id]'>";
							// echo "<input type='hidden' name='them_vao_gio__nnn' value='them_vao_gio__nnn'>";
							//echo "<input type='submit' value='Thêm vào giỏ' >";
							// echo "<input type='image' src='hinhanh_flash/dung_chung/them_vao_gio.gif' style='border:0px solid red'>";
						// echo "</form>";																
					}
				}
				
				
			?>
			</ul>
		</td>
	</tr>
	<tr>
		<td>
			<div style='text-align: center'>
				<?php
					for($i=1;$i<=$st;$i++)
					{
						//$link="?thamso=xuat_toan_bo_san_pham&trang=$i";
						$link="/products/$i";
						echo "<a href='$link'>$i </a>";
					}
				?>
			</div>
		</td>
	</tr>
</table>
</div>
</div>

<script>
function reWidthOutBoxItem(){	
	$('.outBoxItem').css({
		width: $(document).width() - 160
	});
	$('.boxItem').css({
		width: $('.outBoxItem').width()
	});
}
function reHeightOutBoxItem(){
	$('.outBoxItem').css({ height: $(document).height()-110 });
}

$('.logo').hide();

reWidthOutBoxItem();
reHeightOutBoxItem();

function reSizeItem(){
	var offSet = 25;
	var split = 3;

	if($(window).width()>1280)split=4;
	
	$('.imgItem').width(($('.boxItem').width()/split)-offSet);
	$('.imgItem').height(($('.boxItem').width()/split)-offSet);	
}
reSizeItem();
$(window).resize(function(){
	reWidthOutBoxItem();
	reHeightOutBoxItem();
	reSizeItem();	
});
</script>

<?php //xuat_link($st); ?>