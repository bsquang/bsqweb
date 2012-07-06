<?php 
	chong_pha_hoai();
	//echo "trang quan ly san pham <hr>";
?>
<?php 
	
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
		$tv="select count(*) from quang_cao_trai";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);		
		$st=ceil($tv_2[0]/$so_gioi_han);
		return $st;
	}
	
?>
<?php 
	$ssp_td=1;
	$sd=20;
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
	//$tv=$chuoi_union__ppp." limit $vtbd,$so_gioi_han ";
	$tv="select * from quang_cao_trai order by id desc limit $vtbd,$so_gioi_han ";
	$tv_1=mysql_query($tv);
?>
<center>

	<table width="976px" style="clear:left;margin:6px" id="er">
		<tr>
			<td width="255px" align="center"><b>Hình ảnh / Flash</b></td>
			<td width="325px" align="left" ><b>Liên kết</b></td>
			<td width="100px"><b>Rộng</b></td>
			<td width="100px"><b>Cao</b></td>
			<td width="100px" align="center"><b>Sữa</b></td>
			<td width="100px" align="center"><b>Xóa</b></td>
		</tr>
		<?php 
			while($tv_2=mysql_fetch_array($tv_1))
			{
				$link_hinh="../hinhanh_flash/tin_tuc/".$tv_2['hinh_anh'];
				$link_sua="?thamso=sua_quang_cao_trai&id=".$tv_2['id']."&trang=$_GET[trang]";
				$link_xoa="?thamso=xoa_quang_cao_trai&id=".$tv_2['id'];
				?>
					<tr>
						<td align="center">
							<div class="cao_3_px"></div>
							<?php 
								$m=explode(".",$tv_2['file']);
								$duoi_file=$m[count($m)-1];
								$link_file="../hinhanh_flash/quang_cao/".$tv_2['file'];
								$rong=$tv_2['rong'];
								$cao=$tv_2['cao'];
								$link_lien_ket=$tv_2['link'];
								if($duoi_file=="swf")
								{
									flash($link_file,$rong,$cao);
								}
								else 
								{
									echo "<a href='$link_lien_ket' target='_blank'>";
										echo "<img src='$link_file' width='$rong' height='$cao'>";
									echo "</a>";
									
								}
							?>
							<div class="cao_3_px"></div>
						</td>
						<td align="left">						
							<?php if($link_lien_ket!=""){echo $link_lien_ket;}else {echo "&nbsp;";} ?>
						</td>
						<td align="center">
							<?php echo $rong; ?>
						</td>
						<td align="center">
							<?php echo $cao; ?>
						</td>
						<td align="center">
							<a href="<?php echo $link_sua; ?>" class="sua_xoa" >
								Sữa
							</a>
						</td>
						<td align="center">
							<a href="<?php echo $link_xoa; ?>" class="sua_xoa" >
								Xóa
							</a>
						</td>
					</tr>
				<?php
			}
		?>
		<tr>
			<td colspan="6" align="center">
				<?php 
					//echo $_GET['tu_khoa'];
					/*for($i=1;$i<=$st;$i++)
					{
						$link="?thamso=quan_ly_quang_cao_trai&trang=$i";
						echo "<a href='$link'>";
							echo $i;
						echo "</a>";echo " ";
					}*/
					xuat_link($st);
				?>
			</td>
		</tr>
	</table>
</center>
<script>
	table_css_2("er");
</script>