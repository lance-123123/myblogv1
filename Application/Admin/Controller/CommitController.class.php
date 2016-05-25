<?php
/**
* Created by PhpStorm.
* User: 程鹏辉
* Date: 2016/4/27 0027
* Time: 下午 9:54
*/

namespace Admin\Controller;
use Think\Controller;

/*博客留言管理功能*/

class CommitController extends Controller {

    /*
     *展示博客留言界面
     **/
    public function show_commit(){
        $this->display();
    }

    /*
     *获取博客的数据信息
     * */
    public function get_commit_data(){
        $comment=M("comment");
        $get_commit_list=$comment->alias("a")->field("a.*,b.title")
                                 ->join("blog as b on b.id=a.blog_id")
                                 //->where()
                                 ->select();
    }

}

?>