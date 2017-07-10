define(['jquery'],function($){
	//控制左侧东航菜单折叠和显示
		$('.navs ul').prev('a').on('click', function () {
		$(this).next().slideToggle();
	});
})

