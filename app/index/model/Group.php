<?php
/**
 * Created by PhpStorm.
 * User: zyh
 * Date: 2019-05-12
 * Time: 21:34
 */

namespace app\index\model;

use think\Model;
class Group extends Model
{

    public function getGroupFounderAttr($value)
    {
        $user = User::get($value);
//        dump($user);
        return $user->user_name;
//        dump($this->schedule_founder_name );

    }
}