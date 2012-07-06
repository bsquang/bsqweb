<?php 
	chong_pha_hoai();
	$tv="select * from ho_tro_truc_tuyen where id='$_GET[id]' ";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
?>
<table width="990px" id="er" style="margin-top:6px">
	<tr>
		<td align="right">
			<span class="span__16">Sữa nick yahoo</span>
			<a href="?thamso=quan_ly_phan_ho_tro_truc_tuyen&trang=<?php echo $_GET['trang']; ?>" class="nut_dong">
				Đóng
			</a>
		</td>
	</tr>
	<tr>
		<td>
			<form action="" method="post" action="">
				<table width="600px" style="margin:6px" id="er_2" >
					<tr>
						<td width="120px">
							<b>Tên nick :</b>
						</td>
						<td>
							<input style="width:300px" name="nick_yahoo" value="<?php echo $tv_2['nick_name']; ?>">
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>
							<input type="hidden" name="sua_nick_yahoo" value="sua_nick_yahoo">
							<!--<input type="submit" value="Sữa">-->
							<input type="image" src="../hinhanh_flash/dung_chung/sua.gif" style="border:0px solid red"/>
						</td>
					</tr>
				</table>
			</form>
			</td>
	</tr>
</table>
<script>
	table_css_1("er");
	table_css("er_2");
</script>