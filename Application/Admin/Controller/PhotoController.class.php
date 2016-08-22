<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class PhotoController extends Controller {
     /*初始化方法*/
   public function _initialize(){
      if(!session('id')){
            $this->redirect('Public/login');
        }
    }
    /*
     * 显示图片管理界面
     * */
    public function show_photo()
    {
        $this->display();
    }


    /** 获取图片管理数据**/
    public function get_photo_data(){
    	$blog=M('picture');
        $blog_data=$blog->where('status != 2')->select();
        for ($i = 0; $i < count($blog_data); $i++) {
            $blog_data[$i]["create_time"] = date("Y-m-d H:i:s", $blog_data[$i]['create_time']);
        }
        $this->ajaxReturn(array("data" => $blog_data));
    }


    /**添加图片显示界面**/
    public function add_photo(){
    	$this->display();
    }

    /** 提交所添加的内容 **/
    public function submit_add_photo(){
    	$blog=M('picture');
        $data['title']=I('post.title');
        $data['pthoto_url']=I('post.photourl');
        $data['content']=I('post.blog_content');
        $data['create_time']=time();
        $add_blog=$blog->data($data)->add();
	     if($add_blog){
	        $this->ajaxReturn(0);
	     }else{
	         $this->ajaxReturn(1);
	     }
    }


    /**删除图片**/
    public function del_photos(){
    	$blog=M("picture");
        $ids = explode(",", I("id"));
        $where["id"] = array("in", $ids);
        $delete_blog=$blog->where($where)->save(array('status'=>2));
        if($delete_blog){
            $this->ajaxReturn(0);//删除成功的情况下的返回值
        }else{
           $this->ajaxReturn(1);//删除失败的情况下的返回值
        }
    }


     /**
      *改变图片的状态
      */
    public function change_status(){
        $id=I("post.id");
        $status=I("post.status");
        $blog=M('picture');
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


   /**编辑图片**/
   public function show_edit_photo(){
      $id=$_GET['id'];
      $blog=M('picture');
      $find_blog=$blog->where("id=$id")->find();
      $this->assign("data",$find_blog);
      $this->display();
   }

   
   /** 提交所编辑的**/
   public function submit_edit_photo(){
        $blog=M('picture');
        $id=I('post.id');
        $data['title']=I('post.title');
        $data['pthoto_url']=I('post.photourl');
        $data['content']=I('post.blog_content');
        $data['update_time']=time();
        $add_blog=$blog->where("id=$id")->data($data)->save();
	     if($add_blog){
	        $this->ajaxReturn(0);
	     }else{
	         $this->ajaxReturn(1);
	     }
   }
}