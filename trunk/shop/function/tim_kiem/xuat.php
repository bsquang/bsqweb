<?php 
	chong_pha_hoai();
?>
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
//$m=lay_mang_menu_con__ppp("");
//print_r($m);echo "<hr>";
function tinh_gia_dau__yyy()
{
	$gia_dau=$_GET['gia_dau'];
	//echo $gia_dau."<hr>";
	//echo is_int($gia_dau);echo"<hr>";
	if($gia_dau=="Giá từ")
	{
		$gia_dau=0;
	}
	if($gia_dau<0)
	{
		$gia_dau=0;
	}
	return $gia_dau;
}
function tinh_gia_cuoi__yyy()
{
	$gia_cuoi=$_GET['gia_cuoi'];
	if($gia_cuoi=="đến")
	{
		$gia_cuoi=99999999999;
	}
	if($gia_cuoi<0)
	{
		$gia_cuoi=99999999999;
	}
	return $gia_cuoi;
}
//echo tinh_gia_dau__yyy();echo "<hr>";
function tinh_chuoi_union__ppp($chuoi_or)
{
	$gia_dau=tinh_gia_dau__yyy();
	$gia_cuoi=tinh_gia_cuoi__yyy();
	
	$m=lay_mang_menu_con__ppp($_GET['cap_do']);
	$tv="";
	for($i=0;$i<count($m);$i++)
	{
		$id=$m[$i];
		$r_tv="select count(*) from san_pham where thuoc_menu='$id' and ( $chuoi_or ) and gia_ban>=$gia_dau and gia_ban<=$gia_cuoi ";
		$r_tv_1=mysql_query($r_tv);
		$r_tv_2=mysql_fetch_row($r_tv_1);
		$so=$r_tv_2[0];
		if($id!="")
		{
			$tv=$tv." ( select * from san_pham where thuoc_menu='$id' and ( $chuoi_or ) and gia_ban>=$gia_dau and gia_ban<=$gia_cuoi order by id desc limit 0,$so ) union";
		}
	}
	$tv=substr($tv,0,-6);
	return $tv;
}
//$c=lay_chuoi_menu_con__uuu(" ");
//echo $c."<hr>";
?>
<?php
	function tinh_st___rrr($chuoi_or,$so_gioi_han)
	{
		$gia_dau=tinh_gia_dau__yyy();
		$gia_cuoi=tinh_gia_cuoi__yyy();
		$m=lay_mang_menu_con__ppp($_GET['cap_do']);
		$tv="";
		$so=0;
		for($i=0;$i<count($m);$i++)
		{
			$id=$m[$i];
			$r_tv="select count(*) from san_pham where thuoc_menu='$id' and ( $chuoi_or ) and gia_ban>=$gia_dau and gia_ban<=$gia_cuoi ";
			$r_tv_1=mysql_query($r_tv);
			$r_tv_2=mysql_fetch_row($r_tv_1);
			$so=$so+$r_tv_2[0];
		}
		$st=ceil($so/$so_gioi_han);
		return $st;
	}
	$ssp_td=3;
	$sd=5;
	$so_gioi_han=$ssp_td*$sd;
	if($_GET['trang']=="")
	{
		$vtbd=0;
	}
	else 
	{
		$vtbd=($_GET['trang']-1)*$so_gioi_han;
	}
	$tu_khoa=$_GET['tu_khoa'];
	$mang_tk__abc=explode(" ",$tu_khoa);
	$chuoi_or="";
	for($f=0;$f<count($mang_tk__abc);$f++)
	{
		$q=$mang_tk__abc[$f];
		if($q!="")
		{
			$chuoi_or=$chuoi_or."ten like '%$q%' or ";
		}
	}
	$chuoi_or=substr($chuoi_or,0,-3);
	//echo $chuoi_or."<hr>";
	$chuoi_union__ppp=tinh_chuoi_union__ppp($chuoi_or);
	//echo $tinh_chuoi_union__ppp;echo "<hr>";
	$st=tinh_st___rrr($chuoi_or,$so_gioi_han);
	//$tv="select * from san_pham where $chuoi_or order by id desc limit $vtbd,$so_gioi_han ";
	//echo $tv."<hr>";
	$tv=$chuoi_union__ppp." limit $vtbd,$so_gioi_han ";
	$tv_1=mysql_query($tv);
	echo "<center>";
		echo "<div class='tdg___ggg'>";
			echo "<a href='#'>";
				echo "$_GET[tu_khoa]";
			echo "</a>";
		echo "</div>";
		echo "<div class='ndg___ggg' id='fix_height_div__js' >";
			echo "<table border='0' style='font-size:14px'>";
			while($tv_2=mysql_fetch_array($tv_1))
				{
					
					for($i=1;$i<=$ssp_td;$i++)
					{
						if($i!=1){$tv_2=mysql_fetch_array($tv_1);}
						if($i==1){echo "<tr>";}
						if($tv_2['ten']!="")
						{
							$link_chi_tiet="?thamso=chi_tiet_san_pham&id=$tv_2[id]";
							echo "<td width='212px' align='center'>";
								$link_hinh="hinhanh_flash/san_pham/".$tv_2['hinh_anh'];
								echo "<div class='khung_bao_ngoai___j89'>";
									echo "<div class='cao_3_px'></div>";
									echo "<a href='$link_chi_tiet'>";
										echo "<img border='0' src='$link_hinh' width='150px' height='170px'>";
									echo "</a>";
									echo "<br>";
									echo "<a href='$link_chi_tiet' class='ten_san_pham' >";
										echo $tv_2['ten'];
									echo "</a>";
									echo "<br>";
									$dinh_dang_gia=number_format($tv_2['gia_ban'],0,".",".");
									echo "<span class='gia_ban'>";
										echo $dinh_dang_gia; echo " VNĐ";
									echo "</span>";
									//echo $tv_2['gia_ban'];
									echo "<br>";
									echo "<form action=''>";
										echo "Số lượng : ";
										echo "<input style='width:50px' value='1' name='so_luong__nnn'>";
										echo "<br>";
										echo "<div style='overflow:hidden;width:5px;height:3px'></div>";
										echo "<input type='hidden' name='id_sp__nnn' value='$tv_2[id]'>";
										echo "<input type='hidden' name='them_vao_gio__nnn' value='them_vao_gio__nnn'>";
										//echo "<input type='submit' value='Thêm vào giỏ' >";
										echo "<input type='image' src='hinhanh_flash/dung_chung/them_vao_gio.gif' style='border:0px solid red'>";
									echo "</form>";
									echo "<div class='cao_3_px'></div>";
									echo "<div class='cao_3_px'></div>";
								echo "</div>";
							echo "</td>";
						}
						if($i==$ssp_td){echo "</tr>";}
					}
						
					
				}
				echo "<tr>";
					echo "<td colspan='3' align='center'>";
						/*for($i=1;$i<=$st;$i++)
						{
							$link="?thamso=tim_kiem&tu_khoa=$_GET[tu_khoa]&cap_do=$_GET[cap_do]&gia_dau=$_GET[gia_dau]&gia_cuoi=$_GET[gia_cuoi]&trang=$i";
							echo "<a href='$link'>";
								echo $i;
							echo "</a>";echo " ";
						}*/
						xuat_link($st);
					echo "</td>";
				echo "</tr>";
			echo "</table>";
		echo "</div>";
	echo "</center>";
?>
<script>
	fix_height_div__js("fix_height_div__js","khung_bao_ngoai___j89");
</script>