<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Article as ArticleM;
use app\admin\model\Menu as MenuM;
class Api extends Controller
{
    //增加文章
    public function addarticle(){
        $date = time();
        $data = [
            "post_title" => "世界你好！",
            "post_name" => "first",
            "post_author" => "小辉辉",
            "post_img" => "test.jpg",
            "post_date" => $date,
            "post_content" => "这是我的第一篇文章！测试文章啦啦啦！",
            "post_content_md" => "# 这是我的第一篇文章！测试文章啦啦啦！",
            "post_excerpt" => "测试文章",
            "post_status" => "1",
            "post_modified_date" => "",
            "post_comment_status" => "1",
            "post_comment_count" => "100",
            "post_password" => "",
            "post_type" => "",
            "post_view" => "1",
            "post_original" => "1",

        ];
        $ArticleM = new ArticleM;
        $res = $ArticleM->add($data);
        return json($res);
    }

    public function addmenu()
    {
        $date = time();
        $data = [
            "menu_name" => "Python程序设计",
            "menu_parent" => "-1",
            "menu_url" => "/img.jpg",
            "menu_date" => $date,
            "menu_info" => "Python程序设计内容的菜单",
            "menu_type" => "2",
        ];
        $MenuM = new MenuM;
        $res = $MenuM
        ->add($data);
        return json($res);
    }
}
