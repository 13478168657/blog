<!doctype html>
<html>
<head>
	<script src="/uredirect.js" type="text/javascript"></script><script type="text/javascript">uaredirect("http://m.jiyouh.com","http://www.jiyouh.com");</script>
	<meta charset="gb2312">
	@yield('title')
	@yield('script')
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="/css/base.css" rel="stylesheet">
	<script src="/js/myfocus-2.0.4.min.js"></script>
	<script src="/js/modernizr.js"></script>
	@yield('css')
</head>
<body>
<header>
	<div class="topbg">
		<ul class="topnav">
			<a href="http://www.jiyouh.com/ " target="_blank">Home</a><a href="http://weibo.com/jiyouh" target="_blank">官方微博</a><a href="http://www.jiyouh.com/about.html " target="_blank">关于我们</a>
		</ul>
	</div>
	<div class="topbgline"></div>
	<div class="logo">
		<div class="logo_l f_l"><a href="/"><img src="http://www.jiyouh.com/skin/jiyouhui/images/logo.png"></a></div>
		<div class="logo_r f_r"><script type="text/javascript">document.write(unescape('%3Cdiv id="bdcs"%3E%3C/div%3E%3Cscript charset="utf-8" src="http://znsv.baidu.com/customer_search/api/js?sid=8679668726502783496') + '&plate_url=' + (encodeURIComponent(window.location.href)) + '&t=' + (Math.ceil(new Date()/3600000)) + unescape('"%3E%3C/script%3E'));</script></div>
	</div>
	@include('layouts.nav')
	<script src="/js/silder.js"></script>
</header>
@yield('content')
<!-- 多说js加载开始，一个页面只需要加载一次 -->
<script type="text/javascript">
	var duoshuoQuery = {short_name:"jiyouh"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = 'http://static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
</script>
</body>
</html>