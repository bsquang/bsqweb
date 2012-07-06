<?php 
	chong_pha_hoai();
	//echo "trang quan ly san pham <hr>";

	function tinh_chuoi_or()
	{
		$chuoi_or="";
		if($_GET['tu_khoa']=="Từ khóa tìm kiếm")
		{
			$tu_khoa_ccc="";
		}
		else 
		{
			$tu_khoa_ccc=$_GET['tu_khoa'];
		}
		$mang_tk__abc=explode(" ",$tu_khoa_ccc);
		for($f=0;$f<count($mang_tk__abc);$f++)
		{
			$q=$mang_tk__abc[$f];
			if($q!="")
			{
				$chuoi_or=$chuoi_or."ten like '%$q%' or ";
			}
		}
		if($chuoi_or!="")
		{
			$chuoi_or=substr($chuoi_or,0,-3);
			$chuoi_or=" and ( ".$chuoi_or." ) ";
		}
		return $chuoi_or;
	}
	//echo $chuoi_or."<hr>";
?>
<script type="text/javascript">
	function chuyen_link__ooo(id)
	{
		//alert(id);
		window.location="?thamso=quan_ly_san_pham&cap_do="+id;
	}
</script>
<?php 
	function xac_dinh_menu_con__123($id_cha)
	{
		$tv="select count(*) from menu where thuoc_menu='$id_cha'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_row($tv_1);
		if($tv_2[0]==0)
		{
			return "khong";
		}
		else 
		{
			return "co";
		}
	}
	function de_quy_menu__fff($id_cha,$kt="")
	{
		$kt=$kt."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		$tv="select * from menu where thuoc_menu='$id_cha'";
		$tv_1=mysql_query($tv);
		while($tv_2=mysql_fetch_array($tv_1))
		{
			if($_GET['cap_do']==$tv_2['id'])
			{
				$select="selected";
			}
			else 
			{
				$select="";
			}
			echo "<option value='$tv_2[id]' $select >";
				echo $kt;	
				echo $tv_2['ten'];												
			echo "</option>";
			$xac_dinh_menu_con__123=xac_dinh_menu_con__123($tv_2['id']);
			if($xac_dinh_menu_con__123=="co")
			{
				de_quy_menu__fff($tv_2['id'],$kt);
			}
		}	
	}
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
	//echo lay_chuoi_menu_con__ppp($_GET['cap_do']);
	//echo "<hr>";
	function lay_mang_menu_con__ppp($id_cha)
	{
		$c=lay_chuoi_menu_con__ppp($id_cha);
		$m=explode("_",$c);
		return $m;
	}
	function tinh_chuoi_union__ppp()
	{
		$chuoi_or=tinh_chuoi_or();
		$m=lay_mang_menu_con__ppp($_GET['cap_do']);
		$tv="";
		for($i=0;$i<count($m);$i++)
		{
			$id=$m[$i];
			$r_tv="select count(*) from san_pham where thuoc_menu='$id' $chuoi_or ";
			$r_tv_1=mysql_query($r_tv);
			$r_tv_2=mysql_fetch_row($r_tv_1);
			$so=$r_tv_2[0];
			if($id!="")
			{
				$tv=$tv." ( select * from san_pham where thuoc_menu='$id' $chuoi_or order by id desc limit 0,$so ) union";
			}
		}
		$tv=substr($tv,0,-6);
		return $tv;
	}
	function tinh_st___rrr($so_gioi_han)
	{
		$chuoi_or=tinh_chuoi_or();
		$m=lay_mang_menu_con__ppp($_GET['cap_do']);
		$tv="";
		$so=0;
		for($i=0;$i<count($m);$i++)
		{
			$id=$m[$i];
			$r_tv="select count(*) from san_pham where thuoc_menu='$id' $chuoi_or";
			$r_tv_1=mysql_query($r_tv);
			$r_tv_2=mysql_fetch_row($r_tv_1);
			$so=$so+$r_tv_2[0];
		}
		$st=ceil($so/$so_gioi_han);
		return $st;
	}
	
?>
<?php 
	$ssp_td=1;
	$sd=10;
	$so_gioi_han=$ssp_td*$sd;
	if($_GET['trang']=="")
	{
		$vtbd=0;
	}
	else 
	{
		$vtbd=($_GET['trang']-1)*$so_gioi_han;
	}
	$chuoi_union__ppp=tinh_chuoi_union__ppp();
	//echo $chuoi_union__ppp;echo "<hr>";
	$st=tinh_st___rrr($so_gioi_han);
	$tv=$chuoi_union__ppp." limit $vtbd,$so_gioi_han ";
	//echo $tv."<hr>";
	$tv_1=mysql_query($tv);
