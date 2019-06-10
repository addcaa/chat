<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    //
    public function loadd(){
        return view('reg.reg');
    }
    public function rego(){
        $_POST['u_ number']=rand(111111111,999999999);
        $_POST['u_pwd']=password_hash($_POST['u_pwd'],CRYPT_BLOWFISH);
        $arr=DB::table('chatreg')->insert($_POST);
        if($arr){
            return [
                'on'=>'0',
                'msg'=>"注册成功",
                'arr'=>$_POST['u_ number']
            ];
        }else{
            return [
                'on'=>'0001',
                'msg'=>"注册失败",
            ];
        }
    }

    public function add(){
        return view('log.add');
    }
    public function login(){
        $arr=DB::table('chatreg')->where(['u_number'=>$_POST['u_number']])->first();
        if($arr){
            if(password_verify($_POST['u_pwd'],$arr->u_pwd)){
                session(['u_id'=>$arr->u_id]);
                return [
                    'on'=>0,
                    'msg'=>"登录成功"
                ];
            }else{
                return [
                    'on'=>002,
                    'msg'=>"密码错误"
                ];
            }
        }else{
            return [
                'on'=>001,
                'msg'=>"用户名不存在"
            ];
        }
    }
}
