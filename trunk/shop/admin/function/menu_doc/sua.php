<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select * from menu where id='$_GET[id]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$thumbnail = $tv_2['thumbnail'];
	//print_r($tv_2);echo "<hr>";
?>
<div class='box'>
<div class='box-header'><h1>Sửa menu dọc | <a href="?thamso=quan_ly_menu_doc&trang=<?php echo $_GET['trang']; ?>" style='color: white'>Đóng</a></h1></div>

	<form action="" method="post">
		<table width="600px" style="margin:6px" >
			<tr>
				<td width="120px" ><b>Tên menu</b></td>
				<td><input style="width:400px" name="ten_menu" value="<?php echo $tv_2['ten']; ?>"></td>
			</tr>
			<tr>
				<td colspan="2">					
					<textarea cols="80" id="thumbnail" name="thumbnail" rows="10"><?php echo $thumbnail; ?></textarea>
					<script type="text/javascript">
						CKEDITOR.replace( 'thumbnail',
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
				<td>&nbsp;</td>
				<td>
					<input type="hidden" name="sua_menu_doc" value="sua_menu_doc" >
					<input type="submit" value="Hoàn tất">
					
				</td>
			</tr>
		</table>
	</form>
		
</div>