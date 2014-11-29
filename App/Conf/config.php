<?php
	return array(
		'APP_GROUP_LIST'=>'Admin,Index',
		'DEFAULT_GROUP'=>'Index',

		'APP_GROUP_MODE'        =>  1,  // 分组模式 0 普通分组 1 独立分组
	    'APP_GROUP_PATH'        =>  'Modules', // 分组目录 独立分组模式下面有效

        'SHOW_PAGE_TRACE'       => 'TRUE',

        //DB配置
        'DB_TYPE'               => 'mysql',     // 数据库类型
        'DB_HOST'               => 'localhost', // 服务器地址
        'DB_NAME'               => 'tp',          // 数据库名
        'DB_USER'               => 'root',      // 用户名
        'DB_PWD'                => 'fhf888fhf',          // 密码
        'DB_PREFIX'             => 'think_',    // 数据库表前缀

        'SESSION_TYPE'          => 'Db',
    );
?>