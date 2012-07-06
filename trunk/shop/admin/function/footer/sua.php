<?php 
	chong_pha_hoai();
	//echo "thay doi lien he";
?>
<?php 
	$tv="select * from footer order by id";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$noi_dung=$tv_2['html'];
	$noi_dung=str_replace("\r","",$noi_dung);
	$noi_dung=str_replace("\n","",$noi_dung);
	$noi_dung=str_replace("\t","",$noi_dung);
	$noi_dung=str_replace("'","\'",$noi_dung);
?>
<div class='box'>
<div class='box-header'><h1>Thay đổi footer | <a href="index.php" style='color: white'>Đóng</a></h1></div>
<form action="" method="post">
<table style="margin:5px">	
	<tr>
		<td colspan=2>
			
			<textarea cols="80" id="noi_dung" name="noi_dung" rows="10"><?php echo $noi_dung; ?></textarea>
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
		<td></td>
		<td>
			<input type="hidden" name="thay_doi_footer" value="thay_doi_footer" >
			<input type="submit" value="Cập nhật" >	
		</td>
	</tr>
</table>
</form>
</div>