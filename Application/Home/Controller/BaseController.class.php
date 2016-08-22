<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
public function _initialize(){
        $blog=M('blog');
        $comment=M("comment");
        $select_blog_data=$blog->alias("a")->field("a.*,b.type_name")
                         ->join("blog_type as b on b.id=a.type_id")
                         ->order("a.public_date desc")
                         ->limit(5)
                         ->select();
        $get_commit_list=$comment->alias("a")->field("a.*,b.title")
                                 ->join("blog as b on b.id=a.blog_id")
                                 ->where("a.status = 0")
                                 ->order('a.message_time desc')
                                 ->limit(5)
                                 ->select();
        $this->assign('blog_data',$select_blog_data);
        $this->assign('commit',$get_commit_list);     
    }
}

?>