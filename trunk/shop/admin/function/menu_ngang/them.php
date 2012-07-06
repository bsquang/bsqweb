<?php 
	chong_pha_hoai();
	//echo "chao <hr>";
?>
<style type="text/css">
	a.ah { text-decoration: none;  color: #666666; font-weight: bold}
	a.ah:hover { text-decoration: none; color:#a70001; font-weight: bold; font-style: normal; }

</style>

<table width="990px" id="er" style="margin-top:6px">
	<tr>
		<td align="right" >
			<span class="span__16">Thêm menu ngang</span>
			<a href="?thamso=bien_luan_them_menu__www" class="nut_dong">
				Đóng
			</a>
		</td>
	</tr>
	<tr>
		<td>
			<form action="" method="post" style="margin:0">
				<table width="600px" id="er_2" style="margin:6px" >
					<tr>
						<td width="120px"><b>Tên menu : </b></td>
						<td><input style="width:400px" name="ten_menu" ></td>
					</tr>
					<tr>
						<td><b>Liên kết : </b></td>
						<td><input style="width:400px" name="lien_ket" ></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>
							<input type="hidden" name="them_menu_ngang" value="them_menu_ngang" >
							<!--<input type="submit" value="Thêm">-->
							<input type="image" src="../hinhanh_flash/dung_chung/them.gif" style="border:0px solid red;_margin-bottom:-4px">
						</td>
					</tr>
				</table>
			</form>
			<br>
			<b style="color:black;margin-left:5px">Xem thêm</b> : 
			<a href="?thamso=mot_so_menu_ngang_duoc_ho_tro" target="_blank" class="ah" >Một số menu ngang được hỗ trợ</a>
			<br /><br />
		</td>
	</tr>
</table>
<script>
	table_css_1("er");
	table_css("er_2");
</script>