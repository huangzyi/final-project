<?php
/**
 * Created by PhpStorm.
 * User: zyh
 * Date: 2019-05-18
 * Time: 17:27
 */

namespace app\admin\model;

use think\Model;
class DialogFriend extends Model
{
    public function getDialogUidAttr($value)
    {
        $user = User::get($value);
        return $user->user_name;
    }
}