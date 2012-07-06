<?php 
	chong_pha_hoai();
	//echo "chao <hr>";
?>
<div class='box'>
<div class='box-header'><h1>Thêm menu dọc</h1></div>

	<form action="" method="post">
		<table width="600px" style="margin:6px">
			<tr>
				<td width="120px"><b>Cấp độ : </b></td>
				<td>
					<?php 
						function xac_dinh_menu_con__123($id_cha)
						{
							$tv="select count(*) from menu where thuoc_menu='$id_cha'";
							$tv_1=mysql_query($tv);
							$tv_2=mysql_fetch_row($tv_1);
							if($tv_2[0]==0)
							{
								return "khong";
							}
							else 
							{
								return "co";
							}
						}
						function de_quy_menu__fff($id_cha,$ten_danh_dau__kkk,$kt="")
						{
							$kt=$kt."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
							$tv="select * from menu where thuoc_menu='$id_cha'";
							$tv_1=mysql_query($tv);
							while($tv_2=mysql_fetch_array($tv_1))
							{
								if($_SESSION[$ten_danh_dau__kkk."selected_cd_mnd__789"]==$tv_2['id'])
								{
									$select="selected";
								}
								else 
								{
									$select="";
								}
								echo "<option value='$tv_2[id]' $select >";
									echo $kt;	
									echo $tv_2['ten'];												
								echo "</option>";
								$xac_dinh_menu_con__123=xac_dinh_menu_con__123($tv_2['id']);
								if($xac_dinh_menu_con__123=="co")
								{
									de_quy_menu__fff($tv_2['id'],$ten_danh_dau__kkk,$kt);
								}
							}	
						}
					?>
					<?php 
						echo "<select name='cap_do'>";
							echo "<option value=''>";
								echo "Cấp đầu";
							echo "</option>";
							$tv="select * from menu where thuoc_menu=''";
							$tv_1=mysql_query($tv);
							while($tv_2=mysql_fetch_array($tv_1))
							{
								if($_SESSION[$ten_danh_dau__kkk."selected_cd_mnd__789"]==$tv_2['id'])
								{
									$select="selected";
								}
								else 
								{
									$select="";
								}
								echo "<option value='$tv_2[id]' $select >";
									echo $tv_2['ten'];						
								echo "</option>";
								$xac_dinh_menu_con__123=xac_dinh_menu_con__123($tv_2['id']);
								if($xac_dinh_menu_con__123=="co")
								{
									de_quy_menu__fff($tv_2['id'],$ten_danh_dau__kkk);
								}
							}
						echo "</select>";
					?>
				</td>
			</tr>
			<tr>
				<td><b>Tên menu : </b></td>
				<td><input style="width:400px" name="ten_menu" ></td>
			</tr>
			<tr>
				<td colspan="2">
					<center><b>Thông tin sản phẩm (mini)</b></center>
					<br>
					<textarea cols="80" id="thumbnail" name="thumbnail" rows="10"></textarea>
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
					<input type="hidden" name="them_menu_doc" value="them_menu_doc" >
					<input type="submit" value="Thêm">
					<!--<input type="image" src="../hinhanh_flash/dung_chung/them.gif" style="border:0px solid red;_margin-bottom:-4px">-->
				</td>
			</tr>
		</table>
	</form>
</div>