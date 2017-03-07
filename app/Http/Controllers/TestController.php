<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class TestController extends Controller
{
    public function check(Request $request)
    {
    	$data=[
    		'username'=>$request->username,
    		'password'=>$request->password,
    	];
    	if(Auth::attempt($data)){
            if (Auth::check()){
                if (Auth::user()->level != '1'){
                    return view('homepage');
                }
                else {
                    return view('home');
                }
            }
            else {
                echo 'not login yet';
            }
            /*$user  = user::get();
            echo "<pre>";
            print_r($user);
            echo "</pre>";*/
            
            
            /*if (!empty($user['level']) && $user['level'] == '1'){
                echo 1;
            }
            echo 0;*/
    	}else{
    		echo 'dang nhap ko thanh cong';

    	}
    }
}
