<?php
/**
 * Created by PhpStorm.
 * User: zyh
 * Date: 2019-05-14
 * Time: 06:38
 */

namespace app\admin\controller;
use app\admin\model\Merchant;
use think\Request;
use think\Controller;
use think\Db;
use app\admin\model\User;
use app\admin\model\Schedule;
use think\Session;

class Addparty extends Controller
{
//用户注册或更新信息的验证
    public function Addparty()
    {


        //实例化User
        if((input('?post.schedule_id'))&&(input('post.schedule_id')!=null))
        {
            $type = "update";
            $schedule = Schedule::get(input('post.schedule_id'));
            if(!$schedule)
            {
                $schedule = new schedule();
                $schedule->schedule_id = input('post.id');
                $type = "register";
            }
        }
        else
        {
            $type = "register";
            $schedule = new Schedule();
        }
        //dump($user);
//        $user = new User;
//    dump(input('value'));
        $merchant = array();
        for($i=0;$i<4;$i++)
            $merchant[$i] = '1';
        //接收前端表单提交的数据
        if(input('post.schedule_founder')!=null)
             $schedule->schedule_founder=input('post.schedule_founder');
        else   $schedule->schedule_founder = Session::get('id');
        $schedule->schedule_name=input('post.schedule_name');
        $schedule->schedule_number=input('post.schedule_number');
        $schedule->schedule_time=input('post.schedule_time');
        $schedule->schedule_morning=input('post.schedule_morning');
        $schedule->schedule_noon=input('post.schedule_noon');
        $schedule->schedule_afternoon=input('post.schedule_afternoon');
        $schedule->schedule_dinner=input('post.schedule_dinner');
        $schedule->city=input('post.city');
        if($schedule->schedule_morning!=null)
            $merchant[0] = Merchant::get($schedule->schedule_morning);
        if($schedule->schedule_noon!=null)
            $merchant[1] = Merchant::get($schedule->schedule_noon);
        if($schedule->schedule_noon!=null)
            $merchant[2] = Merchant::get($schedule->schedule_afternoon);
        if($schedule->schedule_noon!=null)
            $merchant[1] = Merchant::get($schedule->schedule_noon);

        if($schedule->schedule_time==null)
        {
            $schedule->schedule_time=date("Y-m-d");
        }
        if($schedule->schedule_name==null)
        {
            $schedule->schedule_name=$schedule->schedule_time."的方案";
        }

//        $schedule->schedule_found_time=time();
//        dump($user);
        //进行规则验证
        $result = $this->validate(
            [
                //接收前端表单提交的数据
                '名称' => $schedule->schedule_name,
                '人数' => $schedule->schedule_number,
                '时间' => $schedule->schedule_time,
                '城市' => $schedule->city,
            ],
            [
                '名称' => 'require',
                '人数' => 'number',
                '时间' => 'date',
//          'user_tele' => 'require',
                '城市' => 'require',
//
            ]);
        if (true !== $result) {
            return $this->error($result);

        }
//        echo $type;
        //写入数据库
        if ($schedule->allowField(true)->save()) {

            if($type == "register")
                return $this->success('生成成功','/thinkphp/public/admin/index/search.html');
            else if($type=="update")
                return $this->success('修改成功','/thinkphp/public/admin/index/schedule.html?schedule_id='.$schedule->schedule_id);
            else    return $this->success('成功');
        } else {
            return $this->error('失败');
        }

    }
    public function del($schedule_id)
    {
        $schedule = Schedule::get($schedule_id);
        if(!$schedule)      return $this->error('该聚会方案不存在');
            $r1= Db::table('share_friend_schedule')
                ->where('share_content_id',$schedule_id)
                ->find();
            $r2= Db::table('share_group_schedule')
                ->where('share_content_id',$schedule_id)
                ->find();
            $r3= Db::table('favor_schedule')
                ->where('favor_content_id',$schedule_id)
                ->find();
//            dump($r1||$r2||$r3);
            if($r1||$r2||$r3)
            {
                if( Db::table('schedule')->where('schedule_id', $schedule_id)->update(['schedule_founder' => '2']))
                    return   $this->success('更新删除成功','/thinkphp/public/admin/index/search.html');
                else             return $this->error('更新删除失败');
            }else{
                if($schedule->delete())
                    return   $this->success('删除成功','/thinkphp/public/admin/index/search.html');
                else             return $this->error('删除失败');
            }


    }
}