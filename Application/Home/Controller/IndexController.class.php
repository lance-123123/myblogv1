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
     $select_blog_list=$blog->order("browsenumber desc")->limit("5")->select();
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
        $blog=M('blog');
        $id=$_GET['id'];
        $add=$this->add_eye($id);
        if($add){
            $find_blog=$blog->where("id=$id")->find();
            $content=stripslashes($find_blog['blog_content']);
            $find_blog['blog_content']=html_entity_decode($content);
            $look_blog_title=$this->look_blog_arr($id);
            $arr['last_title'] = $look_blog_title[0]['title']; //用数组盛放上一篇的标题及id
            $arr['last_id'] = $look_blog_title[0]['id'];
            $arr['after_title'] = $look_blog_title[1]['title']; //用数组盛放下一篇的
            $arr['after_id'] = $look_blog_title[1]['id'];
        }else{
         $this->error("系统出错了！",0);
        }
        $this->assign("blog_title",$arr);
        $this->assign("blog_detail",$find_blog);
        $this->display();
    }

    /*
     *添加博客的浏览量（用法需要修改）
     * */
    public function add_eye($id){
      $blog=M('blog');
      $add_to_blog=$blog->where("id=$id")->setInc('browsenumber',1);//博客的浏览量添加
      if($add_to_blog){
        return $add_to_blog;
      }
    }

    /*
     *上一篇博客
     * */
    public function look_blog_arr($id){
        $blog=M('blog');
        $where_up['id'] = array('lt',$id);//小于当前id
        $up_blog=$blog->where($where_up)->field('title, id')->order('id desc')->limit("1")->find(); //上一篇
        $where['id']  = array('gt',$id);//大于当前id
        $down_blog=$blog->where($where)->field('title, id')->order('id desc')->limit("1")->find();//下一篇
        $arr[] = $up_blog;//使用数组盛放上一篇的内容
        $arr[] = $down_blog;//盛放下一篇的内容
        return $arr;//返回数组
    }

}

?>