<?php /* Smarty version 3.1.27, created on 2015-09-04 02:05:12
         compiled from "H:\web\wamp\www\smarty\templates\func.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1189455e8fc5814c931_53014261%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e9fd547c52715ad3e00885ec6b84768052af300' => 
    array (
      0 => 'H:\\web\\wamp\\www\\smarty\\templates\\func.tpl',
      1 => 1441332310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1189455e8fc5814c931_53014261',
  'variables' => 
  array (
    'array' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e8fc58208155_06838595',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e8fc58208155_06838595')) {
function content_55e8fc58208155_06838595 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_checkboxes')) require_once 'H:\\web\\wamp\\www\\smarty\\smarty\\plugins\\function.html_checkboxes.php';
if (!is_callable('smarty_function_smfunc')) require_once 'H:\\web\\wamp\\www\\smarty\\smarty\\plugins\\function.smfunc.php';

$_smarty_tpl->properties['nocache_hash'] = '1189455e8fc5814c931_53014261';
?>
<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>自定义函数</title>
	</head>
<body>


Smarty的自定义函数举例：<br />
<?php echo smarty_function_html_checkboxes(array('options'=>$_smarty_tpl->tpl_vars['array']->value,'selected'=>'b'),$_smarty_tpl);?>
<br />
----------------------<br />

开发者以插件的形式自定义的函数举例：<br />
<?php echo smarty_function_smfunc(array('a'=>1,'b'=>2),$_smarty_tpl);?>
<br />
----------------------<br />


</body>
</html><?php }
}
?>