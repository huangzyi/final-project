<?php
namespace app\index\model;

use think\Model;
use think\Db;
class User extends Model
{
    public $friend;

    public function getFriend()
    {
//        dump($this->user_id);
//        $this->friend = new Friends();
        $friend = Db::table('friend')
            ->where('uid1',$this->user_id)
            ->whereOr('uid2',$this->user_id)
            ->column('link_id');
//        $count = count($friend);
//        for($i=0;$i<$count;$i++)
//        {
//            if($friend[$i]['uid1']==$this->user_id)
//                $this->friend[$i]=new Friends($friend[$i]['link_id'],$friend[$i]['uid2']);
//            else
//                $this->friend[$i]=new Friends($friend[$i]['link_id'],$friend[$i]['uid1']);
//        }
        if($friend)
        {
        $friend = Friend::all($friend);
        $count = count($friend);
        for($i=0;$i<$count;$i++) {
            $friend[$i]->setUser();
        }
        $this->friend=$friend;
        }
//        dump($this->friend->user);
        return $this->friend;
    }
//    public function favorMerchant()
//    {
//        return $this->hasMany('FavorMerchant','favor_content_id');
//    }

//    public function setUserPswAttr($value)
//    {
//        return md5($value);
//    }
//    public function user($uname,$psw,$psw_confirm,$name,$age,$sex,){
//        $user.uname  = 'thinkphp';
//        $user.name =  'thinkphp';
//        $user.sex =   '男';
//        $user.psw =   'psw';
//        $user.psw_confirm'='psw';
//                $user.city =   '重庆';
//                $user.age = 10;
//                $user.email = 'thinkphp@qq.com';
//                $user.name =  'thinkphp';
//                $user.sex =  '男';
//                $user.psw =  'psw';
//                $user.psw_confirm='psw';
//                $user.city =   '重庆';
//                $user.age = 10;
//                $user.email = 'thinkphp@qq.com';
//    }

}