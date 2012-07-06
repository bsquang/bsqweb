<?php 
	chong_pha_hoai();
	//echo "trang quan ly menu doc";
?>
<?php 
	function echo_khoang_trang($thuoc_menu)
	{
		$tv="select count(*) from menu where id='$thuoc_menu'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_row($tv_1);
		if($tv_2[0]!=0)
		{
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			$r_tv="select * from menu where id='$thuoc_menu'";
			$r_tv_1=mysql_query($r_tv);
			$r_tv_2=mysql_fetch_array($r_tv_1);
			echo_khoang_trang($r_tv_2['thuoc_menu']);
		}
		else 
		{
		}
	}
?>
<?php 
	function tinh_st___rrr($so_gioi_han)
	{
		$tv="select count(*) from menu ";
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
	$st=tinh_st___rrr($so_gioi_han);
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
	$m_abc=lay_mang_menu_con__ppp("");
	//print_r($m_abc);echo "<hr>";
	$c="";
	for($z=1;$z<count($m_abc);$z++)
	{
		$id_z=$m_abc[$z];
		$c=$c." ( select * from menu where id='$id_z' ) union ";
	}
	$c=substr($c,0,-6);
?>
<?php 
	//$tv="select * from menu_ngang order by id limit $vtbd,$so_gioi_han ";
	$tv=$c." limit $vtbd,$so_gioi_han ";
	//echo $tv."<hr>";
	$tv_1=mysql_query($tv);
	
?>

<div class='box'>
<div class='box-header'><h1>menu dọc |</h1><a style='color: white;margin: 12px 11px 11px;position: absolute;' href="?thamso=them_menu_doc">Thêm</a></div>
<table style='margin: 5px;'>
	<thead>
		<tr>
			<th align="left"></th>
			<th align="left" width=200 >Tên menu</th>
			<th align="center" width=50 >Actions</th>		
		</tr>
	</thead>
	<tbody>
	<?php 
		
		while($tv_2=mysql_fetch_array($tv_1))
		{
			$link_sua="?thamso=sua_menu_doc&id=$tv_2[id]&trang=$_GET[trang]";
			$link_xoa="?thamso=xoa_menu_doc&id=$tv_2[id]";
			
			$link_hinh = $tv_2['thumbnail'];
			$link_hinh = explode('src="',$link_hinh);
			$link_hinh = explode('"',$link_hinh[1]);
			$link_hinh = $link_hinh[0];				
			?>
			
				<tr>
					<td width="100px" align="left" class="imgTd" style="text-align: center;" >
					<img src="<?php echo $link_hinh ?>" width="90px" height="90px" border="0"/>
					</td>
					<td align="left">
						<?php 
							if($tv_2['thuoc_menu']!="")
							{
								echo_khoang_trang($tv_2['thuoc_menu']);
							}
						?>
						<a href="<?php echo $link_sua; ?>"></?php><?php echo $tv_2['ten']; ?></a>
					</td>
					<td align="center" ><a href="<?php echo $link_sua; ?>" >Sửa</a>|<a href="<?php echo $link_xoa; ?>">Xóa</a></td>
				</tr>
				
			<?php
		}	
	?>
	<tr>
		<td colspan="4" align="center">
			<?php 
				//echo $_GET['tu_khoa'];
				/*for($i=1;$i<=$st;$i++)
				{
					$link="?thamso=quan_ly_menu_doc&trang=$i";
					echo "<a href='$link'>";
						echo $i;
					echo "</a>";echo " ";
				}*/
				xuat_link($st);
			?>
		</td>
	</tr>
	</tbody>
</table>
</div>