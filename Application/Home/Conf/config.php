<?php
return array(
	//'配置项'=>'配置值'
	    'DB_TYPE'   => 'mysql', // 数据库类型
        'DB_HOST'   => 'localhost', // 服务器地址
        'DB_NAME'   => 'lottery', // 数据库名 lottery彩票
        'DB_USER'   => 'root', // 用户名
        'DB_PWD'    => 'root', // 密码
        'DB_PORT'   => 3306, // 端口
        'DB_PREFIX' => 'lottery_', // 数据库表前缀 
        'DB_CHARSET'=>'utf8'//字符集
);

/*create table lottery_id (
        id int primary key auto_increment not null,
        //本期倒计时时间
        first_time datetime,
        //开奖时间
        Winning_time datetime,
        //开奖号
        lo_number int not null,
        //第几期
        issue VARCHAR(60) not null,
	);*/
/*
create table Lottery_buyer (
        id int primary key auto_increment not null,
        buyer_name  VARCHAR(60),
        //第几期
        issue int not null,
        //购买号
        buyer_number int not null,
        //购买时间
        buyer_time datetime,
        is_Winning  int
	);

*/
     