<?php

namespace app\admin\model;

use think\Model;
use think\Db;

class Test extends Model
{
    public function getAll()
    {
        $data = Db::table('test')
        ->select();
        return $data;
    }
}
