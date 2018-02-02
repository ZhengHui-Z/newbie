<?php

namespace app\admin\controller;

use think\Session;
use think\Controller;
use think\Request;
use think\View;

class Login extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
