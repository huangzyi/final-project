<?php
/**
 * Created by PhpStorm.
 * User: zyh
 * Date: 2019-05-12
 * Time: 21:34
 */

namespace app\admin\model;

use think\Model;
class Merchant extends Model
{
            public $share_founder_id;
            public $share_founder;
            public $share_time;
            public $share_up;
            public $share_down;
            public function share($m)
            {

                $this->share_founder_id = $m['share_founder'];
                $this->share_founder = $this->get_user_name($m['share_founder']);
                $this->share_time =  $m['share_time'];
                $this->share_up = $m['share_up'];
                $this->share_down = $m['share_down'];
            }
    public function get_user_name($value)
    {
        $user = User::get($value);;
        return  $user->user_name;
    }
}