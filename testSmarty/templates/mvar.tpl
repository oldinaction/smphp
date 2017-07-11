<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>变量调节器</title>
	</head>
<body>

Smarty的变量调节器举例<br />
--regex_replace[正则替换]<br />
{$url|regex_replace:"/http/":"https"}<br /><br />

--strip_tags[去除html标签],参数false指标签不用空格替换<br />
{$url|strip_tags:false}<br /><br />

--组合变量调节器<br />
{$url|regex_replace:"/http/":"https"|strip_tags:false}<br />
----------------------<br /><br />

开发者以插件的形式自定义的变量调节器举例：<br />
{$url|smtruncate:33}<br />
----------------------<br />

</body>
</html>