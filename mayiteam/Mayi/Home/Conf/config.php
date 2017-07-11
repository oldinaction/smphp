<?php
return array(
	//'配置项'=>'配置值'
	
    /* 模板解析 */
    'DEFAULT_THEME' => 'default',//默认主题(用来确定渲染的视图,即View下的那个文件夹)
    'TMPL_PARSE_STRING' => array(
        '__STATIC__' => __ROOT__ . '/Public/Static',//sm
        '__JS__' => __ROOT__ . '/Public/' . MODULE_NAME . C('HOME_STYLE') . '/js',//sm
        '__CSS__' => __ROOT__ . '/Public/' . MODULE_NAME . C('HOME_STYLE') . '/css',//sm
        '__IMG__' => __ROOT__ . '/Public/' . MODULE_NAME . C('HOME_STYLE') . '/images',//sm
        '__FONT__' => __ROOT__ . '/Public/' . MODULE_NAME . C('HOME_STYLE') . '/font',//sm
        '__UPLOAD__' => __ROOT__ . '/data/' . 'upload',
    )
    
);