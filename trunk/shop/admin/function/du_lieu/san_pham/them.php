<?php 
	chong_pha_hoai();
?>
<div class='box'>
<div class='box-header'><h1>Thêm sản phẩm</h1></div>
	<form action="" method="post" enctype="multipart/form-data">
		<table width="976px" border="0" style="margin:5px" >
			<tr>
				<td width="150px">
					<b>Cấp độ :</b>
				</td>
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
								if($_SESSION[$ten_danh_dau__kkk."cap_do___kkk"]==$tv_2['id'])
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
							$tv="select * from menu where thuoc_menu=''";
							$tv_1=mysql_query($tv);
							while($tv_2=mysql_fetch_array($tv_1))
							{
								if($_SESSION[$ten_danh_dau__kkk."cap_do___kkk"]==$tv_2['id'])
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
				<td>
					<b>Tên :</b>
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
				<td>
					<b>Mã sp : </b>
				</td>
				<td>
					<input size="70" name="code">
				</td>
			</tr>
			<tr>
				<td>
					<b>Status : </b>
				</td>
				<td>
					<input size="70" name="status">
				</td>
			</tr>
			<tr>
				<td>
					<b>Giá bán : </b>
				</td>
				<td>
					<input size="70" name="gia">
				</td>
			</tr>
			<tr>
				<td>
					<b>Trang chủ : </b>
				</td>
				<td>
					<select name="trang_chu">
						<option value="khong">Không</option>
						<option value="co">Có</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<center><b>Thông tin sản phẩm (mini)</b></center>
					<br>
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
				<td colspan="2">
					<center><b>Thông tin sản phẩm (Full)</b></center>
					<br>
					<textarea cols="80" id="subdetail" name="subdetail" rows="10"><?php echo $subdetail; ?></textarea>
					<script type="text/javascript">
						CKEDITOR.replace( 'subdetail',
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
					<input type="hidden" name="them_san_pham" value="them_san_pham">
					<input type="submit" value="Tạo sản phẩm">
				</td>
			</tr>
		</table>
	</form>
</div>