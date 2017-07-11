{config_load file='config.conf'} {*注释：此时文件目录不需config这一层，因smarty.inc.php已经定义了配置文件目录*}

<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>{$title}</title>
	</head>
<body>

数组变量显示结果：<br />
{$array1[1]}<br />
{$array2.1}<br />
----------------------<br />

对象变量显示结果：<br />
{$smalle->site}<br />
{$smalle->url()}<br />
----------------------<br />

模板中可进行计算：<br />
{$a+$b}<br />
----------------------<br />

Smarty保留变量：<br />
{*注释：保留的$smarty.const变量专门针对常量，这样就不需要将常量像变量一样分配了*}
{$smarty.const.SMALLE}<br />
----------------------<br />

config目录下的配置文件中的键值对：<br />
{*注释：下面两种表示方法都可以*}
{$smarty.config.site}<br />
{#url#}<br />
----------------------<br />

</body>
</html>