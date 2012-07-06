<?php 
	chong_pha_hoai();
?>
<?php 
	//echo "trang gio hang";
?>
<style>
	span.jjj__gio_hang
	{
		display:block;
		margin-left:5px
	}
	table.tb__u91
	{
		border-collapse: collapse;
		border:1px solid #999999;
		margin-top:6px
	}
	table.tb__u91 td
	{
		border:1px solid #999999;
		text-align:left
	}
</style>
<?php 
	//$_SESSION[$ten_danh_dau."fix_ie_button_back__abc"]="co";
	$so_8=count($_SESSION[$ten_danh_dau__kkk.'id_giohang']);
	$mua_hang="khong";
	for($r=0;$r<$so_8;$r++)
	{
		$sl=$_SESSION[$ten_danh_dau__kkk.'sl_abc'][$r];
		if($sl!=0)
		{
			$mua_hang="co";	
		}
	}
	if($mua_hang=="khong")
	{
		unset($_SESSION[$ten_danh_dau__kkk.'id_giohang']);
		unset($_SESSION[$ten_danh_dau__kkk.'sl_abc']);
	}
	echo "<center>";
		echo "<div class='tdg___ggg'>";
			echo "<a href='#'>";
				echo "Giỏ hàng";
			echo "</a>";
		echo "</div>";
		echo "<div class='ndg___ggg'>";
	if($so_8!=0 and $mua_hang=="co")
	{
?>
<?php 

?>
			<center>
				<form action="" method="post" style="margin:0">
					<table border='0' width='620px' class="tb__u91">
						<tr style="background:#676767;color:white;font-weight:bold">
							<td align="center" width="50px">STT</td>
							<td width="230px"><span class="jjj__gio_hang" >Tên sản phẩm</span></td>
							<td width="100px"><span class="jjj__gio_hang" >Số lượng</span></td>
							<td width="120px"><span class="jjj__gio_hang">Giá (VNĐ)</span></td>
							<td width="120px"><span class="jjj__gio_hang">Tổng số (VNĐ)</span></td>
						</tr>
						<?php
							$tong_lon=0; 
							$so=count($_SESSION[$ten_danh_dau__kkk.'id_giohang']);
							$j=0;
							for($r=0;$r<$so;$r++)
							{
								$q=$r+1;
								$sl=$_SESSION[$ten_danh_dau__kkk.'sl_abc'][$r];
								$id_sp=$_SESSION[$ten_danh_dau__kkk.'id_giohang'][$r];
								$tv="select * from san_pham where id='$id_sp'";
								$tv_1=mysql_query($tv);
								$tv_2=mysql_fetch_array($tv_1);
								$tong=$sl*$tv_2['gia_ban'];
								$tong_lon=$tong_lon + $tong;
								$ten_input__sl="sl_kkk__$r";
								if($sl!=0)
								{
									$j=$j+1;
									?>
										<tr style="">
											<td align="center"><?php echo $j; ?></td>
											<td><span class="jjj__gio_hang"><?php echo $tv_2['ten'] ; ?></span></td>
											<td>
												<span class="jjj__gio_hang">
													<input style="width:50px" value="<?php echo $sl; ?>" name="<?php echo $ten_input__sl; ?>">
												</span>
											</td>
											<td><span class="jjj__gio_hang">
												<?php 
													$dinh_dang_gia=number_format($tv_2['gia_ban'],0,".",".");
													echo $dinh_dang_gia;
												?>
												<?php //echo $tv_2['gia_ban'] ; ?>
											</span></td>
											<td>
												<span class="jjj__gio_hang">
													<?php //echo $tong; ?>
													<?php 
														$dinh_dang_tong=number_format($tong,0,".",".");
														echo $dinh_dang_tong;
													?>
												</span>
											</td>
										</tr>
									<?php
								}
								
							}
						?>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>
								<input type="hidden" name="cap_nhat_gio_hang__ggg" value="cap_nhat_gio_hang__ggg">								
								<!--<input type="submit" value="Cập nhật">-->
								<input type="image" src="hinhanh_flash/dung_chung/capnhat_giohang.gif" style="margin:2px 0px 2px 5px;border:0px solid red">								
							</td>
							<td>&nbsp;</td>
							<td>
								<span class="jjj__gio_hang gia_ban">
									<?php //echo $tong_lon; ?>
									<?php 
										$dinh_dang_tong_lon=number_format($tong_lon,0,".",".");
										echo $dinh_dang_tong_lon;
									?>
								</span>
							</td>
						</tr>
					</table>
				</form>
				<div class="cao_3_px"></div>
				<div class="cao_3_px"></div>
				<form action="" method="post" style="margin:0">
					<table width="620px" border="0" class="tb__u91">
						<tr style="background:#676767;color:white;font-weight:bold" >
							<td colspan="2">
								<span class="jjj__gio_hang">Vui lòng điền đầy đủ các thông tin bên dưới</span>
							</td>
						</tr>
						<tr>
							<td><b>Họ tên : </b></td>
							<td><input style="width:300px"  name="ho_ten"/></td>
						</tr>
						<tr>
							<td><b>Địa chỉ : </b></td>
							<td>
								<textarea name="dia_chi" style="width:500px;height:65px"></textarea>
							</td>
						</tr>
						<tr>
							<td><b>Hòm thư : </b></td>
							<td><input style="width:300px"  name="hom_thu"/></td>
						</tr>
						<tr>
							<td><b>Điện thoại : </b></td>
							<td><input style="width:300px"  name="dien_thoai"/></td>
						</tr>
						<tr>
							<td><b>Nội dung : </b></td>
							<td>
								<textarea name="noi_dung" style="width:500px;height:75px"></textarea>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>
								<input type="hidden" name="thanh_toan_don_hang__hhh" value="thanh_toan_don_hang__hhh" />
								<!--<input type="submit" value="Thanh toán" />-->
								<input type="image" src="hinhanh_flash/dung_chung/thanh_toan.gif" style="width:100px;margin:2px;_margin-bottom:-2px;border:0px solid red">
							</td>
						</tr>
					</table>
				</form>
			</center>
	<?php 
		}
		else 
		{
			//thongbao("");
			?>
				<center>
					<table border='0' width='640px'>
						<tr>
							<td align="left">
								Bạn chưa mua hàng
							</td>
						</tr>
					</table>
				</center>
			<?php
		}
	?>
<?php 
		echo "</div>";
	echo "</center>";
?>