<?php /* Smarty version 3.1.27, created on 2015-09-04 14:55:45
         compiled from "H:\web\wamp\www\smarty\templates\cache.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3095355e9b0f11fd0e0_63667147%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de087441c95bd03a91d833c6b344eb35bda77af9' => 
    array (
      0 => 'H:\\web\\wamp\\www\\smarty\\templates\\cache.tpl',
      1 => 1441378542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3095355e9b0f11fd0e0_63667147',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e9b0f12b8915_10053106',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e9b0f12b8915_10053106')) {
function content_55e9b0f12b8915_10053106 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'H:\\web\\wamp\\www\\smarty\\smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '3095355e9b0f11fd0e0_63667147';
?>
<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>缓存机制</title>
	</head>
<body>


Smarty的自定义函数举例：<br />
<br />
----------------------<br />

部分代码不缓存：<br />
<?php echo smarty_modifier_date_format('0','%D %H:%M:%S');?>
<br />

	<?php echo smarty_modifier_date_format('0','%D %H:%M:%S');?>

<br />
----------------------<br />


</body>
</html><?php }
}
?>