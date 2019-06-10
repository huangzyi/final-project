<?php
/**
 * Created by PhpStorm.
 * User: zyh
 * Date: 2019-05-17
 * Time: 22:36
 */

namespace app\index\controller;
//use think\Controller;
use app\index\model\Friend;
use think\Controller;
use think\Db;
use think\Request;
use think\Session;


class Addfriend    extends Controller
{
    public function Add($user_id){
        if($user_id==Session::get('id'))    return $this->error('不能添加自己');
        elseif($user_id<Session::get('id'))
        {
            $uid1 = $user_id;
            $uid2 = Session::get('id');
        } else($user_id<Session::get('id'));
        {
            $uid1 = $user_id;
            $uid2 = Session::get('id');
        }
        $result = $this->validate(
            [
                //接收前端表单提交的数据
                'uid1' => $uid1,
                'uid2' => $uid2,
            ],
            [
                'uid1' => 'require',
                'uid2' => 'require',
//
            ]);
        if (true !== $result) {
            return $this->error($result);

        }
        $table = 'friend';
        $data = ['uid1'=>$uid1,'uid2'=>$uid2];
        $exists = Db::table($table)->where($data)->find();
        if ($exists)    return  $this->error('已是好友');
        $url = "/thinkphp/public/index/index/friend.html";
        if (Db::table($table)->insert($data))
            return $this->success('添加成功',$url);
        else   return $this->error('添加失败');
    }
    public function Del($user_id){
        {
            $id = Session::get('id');
            $sql = '( `uid1` = \''.$id.'\' AND `uid2` = \''.$user_id.'\' ) OR ( `uid1` = \''.$user_id.'\' AND `uid2` = \''.$id.'\' )';
            $url = "/thinkphp/public/index/index/friend.html";
            if (Friend::where($sql)->delete())
                return $this->success('删除成功',$url);
            else   return $this->error('删除失败');
        }
    }
}