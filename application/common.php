<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------
// 应用公共文件
use think\JWT;

function checkJWT(){
    $authorization = request()->header('Authorization');   //助手函数拿到头信息中的内容
    $getToken = request()->get('token');
    $postToken=request()->post('token');
    if($authorization){
        $token=$authorization;
    }else if($getToken){
        $token=$getToken;
    }else if($postToken){
        $token=$postToken;
    }else{
        JSON([
           'code'=>401,
           'msg'=>'授权失败'
        ])->send();
//        把数据返回去
        exit();
    }
    $result=JWT::verify($token,config('jwtkey'));
    if(!$result){
        json([
            'code'=>404,
            'msg'=>'没有获取token'
        ])->send();
    }
}
