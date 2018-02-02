<?php

namespace app\admin\controller;

use think\Session;
use think\Controller;
use think\Request;
use think\View;

class Menu extends Controller
{
    
    public function manage()
    {
        return $this->fetch("menu_manage");
    }

    public function setting()
    {
        return $this->fetch("menu_setting");
    }

}
