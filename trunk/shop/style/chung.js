function fix_height_div__js(id__abc,class__abc)
{
	setTimeout(
		function()
		{
			var id=document.getElementById(id__abc);
			var div=id.getElementsByTagName("div");
			var mang_div__class_abc=Array();
			var mang_div__class_abc___cao=Array();
			var so_f;
			var so_f_1;
			var ssp_td=3;
			var a=ssp_td-1;
			var cao=0;
			var cao_1;
			var k=0;
			for(i=0;i<div.length;i++)
			{
				if(div[i].className==class__abc)
				{
					//alert(k);
					mang_div__class_abc[k]=i;
					//alert(mang_div__class_abc[k]);
					div[i].style.display="block";
					mang_div__class_abc___cao[k]=div[i].offsetHeight;
					//alert(mang_div__class_abc___cao[k]);
					k++;
				}
			}
			for(i=0;i<mang_div__class_abc.length;i++)
			{
				so_f=mang_div__class_abc[i];
				cao_1=div[so_f].offsetHeight;
				if(cao_1>cao){cao=cao_1;}
				if(i==a)
				{
					a=a+ssp_td;	
					for(j=i-ssp_td+1;j<=i;j++)
					{
						so_f_1=mang_div__class_abc[j];
						div[so_f_1].style.height=cao+"px";
					}				
					cao=0;
				}
			}
		},500);
}