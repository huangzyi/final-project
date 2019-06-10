<?php

namespace app\index\controller;

use app\index\model\DialogFriend;
use app\index\model\DialogGroup;
use app\index\model\Friend;
use app\index\model\Group;
use app\index\model\Member;
use think\model\Merge;
use think\Request;
use think\Controller;
use think\Db;
use think\Session;
use app\index\model\User;
use app\index\model\Merchant;
use app\index\model\Schedule;

class Index extends Controller
{
    public function index(){
        $this->ifLogin();
        return  $this->fetch('test');

    }
//    public function index(Request $request)
    public function schedule()
    {
        $id = $this->ifLogin();
        $user = User::get($id);
        $this->assign('user',$user);
        if (input('?merchant_id'))  {
            $choose = input("merchant_id");
            $merchant = Merchant::get($choose);
            $value_name = $merchant->merchant_name;
        }
        else
        {
            $choose = "";
            $value_name = "";
        }
        $type = "";
        $link_id = $id;
        if (input('?type'))  $type = input("type");
        if (input('?link_id'))  $link_id = input("link_id");
        $this->assign([
            'value_name'=>$value_name,
            'value'=>$choose,
            'type' =>$type,
            'link_id'=>$link_id
        ]);

        return  $this->fetch();
    }

    public function dialog($type,$link_id)
    {
        $id = Session::get('id');
        $user = User::get($id);
        $friend = $user->getFriend();
        $this->assign('friend',$friend);
        $group = Db::table('member')->where('member_id',$id)
            ->column('group_id');
        $group = Group::all($group);
        $this->assign('group',$group);
        if($type=="friend")
        {
            $dialog = DialogFriend::where('dialog_link',$link_id)
            ->select();
            $f = Friend::get($link_id);
            $f->setUser();
            $this->assign('friend_id',$f->user->user_id);
            $dialog_name = $f->user->user_name;
        }
        else
        {
            $dialog =DialogGroup::where('dialog_link',$link_id)
                ->select();
            $g = Group::get($link_id);
            $dialog_name = $g->group_name;
        }
//        $dialog = Db::table($table)
//            ->where('dialog_link',$link_id)
//            ->select();
//        dump($dialog[0]->dialog_time);
//        dump($dialog);
//        dump($dialog[0]['dialog_time']);
        $this->assign([
                'type'=> $type,
                'link_id'=> $link_id,
                'dialog_name'=> $dialog_name,
                'dialog' => $dialog
        ]);
        return  $this->fetch();
    }
    public function choosefriend()
    {
        $id =$this->ifLogin();
        $user = User::get($id);
        $friend = $user->getFriend();
//        dump($friend);
        $this->assign('friend',$friend);
        $group = Db::table('member')->where('member_id',$id)
            ->column('group_id');
        if($group!=null)
            $group = Group::all($group);
        else $group =new Group();
        $this->assign('group',$group);
        if(input('?merchant_id'))
            $url = '/thinkphp/public/index/share/share?merchant_id='.input('merchant_id').'&';
        elseif(input('?schedule_id'))
            $url = '/thinkphp/public/index/share/share?schedule_id='.input('schedule_id').'&';
        else    $this->error('无参数');
        $this->assign('url',$url);
        return  $this->fetch();

    }
    public function addfriend()
    {
        $this->ifLogin();
        $stranger = null;
        if(input('?s')){
            $search = input('s');
            $stranger = User::all($search);
            if(!$stranger)   //$stranger[0]=$stranger;
             {
                $stranger=Db::table('user')->where('user_name', 'like','%'.$search.'%')
                    ->select();
            }

        }

        $this->assign('list',$stranger);
        $this->assign('f',null);
//        $list = User::all();
//        $this->assign('list',$list);
        return  $this->fetch();
    }
    public function addgroup()
    {
        $this->ifLogin();
        $stranger = null;
        if(input('?s')){
            $search = input('s');
            $stranger = Group::all($search);
            if(!$stranger)   //$stranger[0]=$stranger;
            {
                $stranger=Db::table('group')->where('group_name', 'like','%'.$search.'%')
                    ->select();
            }

        }

        $this->assign('list',$stranger);
        $this->assign('f',null);
        return  $this->fetch();
    }
    public function foundgroup()
    {
        return  $this->fetch();
    }

