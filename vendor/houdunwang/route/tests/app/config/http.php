<?php
return [
    /*
    |--------------------------------------------------------------------------
    | 应用
    |--------------------------------------------------------------------------
    */
    'app'                => 'tests\app',

    /*
    |--------------------------------------------------------------------------
    | https协议
    |--------------------------------------------------------------------------
    */
    'https'              => false,

    /*
    |--------------------------------------------------------------------------
    | 重写模式
    |--------------------------------------------------------------------------
    | 如果开启了REWRITE功能,请设置为TRUE
    | 这样在执行u函数等生成URL地址的方法时会隐藏掉入口文件
    */
    'rewrite'            => env('HTTP_REWRITE', false),

    /*
    |--------------------------------------------------------------------------
    | URL变量
    |--------------------------------------------------------------------------
    | 访问控制器方法时的GET变量
    */
    'url_var'            => 's',

    /*
    |--------------------------------------------------------------------------
    | 请求时没有明确控制器时默认使用的控制器
    |--------------------------------------------------------------------------
    */
    'default_controller' => \tests\app\controller\Entry::class,

    /*
    |--------------------------------------------------------------------------
    | 请求时没有明确方法时默认执行的方法
    |--------------------------------------------------------------------------
    */
    'default_action'     => 'home',

    /*
    |--------------------------------------------------------------------------
    | 是否对路由的解析结果进行缓存用于提高系统性能
    |--------------------------------------------------------------------------
    | 当开启DEBUG时是不会缓存的,这是为了让开发者可以即时看到修改效果
    */
    'route_cache'        => false,
];