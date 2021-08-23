<?php
/**
 * User: smalle
 * Date: 2019/2/27 21:41
 */

// 定义常量IN_TG,用以授权调用includes里的文件(common.inc.php)
define('IN_TG', true);
require __DIR__.'/includes/common.inc.php';

wxmp_code_to_session($_GET['code']);

