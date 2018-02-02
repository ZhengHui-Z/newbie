<?php
namespace app\admin\logic;

use app\admin\model\Article as ArticleModle;

class Article
{
    /**
	 * 数据验证
	 * @param $data
	 * @return array
	 */
	 
	public function validata($data)
	{
		if($data['post_title'] == ''){
			return ["err"=>1,"msg"=>"请填写文章标题","data"=>""];
		}
		if($data['post_pid'] == ''){
			return ["err"=>1,"msg"=>"请选择文章栏目","data"=>""];
		}
		if($data['art_content'] == ''){
			return ["err"=>1,"msg"=>"请填写文章正文内容","data"=>""];
		}
	}
	/*增加文章逻辑功能*/
	public function add($data)
	{
		$saveData = array(
			'post_title'   => $data['post_title'],
			'post_author'  => $data['post_author'],
			'post_img'     => $data['post_img'],
			'post_date'	   => $data['post_date'],
			
		);
	}
}
