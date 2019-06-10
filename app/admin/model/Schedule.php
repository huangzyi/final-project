<?php
/**
 * Created by PhpStorm.
 * User: zyh
 * Date: 2019-05-12
 * Time: 21:35
 */

namespace app\admin\model;


use think\Model;
use app\admin\model\User;
use app\admin\model\Merchant;

class Schedule extends Model
{

        public $schedule_founder_name="";
        public $schedule_morning_name="";
        public $schedule_noon_name="";
        public $schedule_afternoon_name="";
        public $schedule_dinner_name="";
        public $share_founder_id;
        public $share_founder;
        public $share_time;
        public $share_up;
        public $share_down;

    public function share($s)
    {
        $this->share_founder_id = $s['share_founder'];
        $this->share_founder = $this->get_user_name($s['share_founder']);
        $this->share_time =  $s['share_time'];
        $this->share_up = $s['share_up'];
        $this->share_down = $s['share_down'];
    }
    public function get_user_name($value)
    {
        $user = User::get($value);;
        return  $user->user_name;
    }



}