<?php


namespace app\admin\Validate;


use think\Validate;

class Login extends Validate
{
    protected $rule=[
        'username'=>'require|min:3|max:10'
    ];
    protected $message=[

    ];
}