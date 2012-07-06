<?php
    switch($_GET['type'])
    {	
            case "item_showcase":
                    $tv="select * from showcase where id='$_GET[id]'";
                    $tv_1=mysql_query($tv);
                    $tv_2=mysql_fetch_array($tv_1);
                                        
                    $urlPicture="resource/showcase/".$tv_2['thumbnail'];
                    
                    $array = array();
                    $array['name'] = $tv_2['name'];
                    $array['thumbnail'] = $urlPicture;
		    $array['detail'] = $tv_2['detail'];
                    $array['url'] = $tv_2['url'];
		    $array['date'] = $tv_2['date'];
		    $array['slideshow'] = $tv_2['slideshow'];
                    
                    $encoder = json_encode($array);
                    die($encoder);
            break;            
        
            case "item_showcase_page":
                
                    $page = 0;
                    if($_GET['page']!='')
                    {
                        $page = $_GET['page'];
                    }                    
                    
                    $tv = "SELECT COUNT(*) FROM showcase";
                    
                    $total_count = mysql_query($tv);
                    $total_count=mysql_fetch_row($total_count);
		    $total_count=$total_count[0];
                    
                    $limit = 4;
                    if($_GET['limit']!='')
                    {
                        $limit=$_GET['limit'];
                    }
                    
                    $array = array();                    
                    $temp = ($total_count/$limit);
                    $temp2 = ($page/$limit);
                    
                    if($temp2>=$temp){
                        
                        array_push($array,'.');                        
                        $encoder = json_encode($array);
                        die($encoder);
                    }
                    else
                    {
			$tv="SELECT * FROM  `showcase` ORDER BY id DESC LIMIT $page , $limit";
                        
                        $tv_1=mysql_query($tv);
                    
                        while($tv_2=mysql_fetch_array($tv_1))
                        {
                            $link_chi_tiet="javascript:(getInfomation($tv_2[id]))";
                            $link_hinh="resource/showcase/".$tv_2['thumbnail'];                            
                            
                            array_push($array,"<div class='item' data-id='$tv_2[id]'>
				       <div class='bgr' style='width:200px;height:200px;position: absolute;display:none'>				       
				       <div style='background:black;width:200px;height:200px;position: absolute;opacity:0.5;'></div>
				       <div style='color:white;margin:10px;position:absolute'>$tv_2[name]</div>
				       <img src='images/magnify.png' style='position: absolute;right: 0;bottom: 0;margin: 0 10px 10px 0;width: 24px;height: 24px;'>
				       </div>
				       <a href='$link_chi_tiet'><img src='$link_hinh'></a></div>");
                            //array_push($array,"<li class='liItem'><a href='$link_chi_tiet'><img src='$link_hinh'></a></li>");
                        }
                        
                        $encoder = json_encode($array);
                        die($encoder);
                    }
            break;
	
	    case "item_project":
                    $tv="select * from project where id='$_GET[id]'";
                    $tv_1=mysql_query($tv);
                    $tv_2=mysql_fetch_array($tv_1);
                                        
                    $urlPicture="resource/project/".$tv_2['thumbnail'];
                    
                    $array = array();
                    $array['name'] = $tv_2['name'];
                    $array['thumbnail'] = $urlPicture;
		    $array['detail'] = $tv_2['detail'];
                    $array['url'] = $tv_2['url'];
		    $array['date'] = $tv_2['date'];
		    $array['slideshow'] = $tv_2['slideshow'];
                    
                    $encoder = json_encode($array);
                    die($encoder);
            break;            
        
            case "item_project_page":
                
                    $page = 0;
                    if($_GET['page']!='')
                    {
                        $page = $_GET['page'];
                    }                    
                    
                    $tv = "SELECT COUNT(*) FROM project";
                    
                    $total_count = mysql_query($tv);
                    $total_count=mysql_fetch_row($total_count);
		    $total_count=$total_count[0];
                    
                    $limit = 4;
                    if($_GET['limit']!='')
                    {
                        $limit=$_GET['limit'];
                    }
                    
                    $array = array();                    
                    $temp = ($total_count/$limit);
                    $temp2 = ($page/$limit);
                    
                    if($temp2>=$temp){
                        
                        array_push($array,'.');                        
                        $encoder = json_encode($array);
                        die($encoder);
                    }
                    else
                    {
			$tv="SELECT * FROM  `project` ORDER BY id DESC LIMIT $page , $limit";
                        
                        $tv_1=mysql_query($tv);
                    
                        while($tv_2=mysql_fetch_array($tv_1))
                        {
                            $link_chi_tiet="javascript:(getInfomation($tv_2[id]))";
                            $link_hinh="resource/project/".$tv_2['thumbnail'];                            
                            
                            array_push($array,"<div class='item' data-id='$tv_2[id]'>
				       <div class='bgr' style='width:200px;height:200px;position: absolute;display:none'>				       
				       <div style='background:black;width:200px;height:200px;position: absolute;opacity:0.5;'></div>
				       <div style='color:white;margin:10px;position:absolute'>$tv_2[name]</div>
				       <img src='images/magnify.png' style='position: absolute;right: 0;bottom: 0;margin: 0 10px 10px 0;width: 24px;height: 24px;'>
				       </div>
				       <a href='$link_chi_tiet'><img src='$link_hinh'></a></div>");
                            //array_push($array,"<li class='liItem'><a href='$link_chi_tiet'><img src='$link_hinh'></a></li>");
                        }
                        
                        $encoder = json_encode($array);
                        die($encoder);
                    }
            break;
    
    
    }   
?>