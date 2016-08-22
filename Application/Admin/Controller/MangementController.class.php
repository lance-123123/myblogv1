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
 /*初始化方法*/
   public function _initialize(){
      if(!session('id')){
            $this->redirect('Public/login');
        }
    }
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
        if($status==3){
            $blog_data=$blog->where('status != 2')->select();
        }else{
          $blog_data=$blog->where("status=%d",$status)->select();
        }
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
      $blog_type=M('blog_type')->where('status != 1')->select();
        $this->assign('blog_list',$blog_type);
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
        $data['type_id']=I("post.type_id");
        $data['blog_newsletter']=mb_substr(trim(I('post.blog_newsletter')),0,120,'utf-8');
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

    /*
     * 删除博客，可批量删除
     * */
    public function delete_blog(){
        $blog=M("blog");
        $ids = explode(",", I("id"));
        $where["id"] = array("in", $ids);
        $data['update_time']=time();
        $data['status']=2;
        $delete_blog=$blog->where($where)->save($data);
        if($delete_blog){
            $this->ajaxReturn(0);//删除成功的情况下的返回值
        }else{
           $this->ajaxReturn(1);//删除失败的情况下的返回值
        }
    }


    /** 类型管理*/
    public function type_manage(){
      $this->display();
    }

   /** 获取类型数据*/
   public function get_type_data(){
     $blog_type=M("blog_type");
     $get_data=$blog_type->where("status != 2")->select();
     $this->ajaxReturn(array("data" => $get_data));
   }

   /** 修改类型状态*/
   public function change_type_status(){
     $id=I("post.id");
        $status=I("post.status");
        $blog=M('blog_type');
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


   //删除博客的类型
   public function delete_type(){
        $blog=M("blog_type");
        $ids = explode(",", I("id"));
        $where["id"] = array("in", $ids);
      
        $data['status']=2;
        $delete_blog=$blog->where($where)->save($data);
        if($delete_blog){
            $this->ajaxReturn(0);//删除成功的情况下的返回值
        }else{
           $this->ajaxReturn(1);//删除失败的情况下的返回值
        }
   }

   //新增博客类型
   public function add_blog_type(){
    
      $this->display();
   }

   //提交所添加的博客分类
   public function submit_type(){
       $blog=M('blog_type');
        $data['type_name']=I('post.title');
        $data['photo']=I('post.photourl');
        $data['descript']=I('post.descript');
        $add_blog=$blog->data($data)->add();
         if($add_blog){
            $this->ajaxReturn(0);
         }else{
             $this->ajaxReturn(1);
         }
   }
   
   //编辑博客类型界面
   public function edit_blog_type(){
      $id=$_GET['id'];
      $blog_type=M('blog_type')->where("id = $id")->find();
      $this->assign('blog_type_list',$blog_type);
      $this->display();
   }

   //提交所编辑的博客内容
   public function submit_type_edit(){
     $blog=M('blog_type');
        $data['type_name']=I('post.title');
        $data['photo']=I('post.photourl');
        $data['descript']=I('post.descript');
        $id=I('post.id');
        $add_blog=$blog->where("id = $id")->save($data);
         if($add_blog){
            $this->ajaxReturn(0);
         }else{
             $this->ajaxReturn(1);
         }
   } 
   
}