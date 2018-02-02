<?php

namespace app\admin\controller;

use think\Session;
use think\Controller;
use think\Request;
use think\View;

class User extends Controller
{
    public function manage()
    {
        return $this->fetch("user_manage");
    }

    
    public function record()
    {
        return $this->fetch("user_record");
    }
}
