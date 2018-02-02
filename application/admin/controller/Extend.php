<?php

namespace app\admin\controller;

use think\Session;
use think\Controller;
use think\Request;
use think\View;

class Extend extends Controller
{

    public function backup()
    {
        return $this->fetch("data_backup");
    }
    public function cache()
    {
        return $this->fetch("cache_clear");
    }


}
