<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
//路由匹配默认规则是从上往下进行，匹配到了便不继续进行匹配了。
//修改方法：config表中route_complete_match参数改成false

    use think\Route;

    Route::get('api/:version/banner/:id', 'api/:version.Banner/getBanner');

    Route::get('api/:version/theme', 'api/:version.Theme/getSimpleList');
    Route::get('api/:version/theme/:id', 'api/:version.Theme/getComplexOne');

    Route::get('api/:version/product/recent', 'api/:version.Product/getRecent');
    Route::get('api/:version/product/by_category', 'api/:version.Product/getAllInCategory');
    Route::get('api/:version/product/:id', 'api/:version.Product/getOne',[] , ['id'=>'\d+']);

    //路由分组示例
/*
    Route::group('api/:version/product', function (){       //路由分组：function在此处是闭包
        Route::get('/recent', 'api/:version.Product/getRecent');
        Route::get('/by_category', 'api/:version.Product/getAllInCategory');
        Route::get('/:id', 'api/:version.Product/getOne',[] , ['id'=>'\d+']);
    });
*/

    Route::get('api/:version/category/all', 'api/:version.Category/getAllCategories');

    Route::post('api/:version/token/user', 'api/:version.Token/getToken');

    Route::post('api/:version/address', 'api/:version.Address/createOrUpdateAddress');

    Route::post('api/:version/order', 'api/:version.Order/placeOrder');
    Route::get('api/:version/order/:id', 'api/:version.Order/getDetail', [], ['id'=>'\d+']);
    Route::get('api/:version/order/by_user', 'api/:version.Order/getSummaryByUser');

    Route::post('api/:version/pay/pre_order', 'api/:version.Pay/getPreOrder');
    Route::post('api/:version/pay/notify', 'api/:version.Pay/receiveNotify');
