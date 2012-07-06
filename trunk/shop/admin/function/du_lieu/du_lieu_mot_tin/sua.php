<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select * from du_lieu_mot_tin where id='$_GET[id]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$link_hinh="../hinhanh_flash/tin_tuc/".$tv_2['hinh_anh'];
	
	$noi_dung=$tv_2['noi_dung'];
	$noi_dung=str_replace("\n","",$noi_dung);
	$noi_dung=str_replace("\r","",$noi_dung);
	$noi_dung=str_replace("\t","",$noi_dung);
	$noi_dung=str_replace("'","\'",$noi_dung);
	
	$noi_dung2=$tv_2['html'];
	$noi_dung2=str_replace("\n","",$noi_dung2);
	$noi_dung2=str_replace("\r","",$noi_dung2);
	$noi_dung2=str_replace("\t","",$noi_dung2);
	$noi_dung2=str_replace("'","\'",$noi_dung2);
?>
<div class='box'>
<div class='box-header'><h1>Sửa dữ liệu trang | <a href="?thamso=quan_ly_du_lieu_mot_tin&trang=<?php echo $_GET['trang']; ?>" style='color: white'>Đóng</a></h1></div>
	<form action="" method="post" enctype="multipart/form-data">
		<table width="976px" border="0" style="clear:left;margin:5px">
			<tr>
				<td>
					<b>Tên menu :</b>
				</td>
				<td>
					<input size="70" name="ten_menu" value="<?php echo $tv_2['ten_menu']; ?>">
				</td>
			</tr>
			<tr>
				<td>
					<b>Tên bài viết :</b>
				</td>
				<td>
					<input size="70" name="ten" value="<?php echo $tv_2['ten']; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<center><b>Content</b></center>
					<br>
					<textarea cols="80" id="noi_dung" name="noi_dung" rows="10"><?php echo $noi_dung ?></textarea>
					<script type="text/javascript">
						CKEDITOR.replace( 'noi_dung',
						{
							toolbar :
							[
								{ name: 'document',    items : [ 'Source' ] },
								{ name: 'basicstyles', items : [ 'Bold','Italic','RemoveFormat' ] },
								{ name: 'paragraph',   items : [ 'JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock' ] },
								{ name: 'insert',      items : [ 'Image' ] },
								{ name: 'tools', items : [ 'Maximize','-','About' ] }
							],
							filebrowserBrowseUrl : 'kcfinder/browse.php?type=files',
							filebrowserImageBrowseUrl : 'kcfinder/browse.php?type=images',
							filebrowserFlashBrowseUrl : 'kcfinder/browse.php?type=flash',
							filebrowserUploadUrl : 'kcfinder/upload.php?type=files',
							filebrowserImageUploadUrl : 'kcfinder/upload.php?type=images',
							filebrowserFlashUploadUrl : 'kcfinder/upload.php?type=flash'
						});
						CKEDITOR.config.enterMode = CKEDITOR.ENTER_BR;
					</script>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<center><b>Sub-Content</b></center>
					<br>
					<textarea cols="80" id="noi_dung2" name="noi_dung2" rows="10"><?php echo $noi_dung2 ?></textarea>
					<script type="text/javascript">
						CKEDITOR.replace( 'noi_dung2',
						{
							toolbar :
							[
								{ name: 'document',    items : [ 'Source' ] },
								{ name: 'basicstyles', items : [ 'Bold','Italic','RemoveFormat' ] },
								{ name: 'paragraph',   items : [ 'JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock' ] },
								{ name: 'insert',      items : [ 'Image' ] },
								{ name: 'tools', items : [ 'Maximize','-','About' ] }
							],
							filebrowserBrowseUrl : 'kcfinder/browse.php?type=files',
							filebrowserImageBrowseUrl : 'kcfinder/browse.php?type=images',
							filebrowserFlashBrowseUrl : 'kcfinder/browse.php?type=flash',
							filebrowserUploadUrl : 'kcfinder/upload.php?type=files',
							filebrowserImageUploadUrl : 'kcfinder/upload.php?type=images',
							filebrowserFlashUploadUrl : 'kcfinder/upload.php?type=flash'
						});
						CKEDITOR.config.enterMode = CKEDITOR.ENTER_BR;
					</script>
				</td>
			</tr>
			<tr>
				<td>&nbsp;
					
				</td>
				<td>
					<input type="hidden" name="sua_du_lieu_mot_tin" value="sua_du_lieu_mot_tin">
					<input type="submit" value="Chấp nhận">
				</td>
			</tr>
		</table>
	</form>
</div>