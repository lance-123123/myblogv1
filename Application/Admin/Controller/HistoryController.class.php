<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class HistoryController extends Controller {
   /*初始化方法*/
   public function _initialize(){
      if(!session('id')){
            $this->redirect('Public/login');
        }
    }
    
    /*
     *显示历史记录管理页面
     * */
    public function show_history()
    {
        $this->display();
    }

    /*
     *获取历史记录中的值后台不需要分页
     * */
     public function get_blog_data(){
        $history=M('myhostry');
        $history_data=$history->where('status != 2')->select();
        for ($i = 0; $i < count($history_data); $i++) {
            $history_data[$i]["create_time"] = date("Y-m-d H:i:s", $history_data[$i]['create_time']);
        }
        $this->ajaxReturn(array("data" => $history_data));
    }

    /**
      *
      *添加历史记录
      * */
    public function add_history(){
    	$this->display();
    }

    /**
      *
      *提交历史记录
      *
      * */
    public function submit_history(){
    	  $myhostry=M('myhostry'); 
          $data['title']=I('post.title');
          $data['content']=I('post.blog_content');
          $data['create_time']=time();
          $add_his=$myhostry->data($data)->add();
         if($add_his){
            $this->ajaxReturn(0);
         }else{
             $this->ajaxReturn(1);
         }
    }

    /** 删除历史**/
    public function delete_history(){
    	$blog=M("myhostry");
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

    /** 编辑历史**/
    public function edit_history(){
    	$id=$_GET['id'];
        $blog_type=M('myhostry')->where("id = $id")->find();
        $this->assign('blog_type_list',$blog_type);
        $this->display();
    }

    /** 提交编辑的历史 **/

    public function submit_edit_history(){
    	$myhostry=M('myhostry');
    	$id=I('post.id');
    	$data['title']=I('post.title');
    	$data['content']=I('post.blog_content');
    	$data['update_time']=time();
    	$save_history=$myhostry->where("id=$id")->data($data)->save();
        if($save_history){
            $this->ajaxReturn(0);
        }else{
            $this->ajaxReturn(1);
        }
    }

}