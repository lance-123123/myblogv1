<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;

/*
 *显示博客展示界面
 *
 *@author 程鹏辉
 *
 * */
class ShowArticalController extends BaseController {
	/*
	 *罗列出博客信息
	 **/
	public function blog_list(){
        $blog=M('blog');
        $blog_type=M('blog_type');
	    $blog_cout = $blog->where("status = 0")->count();
	    $Page = new \Think\Page($blog_cout,10);
	    $show = $Page->show();// 分页显示输出
        $get_photo_list=$blog
                      ->alias("a")->field("a.*,b.type_name")
                      ->join("blog_type as b on b.id=a.type_id")
                      ->where('a.status = 0')->order("a.public_date desc")
                      ->limit($Page->firstRow.','.$Page->listRows)
                      ->select();
        $get_blog_type=$blog_type->where('status != 1')->select();
        $this->assign('blog_type',$get_blog_type);
        $this->assign("blog_list",$get_photo_list);
        $this->assign('page',$show);// 赋值分页输出 
	    $this->display();
	}

	public function show_blog_list(){
		$blog=M('blog');
		$id=(int)$_GET['id'];
		$blog_cout = $blog->where("status = 0")->count();
	    $Page = new \Think\Page($blog_cout,5);
	    $show = $Page->show();// 分页显示输出
		if($id == 1){
			$data = $blog->where('type_id != 1')->order('browsenumber desc')
		       ->limit($Page->firstRow.','.$Page->listRows)
		       ->select();
		}else{
			$data = $blog->where("type_id = $id")->order('browsenumber desc')
		       ->limit($Page->firstRow.','.$Page->listRows)
		       ->select();
		}
		$this->assign("blog_list",$data);
		$this->assign('page',$show);// 赋值分页输出 
		$this->display();
	}
}
   
?>