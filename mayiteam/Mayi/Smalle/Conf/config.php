<?php
return array(
	//'配置项'=>'配置值'
	
    /* 淘宝客设置 */
	'APP_KEY' => '23270297',
    'APP_SECRET' => '65c47e48c2eede6f9aa31bb82c16245f',
    
    /* 模板解析 */
    'DEFAULT_THEME' => 'mayi',//默认主题
    'TMPL_PARSE_STRING' => array(
        '__STATIC__' => __ROOT__ . '/Public/Static',//sm
        '__JS__' => __ROOT__ . '/Public/' . MODULE_NAME . C('ADMIN_STYLE') . '/js',//sm
        '__CSS__' => __ROOT__ . '/Public/' . MODULE_NAME . C('ADMIN_STYLE') . '/css',//sm
        '__IMG__' => __ROOT__ . '/Public/' . MODULE_NAME . C('ADMIN_STYLE') . '/images',//sm
        '__FONT__' => __ROOT__ . '/Public/' . MODULE_NAME . C('ADMIN_STYLE') . '/font',//sm
    )
    
);