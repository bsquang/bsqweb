<?php 
	chong_pha_hoai();
	
	$link_dong = "?thamso=project_manage";
?>
<div class='box'>
<div class='box-header'><h1>Add project item | <a href="<?php echo $link_dong; ?>" style='color: white'>Close</a></h1></div>
	<form action="" method="post" enctype="multipart/form-data">
		<table width="976px" border="0" style="margin:5px" >			
			<tr>
				<td>
					<b>Name :</b>
				</td>
				<td>
					<input size="70" name="name">
				</td>
			</tr>
			<tr>
				<td>
					<b>Thumbnail :</b>
				</td>
				<td>
					<input name="thumbnail" type="file" >
				</td>
			</tr>
			<tr>
				<td>
					<b>Url : </b>
				</td>
				<td>
					<input size="70" name="url">
				</td>
			</tr>			
			
			<tr>
				<td>
					<b>Date : </b>
				</td>
				<td>
					<input size="70" id='datepicker' name="date">
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
					<textarea cols="80" id="noi_dung" name="detail" rows="10"></textarea>
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
					<textarea cols="80" id="slideshow" name="slideshow" rows="10"></textarea>
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
				<td>&nbsp;
					
				</td>
				<td>
					<input type="hidden" name="function" value="project_add_action">
					<input type="submit" value="Add">
				</td>
			</tr>
		</table>
	</form>
</div>