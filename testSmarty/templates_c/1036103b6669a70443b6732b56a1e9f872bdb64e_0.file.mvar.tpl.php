<?php /* Smarty version 3.1.27, created on 2015-09-04 03:17:17
         compiled from "H:\web\wamp\www\smarty\templates\mvar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2517155e90d3d2bd402_85976735%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1036103b6669a70443b6732b56a1e9f872bdb64e' => 
    array (
      0 => 'H:\\web\\wamp\\www\\smarty\\templates\\mvar.tpl',
      1 => 1441336634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2517155e90d3d2bd402_85976735',
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e90d3d3d29c7_28083423',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e90d3d3d29c7_28083423')) {
function content_55e90d3d3d29c7_28083423 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_regex_replace')) require_once 'H:\\web\\wamp\\www\\smarty\\smarty\\plugins\\modifier.regex_replace.php';
if (!is_callable('smarty_modifier_smtruncate')) require_once 'H:\\web\\wamp\\www\\smarty\\smarty\\plugins\\modifier.smtruncate.php';

$_smarty_tpl->properties['nocache_hash'] = '2517155e90d3d2bd402_85976735';
?>
<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>变量调节器</title>
	</head>
<body>


Smarty的变量调节器举例<br />
--regex_replace[正则替换]<br />
<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['url']->value,"/http/","https");?>
<br /><br />

--strip_tags[去除html标签],参数false指标签不用空格替换<br />
<?php echo strip_tags($_smarty_tpl->tpl_vars['url']->value);?>
<br /><br />

--组合变量调节器<br />
<?php echo strip_tags(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['url']->value,"/http/","https"));?>
<br />
----------------------<br /><br />

开发者以插件的形式自定义的变量调节器举例：<br />
<?php echo smarty_modifier_smtruncate($_smarty_tpl->tpl_vars['url']->value,33,2);?>
<br />
----------------------<br />


</body>
</html><?php }
}
?>