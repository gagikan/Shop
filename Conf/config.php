<?php
return array(
	//'配置项'=>'配置值'
	'APP_GROUP_LIST' => 'Home,Admin',
    'DEFAULT_GROUP' => 'Home',
    
    'DB_TYPE'               => 'mysql',
	'DB_HOST'               => 'localhost', // 服务器地址
	'DB_NAME'               => 'shinkanshop',          // 数据库名
	'DB_USER'               => 'root',      // 用户名
	'DB_PWD'                => 'root',          // 密码
	'DB_PORT'               => '3306',        // 端口
	'DB_PREFIX'             => '',    // 数据库表前缀
    'DB_CHARSET'            => 'utf8',      // 数据库编码默认采用utf8
    'DB_FIELDS_CACHE'       => false,        // 启用字段缓存
    'SHOW_PAGE_TRACE'       =>true,
    'SESSION_AUTO_START'    => true,  // 是否自动开启Session
//     'LOAD_EXT_FILE'         => 'user'
    'DEFAULT_AJAX_RETURN'   => 'JSON', // 默认AJAX 数据返回格式,可选JSON XML ...
);
?>