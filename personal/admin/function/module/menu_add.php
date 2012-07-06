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
			<a href="?thamso=menu_manage">Đóng</a>
		</td>
	</tr>
	<tr>
		<td>
			<form action="" method="post" style="margin:0">
				<table width="600px" style="margin:6px" >
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
							<input type="hidden" name="function" value="menu_add_action" >
							<input type="submit" value="Add">							
						</td>
					</tr>
				</table>
			</form>
		</td>
	</tr>
</table>