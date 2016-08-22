<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	 /*初始化方法*/
   public function _initialize(){
      if(!session('id')){
            $this->redirect('Public/login');
        }
    }
    
    /*
     * 系统du ev 访问量，及浏览量记录
     * */
    public function index()
    {
    	$blog=M('blog');
        $comment=M("comment");
        $get_commit_list=$comment->alias("a")->field("a.*,b.title")
                                 ->join("blog as b on b.id=a.blog_id")
                                 ->where("a.status = 0")
                                 ->order('a.message_time desc')
                                 ->limit(5)
                                 ->select();
        $select_blog_list=$blog->alias("a")->field("a.*,b.type_name")
                         ->join("blog_type as b on b.id=a.type_id")
                         ->order("a.public_date desc")
                         ->limit(5)
                         ->select();  
        $this->assign('blog_data',$select_blog_list); 
        $this->assign('commit_date',$get_commit_list);   
        $this->display();
    }

     /*获取数据显示图表信息*/
    public function retrun_date()
    {//博客的浏览量
       $id=I('post.id');
       $blog_model=M('blog');
       $list=$blog_model->where("status=0")->getField('title,browsenumber');
       if($list){
          /*$jsonencode = json_encode($list);*/
           $this->ajaxReturn($list);//获取数据成功则返回一个数组
        }else{
           $this->ajaxReturn(1);//未获取数据则返回1(错误信息提示)
        }    
    }

    //博客的类型的总量
    public function get_type_count(){
       $blog_model=M('blog_type');
       $list=$blog_model->where("status=0")->getField('type_name,content');
       if($list){
          /*$jsonencode = json_encode($list);*/
           $this->ajaxReturn($list);//获取数据成功则返回一个数组
        }else{
           $this->ajaxReturn(1);//未获取数据则返回1(错误信息提示)
        }  
    }

   




}