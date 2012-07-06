<?php 
	chong_pha_hoai();
	//echo "trang sua thong tin ca nhan <hr>";
?>
<?php 
	$kd=$_SESSION[$ten_danh_dau__kkk.'ky_danh__zzz'];
	$tv="select * from thanh_vien where ky_danh='$kd'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	//$dc=nl2br($tv_2['dia_chi']);
	$dc=str_replace("<br />","",$tv_2['dia_chi']);
?>
<?php 
	echo "<center>";
		echo "<div class='tdg___ggg'>";
			echo "<a href='#'>";
				echo "Sữa thông tin cá nhân";
			echo "</a>";
		echo "</div>";
		echo "<div class='ndg___ggg'>";
			if($xac_dinh_dang_nhap_thanh_vien=="co")
			{
		?>
				<form action="" method="post" style="margin:0">
					<table width="638px">
						<tr>
							<td width="120px" valign="top" ><b>Mật khẩu :</b></td>
							<td>
								<input style="width:300px" type="password" value="khong_thay_doi" name="mat_khau"/>
								<br />
								<i style="font-size:14px">( Nếu bạn muốn thay đổi mật khẩu thì hãy nhập mật khẩu vào ô ở trên )</i>
								<br />
								<i style="font-size:14px">( Nếu bạn muốn không thay đổi mật khẩu thì để yên giá trị ở ô trên )</i>
							</td>
						</tr>
						<tr>
							<td><b>Email :</b></td>
							<td><input style="width:300px" value="<?php echo $tv_2['email']; ?>" name="email" /></td>
						</tr>
						<tr>
							<td><b>Điện thoại :</b></td>
							<td><input style="width:300px" value="<?php echo $tv_2['dien_thoai']; ?>" name="dien_thoai" /></td>
						</tr>
						<tr>
							<td><b>Địa chỉ :</b></td>
							<td>
								<textarea style="width:500px;height:65px" name="dia_chi" ><?php echo $dc; ?></textarea>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>
								<input type="hidden" name="sua_thong_tin_ca_nhan" value="sua_thong_tin_ca_nhan"  />
								<!--<input type="submit" value="Thay đổi" />-->
								<input type="image" src="hinhanh_flash/dung_chung/thay_doi.gif" style="width:100px;height:20px;border:0px solid red;margin:2px 0px 2px 0px;_margin:2px 0px -1px 0px">
							</td>
						</tr>
					</table>
				</form>
		<?php 
			}
			else 
			{
				echo "Bạn chưa đang ký thành viên";
			}
		echo "</div>";
	echo "</center>";
?>