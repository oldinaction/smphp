<?php /* Smarty version 3.1.27, created on 2015-09-04 11:00:19
         compiled from "H:\web\wamp\www\smarty\templates\builtFunc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2880055e979c3132126_51463393%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fec35e475bda03f1eb7bcd363824be9529df0534' => 
    array (
      0 => 'H:\\web\\wamp\\www\\smarty\\templates\\builtFunc.tpl',
      1 => 1441364416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2880055e979c3132126_51463393',
  'variables' => 
  array (
    'flag' => 0,
    'i' => 0,
    'arr' => 0,
    'item' => 0,
    'key' => 0,
    'value' => 0,
    'var' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e979c346e3e2_26883189',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e979c346e3e2_26883189')) {
function content_55e979c346e3e2_26883189 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2880055e979c3132126_51463393';
?>
<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>内置函数</title>
	</head>
<body>
内置函数举例1：<br />
-->{if}{elseif}{else}{/if}<br />
----------------------示例<br />
<?php $_smarty_tpl->tpl_vars["flag"] = new Smarty_Variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_Variable(1, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['flag']->value) {?>
	0
<?php } elseif ($_smarty_tpl->tpl_vars['i']->value == 2) {?>
	2
<?php } else { ?>
	1
<?php }?>
<br /><br />

-->{foreach}{/foreach}遍历<br />
----------------------示例<br />
<?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
	<?php echo $_smarty_tpl->tpl_vars['item']->key;?>
=><?php echo $_smarty_tpl->tpl_vars['item']->value;?>

<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?><br />

一共循环了<?php echo $_smarty_tpl->tpl_vars['item']->total;?>
次<br />

<?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
	<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
=><?php echo $_smarty_tpl->tpl_vars['value']->value;?>

<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?><br /><br />

-->{for}{forelse}{/for}<br />

有两种格式：<br />
{for $var=$start to $end}{/for}步长为1的简单循环； <br />
{for $var=$start to $end step $step}{/for}其它步长循环。
<br />
----------------------示例<br />
<?php $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 1, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
	<?php echo $_smarty_tpl->tpl_vars['var']->value;?>

<?php }} ?><br />
<?php $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 2;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? 10+1 - (2) : 2-(10)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 2, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
	<?php echo $_smarty_tpl->tpl_vars['var']->value;?>

<?php }} ?><br />
<?php $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) min(ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? 10+1 - (2) : 2-(10)+1)/abs($_smarty_tpl->tpl_vars['var']->step)),3);
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 2, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
	<?php echo $_smarty_tpl->tpl_vars['var']->value;?>

<?php }} ?><br /><br /><br />


内置函数举例2：<br />
-->{ldelim},{rdelim}显示左右定界符<br />
----------------------示例<br />
{  }<br /><br />

-->{literal}{/literal}<br />
----------------------示例<br />

	function(){
		alert(1);
	}
<br /><br />

-->{assign var="name" value="smalle"}赋值<br />
----------------------示例<br />
<?php $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable("smalle", null, 0);?>
<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<br /><br />

-->{config_load file="example.conf"}用来从配置文件中加载config变量到模版<br />
使用 $smarty.config.键 或者 #键# 获取<br /><br />

-->{strip}{/strip}压缩源代码，去掉空格和换行
----------------------示例<br />
<table border=0><tr><td><font color="red">This is a test</font></td></tr></table><br />

-->{insert name="insertName"}插入函数。所包含的内容不会被缓存，每次调用模板都会执行<br />
----------------------示例<br />
<?php  Smarty_Internal_Extension_Config::configLoad($_smarty_tpl, "config.conf", null, 'local');?>
<?php echo insert_getConfig(array('site' => $_smarty_tpl->getConfigVariable( 'site'), 'url' => $_smarty_tpl->getConfigVariable( 'url')),$_smarty_tpl);?>
<br />



</body>
</html><?php }
}
?>