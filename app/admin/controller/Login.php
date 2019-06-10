<?php
namespace app\admin\controller;
//use think\Request;
use think\Controller;
use think\Db;
use app\admin\model\User;
use \think\Session;
class Login extends Controller
{
//用户注册
    public function login($user_uname='',$user_psw='')
    {
//      var_dump($user_name);die();
   $user = User::get([
      'user_uname' => $user_uname,
      'user_psw' => $user_psw
      ]);
   if($user&&$user->user_id=='1'){
       $user_id=$user->user_id;
       $url = "/thinkphp/public/admin/index/merchant.html";
       Session::clear();
       Session::set('id',$user_id);
       return $this->success('登录成功',$url);

//       dump($user);
   }else{
    return $this->error('登录失败');
}
}

    public function logout(){
        Session::clear();
            return  $this->success("退出成功","/thinkphp/public/index/index/login.html");

    }

}
?>