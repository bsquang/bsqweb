<?php 
	chong_pha_hoai();
	
	$tv = 'select * from showcase';
	$tv_1=mysql_query($tv);
?>
<?php
        if($_GET['result']!=""){
                echo '<div style="margin: 20px;color: red;font-weight: bold;">';
                switch($_GET['result'])
                {
                        case 1: echo "Item added !</div>"; break;
                        case 2: echo "Item edited !</div>"; break;
                        case 3: echo "Item removed !</div>"; break;
                        default: break;
                }
        }
?>	

<div class='box'>
    <div class='box-header'><h1>Showcase | <a style='color: white;' href="?thamso=showcase_add">Add</a></h1></div>
    
    <table border="0" style='margin: 5px;width: 900px;'>
            <tr>
                    <td width="100px" align="center"></td>
                    <td width="200px" align="left" style='font-weight: bold'><b>Name</b></td>
                    <td align="left"  style='font-weight: bold'><b>Detail</b></td>
                    <td width="90px" style='text-align: center;font-weight: bold'><b>Action</b></td>
            </tr>
            <?php 
                    while($tv_2=mysql_fetch_array($tv_1))
                    {
                            $noi_dung_ngan=cat_chuoi_789(thay_the_fckeditor($tv_2['detail']),0,150);
                            $do_dai__zzz=dem_do_dai_chuoi_tieng_viet(thay_the_fckeditor($tv_2['detail']));
                            //echo $do_dai__zzz;echo "<hr>";
                            $chuoi_ndn="";
                            if($do_dai__zzz>=150)
                            {
                                    $noi_dung_ngan=cat_chuoi_789(thay_the_fckeditor($tv_2['detail']),0,150);
                                    $mang_m=explode(" ",$noi_dung_ngan);	
                                    //print_r($mang_m);			echo "<hr>";
                                    //echo count($mang_m)-4;echo "<hr>";
                                    for($y=0;$y<count($mang_m)-2;$y++)
                                    {
                                            
                                            $chuoi_ndn=$chuoi_ndn.$mang_m[$y]." ";
                                    }
                            }
                            else 
                            {
                                    $noi_dung_ngan=cat_chuoi_789(thay_the_fckeditor($tv_2['detail']),0,150);	
                                    $chuoi_ndn=$noi_dung_ngan;
                            }
                            
                            $link_hinh="../resource/showcase/".$tv_2['thumbnail'];
                            $link_sua="?thamso=showcase_modify&id=".$tv_2['id'];
                            $link_xoa="?thamso=showcase_remove_action&id=".$tv_2['id'];
                            
                            ?>
                                    <tr>
                                            <td>
                                                    <a href="<?php echo $link_sua; ?>" >
                                                            <img src="<?php echo $link_hinh; ?>" style='width: 96px;height: auto;' border="0"/>
                                                    </a>
                                            </td>
                                            <td>
                                                    <a href="<?php echo $link_sua; ?>">
                                                            <?php echo $tv_2['name']; ?>
                                                    </a>
                                            </td>
                                            <td><?php echo $chuoi_ndn; ?></td>
                                            <td style='text-align: center'>
                                                    <a href="<?php echo $link_sua; ?>" class="sua_xoa" >Edit</a>|
                                                    <a href="<?php echo $link_xoa; ?>" class="sua_xoa" >Remove</a>
                                            </td>
                                    </tr>
                            <?php
                    }
            ?>
            <tr>
                    <td colspan="5" align="center">
                            <?php
                                    xuat_link($st);
                            ?>
                    </td>
            </tr>
    </table>
</div>