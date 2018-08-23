<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     // return view('welcome');
//     // echo date("Y-m-d H:i:s");
//     // echo "这是lavavel框架";

//    //配置读取
// 	// echo Config::get("app.timezone");
// 	//设置配置
// 	// Config::set('app.locale','cn');
// 	// echo Config::get('app.locale');
// 	echo env('DB_CONNECTION');

// });

// // 路由的基本使用
// Route::get('/index',function(){
// 	echo "这是路由的基本规则";
// });
// Route::get('/form',function(){
// 	return view('form');
// });
// Route::post('/insert',function(){
// 	echo "这是路由的基本规则";
// });
// Route::get('/ajax',function(){
// 	return view('ajax');
// });
// Route::get('/doajax',function(){
// 	echo "666";
// });
// Route::get('/ajaxs',function(){
// 	return view('ajaxs');
// });
// Route::post('/doajaxs',function(){
// 	echo "666";
// });
// //带参数的路由
// Route::get("/admin/{id}",function($id){
// 	echo "用户的id为".$id;
// });
// Route::get("admins/{name}",function($name){
// 	echo "文章的名字为".$name;
// })->where('name','[a-z]+');
// //传递多个参数
// Route::get("admins/{name}-{id}",function($name,$id){
// 	echo "文章的名字为".$name.":".$id;
// })->where('name','[a-z]+');

// //路由别名
// Route::get('/home/person',['as'=>'person',function(){
// 	echo "这是前台的个人中心页面";
// }]);

// // 通过路由别名获取到原有的路由规则
// Route::get('/a',function(){
// 	// route 路由函数 通过别名获取路由规则
// 	echo route('person');
// });

// //路由组
// Route::group([],function(){
// 	Route::get('/b',function(){
// 		echo "这是子路由1";
// 	});
// 	Route::get('/c',function(){
// 		echo "这是子路由2";
// 	});
// });

// //加载登录界面
// Route::get("/login",function(){
// 	return view("login");
// });

// //中间键普通的使用
// Route::get('/houtai/user',function(){
// 	echo "这是后台用户页面";
// })->middleware("login");

// //中间键结合路由组使用
// Route::group(['middleware'=>'login'],function(){
// 	Route::get("/shop",function(){
// 		echo "这是后台商品模块";
// 	});
// 	Route::get("/order",function(){
// 		echo "这是后台订单模块";
// 	});
// });

// //普通控制器的访问操作
// Route::get("/users","Admin\UserController@index");
// Route::get("/usersadd","Admin\UserController@add");
// //带参数的控制器访问操作
// Route::get("/usersdelete/{id}","Admin\UserController@delete");
// //普通控制器结合中间键使用
// Route::get("/usersinfo","Admin\UserController@info")->middleware('login');
// //普通控制器结合路由组
// Route::group(['middleware'=>'login'],function(){
// 	Route::get("/usersindex1","Admin\UserController@index1");
// 	Route::get("/usersindex2","Admin\UserController@index2");
// });
// //资源控制器
// Route::resource("/userss","Admin\UsersController");

// Route::resource("/req","ReqController");
// Route::resource("/file","FileController");
// Route::resource("/shitu","ShituController");
Route::resource("/admin","Admin\AdminController");
Route::resource("/user","Admin\UserController");
Route::get("/userdel","Admin\UserController@del");


