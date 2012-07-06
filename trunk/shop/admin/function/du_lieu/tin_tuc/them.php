<?php 
	chong_pha_hoai();
?>
<table width="990px" id="er" style="margin-top:6px">
	<tr>
		<td align="right" >
			<span class="span__16">Thêm tin tức</span>
			<a href="?thamso=bien_luan_them_du_lieu__www" class="nut_dong">
				Đóng
			</a>
		</td>
	</tr>
	<tr>
		<td>
			<form action="" method="post" enctype="multipart/form-data">
				<table width="976px" border="0" id="er_2" style="margin:6px" >
					<tr>
						<td width="150px">
							<b>Tiêu đề :</b>
						</td>
						<td>
							<input size="70" name="ten">
						</td>
					</tr>
					<tr>
						<td>
							<b>Hình ảnh :</b>
						</td>
						<td>
							<input name="hinh_anh" type="file" >
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<center><b>Nội dung</b></center>
							<br>
							<center>
								<script type="text/javascript">
									var oFCKeditor = new FCKeditor('noi_dung') ;
									oFCKeditor.BasePath	= "fckeditor/" ;
									oFCKeditor.Height	= 300 ;
									oFCKeditor.Width	= 960 ;
									oFCKeditor.Value	= '' ;
									oFCKeditor.Config["EnterMode"]= "br" ;
									oFCKeditor.Create() ;
								</script>
							</center>
						</td>
					</tr>
					<tr>
						<td>&nbsp;
							
						</td>
						<td>
							<input type="hidden" name="them_tin_tuc" value="them_tin_tuc">
							<!--<input type="submit" value="Chấp nhận">-->
							<input type="image" src="../hinhanh_flash/dung_chung/them_du_lieu.gif" style="border:0px solid red">
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