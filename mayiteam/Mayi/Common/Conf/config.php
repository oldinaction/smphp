<?php
return array(
	//'配置项'=>'配置值'
	
    //显示页面Trace信息
    'SHOW_PAGE_TRACE' => true,
	
    //数据库配置
	'DB_TYPE' => 'mysql',
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'mayiteam',
    'DB_USER' => 'root',
    'DB_PWD' => 'root',
    'DB_PORT' => '3306',
    'DB_PREFIX' => 'sm_',
    'DB_CHARSET' => 'utf8',
	//正式库
    /* 
	'DB_TYPE' => 'mysql',
    'DB_HOST' => 'qdm209405344.my3w.com',
    'DB_NAME' => 'qdm209405344_db',
    'DB_USER' => 'qdm209405344',
    'DB_PWD' => 'Y120306sq',
    'DB_PORT' => '3306',
    'DB_PREFIX' => 'sm_',
    'DB_CHARSET' => 'utf8', 
	*/

    //设置URL模式
    'URL_MODEL'             =>  2,
    // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
    
    //自动加载
    /* 'AUTOLOAD_NAMESPACE' => array(
        'SMTBK' => APP_PATH.'Lib/TaoBaoSDK'
    ), */
    
    /* 模板配置 */
    //主题样式，在Common的Conf目录中定义后可直接在Admin的Conf目录下的config.php读取出来。不能既在Admin的Conf目录中定义又在此目录下的config.php中读取
    'ADMIN_STYLE' => '/mayi',
    'HOME_STYLE' => '/default'
	
);