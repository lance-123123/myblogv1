<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
/*
 *显示首页展示界面
 *
 *@author 程鹏辉
 *
 * */
class IndexController extends Controller {

    public function index(){
     $blog=M("blog");
     $select_blog_list=$blog->order("browsenumber")->limit("5")->select();
     $find_new_blog=$blog->order("public_date")->limit("2")->select();//获取最新博客信息
     $find_look_more=$blog->order("browsenumber")->limit("1")->select();//获取最热博客资讯
     $this->assign("new_blog",$find_new_blog);
     $this->assign("look_more",$find_look_more);
     $this->assign("blog_data",$select_blog_list);
	 $this->display();
    }

    /*
     * 查看博客详情
     * */
    public function look_blog_detail(){
        $id=$_GET['id'];
        $this->display();

    }

}

?>