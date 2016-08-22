<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {
    
  //登陆界面
  public function  login(){
     $this->display();
  }

   /*用户登录后台*/
     public function check_login(){
          $user_model=M('user');
          $username = trim(I('post.username'));
          $password=  trim(I('post.password'));
          $where["username"] = $username;
          $where["password"] = md5($password);
          $data = $user_model->where($where)->find();
          if ($data) {
            session("id",$data["id"]);
            session("username",$data["username"]);
            $this->ajaxReturn(0);//登录成功情况下！
          }else{
            $this->ajaxReturn(1);//登录失败情况下！
          }
     } 
     /**
       *用户退出
       **/
     public function logout(){
        session('id',null);
        session('username',null);
        $this->redirect('Public/login');
     }

}