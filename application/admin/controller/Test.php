<?php

namespace app\admin\controller;

use think\Controller;
use app\admin\logic\Tree;
use think\Session;
use think\Request;
use think\View;


use app\admin\model\Test as testM;
use app\admin\model\Article as ArticleM;
use app\admin\model\Menu as MenuM;

class Test extends Controller
{
    public function index()
    {
        $data = array(
            array(
                'id' => 1,
                'name' => 'book',
                'parent_id' => 0,
            ),
            array(
                'id' => 2,
                'name' => 'music',
                'parent_id' => 0,
            ),
            array(
                'id' => 3,
                'name' => 'book1',
                'parent_id' => 1,
            ),
            array(
                'id' => 4,
                'name' => 'book2',
                'parent_id' => 3,
            ),
        );
        $res = Tree::makeTree($data);
        return json($res);
    }
    public function test(){
        $TestM = new TestM;
        $ArticleM = new ArticleM;
        $data = $TestM->getAll();
        return json($data);
    }
    // 文章测试
    public function testArticle(Request $request){
        $data = [
            'art_title' =>'666',
            'art_author' =>'666',
            'art_img' =>'666',
            'art_date' =>1543534,
            'art_content' =>'666',
            'art_content_md' =>'666',
            'art_excerpt' =>'666',
            'art_status' =>1,
            'art_comment_status' =>1,
            'art_password' =>'561sf656dsfd',
            'art_name' =>'666',
            'art_modified' =>31355,
            'art_type' =>1,
            'art_comment_count' =>666,
            'art_view' =>1,
            'art_original' => 1
        ];


        $input = $request->param();
        $ArticleM = new ArticleM;
        $res = $ArticleM->getArticle($input['input']);
        return json($res);
    }
    // 菜单测试
    public function testMenu(Request $request){
        $data = [
            'menu_parent' => '1',
            'menu_url' => '666',
            'menu_name' => '666',
            'menu_createtime' => 161516516,
            'menu_sort' => '666',
            'menu_view' => '666',
            'menu_info' => '666'
        ];


        $input = $request->param();
        $MenuM = new MenuM;
        $res = $MenuM->upd($input['id'],$data);
        return json($res);
    }
}
