<?php
namespace app\admin\controller;
use think\Request;
use think\Controller;
use think\Db;
use app\admin\model\Merchant;

class Addmerchant extends Controller
{
//商家注册或更新信息的验证
    public function add()
    {

        //实例化merchant
        if(input('?post.id')&&input('id')!=null)
        {
            $type = "update";
            $merchant = Merchant::get(input('post.id'));
            if(!$merchant)
            {
                $merchant = new merchant();
                $merchant->merchant_id = input('post.id');
            }
//            echo $merchant->merchant_id;
        } else
        {
            $type = "register";
            $merchant = merchant::get([
                'merchant_link' => input('post.link')
            ]);
            if($merchant)   return $type = "update";
            else    $merchant = new merchant();

        }

//        $merchant = new merchant;

        //接收前端表单提交的数据
        $merchant->merchant_name = input('post.name');
        $merchant->merchant_link = input('post.link');
        $merchant->merchant_img = input('post.img');
        $merchant->merchant_telephone = input('post.tele');
        $merchant->city = input('post.city');
        $merchant->district = input('post.district');
        $merchant->merchant_category = input('post.category');
        $merchant->merchant_food = input('post.food');
        $merchant->merchant_address = input('post.address');
        $merchant->merchant_score = input('post.score');
        $merchant->merchant_comment = input('post.comment');
        $merchant->merchant_avgprice = input('post.avgprice');
        $merchant->merchant_worktime = input('post.worktime');
        $merchant->merchant_logitude = input('post.logitude');
        $merchant->merchant_latitude = input('post.latitude');
//        dump($merchant);
//        dump($merchant);
        //进行规则验证
        $result = $this->validate(
            [
                //接收前端表单提交的数据
                '商家名' => $merchant->merchant_name,
                'merchant_link'=> $merchant->merchant_link,
                'img' => $merchant->merchant_img,
                'merchant_telephone' => $merchant->merchant_telephone,
                'city' => $merchant->city,
                'district' => $merchant->district,
                'merchant_category' => $merchant->merchant_category,
                'merchant_food' => $merchant->merchant_food,
                'merchant_address' => $merchant->merchant_address,
                'merchant_score' => $merchant->merchant_score,
                'merchant_comment' => $merchant->merchant_comment,
                'merchant_avgprice' => $merchant->merchant_avgprice ,
                'merchant_worktime' => $merchant->merchant_worktime,
                'merchant_logitude' => $merchant->merchant_logitude,
                'merchant_latitude' => $merchant->merchant_latitude,
            ],
            [
                '商家名' => 'require',
                'merchant_link'=> 'require',
                'img' => 'require',
//                'merchant_telephone' => $merchant->merchant_telephone,
                'city' => 'require|max:16',
                'district' => 'require|max:32',
                'merchant_category' => 'require|max:32',
                'merchant_food' => 'number|between:0,1',
//                'merchant_address' => $merchant->merchant_address,
                'merchant_score' => 'number|between:0,5',
                'merchant_comment' => 'number',
                'merchant_avgprice' => 'number' ,
//                'merchant_worktime' => $merchant->merchant_worktime,
                'merchant_logitude' => 'number',
                'merchant_latitude' => 'number',
            ]);
        if (true !== $result) {

            return $this->error($result);

        }
        //写入数据库
        if ($merchant->allowField(true)->save()) {
//            echo $type;
            if($type == "register")
                $merchant = merchant::get(['merchant_link'=>$merchant->merchant_link]);
                return $this->success('成功','/thinkphp/public/admin/index/merchantinformation.html?merchant_id='.$merchant->merchant_id);
        } else {
            return $this->error('失败');
        }
    }
//    function index(){
//        return "this is register";
//}

    public function del($merchant_id)
    {
        $merchant = Merchant::get($merchant_id);
        if(!$merchant)
        {
            $this->error('不存在该商家');
        }else{
            if(Merchant::destroy($merchant_id))
                return $this->success('成功','/thinkphp/public/admin/index/merchant.html');
            else                return $this->error('失败');

        }
    }

}

?>