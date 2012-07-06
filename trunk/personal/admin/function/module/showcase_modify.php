<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select * from showcase where id='$_GET[id]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$link_hinh="../resource/showcase/".$tv_2['thumbnail'];
	
	$noi_dung=$tv_2['detail'];
	$noi_dung=str_replace("\n","",$noi_dung);
	$noi_dung=str_replace("\r","",$noi_dung);
	$noi_dung=str_replace("\t","",$noi_dung);
	$noi_dung=str_replace("'","\'",$noi_dung);
	
	$slideshow=$tv_2['slideshow'];
	$slideshow=str_replace("\n","",$slideshow);
	$slideshow=str_replace("\r","",$slideshow);
	$slideshow=str_replace("\t","",$slideshow);
	$slideshow=str_replace("'","\'",$slideshow);
	
	$link_dong = "?thamso=showcase_manage";
?>
<div class='box'>
<div class='box-header'><h1>Edit showcase | <a href="<?php echo $link_dong; ?>" style='color: white'>Close</a></h1></div>
	<form action="" method="post" enctype="multipart/form-data">
		<table width="976px" border="0" style="clear:left;margin:5px">
			<tr>
				<td>
					<b>Name :</b>
				</td>
				<td>
					<input size="70" name="name" value="<?php echo $tv_2['name']; ?>">
				</td>
			</tr>
			<tr>
				<td>
					<b>Thumbnail :</b>
				</td>
				<td>
					<img src="<?php echo $link_hinh; ?>" border="0" style='width: 150px;height: auto;'>
					<br>
					<br>
					<input name="thumbnail" type="file" >
					<input type="hidden" name="hidden_hinh_anh" value="<?php echo $tv_2['thumbnail']; ?>">
				</td>
			</tr>
			<tr>
				<td>
					<b>Url : </b>
				</td>
				<td>
					<input size="70" name="url" value="<?php echo $tv_2['url']; ?>">
				</td>
			</tr>
			<tr>
				<td>
					<b>Date : </b>
				</td>
				<td>
					<input size="70" id='datepicker' name="date" value="<?php echo $tv_2['date']; ?>">
					<script>
						$(function() {
							$( "#datepicker" ).datepicker({
								showAnim: 'blind',
								dateFormat: "MM yy",
								changeMonth: true,
								changeYear: true
							});							
						});
					</script>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<center><b>Detail</b></center>
					<br>
					<textarea cols="80" id="noi_dung" name="detail" rows="10"><?php echo $noi_dung; ?></textarea>
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
					<center><b>Slideshow</b></center>
					<br>
					<textarea cols="80" id="slideshow" name="slideshow" rows="10"><?php echo $slideshow; ?></textarea>
					<script type="text/javascript">
						CKEDITOR.replace( 'slideshow',
						{
							toolbar :
							[
								{ name: 'document',    items : [ 'Source' ] },
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
					<input type="hidden" name="function" value="showcase_modify_action">
					<input type="submit" value="Modify">					
				</td>
			</tr>
		</table>
	</form>
</div>