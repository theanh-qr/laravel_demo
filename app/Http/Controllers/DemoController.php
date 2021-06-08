<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demo;

class DemoController extends Controller
{
    public function Xinchao(){
        echo "Xin chao Controller";
    }

    public function Khoahoc($ten){
        echo "Khoa hoc: ". $ten;
        //Chuyển Route
        return redirect()->route('MyRoute1');
    }

    public function GetURL(Request $request){
        // lấy tên đường dẫn của Route
        return $request->path();

        //Trả về toàn bộ đường dẫn
        return $request->url();


        //Kiểm tra url có chưa chuỗi 'admin/ hay k
        if($request->is('admin/*'))
            echo "Đường dẫn có chuỗi admin";
        else
            echo "Đường dẫn k có chuỗi admin";



        //kiểm tra phương thức truyền post hay tương tử có thể thay get 
        if($request->isMethod('post'))
            echo "Đây là phương thức POST";
        else
            echo "Đây là phương thức GET";
    }

    public function postForm(Request $request){
        echo "Tên của bạn là: ";
        //Nhận dữ liệu từ thẻ <input name="id">
        echo $request->('hoten');

        //Các hàm
            //has('name'); là kiểm tra tham số name có tồn tại hay k
            //input('produc.0.name'); là nhận dữ liệu từ mảng
            //input('user.name'); là nhận dữ liệu từ JSON dạng mảng
            //all(); là nhận hết dữ liệu lưu thành dạng mảng
            //only('age'); là chỉ nhận tham số age
            //except('age'); là nhận tất cả tham số trừ age
    }
}
