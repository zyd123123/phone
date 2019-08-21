<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
header("Access-Control-Allow-Origin: *");  //允许进行跨域访问
header("Access-Control-Allow-Headers: Origin, X-Requested-With,Authorization,Content-Type,RetryAfter,retry-after,Accept, token");
header('Access-Control-Allow-Methods: GET, POST, PUT,DELETE,OPTIONS');  //允许你的请求方式（额外多加一个OPTIONS）
if($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {    // 发送请求默认带一个options(过滤到OPTIONS)
    exit;
}
// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
