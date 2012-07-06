<?php 
	chong_pha_hoai();
	//echo "chao <hr>";
?>
<?php 
	echo "<center>";
		echo "<div class='tdg___ggg'>";
			echo "<a href='#'>";
				echo "Lấy lại mật khẩu";
			echo "</a>";
		echo "</div>";
		echo "<div class='ndg___ggg'>";
?>
			<?php 
				if($xac_dinh_dang_nhap_thanh_vien!="co")
				{
			?>
					<form action="" method="post" style="margin:0">
						<table>
							<tr>
								<td valign="top" ><b>Ký danh của bạn :</b></td>
								<td>
									<input style="width:400px" name="ky_danh">
									<br>
									<i style="font-size:14px">( Khi bạn thực hiện gửi đi thì mật khẩu của bạn sẽ được thiết lập lại và không giống
									<br>với mật khẩu ban đầu khi bạn đăng ký )</i>
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>
									<input type="hidden" name="tv__lay_lai_mat_khau" value="tv__lay_lai_mat_khau">
									<!--<input type="submit" value="Gửi">-->
									<input type="image" src="hinhanh_flash/dung_chung/gui.gif" style="width:60px;height:20px;border:0px solid red">
								</td>
							</tr>
						</table>
					</form>
			<?php 
				}
				else 
				{
					echo "Bạn đã đăng nhập";
				}
			?>
<?php 
		echo "</div>";
	echo "</center>";
?>