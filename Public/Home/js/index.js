       $(function(){
	    	$('.head-nav').mouseover(function(){　　　　　　　　　　/*导航栏*/
	    		$(this).children('ul').show()
	    	})
	    	$('.head-nav').mouseout(function(){
	    		$(this).children('ul').hide()
	    	})
	    	$('.footer-nav').hover(function(){　　　　　　　　　　    /*底部导航栏*/
	    		$(this).children('ul').stop(false,true).slideToggle();
	    	})

	    	$('.sx-left-li-x').click(function(){         //左边导航关闭按钮
	    		$('.sx-left').css('display','none');
	    	})
	    	$('.sx-right-li-x').click(function(){
	    		$('.sx-right').css('display','none');    //右边导航关闭按钮
	    	})
	    	$('.sx-right-li-top').click(function(){         //返回顶部
              if ($(window).scrollTop()) {
               	 $('html,body').animate({scrollTop:0},800)
               }
            })

              /*if((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {  
    window.location.href="http://lawazi.cn/";  
}else{  
    window.location.href="http://www.rocgo.cn/";  
} */

 if((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {  
                window.location.href="http://lawazi.cn/";  
				return false;			          
            }
			

       })
