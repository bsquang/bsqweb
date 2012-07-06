<?php 
	chong_pha_hoai();
	//echo "sua thanh vien";
	$tv="select * from thanh_vien where id='$_GET[id]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$tv_2['dia_chi']=str_replace("<br />","",$tv_2['dia_chi']);
?>
<table width="990px" id="er" style="margin-top:6px">
	<tr>
		<td align="right" >
			<span class="span__16">Sữa thành viên</span>
			<a href="?thamso=quan_ly_thanh_vien&trang=<?php echo $_GET['trang']; ?>" class="nut_dong">
				Đóng
			</a>
		</td>
	</tr>
	<tr>
		<td>
			<form action="" method="post">
				<table width="600px" style="clear:left;margin:6px" id="er_2">
					<tr>
						<td width="120px"><b>Ký danh :</b></td>
						<td><input style="width:300px" name="ky_danh" value="<?php echo $tv_2['ky_danh']; ?>"></td>
					</tr>
					<tr>
						<td valign="top"><b>Mật khẩu :</b></td>
						<td>
							<input  style="width:300px" name="mat_khau" value="khong_thay_doi" type="password">
							<br>
							( Nếu muốn thay đổi , xin hãy nhập giá trị mới vào ô trên )
						</td>
					</tr>
				
					<tr>
						<td><b>Email :</b></td>
						<td><input style="width:300px" name="email" value="<?php echo $tv_2['email']; ?>"></td>
					</tr>
					<tr>
						<td><b>Điện thoại :</b></td>
						<td><input style="width:300px" name="dien_thoai" value="<?php echo $tv_2['dien_thoai']; ?>"></td>
					</tr>
				
					<tr>
						<td><b>Địa chỉ :</b></td>
						<td>
							<textarea style="width:400px;height:65px" name="dia_chi"><?php echo $tv_2['dia_chi']; ?></textarea>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
				
						<td>
							<input type="hidden" name="sua_thanh_vien" value="sua_thanh_vien">
							<!--<input type="submit" value="Sữa">-->
							<input type="image" src="../hinhanh_flash/dung_chung/sua.gif" style="border:0px solid red"/>
						</td>
					</tr>
				</table>
			</form>
			</td>
		</tr>
	</table>
</center>
<script>
	table_css_1("er");
	table_css_2("er_2");
</script>
