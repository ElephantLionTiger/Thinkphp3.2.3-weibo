<?php
return array(
//数据库配置
		'DB_TYPE' => 'mysql', // 数据库类型
		'DB_HOST'               =>  'localhost', // 服务器地址
		'DB_NAME'               =>  'weibo',          // 数据库名
		'DB_USER'               =>  'root',      // 用户名
		'DB_PWD'                =>  '123456',          // 密码
		'DB_PREFIX'             =>  'hd_',    // 数据库表前缀
		
		'DEFAULT_THEME'         =>  'default', // 默认模板主题名称
		
		//用于异位或加密的KEY
		'ENCTYPTION_KEY'=>'www.tongyingyang.com',
		
		//自动登陆保存时间
		'AUTO_LOGIN_TIME'=>time() +3600*24*7 , //一个星期
		
);