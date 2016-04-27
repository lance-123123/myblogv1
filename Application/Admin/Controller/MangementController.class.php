<?php
/**
 * Created by PhpStorm.
 * User: 程鹏辉
 * Date: 2016/4/27 0027
 * Time: 下午 9:54
 */

namespace Admin\Controller;
use Think\Controller;

class MangementController extends Controller {

    /**
      *显示博客管理界面
      */
    public function manage_blog(){
        $this->display();
    }
}