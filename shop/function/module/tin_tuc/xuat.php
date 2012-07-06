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
	//$m=lay_mang_menu_con__ppp(1);
	//print_r($m);echo "<hr>";
	function tinh_chuoi_union__ppp()
	{
		$m=lay_mang_menu_con__ppp($_GET['id']);
		$tv="";
		for($i=0;$i<count($m);$i++)
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
	$chuoi_union=tinh_chuoi_union__ppp();
	//echo $chuoi_union."<hr>";
	function tinh_so_trang__ppp($so_gioi_han)
	{
		$tv="select count(*) from tin_tuc ";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		$st=ceil($tv_2[0]/$so_gioi_han);
		return $st;
	}
	$ssp_td=1;
	$sd=12;
	$so_gioi_han=$ssp_td*$sd;
	if($_GET['trang']=="")
	{
		$vtbd=0;
	}
	else 
	{
		$vtbd=($_GET['trang']-1)*$so_gioi_han;
	}
	$st=tinh_so_trang__ppp($so_gioi_han);
	//echo $st."<hr>";
	echo "<center>";
		echo "<div class='tdg___ggg'>";
			echo "<a href='#'>";
				echo "Tin tức";
			echo "</a>";
		echo "</div>";
		echo "<div class='ndg___ggg'>";
			echo "<center>";
				echo "<table border='0' width='620px'>";
					//$tv="select * from san_pham where thuoc_menu='$_GET[id]' order by id desc limit $vtbd,$so_gioi_han";
					//$tv=$chuoi_union." limit $vtbd,$so_gioi_han";
					$tv="select * from tin_tuc order by id desc limit $vtbd,$so_gioi_han";
					$tv_1=mysql_query($tv);
					while($tv_2=mysql_fetch_array($tv_1))
					{
						
						for($i=1;$i<=$ssp_td;$i++)
						{
							if($i!=1){$tv_2=mysql_fetch_array($tv_1);}
							if($i==1){echo "<tr>";}
							$do_dai__zzz=dem_do_dai_chuoi_tieng_viet(thay_the_fckeditor($tv_2['noi_dung']));
							//echo $do_dai__zzz;echo "<hr>";
							$chuoi_ndn="";
							if($do_dai__zzz>=230)
							{
								$noi_dung_ngan=cat_chuoi_789(thay_the_fckeditor($tv_2['noi_dung']),0,230);
								$mang_m=explode(" ",$noi_dung_ngan);	
								//print_r($mang_m);			echo "<hr>";
								//echo count($mang_m)-4;echo "<hr>";
								for($y=0;$y<count($mang_m)-2;$y++)
								{
									
									$chuoi_ndn=$chuoi_ndn.$mang_m[$y]." ";
								}
							}
							else 
							{
								$noi_dung_ngan=cat_chuoi_789(thay_the_fckeditor($tv_2['noi_dung']),0,230);	
								$chuoi_ndn=$noi_dung_ngan;
							}
							
							if($tv_2['ten']!="")
							{
								$link_chi_tiet="?thamso=chi_tiet_tin_tuc&id=$tv_2[id]";
								echo "<td width='100%' align='center'>";
									echo "<table border='0' style='border:1px solid #999999'>";
										echo "<tr>";
											echo "<td align='center' width='140px'>";
												$link_hinh="hinhanh_flash/tin_tuc/".$tv_2['hinh_anh'];
												echo "<a href='$link_chi_tiet'>";
													echo "<img border='0' src='$link_hinh' width='130px' height='100px' style='margin:4'>";
												echo "</a>";
											echo "</td>";
											echo "<td width='510px' valign='top' align='left'>";												
												echo "<a href='$link_chi_tiet' class='link_15' >";
													echo $tv_2['ten'];
												echo "</a>";
												echo "<br>";
												echo $chuoi_ndn;
											echo "</td>";
										echo "</tr>";
									echo "</table>";
									
								echo "</td>";
							}
							if($i==$ssp_td){echo "</tr>";}
						}
							
						
					}
					echo "<tr>";
						echo "<td colspan='3' align='center'>";
							/*for($i=1;$i<=$st;$i++)
							{
								$link="?thamso=tin_tuc&trang=$i";
								echo "<a href='$link'>";
									echo $i;
								echo "</a>";echo " ";
							}*/
							xuat_link($st);
						echo "</td>";
					echo "</tr>";
				echo "</table>";
			echo "</center>";
		echo "</div>";
	echo "</center>";
?>