    public function keyword($u,$food,$type,$link_id)
    {

        $keyword = array();
        $user[0] =$u;
        if($type=="friend"){
            $friend = Friend::get($link_id);
            $user[0] = User::get($friend->uid1);
            $user[1] =  User::get($friend->uid2);
        }elseif($type=="group"){
            $member = Member::where('group_id',$link_id)->column('member_id');
            $user = User::all($member);
//            dump($user);
        }

            $i=0;
            for ($x=0;$x<count($user);$x++)
            {
                if ($food == '1') {
                    if($user[$x]->user_ffood != null) {
                        $keyword[$i] = $user[$x]->user_ffood;
                        $i++;
                    }
                } elseif ($food == '0') {
                    if( $user[$x]->user_hobby != null){
                    $keyword[$i] = $user[$x]->user_hobby;
                    $i++;
                    }
                } else {
                    if ($user[$x]->user_ffood != null) {
                        $keyword[$i] = $user[$x]->user_ffood;
                        $i++;
                    }
                    if ($user[$x]->user_hobby != null) {
                        $keyword[$i] = $user[$x]->user_hobby;
                        $i++;
                    }

                }
            }

        return $keyword;
    }
    public function table($city,$food){
        if($city=="重庆")
        {
            if ($food==1)   $table =  'merchant_chongqing_food';
            else if($food==0) $table = 'merchant_chongqing_other';
            else $table='merchant'; //待日后修改，因暂无重庆以外的数据
        }else   $table='merchant'; //暂不写，因为无重庆以外数据
        return $table;
    }
    public function searchmerchant($table,$keyword)
    {
        $sql = "SELECT `merchant_id` FROM ".$table;
//        $sql = "SELECT * FROM ".$table;
        $count = count($keyword);
        if($count>0)
        {
            $sql .=" WHERE ";
            for ($x = 0; $x < $count; $x++) {
                $sql.=" `merchant_name` like '%".$keyword[$x]."%' OR ";
                $sql.=" `merchant_category` like '%".$keyword[$x]."%' OR ";
            }
            $sql = substr($sql,0,strlen($sql)-3);
        }
//        echo $sql;
       $res = Db::query($sql);
//
//        echo ($res[0]["merchant_id"]);
//            $res = Db::table($table)
//                ->where('merchant_name|merchant_category','like','%火锅%')
//                ->column("merchant_id");

        $res = $this->merchantTurnArray($res);

            return $res;
    }
    public function merchantTurnArray($keyword)
    {
        $count = count($keyword);
        $result = array();
        for ($x = 0; $x < $count; $x++) {
            $result[$x] = $keyword[$x]["merchant_id"];
        }
//        dump($result);
        return $result;
    }

    public function friend()
    {
        $id = $this->ifLogin();
        $user = User::get($id);
        $friend = $user->getFriend();
        $this->assign('friend',$friend);
        $group = Db::table('member')->where('member_id',$id)
            ->column('group_id');
        if($group!=null)
            $group = Group::all($group);
        else $group =new Group();
        $this->assign('group',$group);

        return $this->fetch();
    }

    public function untitled()
    {

        return $this->fetch();

    }

    public function groupinformation($group_id)
    {
        $group = Group::get($group_id);
        $this->assign('group',$group);
        $member = Member::where('group_id',$group_id)->column('member_id');
        $count = count($member);
        $member = User::all($member);
        $this->assign([
                'group_number' => $count,
                'member' => $member,
                'id'    =>  Session::get('id')
                ]);
        $id = $this->ifLogin();
        $user = User::get($id);
        $friend = $user->getFriend();
        $this->assign('friend',$friend);
        return $this->fetch();

    }

    public function information()
    {
        $id=$this->ifLogin();
        $user = User::get($id);
        $this->assign('user',$user);
        return $this->fetch();

    }
    public function friendinformation($user_id)
    {
        $id = $this->ifLogin();
        $user = User::get($user_id);
        $this->assign('user',$user);
        $sql = '( `uid1` = \''.$id.'\' AND `uid2` = \''.$user_id.'\' ) OR ( `uid1` = \''.$user_id.'\' AND `uid2` = \''.$id.'\' )';
        $result = Db::table('friend')->where($sql)->find();
        //dump($result);
        if ($result)    $isfriend=true;
        else    $isfriend=false;
        $this->assign('isfriend',$isfriend);
        return $this->fetch();

    }

    public function login()
    {
        return $this->fetch();

    }

    public function register()
    {
        return $this->fetch();

    }

