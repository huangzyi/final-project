<?php
/**
 * Created by PhpStorm.
 * User: zyh
 * Date: 2019-05-12
 * Time: 21:35
 */

namespace app\index\model;


use think\Model;
use app\index\model\User;
use app\index\model\Merchant;

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
    public function getScheduleFounderAttr($value)
    {
        $user = User::get($value);
//        dump($user);
       return $user->user_name;

    }
        public function getScheduleMorningAttr($value)
        {

            if ($value!=NULL) {
                $merchant = Merchant::get($value);
                return $merchant->merchant_name;
            }
            return $value;

        }
        public function getScheduleNoonAttr($value)
        {
            if ($value!=NULL) {

                $merchant = Merchant::get($value);
                return $merchant->merchant_name;
            }
            return $value;

        }
        public function getScheduleAfternoonAttr($value)
        {

            if ($value!=NULL) {
                $merchant = Merchant::get($value);
                return $merchant->merchant_name;
            }
            return $value;
        }
        public function getScheduleDinnerAttr($value)
        {
            if ($value!=NULL){
            $merchant = Merchant::get($value);
                return $merchant->merchant_name;
            }
            return $value;

        }
        public function __construct($data = [])
        {
            parent::__construct($data);
            $this->schedule_founder_name="";
            $this->schedule_morning_name="";
            $this->schedule_noon_name="";
            $this->schedule_afternon_name="";
            $this->schedule_dinner_name="";
        }


}