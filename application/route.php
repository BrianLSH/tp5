<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
//
    //return [
    //    '__pattern__' => [
    //        'name' => '\w+',
    //    ],
    //    '[hello]'     => [
    //        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
    //        ':name' => ['index/hello', ['method' => 'post']],
    //    ],
    //
    //];
use think\Route;

Route::resource('user', 'admin/user');
Route::get('province','admin/province/index');
Route::post('getProvince','admin/province/getProvince');
//Route::post('getCity','admin/province/getC');