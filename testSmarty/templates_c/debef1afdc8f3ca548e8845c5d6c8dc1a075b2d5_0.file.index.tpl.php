<?php /* Smarty version 3.1.27, created on 2015-09-04 01:56:27
         compiled from "H:\web\wamp\www\smarty\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2475355e8fa4bb4f1c3_45382759%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'debef1afdc8f3ca548e8845c5d6c8dc1a075b2d5' => 
    array (
      0 => 'H:\\web\\wamp\\www\\smarty\\templates\\index.tpl',
      1 => 1441253247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2475355e8fa4bb4f1c3_45382759',
  'variables' => 
  array (
    'title' => 0,
    'array1' => 0,
    'array2' => 0,
    'smalle' => 0,
    'a' => 0,
    'b' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e8fa4bd72041_27496230',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e8fa4bd72041_27496230')) {
function content_55e8fa4bd72041_27496230 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2475355e8fa4bb4f1c3_45382759';
Smarty_Internal_Extension_Config::configLoad($_smarty_tpl, 'config.conf', null, 'local');?> 

<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	</head>
<body>

数组变量显示结果：<br />
<?php echo $_smarty_tpl->tpl_vars['array1']->value[1];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['array2']->value[1];?>
<br />
----------------------<br />

对象变量显示结果：<br />
<?php echo $_smarty_tpl->tpl_vars['smalle']->value->site;?>
<br />
<?php echo $_smarty_tpl->tpl_vars['smalle']->value->url();?>
<br />
----------------------<br />

模板中可进行计算：<br />
<?php echo $_smarty_tpl->tpl_vars['a']->value+$_smarty_tpl->tpl_vars['b']->value;?>
<br />
----------------------<br />

Smarty保留变量：<br />

<?php echo @constant('SMALLE');?>
<br />
----------------------<br />

config目录下的配置文件中的键值对：<br />

<?php echo $_smarty_tpl->getConfigVariable('site');?>
<br />
<?php echo $_smarty_tpl->getConfigVariable( 'url');?>
<br />
----------------------<br />

</body>
</html><?php }
}
?>