<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<head>
    <title>CPH BLOG</title>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <link rel="shortcut icon" type="image/x-icon" href="/myblogv1/Public/home/image/2.ico" />
    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" media="screen" href="/myblogv1/Public/home/plug/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/myblogv1/Public/home/plug/menu/css/simple_menu.css">
    <link rel="stylesheet" href="/myblogv1/Public/home/plug/css/nivo-slider.css" type="text/css" media="screen">
    <!-- FancyBox -->
    <link rel="stylesheet" type="text/css" href="/myblogv1/Public/home/plug/js/fancybox/jquery.fancybox.css" media="all">
    
    <!-- CSS Files -->
<link rel="stylesheet" type="text/css" href="/myblogv1/Public/home/plug/boxes/css/style6.css">
<link rel="stylesheet" type="text/css" media="screen" href="/myblogv1/Public/home/plug/css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="/myblogv1/Public/home/plug/menu/css/simple_menu.css">
<link rel="stylesheet" href="/myblogv1/Public/home/plug/css/nivo-slider.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="/myblogv1/Public/home/plug/boxes/css/style6.css">
<style type="text/css">
  .one-third{
    border-radius: 10px;
    padding: 10px 10px;
    width: 250px;
    margin-left: 20px;
    border: 1px solid #d5d5d5;
    margin-bottom: 20px;
    background: #E3E3E3;
  }
  

  .blog_list{
    border-bottom: 1px dashed  #d5d5d5;
    padding: 10px 10px;
    margin-bottom: 20px;
   /*  -webkit-box-shadow:0 0 10px rgba(156,195,83,.1);  
   -moz-box-shadow:0 0 10px rgba(156,195,83,.1);  
   box-shadow:0 0 10px rgba(156,195,83,.1); */
  }

#pagination-digg li { border:0; margin:0; padding:0; font-size:11px; list-style:none; /* savers */ float:left; }
#pagination-digg a { border:solid 1px #9aafe5; margin-right:2px; }
#pagination-digg .previous-off,#pagination-digg .next-off  { border:solid 1px #DEDEDE; color:#888888; display:block; float:left; font-weight:bold; margin-right:2px; padding:3px 4px; }
#pagination-digg .next a,#pagination-digg .previous a { font-weight:bold; } 
#pagination-digg .active { background:#2e6ab1; color:#FFFFFF; font-weight:bold; display:block; float:left; padding:4px 6px; /* savers */ margin-right:2px; }
#pagination-digg a:link,#pagination-digg a:visited { color:#0e509e; display:block; float:left; padding:3px 6px; text-decoration:none; }
#pagination-digg a:hover { border:solid 1px #0e509e; }

</style>

</head>
<body>
<div class="header">
    <div id="site_title"><a href="#"><img src="/myblogv1/Public/home/plug/img/login1.png" alt=""></a></div>
    <!-- Main Menu -->
    <ol id="menu">
        <li class="active_menu_item"><a href="<?php echo U('Index/index');?>">首  页</a></li>
        <!-- END sub menu -->
        <li><a href="<?php echo U('ShowArtical/blog_list');?>">文  章</a></li>

       <!--  <li><a href="<?php echo U('AboutMe/show_about_me');?>">相  册</a></li> -->
        <!-- END sub menu -->
        <li><a href="#">关  于</a></li>

        <!-- END sub menu -->
        <li><a href="<?php echo U('ChatMe/chat_me');?>">联  系</a></li>
    </ol>
</div>
<!-- END header -->
<div id="container">
   <!-- <h1>Full Width Page</h1>
    <p>This is an empty full width page.</p>
    <div style="clear:both; height: 40px"></div>-->
    
     <div class="two-third">
      <div style="clear:both"></div>
         <?php if(is_array($blog_list)): $i = 0; $__LIST__ = $blog_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="blog_list">
              <h3><a href="<?php echo U('Index/look_blog_detail');?>?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></h3> 
                <img src="/myblogv1/Uploads//<?php echo ($vo["blog_photo"]); ?>" width="350px" height="185px" alt="">
                    <ul class="post_meta" style="margin:0">
                        <li class="post_meta_date"><a href="#"><?php echo (date("Y-m-d",$vo["public_date"])); ?></a></li>
                        <li class="post_meta_comments"><a href="#"><?php echo ($vo["commit_count"]); ?></a></li>
                        <li class="post_meta_admin"><a href="#"><?php echo ($vo["praise"]); ?></a></li>
                        <li class="post_meta_prise"><a href="#"><?php echo ($vo["browsenumber"]); ?></a></li>
                    </ul>
                    <p><?php echo (htmlspecialchars_decode($vo["blog_newsletter"])); ?></p>
                </div>
                 <div style="clear:both"></div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div style="background-color:#ffffff" id="pagination-digg ">
            <?php echo ($page); ?>
          </div>  
      </div>
  <!-- close two third -->
  <div class="sidebar_right">
   
    <div style="clear:both"></div>

    <h3>博客标签</h3>
    <ul class="sidebar_menu" style="margin:0">
      <li><a href="#">git(1)</a></li>
      <li><a href="#">css(2)</a></li>
      <li><a href="#">php(0)</a></li>
      <li><a href="#">程序人生(0)</a></li>
      <li><a href="#">linux(0)</a></li>
      <li><a href="#">杂项(0)</a></li>
    </ul>
  </div>
  <!-- end sidebar right -->
  <div style="clear:both; height: 40px"></div>

