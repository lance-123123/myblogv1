<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<head>
    <title>CPH BLOG</title>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
   <link rel="shortcut icon" type="image/x-icon" href="/myblogv1/Public/home/image/2.ico" />

    <link href="/myblogv1/Public/home/css/base.css" rel="stylesheet">
    <link href="/myblogv1/Public/home/css/index.css" rel="stylesheet">
    <link href="/myblogv1/Public/home/css/media.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <!--[if lt IE 9]>
    <script src="js/modernizr.js"></script>
    <![endif]-->
    
<link href="/myblogv1/Public/home/css/style.css" rel="stylesheet">
 <link href="/myblogv1/Public/home/css/media.css" rel="stylesheet">
 <link href="/myblogv1/Public/home/css/base.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="/myblogv1/Public/home/js/src/jquery.booklet.latest.css">
 <style type="text/css">
   .font_set{
          color: #bf5934;
          font-family: "Microsoft Yahei","SimHei";
          font-size: 24px;
          padding-bottom: 28px;
          text-align: center;
   }
   .conten_set{
      color: #525554;
      padding: 100px 50px 0 50px;
      font-size: 12px;
      font-family: "SimSun";
      text-indent : 20px;
     /*  letter-spacing:8px; */
   }
   .page_set1{
      background:#fff;
      height:100%;
      background-image:url(/myblogv1/Public/home/js/src/images/15.jpg);
      background-repeat:no-repeat;
   }
   .page_set2{
      background:#fff;
      height:100%;
      background-image:url(/myblogv1/Public/home/js/src/images/35.png);
      background-repeat:no-repeat;
   }
   .image{
       transform:rotate(-14deg);
       -ms-transform:rotate(-14deg);    
       -moz-transform:rotate(-14deg);   
       -webkit-transform:rotate(-14deg);  
       -o-transform:rotate(-14deg);  
          padding: 300px 45px;
   }

 </style>
 <!-- <link rel="stylesheet" type="text/css" href="/myblogv1/Public/home/css/default.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="/myblogv1/Public/home/css/door.css"> -->
<!--[if IE]>
  <script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
<![endif]-->


</head>
<body>
<div class="ibody">
<input type="hidden" value="<?php echo U('Index/add_blog_number');?>" id="plug_number">
  <header>
    <h1>lance--blog</h1>
    <h2>我确信我热爱自己所做的事情，这就是这些年来支持我继续走下去的唯一理由。</h2>
    <div class="logo"><a href="#"></a></div>
    <nav id="topnav"><a href="<?php echo U('Index/index');?>">首页</a><a href="<?php echo U('ShowArtical/blog_list');?>">文章</a><!-- <a href="<?php echo U('Index/blog_type');?>">分类</a> --><a href="<?php echo U('AboutMe/show_about_me');?>">关于</a><a href="<?php echo U('ChatMe/chat_me');?>">记忆</a></nav>
  </header>
  <article>
     
<h2 class="about_h">您现在的位置是：<a href="<?php echo U('ChatMe/chat_me');?>">记忆</a>><a href="javascript:void(0)">我的记忆</a><a href="1/"></a></h2>

<div id="myhistory">
    <?php if(is_array($my)): $i = 0; $__LIST__ = $my;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div  class="page_set1">
      <div class="conten_set" >
       <h2 class="font_set"><?php echo ($vo["title"]); ?></h2>
       <p><?php echo (htmlspecialchars_decode($vo["content"])); ?></p>
      </div>
        <div style="text-align: center;"><?php echo (date("Y-m-d H:i:s",$vo["create_time"])); ?>
        </div>
        
    </div>
    <div class="page_set2">
       
        <div class="image">
         <img src="/myblogv1/Uploads//<?php echo ($vo["pthoto_url"]); ?>" style="margin-top:8%" width="231px" height="227px">
        </div>
      <!-- <div class="autor"><span>作者：程鹏辉</span><span>分类：[<a href="javascript:void(0)"><?php echo ($vo["type_name"]); ?></a>]</span><span>浏览（<a href="/"><?php echo ($vo["browsenumber"]); ?></a>）</span><span>评论（<a href="/"><?php echo ($vo["commit_count"]); ?></a>）</span><span>点赞（<a href="/"><?php echo ($vo["praise"]); ?></a>）</span></div> -->
   </div><?php endforeach; endif; else: echo "" ;endif; ?>