?>
	<?php
	if($_GET['result']!=""){
		echo '<div style="margin: 20px;color: red;font-weight: bold;">';
		switch($_GET['result'])
		{
			case 1: echo "Item added !</div>"; break;
			case 2: echo "Item edited !</div>"; break;
			case 3: echo "Item removed !</div>"; break;
			default: break;
		}
	}
	?>
	
	
	<div class='box'>
		<div class='box-header'><h1>Sản phẩm</h1>	
			<div style='margin-left: 45px;margin-top: 9px;float: left;'>		
				<?php 
					echo "<select name='cap_do' onchange='chuyen_link__ooo(this.value)'>";
						$q_tv="select * from menu where thuoc_menu=''";
						$q_tv_1=mysql_query($q_tv);
						echo "<option value=''>";	
							echo "Tất cả";
						echo "</option>";
						while($q_tv_2=mysql_fetch_array($q_tv_1))
						{
							if($_GET['cap_do']==$q_tv_2['id'])
							{
								$select="selected";
							}
							else 
							{
								$select="";
							}
							echo "<option value='$q_tv_2[id]' $select >";
								echo $q_tv_2['ten'];						
							echo "</option>";
							$xac_dinh_menu_con__123=xac_dinh_menu_con__123($q_tv_2['id']);
							if($xac_dinh_menu_con__123=="co")
							{
								de_quy_menu__fff($q_tv_2['id']);
							}
						}
					echo "</select>";
				?>
				<a style='color: white;' href="?thamso=them_san_pham">Thêm</a>
			</div>
			
			<div style='margin-left: 20px;margin-top: 5px;float: left;'>
				<form action="">
					<input type="hidden" name="thamso" value="quan_ly_san_pham" />
					<div>
						<input style="width:250px" name="tu_khoa" name="tu_khoa" />
						<input type="submit" value="Tìm kiếm" />						
					</div>
				</form>
			</div>
		</div>
		
	<table border="0" style='margin: 5px;width: 900px;'>
		<tr>
			<td width="100px" align="center"><b>Hình ảnh</b></td>
			<td width="200px" align="left"><b>Tiêu đề</b></td>
			<td align="left"><b>Nội dung</b></td>
			<td width="80px" align="center"><b>Hành động</b></td>			
		</tr>
		<?php 
			while($tv_2=mysql_fetch_array($tv_1))
			{
				$noi_dung_ngan=cat_chuoi_789(thay_the_fckeditor($tv_2['noi_dung']),0,150);
				$do_dai__zzz=dem_do_dai_chuoi_tieng_viet(thay_the_fckeditor($tv_2['noi_dung']));
				//echo $do_dai__zzz;echo "<hr>";
				$chuoi_ndn="";
				if($do_dai__zzz>=150)
				{
					$noi_dung_ngan=cat_chuoi_789(thay_the_fckeditor($tv_2['noi_dung']),0,150);
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
					$noi_dung_ngan=cat_chuoi_789(thay_the_fckeditor($tv_2['noi_dung']),0,150);	
					$chuoi_ndn=$noi_dung_ngan;
				}
				
				$link_hinh="../hinhanh_flash/san_pham/".$tv_2['hinh_anh'];
				$link_sua="?thamso=sua_san_pham&id=".$tv_2['id']."&cap_do=$_GET[cap_do]&tu_khoa=$_GET[tu_khoa]&trang=$_GET[trang]";
				$link_xoa="?thamso=xoa_san_pham&id=".$tv_2['id'];
				?>
					<tr>
						<td>
							<a href="<?php echo $link_sua; ?>" >
								<img src="<?php echo $link_hinh; ?>" width="90px" height="90px" border="0"/>
							</a>
						</td>
						<td>
							<a href="<?php echo $link_sua; ?>" class="thua__link_1">
								<?php echo $tv_2['ten']; ?>
							</a>
						</td>
						<td><?php echo $chuoi_ndn; ?></td>
						<td style='text-align: center'>
							<a href="<?php echo $link_sua; ?>" class="sua_xoa" >Sửa</a>|
							<a href="<?php echo $link_xoa; ?>" class="sua_xoa" >Xóa</a>
						</td>
					</tr>
				<?php
			}
		?>
		<tr>
			<td colspan="5" align="center">
				<?php 
					//echo $_GET['tu_khoa'];
					/*for($i=1;$i<=$st;$i++)
					{
						if($_GET['tu_khoa']=="")
						{
							$link="?thamso=quan_ly_san_pham&cap_do=$_GET[cap_do]&trang=$i";
						}
						else 
						{
							$link="?thamso=quan_ly_san_pham&tu_khoa=$_GET[tu_khoa]&trang=$i";
						}
						echo "<a href='$link'>";
							echo $i;
						echo "</a>";echo " ";
					}*/
					xuat_link($st);
				?>
			</td>
		</tr>
	</table>
	</div>