    public function scheduleremain()
    {
        $user_id=$this->ifLogin();

        $user =User::get($user_id);
        $this->assign('user',$user);
        if(input('?food'))
        {
            $food = input('food');
            $this->assign('food',$food);
        }else   $food = '2';
//        dump($food);
        if(input('?city'))
        {
            $city = input('city');
            $this->assign('city',$city);
        }else   $city = $user->user_city;
        if(input('?favor'))
        {
            $this->assign('favor',input('favor'));
            $result = Db::table('favor_merchant')
                ->where('favor_uid',$user->user_id)
                ->column('favor_content_id');
            $res = Merchant::all($result);
            foreach($res as $key=>$merchant){
                if($merchant->city==$city)
                {
                    if($food<'2'&&$merchant->merchant_food!=$food)  break;
                    $merchant->status     = '1';
                    $merchant->save();
                }
            }

//        }
        } else {
            $keyword =array();
             if(input('?s')) $keyword[0]=input('s');
             else    $keyword= $this->keyword($user,$food);
dump($keyword);
            $table = $this->table($city,$food);
            $result = $this->searchmerchant($table,$keyword);
//        数据不够则添
            if (!input('?s')){
                if(count($result)<50)
                {
                    $res = Db::table($table)
                        ->limit(50)
                        ->column("merchant_id");
                    $result = array_merge($result,$res);
                    $result = array_unique($result);
                }}
//            dump($result);

//        $merchant = Merchant::all($result);
//
            $res = Merchant::all($result);
            foreach($res as $key=>$merchant){
                $merchant->status = '1';
                $merchant->save();
            }
        }
        $list = Merchant::where('status',1)
            ->order('merchant_comment desc')
            ->paginate(10,false,['query'=>request()->param()]);
        $res = Merchant::all($result);
        foreach($res as $key=>$merchant) {
            $merchant->status = '0';
            $merchant->save();
        }
        $this->assign('list', $list);
        return $this->fetch();

    }
    public function showmerchant()
    {
        $user_id=$this->ifLogin();

        $user =User::get($user_id);
        $this->assign('user',$user);
        if(input('?food'))
        {
            $food = input('food');
            $this->assign('food',$food);
        }else   $food = '2';
//        dump($food);
        if(input('?city'))
        {
            $city = input('city');
            $this->assign('city',$city);
        }else   $city = $user->user_city;
        if(input('?favor'))
        {
            $this->assign('favor',input('favor'));
            $result = Db::table('favor_merchant')
                ->where('favor_uid',$user->user_id)
                ->column('favor_content_id');
            $res = Merchant::all($result);
            foreach($res as $key=>$merchant){
                if($merchant->city==$city)
                {
                    if($food<'2'&&$merchant->merchant_food!=$food)  break;
                    $merchant->status     = '1';
                    $merchant->save();
                }
            }

//        }
        } else {
            $keyword =array();
            if(input('?s')) $keyword[0]=input('s');
            else    $keyword= $this->keyword($user,$food);
//            dump($keyword);
            $table = $this->table($city,$food);
            $result = $this->searchmerchant($table,$keyword);
//        数据不够则添
            if (!input('?s')){
                if(count($result)<50)
                {
                    $res = Db::table($table)
                        ->limit(50)
                        ->column("merchant_id");
                    $result = array_merge($result,$res);
                    $result = array_unique($result);
                }}
//            dump($result);

//        $merchant = Merchant::all($result);
//
            $res = Merchant::all($result);
            foreach($res as $key=>$merchant){
                $merchant->status = '1';
                $merchant->save();
            }
        }
        $list = Merchant::where('status',1)
            ->order('merchant_comment desc')
            ->paginate(10,false,['query'=>request()->param()]);
        $res = Merchant::all($result);
        foreach($res as $key=>$merchant) {
            $merchant->status = '0';
            $merchant->save();
        }
//        dump($list);
        $this->assign('list', $list);
        return $this->fetch();

    }
    //查看生成的聚会方案
    public function search()
    {
        $user_id = $this->ifLogin();

        $res = Schedule::All(['schedule_founder'=>$user_id]);
//        dump($res);
        $this->assign('schedule', $res);
        $this->assign('type', 'favor');
//
        return $this->fetch();

    }

    public function show($type)
    {
        $user_id = $this->ifLogin();
//        dump($type);
        if ($type =="favor")
        {
        //查找收藏的商家
        $merchant = Db::table('favor_merchant')
            ->where('favor_uid',$user_id)
            ->column('favor_content_id');
        //查找收藏的schedule
        $schedule = Db::table('favor_schedule')
            ->where('favor_uid',$user_id)
            ->column('favor_content_id');
        if($merchant)   $merchant = Merchant::all($merchant);
        if($schedule)   $schedule = Schedule::All($schedule);

        } else
        {
            $link_id = input('link_id');
            if($type=="friend") $table = "share_friend";
            else if($type=="group") $table = "share_group";
            else    $this->error('未获得type');
            $m = Db::table($table.'_merchant')
                ->where('share_link',$link_id)
                ->order('share_time desc')
                ->select();
            //查找收藏的schedule
            $s = Db::table($table.'_schedule')
                ->where('share_link',$link_id)
                ->order('share_time desc')
                ->select();
            $merchant = null;
            $schedule = null;
            for($i=0;$i<count($m);$i++)
            {
                $merchant[$i] = Merchant::get($m[$i]['share_content_id']);
                $merchant[$i]->share($m[$i]);
            }

            for($i=0;$i<count($s);$i++)
            {
                $schedule[$i] = Schedule::get($s[$i]['share_content_id']);
                $schedule[$i]->share($s[$i]);
            }

            $this->assign('link_id',$link_id);
        }

//        dump($res);
        $this->assign([
            'schedule' => $schedule,
            'list' => $merchant,
            'type'  => $type,
            'id'    =>$user_id
        ]);


        return $this->fetch();

    }

