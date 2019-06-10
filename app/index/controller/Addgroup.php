<?php
/**
 * Created by PhpStorm.
 * User: zyh
 * Date: 2019-05-17
 * Time: 23:55
 */

namespace app\index\controller;

use app\index\model\User;
use think\Controller;
use think\Db;
use think\Request;
use think\Session;
use app\index\model\Group;


class Addgroup extends Controller
{
//用户注册或更新信息的验证
    public function Found()
    {
        $user_id = Session::get('id');
        $user = User::get($user_id);
        if(input('?group_id'))
        {
            $type = "update";
            $group = Group::get(input('group_id'));

        } else
        {
            $type = "found";
            $group = new group();
            $group->group_founder=$user_id;
        }

        //接收前端表单提交的数据

        $group->group_name=input('post.group_name');
        $group->group_intro=input('post.group_intro');
//        echo $type;

//        if($group->group_time==null)
//        {
//            $group->group_time=date("Y-m-d");
//        }
        if($group->group_name==null)
        {
            $group->group_name=$user->user_name."的组群";
        }

//        $group->group_found_time=time();
//        dump($user);
        //进行规则验证
        $result = $this->validate(
            [
                //接收前端表单提交的数据
                '组群名' => $group->group_name,
//                '简介' => $group->group_intro,
            ],
            [
                '组群名' => 'require',
//                '简介' => 'require'
//
            ]);
        if (true !== $result) {
            return $this->error($result);

        }
       // echo $type;
        //写入数据库
        if ($group->allowField(true)->save()) {
            //创建者入该group的member
            if($type=="found"){
            return $this->add($group->group_id);
             }
            else    return $this->error('修改成功');
        } else {
            return $this->error('失败');
        }
    }


    public function add($group_id){
        $user_id=Session::get('id');
        $url = "/thinkphp/public/index/index/groupinformation.html?group_id=".$group_id;
        $data = ['member_id' => $user_id,'group_id' => $group_id];
        $exists = Db::table('member')->where($data)->find();
        if ($exists)    return  $this->error('该用户已加入');
        if (Db::table('member')->insert($data))
            return $this->success('成功',$url);
        else   return $this->error('失败');
    }
    public function addfriend($user_id,$group_id){
        $url = "/thinkphp/public/index/index/groupinformation.html?group_id=".$group_id;
        $data = ['member_id' => $user_id,'group_id' => $group_id];
        $exists = Db::table('member')->where($data)->find();
        if ($exists)    return  $this->error('该用户已加入');
        if (Db::table('member')->insert($data))
            return $this->success('添加成功',$url);
        else   return $this->error('添加失败');
    }
    public function del($group_id){
        $user_id=Session::get('id');
        $url = "/thinkphp/public/index/index/friend.html";
        $data = ['member_id' => $user_id,'group_id' => $group_id];
        $exists = Db::table('member')->where($data)->find();
        if (!$exists)    return  $this->error('未加入');
        if (Db::table('member')->where($data)->delete())
        {
            $member =Db::table('member')->where(['group_id' => $group_id])->find();
            if(!$member)    Group::destroy($group_id);
            return $this->success('退出成功',$url);
        }
        else   return $this->error('退出失败');
    }
    public function delgroup($group_id){
        $user_id=Session::get('id');
        $group = Group::get($group_id);
        $url = "/thinkphp/public/index/index/friend.html";
        if ($group->getData('group_founder')!=$user_id)    return  $this->error('无权限');
        if ($group->delete())
            return $this->success('解散成功',$url);
        else   return $this->error('解散失败');
    }
}