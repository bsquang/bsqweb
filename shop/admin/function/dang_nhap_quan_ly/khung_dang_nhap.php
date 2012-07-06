<?php 
	chong_pha_hoai();
	//echo "khung dang nhap";
?>

<style>
	input{
		margin-bottom: 5px;
	}
</style>
<div style='width: 190px;margin: 100px auto;padding: 10px;background: white;border-radius: 4px;text-align: right;'>
	<form action="" method="post" style="margin:0">
		<input type="text" name="ky_danh" placeholder="Username" /><br>
		<input type="password" name="mat_khau" placeholder="Password" /><br>
		<input type="hidden" name="dang_nhap_quan_tri" value="dang_nhap_quan_tri" />
		<input type="submit" value="Đăng nhập" />
	</form>
</div>