<?php
/**
 * Created by PhpStorm.
 * User: zyh
 * Date: 2019-05-18
 * Time: 13:26
 */

namespace app\admin\model;

use think\Model;
use think\Session;
use app\admin\model\User;

class Friend  extends Model
{
    public $user;
    public $name;
    public function setName()
    {
        $id = Session::get('id');
        if($this->uid1==$id)
            $this->user=User::get($this->uid2);

        else        $this->user=User::get($this->uid1);
        $this->name=$this->user->user_name;
        return $this->name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setUser()
    {
        $id = Session::get('id');
        if($this->uid1==$id)
            $this->user=User::get($this->uid2);

        else        $this->user=User::get($this->uid1);
        $this->name=$this->user->user_name;
        return $this->user;
    }
    public function getUser()
    {
        return $this->user;
    }
}