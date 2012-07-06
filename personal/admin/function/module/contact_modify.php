<?php 
	chong_pha_hoai();

	$tv="select * from contact order by id";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$email=$tv_2['gia_tri'];
	$tv_2=mysql_fetch_array($tv_1);
        
	$noi_dung_lien_he=$tv_2['gia_tri'];
	$noi_dung_lien_he=str_replace("\r","",$noi_dung_lien_he);
	$noi_dung_lien_he=str_replace("\n","",$noi_dung_lien_he);
	$noi_dung_lien_he=str_replace("\t","",$noi_dung_lien_he);
	$noi_dung_lien_he=str_replace("'","\'",$noi_dung_lien_he);
	//echo $noi_dung_lien_he;echo "<hr>";
?>
	
<div class='box'>
<div class='box-header'><h1>Change contact</h1></div>
<div style="padding: 10px;">
	<form action="" method="post">
	<table>
		<tr>
			<td><b>Email: </b></td>
			<td><input style="width:300px" name="email_lien_he" value="<?php echo $email; ?>" ></td>
		</tr>
		<tr>			
			<td colspan=2>
				<textarea cols="80" id="noi_dung" name="noi_dung" rows="10"><?php echo $noi_dung_lien_he; ?></textarea>
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
				<input type="hidden" name="function" value="contact_modify_action" >
				<input type="submit" value="Change">
			</td>
		</tr>		
	</table>
	</form>
</div>
</div>