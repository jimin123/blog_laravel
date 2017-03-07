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

Route::get('/', function () {
    return view('homepage');
});

Route::group(['prefix'=>'MyBlog'],function(){
	Route::get('/blog1', function () {
		if(Auth::check()) {
			return view('blog1_detail');
		} else {
			echo "Warning : Bạn phải đăng nhập mới xem được chi tiết bài blog này ! " ;
		}
	});
	Route::get('/blog2', function () {
		if(Auth::check()) {
			return view('blog2_detail');
		} else {
			echo "Warning : Bạn phải đăng nhập mới xem được chi tiết bài blog này ! " ;
		}
	});
	Route::get('/blog3', function () {
		if(Auth::check()) {
			return view('blog3_detail');
		} else {
			echo "Warning : Bạn phải đăng nhập mới xem được chi tiết bài blog này ! " ;
		}
	});
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('logintest', 'TestController@check');

Route::get('admin',['middleware'=>'isroleadmin',function(){
    return 'Only admin can see this';
}]);
Route::get('unauthorized',function(){
  return 'You are not admin';
});
