<?php
/*%%SmartyHeaderCode:702155ef9dd225f8b9_28378244%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de087441c95bd03a91d833c6b344eb35bda77af9' => 
    array (
      0 => 'H:\\web\\wamp\\www\\smarty\\templates\\cache.tpl',
      1 => 1441766861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '702155ef9dd225f8b9_28378244',
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.27',
  'unifunc' => 'content_55ef9f2f3e2222_89267692',
  'has_nocache_code' => true,
  'cache_lifetime' => 86400,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ef9f2f3e2222_89267692')) {
function content_55ef9f2f3e2222_89267692 ($_smarty_tpl) {

$_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_modifier_date_format')) require_once 'H:\\web\\wamp\\www\\smarty\\smarty\\plugins\\modifier.date_format.php';
?><!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>缓存机制</title>
	</head>
<body>

Smarty的多重缓时存获取参数：<br />
1
<br />
----------------------<br />

开启缓存后，让部分代码不缓存（利用自定义函数）：<br />
2015-09-09 10:53:35<br />

	<?php echo smarty_modifier_date_format('0','%Y-%m-%d %H:%M:%S');?>

<br />
----------------------<br />

</body>
</html><?php }
}
?>