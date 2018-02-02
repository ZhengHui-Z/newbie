<?php
namespace app\admin\controller;

use think\Controller;
use think\Session;
use think\Request;
use think\View;

use app\admin\model\Article as ArticleM;

class Article extends Controller
{
    public function index()
    {
        return $this ->fetch("article_manage");
    }
    public function write()
    {
        return $this ->fetch("article_write");
    }
    public function comment()
    {
        return $this ->fetch("article_comment");
    }
    /* 新建文章 */
    public function add(Request $request)
    {
        $ArticleM = new ArticleM;
        if ($request->isAjax()) {
            $art_data = $request->param();
            if ($art_data['art_title'] != "") {
                $data = [
                    'art_title' =>$art_data['art_title'],
                    'art_author' =>'Albert',
                    'art_img' =>$art_data['art_img'],
                    'art_date' =>time(),
                    'art_content' =>$art_data['art_content'],
                    'art_content_md' =>$art_data['art_content_md'],
                    'art_excerpt' =>$art_data['art_excerpt'],
                    'art_status' =>1,
                    'art_comment_status' =>1,
                    'art_password' =>$art_data['art_password'],
                    'art_name' =>'666',
                    'art_modified' =>time(),
                    'art_type' =>1,
                    'art_comment_count' =>0,
                    'art_view' =>1,
                    'art_original' => 1
                ];
                $res = $ArticleM->add($data);
                return json(["err" => $res, "msg" => "接收到数据" . ":" . $art_data['art_title']]);
                //return json($data);
            } else {
                return json(["err" => 0, "msg" => "未接收到数据"]);
            }
        } else {
            return json(["msg" => "Not Ajax"]);
        }
    }
    public function sqltest(Request $request)
    {
        if ($request->isPost()) {
            $data = $request->param();
            if ($data["artical"] !== "") {
                $data['name'] = 'zzh';
                $data['date'] = time();
                $test_model = new Testmodel();
                $res = $test_model->add($data);
                return $res;
            }
        }
    }
    public function list()
    {
        $mydata = [
            "code"=> 0,
            "msg"=> "123",
            "count"=> 2,
            "data"=>[
                ["id" => "001","postname"=>"Hello World!","author"=>"zhenghui","date" => "2017-9-12","tag"=>"Blog","read"=>"999"],
                ["id" => "002","postname"=>"Hello World!","author"=>"zhenghui","date" => "2017-9-12","tag"=>"Blog","read"=>"999"],
                ["id" => "003","postname"=>"Hello World!","author"=>"zhenghui","date" => "2017-9-12","tag"=>"Blog","read"=>"999"],
                ["id" => "004","postname"=>"Hello World!","author"=>"zhenghui","date" => "2017-9-12","tag"=>"Blog","read"=>"999"],
                ["id" => "005","postname"=>"Hello World!","author"=>"zhenghui","date" => "2017-9-12","tag"=>"Blog","read"=>"999"],
                ["id" => "006","postname"=>"Hello World!","author"=>"zhenghui","date" => "2017-9-12","tag"=>"Blog","read"=>"999"],
                ["id" => "007","postname"=>"Hello World!","author"=>"zhenghui","date" => "2017-9-12","tag"=>"Blog","read"=>"999"],
                ["id" => "008","postname"=>"Hello World!","author"=>"zhenghui","date" => "2017-9-12","tag"=>"Blog","read"=>"999"],
                ["id" => "009","postname"=>"Hello World!","author"=>"zhenghui","date" => "2017-9-12","tag"=>"Blog","read"=>"999"],
                ["id" => "010","postname"=>"Hello World!","author"=>"zhenghui","date" => "2017-9-12","tag"=>"Blog","read"=>"999"],
                ["id" => "011","postname"=>"Hello World!","author"=>"zhenghui","date" => "2017-9-12","tag"=>"Blog","read"=>"999"],
                ["id" => "012","postname"=>"Hello World!","author"=>"zhenghui","date" => "2017-9-12","tag"=>"Blog","read"=>"999"],
                ["id" => "013","postname"=>"Hello World!","author"=>"zhenghui","date" => "2017-9-12","tag"=>"Blog","read"=>"999"],
                ["id" => "014","postname"=>"Hello World!","author"=>"zhenghui","date" => "2017-9-12","tag"=>"Blog","read"=>"999"],
                ["id" => "015","postname"=>"Hello World!","author"=>"zhenghui","date" => "2017-9-12","tag"=>"Blog","read"=>"999"],
                ["id" => "016","postname"=>"Hello World!","author"=>"zhenghui","date" => "2017-9-12","tag"=>"Blog","read"=>"999"],
                ["id" => "017","postname"=>"Hello World!","author"=>"zhenghui","date" => "2017-9-12","tag"=>"Blog","read"=>"999"],
                ["id" => "018","postname"=>"Hello World!","author"=>"zhenghui","date" => "2017-9-12","tag"=>"Blog","read"=>"999"],
                ["id" => "019","postname"=>"Hello World!","author"=>"zhenghui","date" => "2017-9-12","tag"=>"Blog","read"=>"999"],
                ["id" => "020","postname"=>"Hello World!","author"=>"zhenghui","date" => "2017-9-12","tag"=>"Blog","read"=>"999"],
                
            ]
            
        ];
        return json($mydata);
    }
}
