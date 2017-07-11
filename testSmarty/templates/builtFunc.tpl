<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>内置函数</title>
	</head>
<body>
内置函数举例1：<br />
----------------------示例1<br />
{assign var="flag" value=false}
{assign var="i" value=1}
{if $flag}
	0
{elseif $i == 2}
	2
{else $i < 2}
	1
{/if}
<br /><br />

----------------------示例2<br />
{foreach $arr as $item}
	{$item@key}=>{$item}
{/foreach}<br />

一共循环了{$item@total}次<br />

{foreach $arr as $key=>$value}
	{$key}=>{$value}
{/foreach}<br /><br />

----------------------示例3<br />
{for $var=1 to 10}
	{$var}
{/for}<br />
{for $var=2 to 10 step 2}
	{$var}
{/for}<br />
{for $var=2 to 10 max=3}
	{$var}
{/for}<br /><br /><br />

内置函数举例2：<br />
----------------------示例4（显示左右定界符）<br />
{ldelim}  {rdelim}<br /><br />

----------------------示例5（literal显示代码块）<br />
{literal}
	function(){
		alert(1);
	}
{/literal}<br /><br />

----------------------示例6<br />
{assign var="name" value="smalle"}
{$name}<br /><br />

-->{ldelim}config_load file="example.conf"{rdelim}用来从配置文件中加载config变量到模版<br />
使用 $smarty.config.键 或者 #键# 获取<br /><br />

-->{ldelim}strip{rdelim}{ldelim}/strip{rdelim}压缩源代码，去掉空格和换行
----------------------示例7<br />
{strip}
<table border=0>
	<tr>
		<td>
			<font color="red">This is a test</font>
		</td>
	</tr>
</table>
{/strip}<br />

-->{ldelim}insert name="insertName"{rdelim}插入函数。所包含的内容不会被缓存，每次调用模板都会执行<br />
----------------------示例8<br />
{config_load file="config.conf"}
{insert name="getConfig" site=#site# url=#url#}<br />

</body>
</html>