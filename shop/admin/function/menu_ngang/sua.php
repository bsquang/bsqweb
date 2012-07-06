<?php 
	chong_pha_hoai();
?>

<?php 
	$tv="select * from menu_ngang where id='$_GET[id]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
?>
<div class='box'>
<div class='box-header'><h1>Sửa menu ngang | <a href="?thamso=quan_ly_menu_ngang&trang=<?php echo $_GET['trang']; ?>" style='color: white'>Đóng</a></h1></div>
	<form action="" method="post">
		<table style='margin: 5px;'>
			<tr>
				<td><b>Tên menu : </b></td>
				<td><input name="ten_menu" value="<?php echo $tv_2['ten']; ?>"></td>
			</tr>
			<tr>
				<td><b>Liên kết : </b></td>
				<td><input name="lien_ket" value="<?php echo $tv_2['link']; ?>" ></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="hidden" name="sua_menu_ngang" value="sua_menu_ngang" >
					<input type="submit" value="Hoàn tất">							
				</td>
			</tr>
		</table>
	</form>
</div>