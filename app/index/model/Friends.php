<?php
/**
 * Created by PhpStorm.
 * User: zyh
 * Date: 2019-05-12
 * Time: 21:22
 */

namespace app\index\model;

use app\index\model\User;
use app\index\model\Friend;
class Friends
{       public $id;
        public $link;
        public $name;
        public function __construct($link,$id)
        {
            $this->id = $id;
            $this->link = $link;
            $user = User::get($id);
            $this->name=$user->user_name;
            return $this;
        }
//        public function __construct($link)
//        {
//            $friend =   Friend::get($link);
//
//            return $this;
//        }

}