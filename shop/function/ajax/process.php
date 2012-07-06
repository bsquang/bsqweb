<?php
    switch($_GET['type'])
    {	
            case "item":
                    $tv="select * from san_pham where id='$_GET[id]'";
                    $tv_1=mysql_query($tv);
                    $tv_2=mysql_fetch_array($tv_1);
                    
                    $price=number_format($tv_2['gia_ban'],0,".",".");
		    $code=$tv_2['code']; if($code == '') $code='none';
		    $status=$tv_2['status']; if($status == '') $status='none';
                    $urlPicture="hinhanh_flash/san_pham/".$tv_2['hinh_anh'];
                    
                    $array = array();
                    $array['slideshow'] = $tv_2['subdetail'];
                    $array['price'] = $price;
                    $array['code'] = $code;
                    $array['status'] = $status;
                    $array['name'] = $tv_2['ten'];
                    $array['detail'] = $tv_2['noi_dung'];
                    $array['thumbnail'] = $urlPicture;
                    
                    $encoder = json_encode($array);
                    die($encoder);
            break;
    }   
?>