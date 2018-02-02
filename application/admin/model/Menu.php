<?php

namespace app\admin\model;

use think\Model;
use think\Db;

class Menu extends Model
{
    /*增加菜单*/
    public function add($data)
    {
        $res = Db::table('nb_menu')
        ->insert($data);
        return $res;
    }
    /* 删除菜单 */
    public function del($id) {

    }

    /* 更新菜单 */
    public function upd($id,$data) {
        $res = Db::table('nb_menu')
        ->where('menu_id',$id)
        ->update($data);
        return $res;
    }
}
