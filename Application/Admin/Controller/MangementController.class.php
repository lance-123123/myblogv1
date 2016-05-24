<?php
/**
 * Created by PhpStorm.
 * User: 程鹏辉
 * Date: 2016/4/27 0027
 * Time: 下午 9:54
 */

namespace Admin\Controller;
use Think\Controller;

class MangementController extends Controller {

    /**
      *显示博客管理界面
      */
    public function manage_blog(){
        $this->display();
    }

    /**
      *获取博客具体数据数据
      */
    public function get_blog_data(){
        $blog=M('blog');
        $aoData=I('aoData');
        $status=$aoData['status'];
        $blog_data=$blog->where("status=%d",$status)->select();
        for ($i = 0; $i < count($blog_data); $i++) {
            $blog_data[$i]["public_date"] = date("Y-m-d H:i:s", $blog_data[$i]['public_date']);
            $blog_data[$i]["update_time"] = date("Y-m-d H:i:s", $blog_data[$i]['update_time']);
        }
        $this->ajaxReturn(array("data" => $blog_data));
    }

    /**
      *编辑博客
      */
    public function edit_blog(){
      $id=$_GET['id'];
      $blog=M('blog');
      $find_blog=$blog->where("id=$id")->find();
      $this->assign("blog_data",$find_blog);
      $this->display();
    }

    /*
     *修改博客
     **/
    public function submit_blog(){
        $blog=M("blog");
        $id=I("post.blog_id");
        $data['blog_content']=I("post.blog_content");
        $data['tags']=I("post.choice");
        $data['blog_photo']=I("post.photourl");
        $data['title']=I("post.title");
        $data['update_time']=time();
        $save_blog=$blog->where("id=$id")->data($data)->save();
        if($save_blog){
            $this->ajaxReturn(0);
        }else{
            $this->ajaxReturn(1);
        }

    }

    /**
      *改变博客的状态
      */
    public function change_status(){
        $id=I("post.id");
        $status=I("post.status");
        $blog=M('blog');
        if($status==0){//启用变禁用
            $save_status=$blog->where("id=$id")->save(array('status'=>1));
            if($save_status){
                $this->ajaxReturn(1);//操作成功
            }else{
                $this->ajaxReturn(2);//操作失败
            }
        }
        if($status==1){//禁用变启用
            $save_status=$blog->where("id=$id")->save(array('status'=>0));
            if($save_status){
                $this->ajaxReturn(1);//操作成功
            }else{
                $this->ajaxReturn(2);//操作失败
            }
        }

    }
}