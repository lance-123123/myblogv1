<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class PersonalController extends Controller {
    
 /*初始化方法*/
   public function _initialize(){
      if(!session('id')){
            $this->redirect('Public/login');
        }
    }
    /*
     *显示修改密码界面
     * */
    public function user()
    {
        $this->display();
    }

    /**提交所修改的密码**/
    public function submit_pwd(){
       $pwd=md5(I('post.password'));	
       $user=M('user');
       $save_pwd=$pwd->where("id = 2 ")->save(array('password'=>$pwd));

    }



}