</div>



  </article>
  <aside>
    <div class="avatar"><a href="about.html"><span>关于我</span></a></div>
    <div class="topspaceinfo">
      <h1>座右铭</h1>
      <p>当我们不再年轻的时候，当我们不再做程序的时候，唯有这些博客，记录着我们曾经为程序欣喜、为程序付出过汗水的经历。 </p>
    </div>
    <div class="about_c">
      <p>姓名：程鹏辉</p>
      <p>职业：php开发工程师</p>
      <p>籍贯：河南-南阳</p>
      <p>qq：1339408293</p>
      <p>邮箱：chengpenghui@marchsoft.cn</p>
    </div>
    <div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
    <div class="tj_news">
      <h2>
        <p class="tj_t1">最新文章</p>
      </h2>
      <ul>
        <?php if(is_array($blog_data)): $i = 0; $__LIST__ = $blog_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Index/look_blog_detail');?>?id=<?php echo ($vo["id"]); ?>" class="look_show_blog" data="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
      <h2>
        <p class="tj_t2">最新留言</p>
      </h2>
      <ul>
      <?php if(is_array($commit)): $i = 0; $__LIST__ = $commit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?><li><a href="javascript:void(0)" data="<?php echo ($vo["id"]); ?>"><?php echo ($a["message"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    <div class="links">
      <h2>
        <p>友情链接</p>
      </h2>
      <ul>
       <li><a href="http://weibo.com/u/5606360752?from=feed&loc=nickname&is_all=1">我的微博</a></li>
       <li><a href="https://github.com/lance-123123/">我的github链接</a></li>
        <li><a href="http://www.cnblogs.com/Lance--blog/">我的博客园</a></li>
        <li><a href="http://lyys.yunxiaoqu.cc">洛阳幼儿师范</a></li>
      </ul>
    </div>
    <div class="copyright">
      <ul>
        <p>京ICP备16012237号-2 </p>
        <p>Copyright @2014-2016 chengpenghui</p>
        </p>
      </ul>
    </div>
  </aside>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
<script src="/myblogv1/Public/home/plug/js/jquery.min.js"></script>
<script src="/myblogv1/Public/home/js/silder.js"></script>
<div class="clear"></div>
<script src="/myblogv1/Public/home/plug/layer/layer.js"></script>
<script type="text/javascript">
    var uploads = '/myblogv1/Uploads/';
    var open = '/myblogv1/Public';
    $(".look_show_blog").click(function(){
        var id= $(this).attr("data");
        $.ajax({
           type: 'POST',
           url: $("#plug_number").attr("value"),
           data: {
              'id': id
             }
          });
      });
</script>

<script src="/myblogv1/Public/home/js/src/jquery-2.1.0.min.js" type="text/javascript"></script>
<script src="/myblogv1/Public/home/js/src/jquery-ui-1.10.4.min.js" type="text/javascript"></script>
<script src="/myblogv1/Public/home/js/src/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="/myblogv1/Public/home/js/src/jquery.booklet.latest.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/myblogv1/Public/home/js/src/jquery.booklet.latest.js"></script>
    <script type="text/javascript">
         
$(function() {
    //single book
    $('#myhistory').booklet({
         width:  700,
         height: 1000,
         shadows: true,
         /*pagePadding: 15,*/
         keyboard: true,
         pageNumbers: false
         /*closed: true*/
    });
});

    </script>


</body>
</html>