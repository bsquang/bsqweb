<?php 
	chong_pha_hoai();
	//echo "trang dang ky"; 
?>

<?php 
		echo "<center>";
			echo "<div class='tdg___ggg'>";
				echo "<a href='#'>";
					echo "Đăng ký";
				echo "</a>";
			echo "</div>";
			echo "<div class='ndg___ggg'>";
				if($xac_dinh_dang_nhap_thanh_vien!="co")
				{
					
			?>
					<center>
						<form action="" method="post">
							<table width="640px">
								<tr>
									<td width="120px" align="right"><b>Ký danh : </b></td>
									<td align="left"><input style="width:400px" name="ky_danh"></td>
								</tr>
								<tr>
									<td align="right"><b>Mật khẩu : </b></td>
									<td align="left"><input style="width:400px" name="mat_khau" type="password"></td>
								</tr>
								<tr>
									<td align="right"><b>Email : </b></td>
									<td align="left"><input style="width:400px" name="email"></td>
								</tr>
								<tr>
									<td align="right"><b>Điện thoại : </b></td>
									<td align="left"><input style="width:400px" name="dien_thoai"></td>
								</tr>
								<tr>
									<td align="right"><b>Địa chỉ : </b></td>
									<td align="left">
										<textarea name="dia_chi" style="width:400px;height:65px"></textarea>
									</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td align="left">
										<input type="hidden" name="dang_ky_thanh_vien__vvv" value="dang_ky_thanh_vien__vvv">
										<!--<input type="submit" value="Đăng ký">-->
										<input type="image" src="hinhanh_flash/dung_chung/dang_ky.gif" style="border:0px solid #999999;">
									</td>
								</tr>
							</table>
						</form>
					</center>
			<?php 
				}
				else 
				{
					echo "<center>";
						echo "<table width='640px'>";
							echo "<tr>";
								echo "<td>";
									echo "Bạn đã đăng nhập";
								echo "</td>";
							echo "</tr>";
						echo "</table>";
					echo "</center>";
				}
				echo "</div>";
		echo "</center>";
?>
