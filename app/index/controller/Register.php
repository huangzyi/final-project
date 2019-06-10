<?php
namespace app\index\controller;
use think\Request;
use think\Controller;
use think\Db;
use app\index\model\User;

class Register extends Controller
{
//用户注册或更新信息的验证
    public function register()
    {

        //实例化User
        if(input('?post.id'))
        {
            $type = "update";
            $user = User::get(input('post.id'));
//            echo $user->user_id;
            $confirm = input('post.psw');
        } else
        {
            $type = "register";
            $user = User::get([
                'user_uname' => input('post.uname')
            ]);
            if($user)   return $this->error('该用户名已存在');
            else    $user = new User();
            $confirm = input('post.psw_confirm');

        }

//        $user = new User;

        //接收前端表单提交的数据
        $user->user_uname = input('post.uname');
        $user->user_name = input('post.name');
        $user->user_sex = input('post.sex');
        $user->user_tele = input('post.tele');
        $user->user_city = input('post.city');
        $user->user_email = input('post.email');
        $user->user_wechat = input('post.wechat');
        $user->user_qq = input('post.email');
        $user->user_address = input('post.address');
        $user->user_age = input('post.age');
        $user->user_psw = input('post.psw');
        $user->user_hobby = input('post.hobby');
        $user->user_ffood = input('post.ffood');
//        dump($user);
//        dump($user);
        //进行规则验证
        $result = $this->validate(
            [
                //接收前端表单提交的数据
                '用户名' => $user->user_uname,
                '姓名' => $user->user_name,
                '性别' => $user->user_sex,
                'user_tele' => $user->user_tele,
                '城市' => $user->user_city,
                'email' => $user->user_email,
                'user_wechat' => $user->user_wechat,
                'user_qq' => $user->user_qq,
                'user_address' => $user->user_address,
                '年龄' => $user->user_age,
                '密码' => $user->user_psw,
                'user_hobby' => $user->user_hobby,
                'user_ffood' => $user->user_ffood,
                '密码_confirm' => $confirm,
//                'user_psw_confirm' => md5($confirm),
            ],
            [
                '用户名' => 'require',
                '姓名' => 'require',
                '性别' => 'require',
//          'user_tele' => 'require',
                '城市' => 'require',
//          'user_wechat' => 'require',
//                'user_qq' => 'number',
//          'user_address' => 'require',
                '密码' => 'require|confirm',
//          'user_hobby' => 'require',
//          'user_ffood' => 'require',
                '年龄' => 'number|between:0,200',
                'email' => 'email',
            ]);
        if (true !== $result) {

            return $this->error($result);

        }
        //写入数据库
        if ($user->allowField(true)->save()) {
//            echo $type;
            if($type == "register")
                return $this->success('注册成功','/thinkphp/public/index/index/login.html');
            else if($type=="update")
                return $this->success('修改成功','/thinkphp/public/index/index/information.html');
            else return $this->error($result);
            return $this->success('注册成功');
        } else {
            return $this->error('失败');
        }
    }
//    function index(){
//        return "this is register";
//}


}
?>