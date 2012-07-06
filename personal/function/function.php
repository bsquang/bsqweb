<?php

	function chong_pha_hoai()
	{
		
	}
	function alertMessage($c)
	{
		?>
			<script type="text/javascript">
				alert("<?php echo $c; ?>");
			</script>
		<?php
	}
	function gotoBack()
	{
		?>
			<script type="text/javascript">
				window.history.back();
			</script>	
		<?php
		exit();
	}
	function gotoLink($link)
	{
		?>
			<script type="text/javascript">
				window.location="<?php echo $link; ?>";
			</script>
		<?php
		exit(); 	
	}
	function kiem_tra_anh_upload__ddd($ten_hinh__input)
	{
		$ten_hinh=$_FILES[$ten_hinh__input]['name'];
		if($ten_hinh!="")
		{
			if(ereg(".php",$ten_hinh))
			{
				alertMessage("Không được up hình có ký tự '.php'");
				gotoBack();
				exit();
			}
			if(ereg(".phtml",$ten_hinh))
			{
				alertMessage("Không được up hình có ký tự '.phtml'");
				gotoBack();
				exit();
			}
			if(ereg("#",$ten_hinh))
			{
				alertMessage("Không được up hình có ký tự '#'");
				gotoBack();
				exit();
			}
			if(ereg("?",$ten_hinh))
			{
				alertMessage("Không được up hình có ký tự '?'");
				gotoBack();
				exit();
			}
			$m=explode(".",$ten_hinh);
			$duoi_hinh=$m[count($m)-1];
			$hinh_hop_le="khong";
			$chuoi_hinh_hop_le="jpg_jpeg_gif_bmp_png";
			$mang_hinh_hop_le=explode("_",$chuoi_hinh_hop_le);
			for($i=0;$i<count($mang_hinh_hop_le);$i++)
			{
				if($mang_hinh_hop_le[$i]==$duoi_hinh)
				{
					$hinh_hop_le="co";
				}
			}
			$show_chuoi="";
			for($i=0;$i<count($mang_hinh_hop_le);$i++)
			{
				$y=$mang_hinh_hop_le[$i];
				$show_chuoi=$show_chuoi.$y.",";
			}
			$show_chuoi=substr($show_chuoi,0,-1);
			if($hinh_hop_le=="khong")
			{
				alertMessage("Đuôi hình không hợp lệ , đuôi hình hợp lệ là '$show_chuoi' ");
				gotoBack();
				exit();	
			}
		}
	}
	function kiem_tra_anh_flash_upload__ddd($ten_hinh__input)
	{
		$ten_hinh=$_FILES[$ten_hinh__input]['name'];
		if($ten_hinh!="")
		{
			if(ereg(".php",$ten_hinh))
			{
				alertMessage("Không được up hình có ký tự '.php'");
				gotoBack();
				exit();
			}
			if(ereg(".phtml",$ten_hinh))
			{
				alertMessage("Không được up hình có ký tự '.phtml'");
				gotoBack();
				exit();
			}
			if(ereg("#",$ten_hinh))
			{
				alertMessage("Không được up hình có ký tự '#'");
				gotoBack();
				exit();
			}
			if(ereg("?",$ten_hinh))
			{
				alertMessage("Không được up hình có ký tự '?'");
				gotoBack();
				exit();
			}
			$m=explode(".",$ten_hinh);
			$duoi_hinh=$m[count($m)-1];
			$hinh_hop_le="khong";
			$chuoi_hinh_hop_le="jpg_jpeg_gif_bmp_png_swf";
			$mang_hinh_hop_le=explode("_",$chuoi_hinh_hop_le);
			for($i=0;$i<count($mang_hinh_hop_le);$i++)
			{
				if($mang_hinh_hop_le[$i]==$duoi_hinh)
				{
					$hinh_hop_le="co";
				}
			}
			$show_chuoi="";
			for($i=0;$i<count($mang_hinh_hop_le);$i++)
			{
				$y=$mang_hinh_hop_le[$i];
				$show_chuoi=$show_chuoi.$y.",";
			}
			$show_chuoi=substr($show_chuoi,0,-1);
			if($hinh_hop_le=="khong")
			{
				alertMessage("Đuôi hình không hợp lệ , đuôi hình hợp lệ là '$show_chuoi' ");
				gotoBack();
				exit();	
			}
		}
	}
	function thay_the_fckeditor($nd)
	{
		$chuoi_1="é è ẻ ẽ ẹ ý ỳ ỷ ỹ ỵ ú ù ủ ũ ụ ư ứ ừ ử ữ ự í ì ỉ ĩ ị ó ò ỏ õ ọ ô ố ồ ổ ỗ ộ á à ả ã ạ â ấ ầ ẩ ẫ ậ ă ắ ằ ẳ ẵ ặ ê ế ể ễ ệ ơ ớ ờ ở ỡ ợ";
		$chuoi_2="&eacute; &egrave; ẻ ẽ ẹ &yacute; ỳ ỷ ỹ ỵ &uacute; &ugrave; ủ ũ ụ ư ứ ừ ử ữ ự &iacute; &igrave; ỉ ĩ ị &oacute; &ograve; ỏ &otilde; ọ &ocirc; ố ồ ổ ỗ ộ &aacute; &agrave; ả &atilde; ạ &acirc; ấ ầ ẩ ẫ ậ ă ắ ằ ẳ ẵ ặ &ecirc; ế ể ễ ệ ơ ớ ờ ở ỡ ợ";
		$mang_1=explode(" ",$chuoi_1);
		$mang_2=explode(" ",$chuoi_2);
		for($i=0;$i<count($mang_2);$i++)
		{
			$nd=str_replace($mang_2[$i],$mang_1[$i],$nd);
		}
		$chuoi_3="É È Ẻ Ẽ Ẹ Ê Ế Ề Ể Ễ Ệ Ý Ỳ Ỷ Ỹ Ỵ Ú Ù Ủ Ũ Ụ Ư Ứ Ừ Ử Ữ Ự Í Ì Ỉ Ĩ Ị Ó Ò Ỏ Õ Ọ Ô Ố Ồ Ổ Ỗ Ộ Ơ Ớ Ờ Ở Ỡ Ợ Á À Ả Ã Ạ Â Ấ Ầ Ẩ Ẫ Ậ Ă Ắ Ằ Ẳ Ẵ Ặ";
		$chuoi_4="&Eacute; &Egrave; Ẻ Ẽ Ẹ &Ecirc; Ế Ề Ể Ễ Ệ &Yacute; Ỳ Ỷ Ỹ Ỵ &Uacute; &Ugrave; Ủ Ũ Ụ Ư Ứ Ừ Ử Ữ Ự &Iacute; &Igrave; Ỉ Ĩ Ị &Oacute; &Ograve; Ỏ &Otilde; Ọ &Ocirc; Ố Ồ Ổ Ỗ Ộ Ơ Ớ Ờ Ở Ỡ Ợ &Aacute; &Agrave; Ả &Atilde; Ạ &Acirc; Ấ Ầ Ẩ Ẫ Ậ Ă Ắ Ằ Ẳ Ẵ Ặ";
		$mang_3=explode(" ",$chuoi_3);
		$mang_4=explode(" ",$chuoi_4);
		for($i=0;$i<count($mang_3);$i++)
		{
			$nd=str_replace($mang_4[$i],$mang_3[$i],$nd);
		}
		return $nd;
	}
	function cat_chuoi_789($str,$ky_tu_dau,$ky_tu_cuoi)
	{
		$str=strip_tags($str);
		$str=thay_the_fckeditor($str);
		$split=1;
	    $array = array();
	    for ( $i=0; $i < strlen( $str ); ){
	        $value = ord($str[$i]);
	        if($value > 127){
	            if($value >= 192 && $value <= 223)
	                $split=2;
	            elseif($value >= 224 && $value <= 239)
	                $split=3;
	            elseif($value >= 240 && $value <= 247)
	                $split=4;
	        }else{
	            $split=1;
	        }
	            $key = NULL;
	        for ( $j = 0; $j < $split; $j++, $i++ ) {
	            $key .= $str[$i];
	        }
	        array_push( $array, $key );
	    }
	    $mang=$array;
		//print_r($mang);echo "<hr>";
		$chuoi_1="";
		for($i=$ky_tu_dau;$i<$ky_tu_cuoi;$i++)
		{
			$chuoi_1.=$mang[$i];
		}
		return $chuoi_1;
	}
	function dem_do_dai_chuoi_tieng_viet($str)
	{
		$str=strip_tags($str);
		$str=thay_the_fckeditor($str);
		$split=1;
	    $array = array();
	    for ( $i=0; $i < strlen( $str ); ){
	        $value = ord($str[$i]);
	        if($value > 127){
	            if($value >= 192 && $value <= 223)
	                $split=2;
	            elseif($value >= 224 && $value <= 239)
	                $split=3;
	            elseif($value >= 240 && $value <= 247)
	                $split=4;
	        }else{
	            $split=1;
	        }
	            $key = NULL;
	        for ( $j = 0; $j < $split; $j++, $i++ ) {
	            $key .= $str[$i];
	        }
	        array_push( $array, $key );
	    }
	    $mang=$array;
		return count($mang);
	}
?>