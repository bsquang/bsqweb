<?php 
	chong_pha_hoai();
	//echo "trang xem hoa don";
	
?>
<div class="box">
<div class="box-header"><h1>Chi tiết hóa đơn</h1></div>
<table>	
	<tr>
		<td>
		<?php 
			$tv="select * from hoa_don where id='$_GET[id]'";
			$tv_1=mysql_query($tv);
			$tv_2=mysql_fetch_array($tv_1);	
		?>
		
			<table>
				<tr style='text-transform: uppercase;font-weight: bold'>
					<td width="50px" align="center">Stt</td>
					<td width="300px">Mã SP|Tên</td>
					<td width="150px">Giá bán (VNĐ)</td>	
					<td width="100px">Số lượng</td>
					<td width="200px">Tổng cộng (VNĐ)</td>
				</tr>
				<?php 
					$tcl=0;
					$m=explode("|",$tv_2['noi_dung']);
					//echo $tv_2['khach_mua'];echo "<hr>";
					$j=1;
					for($i=0;$i<count($m);$i++)
					{
						$m_1=explode("=",$m[$i]);
						$id=$m_1[0];
						$sl=$m_1[1];				
						$r_tv="select * from san_pham where id='$id'";				
						$r_tv_1=mysql_query($r_tv);
						$r_tv_2=mysql_fetch_array($r_tv_1);
						$tc=$sl*$r_tv_2['gia_ban'];
						$tcl=$tcl+$tc;
						?>
							<tr>
								<td width="50px" align="center"><?php echo $j; ?></td>
								<td width="300px"><?php echo $r_tv_2['code'].'|'.$r_tv_2['ten']; ?></td>
								<td width="150px"><?php echo $r_tv_2['gia_ban']; ?></td>	
								<td width="100px"><?php echo $sl; ?></td>
								<td width="200px"><?php echo $tc; ?></td>
							</tr>
						<?php
						$j++;
					}
				?>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td >
						<?php 
							echo $tcl;
						?>
					</td>
				</tr>
			</table>
			<br>
			<table width="600px" id="er_3" border="1" style="margin:6px" >
				<tr>
					<td width="120px"><b>Họ tên</b></td>
					<td><?php echo $tv_2['ho_ten'];?></td>
				</tr>
				<tr>
					<td valign="top"><b>Địa chỉ</b></td>
		
					<td><?php echo $tv_2['dia_chi'];?></td>
				</tr>
				<tr>
					<td><b>Email</b></td>
					<td><?php echo $tv_2['hom_thu'];?></td>
				</tr>
				<tr>
		
					<td><b>Điện thoại</b></td>
					<td><?php echo $tv_2['dien_thoai'];?></td>
				</tr>					
				<tr>
					<td valign="top">&nbsp;</td>
					<td>
						<a href="?thamso=xoa_hoa_don__2&trang=<?php echo $_GET['trang'];?>&id=<?php echo $tv_2['id'];?>" class="sua_xoa" >Xóa</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</div>