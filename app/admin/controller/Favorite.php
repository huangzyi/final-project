<?php
/**
 * Created by PhpStorm.
 * User: zyh
 * Date: 2019-05-14
 * Time: 04:45
 */

namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Request;
use think\Session;


class Favorite extends Controller
{
    public function favorite()
    {
//        dump(input('user_id'));
//        $user_id=input('user_id');
//        dump(input('merchant_id'));
//        if(input('?merchant_id'))
//        {
        if(input('?merchant_id')){
            $table = 'favor_merchant';
            $content_id =input('merchant_id');
        }
        else if(input('?schedule_id'))
        {
            $table = 'favor_schedule';
             $content_id =input('schedule_id');
        }
        if(input('?user_id'))   $user_id=input('user_id');
        else    $user_id = Session::get('id');
        $data = ['favor_uid' => $user_id, 'favor_content_id' => $content_id];

        $exists = Db::table($table)->where($data)->find();
        if ($exists) {
            if (Db::table($table)->delete($data))
            {
                if(input('?schedule_id'))
                {
                    $schedule = Schedule::get($content_id);
                    if ($schedule->getData('schedule_founder')=='2')
                    {
                        $r1 = Db::table('share_friend_schedule')
                            ->where('share_content_id', $content_id)
                            ->find();
                        $r2 = Db::table('share_group_schedule')
                            ->where('share_content_id', $content_id)
                            ->find();
                        $r3 = Db::table('favor_schedule')
                            ->where('favor_content_id', $content_id)
                            ->find();
                        if (!($r1 || $r2 || $r3)) {
                            Schedule::destroy($content_id);
                        }
                    }
                }
                return $this->error('取消'.$user_id.'的收藏成功');
            }
            else   return $this->error('取消'.$user_id.'的收藏失败');
        } else {
            if (Db::table($table)->insert($data))
                return $this->error($user_id.'收藏成功');
            else   return $this->error($user_id.'收藏失败');
        }
    }
}