<?php 
	chong_pha_hoai();
?>
<div class="tdk___456">
	<span>Đăng nhập</span>
</div>
<div class="ndk___456">
	<center>
		<div style="text-align:left;width:132px">
			<?php 
				echo "<div class='cao_3_px'></div>";
				if($xac_dinh_dang_nhap_thanh_vien!="co")
				{
			?>
					<form action="" method="post">
						<input style="width:130px" value="Tên đăng nhập" name="ky_danh_dn__jjj" onfocus="if (this.value=='Tên đăng nhập'){this.value=''};this.style.backgroundColor='#fffde8';" onblur="this.style.backgroundColor='#ffffff';"/><br />
						<div class="cao_3_px"></div>
						<input type="password" style="width:130px" value="matkhau" name="mat_khau_dn__jjj" onfocus="if (this.value=='matkhau'){this.value=''};this.style.backgroundColor='#fffde8';" onblur="this.style.backgroundColor='#ffffff';"/><br />
						<div class="cao_3_px"></div>
						<input type="hidden" name="dang_nhap__ggg" value="dang_nhap__ggg"  />
						<!--<input type="submit" value="Đăng nhập" /><br />-->
						<input type="image" src="hinhanh_flash/dung_chung/dang_nhap.gif" style="border:0px solid red">
					</form>
					<a href="?thamso=dang_ky" class="link_9" >Đăng ký</a>
					<br>
					<a href="?thamso=lay_lai_mat_khau" class="link_9" >Quên mật khẩu</a>
					<br>
					<div class='cao_3_px'></div>
			<?php 
				}
				else 
				{
					echo "<span style='color:red'>Chào </span>"."<b style='font-size:18px;color:blue'>".$_SESSION[$ten_danh_dau__kkk.'ky_danh__zzz']."</b>";
					echo "<br>";
					echo "<a href='?thamso=sua_thong_tin_ca_nhan' class='link_10' >Sữa thông tin cá nhân</a>";
					echo "<br>";
					echo "<a href='?thamso=thoat' class='link_10' >Thoát</a>";
					echo "<br>";
					echo "<div class='cao_3_px'></div>";
				}
			?>
		</div>
	</center>
</div>