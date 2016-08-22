<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
/*
 *显示首页展示界面
 *
 *@author 程鹏辉
 *
 * */
class IndexController extends BaseController {

    public function index(){
     $blog=M("blog");
     $famous_sayings=M('famous_sayings');
     $select_blog_list=$blog
                      ->alias("a")->field("a.*,b.type_name")
                      ->join("blog_type as b on b.id=a.type_id")
                      ->order("a.browsenumber desc")
                      ->limit("6")
                      ->select();
     $find_sayings=$famous_sayings->where('status = 0')->select();
  
     $this->assign("saying",$find_sayings);
     $this->assign("look_more",$find_look_more);
     $this->assign("blog_data",$select_blog_list);
	 $this->display();
    }

    /*
     * 查看博客详情 
     * */
    public function look_blog_detail(){
        $blog=M('blog');
        $comment=M('comment');
        $id=$_GET['id'];
        $find_blog=$blog->where("id = $id")->find(); //找到博客的内容

        $blog_commit_count = $comment->where("blog_id = $id")->count(); 
        $Page = new \Think\Page($blog_cout,5);
        $show = $Page->show();// 分页显示输出
        
        $select_commit=$comment->where("blog_id=$id")->order("id desc")->
        limit($Page->firstRow.','.$Page->listRows)->select();

        $content=stripslashes($find_blog['blog_content']);
        $find_blog['blog_content']=html_entity_decode($content);
        $look_blog_title=$this->look_blog_arr($id);
        $arr['last_title'] = $look_blog_title[0]['title']; //用数组盛放上一篇的标题及id
        $arr['last_id'] = $look_blog_title[0]['id'];
        $arr['after_title'] = $look_blog_title[1]['title']; //用数组盛放下一篇的
        $arr['after_id'] = $look_blog_title[1]['id'];
        $this->assign("blog_title",$arr);
        $this->assign("blog_detail",$find_blog);
        $this->assign("commit_detail",$select_commit);
        $this->display();
    }


    /*
     *上一篇博客
     * */
    public function look_blog_arr($id){
        $blog=M('blog');
        $where_up['id'] = array('lt',$id);//小于当前id
        $up_blog=$blog->where($where_up)->field('title, id')->order('id desc')->limit("1")->find(); //上一篇
        $where['id']  = array('gt',$id);//大于当前id
        $down_blog=$blog->where($where)->field('title, id')->order('id desc')->limit("1")->find();//下一篇
        $arr[] = $up_blog;//使用数组盛放上一篇的内容
        $arr[] = $down_blog;//盛放下一篇的内容
        return $arr;//返回数组
    }

    /*
     *查看博客
     **/
    public function add_blog_number(){
        $id=I("post.id");
        $blog=M('blog');
        $add_to_blog=$blog->where("id=$id")->setInc('browsenumber',1);//博客的浏览量添加
    }
    
    /*
     *添加博客的点赞数量
     **/
    public function add_prise_number(){
        $id=I('post.id');
        $blog=M('blog');
        $user_id=session('ip_address');//从session中获取用户的IP地址，判断是否存在
        if(empty($user_id)){//如果不存在怎记录一下
           $user_IP = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
           $user_IP = ($user_IP) ? $user_IP : $_SERVER["REMOTE_ADDR"];
            session('ip_address',$user_IP);
         $add_to_blog=$blog->where("id=$id")->setInc('praise',1);//博客的点赞量添加
            if($add_to_blog){
                $this->ajaxReturn(1);//点赞成功的情况下
            }else{
                $this->ajaxReturn(0);//点赞失败的情况下
            }
       }else{
         $this->ajaxReturn(2);//你已经点过赞的
       }  
    }


    /*
     *添加评论
     **/
    public function add_blog_commit(){
          $code=I('post.code');

          $check_s=$this->check_verify($code); 
          if($check_s != true){
            $this->ajaxReturn(2);
          }else{
            $ip_info=json_decode($this->getIpAddress(),true);
            $data['email']=I('post.email');
            $data['userful_chat']=I('post.name');
            $data['message']=I('post.content');
            $data['blog_id']=$id=I('post.id');
            $data['message_time']=time();
            $data['province']=$ip_info['province'];
            $data['city']=$ip_info['city'];
            $comment=M('comment');
            $blog=M('blog');
            $add_commit=$comment->data($data)->add();
            if($add_commit){//添加留言成功
              $commit_fulg=$blog->where("id=$id")->setInc('commit_count',1);
              if($commit_fulg){
                  $comment->commit();
                  $this->ajaxReturn(0); 
              }else{
                  $comment->rollback();
                  $this->ajaxReturn(1);
              }
            }else{//添加留言失败
              $this->ajaxReturn(1);
            }
        }
          
    }
  
    //根据留言者的IP地址查到其所属的位置
    public function getIpAddress(){  
          $ipContent  = file_get_contents("http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js");  
          $jsonData = explode("=",$ipContent);   
          $jsonAddress = substr($jsonData[1], 0, -1);  
          return $jsonAddress;  
    }

    //博客类型
    public function blog_type(){
      $blog_type=M('blog_type');
      $fet_type_list=$blog_type->where('status = 0')->select();
      $this->assign('type_list',$fet_type_list);
      $this->display();
    }

    /* 生成验证码 */
    public function verify()
     {
         $config = [
             'fontSize' => 19, // 验证码字体大小
             'length' => 4, // 验证码位数
             'imageH' => 34
         ];
         $Verify = new Verify($config);
         $Verify->entry();
     }

      /* 验证码校验 */
    public function check_verify($code, $id = '')
    {
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }  
   
}

?>