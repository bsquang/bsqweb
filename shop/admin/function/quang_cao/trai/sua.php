<?php 
	chong_pha_hoai();
	//echo "them quang cao trai";echo "<hr>";
?>
<?php 
	$tv="select * from quang_cao_trai where id='$_GET[id]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$m=explode(".",$tv_2['file']);
	$duoi_file=$m[count($m)-1];
	$link_file="../hinhanh_flash/quang_cao/".$tv_2['file'];
	$rong=$tv_2['rong'];
	$cao=$tv_2['cao'];
	$link_lien_ket=$tv_2['link'];
?>
<table width="990px" id="er" style="margin-top:6px">
	<tr>
		<td align="right">
			<span class="span__16">Sữa quãng cáo trái</span>
			<a href="?thamso=quan_ly_quang_cao_trai&trang=<?php echo $_GET['trang']; ?>" class="nut_dong">
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
							<input style="width:300px" name="lien_ket" value="<?php echo $link_lien_ket; ?>">
						</td>
					</tr>
					<tr>
						<td><b>Hình ảnh / Flash :</b></td>
						<td>
							<input type="file" name="hinh_anh">
							<input type="hidden" name="hidden___value__hinh_anh" value="<?php echo $tv_2['file']; ?>" >
							<br>
							<div class="cao_3_px"></div>
							<?php 
								if($duoi_file=="swf")
								{
									flash($link_file,$rong,$cao);
								}
								else 
								{
									echo "<a href='$link_lien_ket' target='_blank'>";
										echo "<img src='$link_file' width='$rong' height='$cao'>";
									echo "</a>";
									
								}
							?>
							<div class="cao_3_px"></div>
						</td>
					</tr>
					<tr>
						<td><b>Rộng :</b></td>
						<td>
							<input style="width:300px" name="rong" value="<?php echo $rong; ?>">
						</td>
					</tr>
					<tr>
						<td><b>Cao :</b></td>
						<td>
							<input style="width:300px" name="cao" value="<?php echo $cao; ?>">
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>
							<input type="hidden" name="sua_quang_cao_trai" value="sua_quang_cao_trai" >
							<!--<input type="submit" value="Sữa">-->
							<input type="image" src="../hinhanh_flash/dung_chung/sua.gif" style="border:0px solid red"/>
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