    public function merchant($favor,$choose)
    {

        $user_id=$this->ifLogin();
//        $favor = Request::instance()->param('favor');;
//        dump($favor);
//        dump($s);
//
        $user =User::get($user_id);
        $this->assign('user',$user);
        $type = "";
        $link_id = $user_id;
        $this->assign('choose',$choose);
        if($choose='1')
        {
            if (input('?type'))  $type = input("type");
            if (input('?link_id'))  $link_id = input("link_id");
            $this->assign([
            'type' =>$type,
            'link_id'=>$link_id
        ]);
        }
        if(input('?food'))
        {
            $food = input('food');
            $this->assign('food',$food);
        }else   $food = '2';
        //dump($food);
        if(input('?city')&&(input('city')!=null))
        {
            $city = input('city');
            $this->assign('city',$city);
        }else   $city = $user->user_city;
        //dump($city);
        if($favor=='1')
        {
//            dump(input('favor'));
            $result = Db::table('favor_merchant')
                ->where('favor_uid',$user->user_id)
                ->column('favor_content_id');
            if($result){
            $res = Merchant::all($result);
            foreach($res as $key=>$merchant){
                if($merchant->city==$city)
                {
                    if($food<'2'&&$merchant->merchant_food!=$food)  break;
                    $merchant->status     = '1';
                    $merchant->save();
                }
            }
            }
//        }
        } else {
            $keyword =array();
            if(input('?search'))
            {
                $keyword[0]=input('search');
                $this->assign('search',input('search'));
            }
            else    $keyword= $this->keyword($user,$food,$type,$link_id);
//            dump($keyword);
//            dump($keyword);
            $table = $this->table($city,$food);
            $result = $this->searchmerchant($table,$keyword);
//        数据不够则添
            if (!input('?search')){
//                dump($result);
                $count=count($result);
                if($count<50)
                {
                    $res = Db::table($table)
                        ->order('merchant_comment desc')
                        ->limit(50)
                        ->column("merchant_id");

                    $result = array_merge($result,$res);
                    $result = array_unique($result);
                }}


//        $merchant = Merchant::all($result);
//
            $res = Merchant::all($result);
            foreach($res as $key=>$merchant){
                $merchant->status = '1';
                $merchant->save();
            }
        }
        $this->assign('favor',$favor);
        $list = Merchant::where('status',1)
            ->order('merchant_comment desc')
            ->paginate(20,false,['query'=>request()->param()]);
        $this->reset();
//        dump($list);
        $this->assign('list', $list);
        return $this->fetch();

    }

    public function reset(){
        $merchant = new Merchant();
// save方法第二个参数为更新条件
        $merchant->save([
            'status'  => '0',
        ],['status' => '1']);
    }

    public function showschedule($schedule_id)
    {
        $id = $this->ifLogin();
        $schedule = Schedule::get($schedule_id);
        $res=$schedule->getData();
//        dump($schedule);
        $a=$res['schedule_morning'];
        $b=$res['schedule_noon'];
        $c=$res['schedule_afternoon'];
        $d=$res['schedule_dinner'];
//        $merchant=Merchant::all([$a,$b,$c,$d]);
//        为了允许重复
        $merchant[0]=Merchant::get($a);
        $merchant[1]=Merchant::get($b);
        $merchant[2]=Merchant::get($c);
        $merchant[3]=Merchant::get($d);


//dump($d);
//        echo $a.' '.$b.' '.$c.' '.$d;
        $this->assign([
            'schedule'=>$schedule,
            'merchant'=>$merchant,
            'id'=>$id,
            'type'=>'favor',
        ]);
        return $this->fetch();

    }

    public function vertical()
    {
//        $id=$_REQUEST['user_id'];
//        $this->assign('user_id',$id);
        return $this->fetch();

    }
    public function test()
    {
        $this->ifLogin();
        return $this->fetch();
    }
    public function test2()
    {
//        $user = new User();
//        $user->user_id =$_REQUEST['user_id'];
//        $this->assign('user',$user);
        return $this->fetch();
    }
    public function ifLogin()
    {
        if((session('?id')!=true)) $this->success('未登录', '/thinkphp/public/index/index/login');
        else return session('id');
    }

}
