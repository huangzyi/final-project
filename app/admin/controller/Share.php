<?php
/**
 * Created by PhpStorm.
 * User: zyh
 * Date: 2019-05-18
 * Time: 22:07
 */

namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Request;
use think\Session;

class Share extends Controller
{
    public function Share($type,$link_id){
        //确定分享给好友还是组群
        if($type=="friend") $table = "share_friend";
        else if($type=="group") $table = "share_group";
        else    $this->error('未获得type');
        //确定分享的是merchant还是schedule
        if(input('?merchant_id'))
        {
            $table.="_merchant";
            $content_id = input('merchant_id');
        }
        elseif(input('?schedule_id')) {
            $table .= "_schedule";
            $content_id = input('schedule_id');
        }
        else    $this->error('无参数');
        $data = ['share_link'=>$link_id,'share_content_id'=>$content_id,'share_founder'=>Session::get('id')];
        $exists = Db::table($table)->where($data)->find();

        if ($exists) {
            if(Db::table($table)->where($data)->update(['share_time'=>date("Y-m-d H:i:s")])) {
                $send = new Message();
                $send->Send($type,$link_id,'我分享了，快来看吧');
                return $this->error('更新分享成功');
            }
            else    return $this->error('更新分享失败');
        }
        else{
        if(Db::table($table)->insert($data)) {
            $send = new Message();
            $send->Send($type,$link_id,'我分享了，快来看吧');
            return $this->error('分享成功');
        }
        else    return $this->error('分享失败');
        }
    }
    public function Comment($type,$link_id,$share_founder,$comment_type){
        //确定分享给好友还是组群
        if($type=="friend") $table = "share_friend";
        else if($type=="group") $table = "share_group";
        else    $this->error('未获得type');
        //确定分享的是merchant还是schedule
        if(input('?merchant_id'))
        {
            $table.="_merchant";
            $content_id = input('merchant_id');
        }
        elseif(input('?schedule_id')) {
            $table .= "_schedule";
            $content_id = input('schedule_id');
        }
        else    $this->error('无参数');
        $data = ['share_link'=>$link_id,'share_content_id'=>$content_id,'share_founder'=>$share_founder];
        $exists = Db::table($table)->where($data)->column($comment_type);
        $url = "/thinkphp/public/index/index/show.html?type=".$type."&link_id=".$link_id;
        if ($exists) {
            if(Db::table($table)->where($data)->update([$comment_type=>$exists[0]+1]))
                return $this->success('评论成功',$url);
            else    return $this->error('评论失败');
        }
        else{
            return $this->error('分享未分享');
        }
    }
    public function Del($type, $link_id,$share_founder)
    {
        //确定分享给好友还是组群
        if($type=="friend") $table = "share_friend";
        else if($type=="group") $table = "share_group";
        else    $this->error('未获得type');
        //确定分享的是merchant还是schedule
        if(input('?merchant_id'))
        {
            $table.="_merchant";
            $content_id = input('merchant_id');
        }
        elseif(input('?schedule_id')) {
            $table .= "_schedule";
            $content_id = input('schedule_id');
        }
        else    $this->error('无参数');
        $data = ['share_link'=>$link_id,'share_content_id'=>$content_id,'share_founder'=>$share_founder];
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
                return $this->error('取消分享成功');
            }
            else   return $this->error('取消分享失败');
        }
        else{
            return $this->error('失败');
        }
    }
}