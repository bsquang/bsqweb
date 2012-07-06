<?php 
	chong_pha_hoai();
	//echo "them quang cao trai";echo "<hr>";
?>
<table width="990px" id="er" style="margin-top:6px">
	<tr>
		<td align="right">
			<span class="span__16">Thêm quãng cáo phải</span>
			<a href="?thamso=bien_luan_link_menu__qcp" class="nut_dong">
				Đóng
			</a>
		</td>
	</tr>
	<tr>
		<td>
			<form action="" method="post" style="margin:0" enctype="multipart/form-data" >
				<table width="600px" style="margin:6px" id="er_2">
					<tr>
						<td><b>Liên kết :</b></td>
						<td>
							<input style="width:300px" name="lien_ket" >
						</td>
					</tr>
					<tr>
						<td><b>Hình ảnh / Flash :</b></td>
						<td>
							<input type="file" name="hinh_anh">
						</td>
					</tr>
					<tr>
						<td><b>Rộng :</b></td>
						<td>
							<input style="width:300px" name="rong" value="150px">
						</td>
					</tr>
					<tr>
						<td><b>Cao :</b></td>
						<td>
							<input style="width:300px" name="cao" >
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>
							<input type="hidden" name="them_quang_cao_phai" value="them_quang_cao_phai" >
							<!--<input type="submit" value="Thêm">-->
							<input type="image" src="../hinhanh_flash/dung_chung/them.gif" style="border:0px solid red"/>
						</td>
					</tr>
				</table>
			</form>
		</td>
	</tr>
</table>
<script>
	table_css_1("er");
	table_css("er_2");
</script>