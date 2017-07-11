<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>缓存机制</title>
	</head>
<body>

Smarty的多重缓时存获取参数：<br />
{$id}
<br />
----------------------<br />

开启缓存后，让部分代码不缓存（利用自定义函数）：<br />
{'0'|date_format:'%Y-%m-%d %H:%M:%S'}<br />
{nocache}
	{'0'|date_format:'%Y-%m-%d %H:%M:%S'}
{/nocache}<br />
----------------------<br />

</body>
</html>