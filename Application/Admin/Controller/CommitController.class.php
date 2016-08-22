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
                                 ->where("a.status = 0")
                                 ->select();
        for ($i = 0; $i < count($get_commit_list); $i++) {
            $get_commit_list[$i]["message_time"] = date("Y-m-d H:i:s", $get_commit_list[$i]['message_time']);
        }
        $this->ajaxReturn(array("data" => $get_commit_list)); 
    }


    /**删除留言**/
    public function del_commit(){
        $blog=M("comment");
        $ids = explode(",", I("id"));
        $where["id"] = array("in", $ids);
        $data['update_time']=time();
        $delete_blog=$blog->where($where)->delete();
        if($delete_blog){
            $this->ajaxReturn(0);//删除成功的情况下的返回值
        }else{
           $this->ajaxReturn(1);//删除失败的情况下的返回值
        }
    }

}

?>