<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select * from san_pham where id='$_GET[id]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$link_hinh="../hinhanh_flash/san_pham/".$tv_2['hinh_anh'];
	
	$noi_dung=$tv_2['noi_dung'];
	$noi_dung=str_replace("\n","",$noi_dung);
	$noi_dung=str_replace("\r","",$noi_dung);
	$noi_dung=str_replace("\t","",$noi_dung);
	$noi_dung=str_replace("'","\'",$noi_dung);
	
	$subdetail=$tv_2['subdetail'];
	$subdetail=str_replace("\n","",$subdetail);
	$subdetail=str_replace("\r","",$subdetail);
	$subdetail=str_replace("\t","",$subdetail);
	$subdetail=str_replace("'","\'",$subdetail);
	
	$trang_chu = $tv_2['trang_chu'];
	
	$_SESSION[$ten_danh_dau__kkk."cap_do___kkk"] = $tv_2['thuoc_menu'];
?>

<?php 
	switch($_GET['ts_dong'])
	{
		case "quan_ly_san_pham_trang_chu":
			$link_dong="?thamso=quan_ly_san_pham_trang_chu&trang=$_GET[trang]";
		break;
		default:
			$link_dong="?thamso=quan_ly_san_pham&cap_do=$_GET[cap_do]&tu_khoa=$_GET[tu_khoa]&trang=$_GET[trang]";
	}
?>


<div class='box'>
<div class='box-header'><h1>Sửa sản phẩm | <a href="<?php echo $link_dong; ?>" style='color: white'>Đóng</a></h1></div>
	<form action="" method="post" enctype="multipart/form-data">
		<table width="976px" border="0" style="clear:left;margin:5px">
			<tr>
				<td>&nbsp;							
				</td>
				<td>
					<input type="hidden" name="sua_san_pham" value="sua_san_pham">
					<input type="submit" value="Change">
					<!--<input type="image" src="../hinhanh_flash/dung_chung/sua_du_lieu.gif" style="border:0px solid red">-->
				</td>
			</tr>
			
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
					<img src="<?php echo $link_hinh; ?>" border="0" width="150px" height="170px">
					<br>
					<input name="hinh_anh" type="file" >
					<input type="hidden" name="hidden_hinh_anh" value="<?php echo $tv_2['hinh_anh']; ?>">
				</td>
			</tr>
			<tr>
				<td>
					<b>Mã sp : </b>
				</td>
				<td>
					<input size="70" name="code" value="<?php echo $tv_2['code']; ?>">
				</td>
			</tr>
			<tr>
				<td>
					<b>Giá bán : </b>
				</td>
				<td>
					<input size="70" name="gia" value="<?php echo $tv_2['gia_ban']; ?>">
				</td>
			</tr>
			<tr>
				<td>
					<b>Tình trạng : </b>
				</td>
				<td>
					<input size="70" name="status" value="<?php echo $tv_2['status']; ?>">
				</td>
			</tr>
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
					<b>Trang chủ : </b>
				</td>
				<td>
					<?php
						//echo $tv_2['trang_chu'];echo "<hr>"; 
						if($trang_chu=="co")
						{
							$abc="selected";
						}
					?>
					<select name="trang_chu">
						<option value="khong">Không</option>
						<option value="co" <?php echo $abc; ?> >Có</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<center><b>Nội dung</b></center>
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
					<center><b>Nội dung</b></center>
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
			
		</table>
	</form>
</div>