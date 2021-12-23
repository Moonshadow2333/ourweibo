<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class SessionsController extends Controller
{
    public function create(){
        return view('sessions.create');
    }
    public function store(Request $request){
        $credentials = $this->validate($request,[
            'email'=>'required|email|max:255',
            'password'=>'required'
        ]);
        if(Auth::attempt($credentials)){
            // 用户身份验证通过。
            session()->flash('success','欢迎回来！');
            return redirect()->route('users.show',[Auth::User()]);
        }else{
            // 用户身份验证不通过。
            session()->flash('danger','很抱歉您的邮箱与密码不匹配。');
            return redirect()->back()->withInput();
        }

    }
}