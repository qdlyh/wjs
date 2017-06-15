	
	/* 生肖选择框 
          var section_1_sx = document.getElementById("section-1-right-span"); 
          var section_1_span = section_1_sx.getElementsByTagName("span"); 
             for(i = 0; i < section_1_span.length; i++){ 
                  section_1_span[i].index = i;
                  section_1_span[i].onclick = function(){  
                    for(i = 0; i < section_1_span.length; i++){ 
                        section_1_span[i].className = '';                      
                    }   
                        section_1_span[this.index].className = 'section-1-right-sx1';                  
                } 
            }

         $(function(){
      	 $('.section-1-btnsx').click(function(){
           if ($('#section-1-right-span').children('span').hasClass('section-1-span-sx')){ 
               alert("请选择商品");
               return false;
           }else if ($('#section-1-right-span').children('span').hasClass('section-1-span-sx1')) {}
               alert('选择成功')
        })
     })*/

//鼠标经过预览图片函数
function preview(img){
	$("#preview .jqzoom img").attr("src",$(img).attr("src"));
	$("#preview .jqzoom img").attr("jqimg",$(img).attr("bimg"));
}
//图片放大镜效果
$(function(){
	$(".jqzoom").jqueryzoom({xzoom:380,yzoom:410});
});

//图片预览小图移动效果,页面加载时触发
$(function(){
	var tempLength = 0; //临时变量,当前移动的长度
	var viewNum = 5; //设置每次显示图片的个数量
	var moveNum = 2; //每次移动的数量
	var moveTime = 300; //移动速度,毫秒
	var scrollDiv = $(".spec-scroll .items ul"); //进行移动动画的容器
	var scrollItems = $(".spec-scroll .items ul li"); //移动容器里的集合
	var moveLength = scrollItems.eq(0).width() * moveNum; //计算每次移动的长度
	var countLength = (scrollItems.length - viewNum) * scrollItems.eq(0).width(); //计算总长度,总个数*单个长度
	  
	//下一张
	$(".spec-scroll .next").bind("click",function(){
		if(tempLength < countLength){
			if((countLength - tempLength) > moveLength){
				scrollDiv.animate({left:"-=" + moveLength + "px"}, moveTime);
				tempLength += moveLength;
			}else{
				scrollDiv.animate({left:"-=" + (countLength - tempLength) + "px"}, moveTime);
				tempLength += (countLength - tempLength);
			}
		}
	});
	//上一张
	$(".spec-scroll .prev").bind("click",function(){
		if(tempLength > 0){
			if(tempLength > moveLength){
				scrollDiv.animate({left: "+=" + moveLength + "px"}, moveTime);
				tempLength -= moveLength;
			}else{
				scrollDiv.animate({left: "+=" + tempLength + "px"}, moveTime);
				tempLength = 0;
			}
		}
	});
});
