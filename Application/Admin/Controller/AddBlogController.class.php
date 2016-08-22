<?php
/**
 * Created by PhpStorm.
 * User:程鹏辉
 * Date: 2016/4/26 0026
 * Time: 下午 5:14
 */

namespace Admin\Controller;
use Think\Controller;
class AddBlogController extends Controller{
     /*初始化方法*/
   public function _initialize(){
      if(!session('id')){
            $this->redirect('Public/login');
        }
    }
    
    public function addblog()
    {
        $blog_type=M('blog_type')->where('status != 1')->select();
        $this->assign('blog_list',$blog_type);
        $this->display();
    }

    /**
     *提交添加的博客
     */
    public function submitblog(){
        $blog=M('blog');
        $blog_type=M('blog_type');
        $data['title']=I('post.title');
        $data['blog_photo']=I('post.photourl');
        $data['blog_content']=I('post.blog_content');
        $data['tags']=I('post.choice');
        $data['public_date']=time();
        $data['update_time']=time();
        $type_ids=$data['type_id']=I('post.type_id');
        $data['blog_newsletter']=mb_substr(trim(I('post.blog_newsletter')),0,120,'utf-8');
        $add_blog=$blog->data($data)->add();
        if($add_blog){
             $add=$blog_type->where("id=$type_ids")->setInc('content',1);
             if($add){
                 $blog->commit();
                 $this->ajaxReturn(0);
             }else{
                $blog->rollback();
                $this->ajaxReturn(1);
             }
         }else{
            $this->ajaxReturn(1);
         }
    }


    /**
     *上传图片文件
     */
    public function  submitphoto(){
        $meaasage="";
        if(isset($_FILES['document'])) {
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 3145728;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->savePath = 'Picture/'; // 设置附件上传目录
            $info = $upload->upload();
            if (!$info) {// 上传错误提示错误信息
                $meaasage=$upload->getError();
                $this->ajaxReturn($meaasage);
            }else {// 上传成功 获取上传文件信息
                foreach ($info as $file) {
                    $url = $file['savepath'].$file['savename'];
                }
            }
        }
        $this->ajaxReturn($url);
    }
}