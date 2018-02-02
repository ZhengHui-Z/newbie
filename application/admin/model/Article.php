<?php
// 文章管理增删改查
namespace app\admin\model;

use think\Model;
use think\Db;

class Article extends Model
{
    /*储存文章*/
    public function add($data) {
        $res = Db::table('nb_article')
        ->insert($data);
        return $res;
    }

    /* 删除文章 */
    public function del($id) {
        $res = Db::table('nb_article')
        ->where('art_id',$id)
        ->delete();
        return $res;
    }

    /* 文章修改 */
    public function upd($id,$data) {
        $res = Db::table('nb_article')
        ->where('art_id',$id)
        ->update($data);
        return $res;
    }

    /* 文章查询 
    *  id = -1时为查询全部文章
    */
    public function getArticle($id) {
        if($id == -1){
            $res = DB::table('nb_article')->select();
            return $res;
        } else {
            $res = DB::table('nb_article')
            ->where('art_id',$id)
            ->select();
            return $res;
        }
    }
}