</div>
<!-- close container -->
<div id="footer">
    <!-- First Column -->
    <div class="one-fourth">
        <h3>我的链接</h3>
        <ul class="footer_links">
           <!--   -->
             <li><a href="http://weibo.com/u/5606360752?from=feed&loc=nickname&is_all=1">我的微博</a></li>
            <li><a href="http://www.cnblogs.com/Lance--blog/">我的博客园</a></li>
            <li><a href="http://lyys.yunxiaoqu.cc">洛阳幼儿师范</a></li>
            <li><a href="https://github.com/lance-123123/">我的github链接</a></li>
        </ul>
    </div>
    <!-- Second Column -->
    <div class="one-fourth">
        <h3>友情链接</h3>
        <ul class="footer_links">
            <li><a href="http://marchsoft.cn/">三月软件工作室</a></li>
            <li><a href="http://www.zhaoyafei.cn/">赵亚飞的博客</a></li>
            <li><a href="http://www.xiongchao.net.cn/">长江七号</a></li>
            <li><a href="http://blog.eee842.me/">you are sucker!</a></li>
        </ul>
    </div>
    <!-- Third Column -->
    <div class="one-fourth">
        <h3>Information</h3>
         E-mail：chengpenghui@marchsoft.cn
         qq:1339408293
        <div id="social_icons">京ICP备16012237号-2 |Copyright @2014-2016 chengpenghui</div>
    </div>
    <!-- Fourth Column -->
    <div class="one-fourth last">
        <h3>Socialize</h3>
        <img src="/myblogv1/Public/home/plug/img/icon_fb.png" alt=""> <img src="/myblogv1/Public/home/plug/img/icon_twitter.png" alt=""> <img src="/myblogv1/Public/home/plug/img/icon_in.png" alt=""> </div>
    <div style="clear:both"></div>
</div>
<!-- END footer -->
<!-- JS Files -->
<script src="/myblogv1/Public/home/plug/js/jquery.min.js"></script>
<!-- <script src="/myblogv1/Public/home/plug/js/custom.js"></script> -->
<script src="/myblogv1/Public/home/plug/js/slides/slides.min.jquery.js"></script>
<!-- <script src="/myblogv1/Public/home/plug/js/cycle-slider/cycle.js"></script> -->
<script src="/myblogv1/Public/home/plug/js/nivo-slider/jquery.nivo.slider.js"></script>
<script src="/myblogv1/Public/home/plug/js/tabify/jquery.tabify.js"></script>
<script src="/myblogv1/Public/home/plug/js/prettyPhoto/jquery.prettyPhoto.js"></script>
<script src="/myblogv1/Public/home/plug/js/twitter/jquery.tweet.js"></script>
<script src="/myblogv1/Public/home/plug/js/scrolltop/scrolltopcontrol.js"></script>
<script src="/myblogv1/Public/home/plug/js/portfolio/filterable.js"></script>
<script src="/myblogv1/Public/home/plug/js/modernizr/modernizr-2.0.3.js"></script>
<!-- <script src="/myblogv1/Public/home/plug/js/easing/jquery.easing.1.3.js"></script> -->
<script src="/myblogv1/Public/home/plug/js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
<script src="/myblogv1/Public/home/plug/js/swfobject/swfobject.js"></script>
<script src="/myblogv1/Public/home/plug/js/fancybox/jquery.fancybox-1.2.1.js"></script>
<script src="/myblogv1/Public/home/plug/layer/layer.js"></script>
<script type="text/javascript">
    var uploads = '/myblogv1/Uploads/';
    var open = '/myblogv1/Public';
</script>

<script src="/myblogv1/Public/home/plug/js/jquery.min.js"></script>
<!-- <script src="/myblogv1/Public/home/plug/js/custom.js"></script> -->
<script src="/myblogv1/Public/home/plug/js/slides/slides.min.jquery.js"></script>
<script src="/myblogv1/Public/home/plug/js/cycle-slider/cycle.js"></script>
<script src="/myblogv1/Public/home/plug/js/nivo-slider/jquery.nivo.slider.js"></script>
<script src="/myblogv1/Public/home/plug/js/tabify/jquery.tabify.js"></script>
<script src="/myblogv1/Public/home/plug/js/prettyPhoto/jquery.prettyPhoto.js"></script>
<script src="/myblogv1/Public/home/plug/js/twitter/jquery.tweet.js"></script>
<script src="/myblogv1/Public/home/plug/js/scrolltop/scrolltopcontrol.js"></script>
<script src="/myblogv1/Public/home/plug/js/portfolio/filterable.js"></script>
<script src="/myblogv1/Public/home/plug/js/modernizr/modernizr-2.0.3.js"></script>
<script src="/myblogv1/Public/home/plug/js/easing/jquery.easing.1.3.js"></script>
<script src="/myblogv1/Public/home/plug/js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
<script src="/myblogv1/Public/home/plug/js/swfobject/swfobject.js"></script>
<script type="text/javascript">
  $(function() { 
      $('.one-third').mouseover(function(){
        $(this).addClass("box-shadow-3");
       });
      $('.one-third').mouseleave(function(){
        $(this).removeClass("box-shadow-3");
       });
  });
</script>


</body>
</html>