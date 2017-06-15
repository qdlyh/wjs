	$('.section-1-active').click(function(){
		if($(this).siblings('ul').css('display')=='none'){

			$(this).parent('li').siblings('li').removeClass('section-1-actives');

			$(this).addClass('section-1-actives');
           
			$(this).siblings('ul').slideDown(100).children('li');

		    if($(this).siblings('ul').css('display')=='block'){

		    	$(this).parents('li').siblings('li').children('ul').parent('li').children('a').removeClass('section-1-actives');

				$(this).parents('li').siblings('li').children('ul').slideUp(100);
				//如果某个子菜单显示其他子菜单隐藏
			}
		}else{
			$(this).removeClass('section-1-actives');
			//控制自身菜单下子菜单隐藏
			$(this).siblings('ul').slideUp(100);
			//控制自身子菜单变成+号
			$(this).siblings('ul').children('li').children('ul').parent('li').children('a').addClass('section-1-actives');
			//控制自身菜单下子菜单隐藏
			$(this).siblings('ul').children('li').children('ul').slideUp(100);

			//控制同级菜单只保持一个是展开的（-号显示）
			$(this).siblings('ul').children('li').children('a').removeClass('section-1-actives');

		}
	})