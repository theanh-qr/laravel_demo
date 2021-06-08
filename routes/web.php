<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});




//truy cập vào trang vs đường dân localhost:/demo_laravel8/public/demo
Route::get('demo',function(){
    return 'Xin chao cac ban';
});



//truy cập với tham số truyền vào
Route::get('Hoten/{ten}', function($ten){
    echo "Xin chao ban" .$ten;
})->where(['ten' => '[a-zA-Z]']); //Điều kiên biến a phải là các chữ cái hoa hoặc thường từ a đến z



//Định danh cho route
Route::get('Route1',['as' => 'MyRoute1',function(){
    echo "xin chao route1";
}]);

Route::get('Goiten1',function(){
    //Gọi tên định danh của Route1 và từ Goiten1 chuyện thành Route1
    return redirect()->route('MyRoute1'); 
});

Route::get('Route2',function(){
    echo "Xin chao route2";
})->name('MyRoute2'); //Ta có cách đặt tên định danh thứ 2

Route::get('Goiten2',function(){
    //Gọi tên định danh của Route2 và từ Goiten2 chuyện thành Route2
    return redirect()->route('MyRoute2'); 
});



//Route Group (Nhóm các route lại với nhau)
Route::group(['prefix' => 'MyGroup'],function(){
    //Cách gọi domain/MyGroup/User1
    Route::get('User1',function(){
        echo "User1";
    });
    //Cách gọi domain/MyGroup/User2
    Route::get('User2',function(){
        echo "User2";
    });
    //Cách gọi domain/MyGroup/User3
    Route::get('User3',function(){
        echo "User3";
    });
});




//Goi Controller từ Route bào gồm ('tên Route','Tên thư mục Controller@Tên hàm xử lý')
Route::get('GoiController','DemoController@Xinchao');

    //truyền dữ liệu cho Controller
Route::get('Thamso/{ten}','DemoController@Khoahoc');



//URL
Route::get('MyRequest','DemoController@GetURL');



//Giử nhận dữ liệu với request

    //từ đường dẫn getForm đi đến view file postForm
Route::get('getForm',function(){
    return view('postForm');
});
    //sau khi nhập dữ liệu rồi ấn giử với phương thức post thì quya lại route rồi đến controller và dùng hàm trong file controller đó
Route::post('postForm',['as' => 'postForm','uses' => 'DemoController@postForm']);


