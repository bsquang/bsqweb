<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select * from tin_tuc where id='$_GET[id]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$link_hinh="../hinhanh_flash/tin_tuc/".$tv_2['hinh_anh'];
	$noi_dung=$tv_2['noi_dung'];
	$noi_dung=str_replace("\n","",$noi_dung);
	$noi_dung=str_replace("\r","",$noi_dung);
	$noi_dung=str_replace("\t","",$noi_dung);
	$noi_dung=str_replace("'","\'",$noi_dung);
?>
<table width="990px" id="er" style="margin-top:6px">
	<tr>
		<td align="right" >
			<span class="span__16">Sữa tin tức</span>
			<a href="?thamso=quan_ly_tin_tuc&trang=<?php echo $_GET['trang']; ?>" class="nut_dong">
				Đóng
			</a>
		</td>
	</tr>
	<tr>
		<td>
			<form action="" method="post" enctype="multipart/form-data">
				<table width="976px" border="0" style="clear:left;margin:6px" id="er_2">
					<tr>
						<td>
							<b>Tên :</b>
						</td>
						<td>
							<input size="70" name="ten" value="<?php echo $tv_2['ten']; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<b>Hình ảnh :</b>
						</td>
						<td>
							<img src="<?php echo $link_hinh; ?>" border="0" width="130px" height="100px">
							<br>
							<input name="hinh_anh" type="file" >
							<input type="hidden" name="hidden_hinh_anh" value="<?php echo $tv_2['hinh_anh']; ?>">
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
									oFCKeditor.Value	= '<?php echo $noi_dung; ?>' ;
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
							<input type="hidden" name="sua_tin_tuc" value="sua_tin_tuc">
							<!--<input type="submit" value="Chấp nhận">-->
							<input type="image" src="../hinhanh_flash/dung_chung/sua_du_lieu.gif" style="border:0px solid red">
						</td>
					</tr>
				</table>
			</form>
			</td>
		</tr>
	</table>
</center>
<script>
	table_css_2("er");
	table_css("er_2");
</script>