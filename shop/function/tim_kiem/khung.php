<?php 
	chong_pha_hoai();
?>
<?php 
	function xac_dinh_menu_con__123456($id_cha)
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
	function de_quy_menu__ffffff($id_cha,$kt="")
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
			$xac_dinh_menu_con__123456=xac_dinh_menu_con__123456($tv_2['id']);
			if($xac_dinh_menu_con__123456=="co")
			{
				de_quy_menu__ffffff($tv_2['id'],$kt);
			}
		}	
	}
?>
<?php 
	if($_GET['thamso']=="tim_kiem")
	{
		if($_GET['tu_khoa']=="")
		{
			$tu_khoa_input="Từ khóa tìm kiếm";
		}
		else 
		{
			$tu_khoa_input=$_GET['tu_khoa'];
		}
	}
	else 
	{
		$tu_khoa_input="Từ khóa tìm kiếm";
	}
?>

<div class="tdk___456">
	<span>Tìm kiếm</span>
</div>
<div class="ndk___456">
	<form action="">
		<center>
			<div style="text-align:left;padding-left:15px">
				<div class="cao_3_px"></div>
				<input type="hidden" name="thamso" value="tim_kiem">
				<input value="<?php echo $tu_khoa_input; ?>" name="tu_khoa" style="width:140px" onfocus="if (this.value=='<?php echo $tu_khoa_input; ?>'){this.value=''};this.style.backgroundColor='#fffde8';" onblur="this.style.backgroundColor='#ffffff';">
				<br>
				<div class="cao_3_px"></div>
				<select name="cap_do" style="width:143px;background:#ececec;border:1px solid #999999" >
					<option value="">Tìm toàn bộ menu </option>
					<?php 
						$tv="select * from menu where thuoc_menu=''";
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
								echo $tv_2['ten'];						
							echo "</option>";
							$xac_dinh_menu_con__123456=xac_dinh_menu_con__123456($tv_2['id']);
							if($xac_dinh_menu_con__123456=="co")
							{
								de_quy_menu__ffffff($tv_2['id']);
							}
						}
					?>
				</select>
				<div class="cao_3_px"></div>
				<?php 
					if($_GET['gia_dau']=="")
					{
						$gia_dau="Giá từ";
					}
					else 
					{
						$gia_dau=$_GET['gia_dau'];
					}
					if($_GET['gia_cuoi']=="")
					{
						$gia_cuoi="đến";
					}
					else 
					{
						$gia_cuoi=$_GET['gia_cuoi'];
					}
				?>
				<div style="float:left;margin-right:5px" >
					<input style="width:67px;background:#ececec" name="gia_dau" value="<?php echo $gia_dau; ?>" onfocus="if (this.value=='<?php echo $gia_dau; ?>'){this.value=''};this.style.backgroundColor='#fffde8';" onblur="this.style.backgroundColor='#ffffff';" />
				</div>
				<div>
					<input style="width:67px;background:#ececec" name="gia_cuoi" value="<?php echo $gia_cuoi; ?>"onfocus="if (this.value=='<?php echo $gia_cuoi; ?>'){this.value=''};this.style.backgroundColor='#fffde8';" onblur="this.style.backgroundColor='#ffffff';" />
				</div>
				<div class="cao_3_px"></div>
			</div>
		</center>
		<center>
			<!--<input type="submit" value="Tìm kiếm">-->
			<input type="image" src="hinhanh_flash/dung_chung/3.png" style="border:0px solid #999999;">
		</center>
		<div class="cao_3_px"></div>
	</form>
</div>
