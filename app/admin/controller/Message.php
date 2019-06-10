<?php
/**
 * Created by PhpStorm.
 * User: zyh
 * Date: 2019-05-18
 * Time: 17:05
 */

namespace app\admin\controller;

use think\Controller;
use think\Session;
use think\Db;

class Message extends Controller
{
            public function Send($type,$link_id,$content)
            {
                $id = Session::get('id');
                if($type=="friend"){
                    $table = 'dialog_friend';
                }
                else if($type=='group')
                {
                    $table = 'dialog_group';

                }
                else    return $this->error('失败');
                $result = $this->validate(
                    [
                        //接收前端表单提交的数据
                        '内容' => $content,
//                '简介' => $group->group_intro,
                    ],
                    [
                        '内容' => 'require|max:255',
//                '简介' => 'require'
//
                    ]);
                if (true !== $result) {
                    return $this->error($result);

                }
                $data = ['dialog_uid' => $id,
                        'dialog_link' => $link_id,
                        'dialog_content'=>$content
                ];

                //$url = "/thinkphp/public/index/index/dialog.html?type=".$type."&link_id=".$link_id;
                if (Db::table($table)->insert($data))
                        return $this->error('成功');
                    else   return $this->error('失败');

            }

}