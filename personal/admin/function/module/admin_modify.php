<?php 
	chong_pha_hoai();
	//echo "chao <hr>";
	
	if($_GET['result']!='')
	{
		
	}
?>
<div class="box">
<div class="box-header"><h1>Thay đổi thông tin quản trị</h1></div>
	<form action="" method="post">
		<table style='margin: 5px;'>
			<tr>
			      <td><strong>Username</strong></td>
			      <td><input name="ky_danh" type="text" value="admin" size="40" /></td>
			</tr>
			<tr>
			      <td><strong>Password</strong></td>
			      <td><input name="mat_khau" type="password" size="40" value="admin"/></td>
			</tr>
			<tr>
			      <td>&nbsp;</td>
			      <td>
				      <input type="hidden" name="function" value="admin_modify_action" />
				      <input type="submit" value="Hoàn tất" />
				      
			      </td>
			</tr>
		</table>
	</form>
</div>