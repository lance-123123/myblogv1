<?php
  //关于我个人详情展示界面
  namespace Home\Controller;
  use Think\Controller;

  class ChatMeController extends BaseController{

  	 /**
  	   * @显示个人信息界面
  	   *
  	   **/
  	 public function chat_me(){
       $picture=M('picture');
       $blog_commit_count = $picture->where("status = 0")->count(); 
        $Page = new \Think\Page($blog_cout,5);
        $show = $Page->show();// 分页显示输出
        $history=$picture
                ->where("status = 0")
                ->limit($Page->firstRow.','.$Page->listRows)
                ->select();
        $this->assign("my",$history);
        $this->assign('page',$show);// 赋值分页输出 
  	 	$this->display();   
  	 }
  }

?>