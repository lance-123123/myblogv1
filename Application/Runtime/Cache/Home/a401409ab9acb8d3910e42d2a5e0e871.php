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
    <link rel="stylesheet" type="text/css" media="screen" href="/myblogv1/Public/home/plug/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/myblogv1/Public/home/plug/menu/css/simple_menu.css">
    <link rel="stylesheet" type="text/css" href="/myblogv1/Public/home/plug/boxes/css/style6.css">
    <link rel="stylesheet" type="text/css" href="/myblogv1/Public/home/css/look_blog_detail.css">
    <link rel="stylesheet" type="text/css" href="/myblogv1/Public/admin/static/ueditor/third-party/SyntaxHighlighter/shCoreDefault.css">

</head>
<body>
<div class="header">
    <div id="site_title"><a href="#"><img src="/myblogv1/Public/home/plug/img/login1.png" alt=""></a></div>
    <!-- Main Menu -->
    <ol id="menu">
        <li class="active_menu_item"><a href="<?php echo U('Index/index');?>">首  页</a></li>
        <!-- END sub menu -->
        <li><a href="#">文  章</a></li>

        <li><a href="#">相  册</a>
            <!-- sub menu -->
            <ol>
                <li><a href="#">Simple</a></li>
                <li><a href="#">Filterable</a></li>
                <li><a href="#">Fade Scroll</a></li>
                <li><a href="#">Video</a></li>
                <li class="last"><a href="#">PhotoGrid</a></li>
            </ol>
        </li>
        <!-- END sub menu -->
        <li><a href="#">关  于</a></li>

        <!-- END sub menu -->
        <li><a href="#">联  系</a></li>
    </ol>
</div>
<!-- END header -->
<div id="container">
   <!-- <h1>Full Width Page</h1>
    <p>This is an empty full width page.</p>
    <div style="clear:both; height: 40px"></div>-->
    
    <div id="prod_wrapper">
        <h1><?php echo ($blog_detail["title"]); ?></h1>

        <ul class="post_meta" style="margin:0">
            <li class="post_meta_date"><a href="#"><?php echo (date("Y-m-d",$blog_detail["public_date"])); ?></a></li>
            <li class="post_meta_comments"><a href="#"><?php echo ($blog_detail["commit_count"]); ?></a></li>
            <li class="post_meta_admin"><a href="#"><?php echo ($blog_detail["praise"]); ?></a></li>
            <li class="post_meta_prise"><a href="#"><?php echo ($blog_detail["browsenumber"]); ?></a></li>
        </ul>
        <div class="one">
            <p><?php echo ($blog_detail["blog_content"]); ?></p>
        </div>
    </div>

    <!-- end sidebar right -->
    <div style="clear:both;"></div>
      <a href="#" id="imagse" style="margin-left: 38%;margin-top: -50px"><img src="/myblogv1/Public/home/image/13.png"></a>
    <div style="clear:both; height: 40px"></div>

    <div>
        <p class="jiathis_style_32x32">
            <a href="#">分享到：</a><br/>
            <a class="jiathis_button_qzone"></a>
            <a class="jiathis_button_tsina"></a>
            <a class="jiathis_button_tqq"></a>
            <a class="jiathis_button_weixin"></a>
            <a class="jiathis_button_renren"></a>
            <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
            <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
        </p>
        <br />
       <div>
           <!-- 上一篇 -->
           <?php if($blog_title["last_id"] == null ): else: ?> <p>上一篇：<a href="<?php echo U('Index/look_blog_detail');?>?id=<?php echo ($blog_title["last_id"]); ?>" class="look_cout_last"><?php echo ($blog_title["last_title"]); ?> </a></p><?php endif; ?>

           <!-- 下一篇 -->
           <?php if($blog_title["after_id"] == null ): else: ?> <p>下一篇:  <a href="<?php echo U('Index/look_blog_detail');?>?id=<?php echo ($blog_title["after_id"]); ?>" class="look_cout_after"><?php echo ($blog_title["after_title"]); ?></a></p><?php endif; ?>
       </div>
    </div>
    <div style="clear:both; height: 20px"></div>

</div>
<!-- close container -->
<div id="footer">
    <!-- First Column -->
    <div class="one-fourth">
        <h3>Useful Links</h3>
        <ul class="footer_links">
            <li><a href="#">Lorem Ipsum</a></li>
            <li><a href="#">Ellem Ciet</a></li>
            <li><a href="#">Currivitas</a></li>
            <li><a href="#">Salim Aritu</a></li>
        </ul>
    </div>
    <!-- Second Column -->
    <div class="one-fourth">
        <h3>Terms</h3>
        <ul class="footer_links">
            <li><a href="#">Lorem Ipsum</a></li>
            <li><a href="#">Ellem Ciet</a></li>
            <li><a href="#">Currivitas</a></li>
            <li><a href="#">Salim Aritu</a></li>
        </ul>
    </div>
    <!-- Third Column -->
    <div class="one-fourth">
        <h3>Information</h3>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet enim id dui tincidunt vestibulum rhoncus a felis.
        <div id="social_icons">Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></div>
    </div>
    <!-- Fourth Column -->
    <div class="one-fourth last">
        <h3>Socialize</h3>
        <img src="/myblogv1/Public/home/plug/img/icon_fb.png" alt=""> <img src="/myblogv1/Public/home/plug/img/icon_twitter.png" alt=""> <img src="/myblogv1/Public/home/plug/img/icon_in.png" alt=""> </div>
    <div style="clear:both"></div>
</div>
<!-- END footer -->
<!-- JS Files -->
<script src="http://ajax.useso.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="/myblogv1/Public/home/plug/js/jquery.min.js"></script>
<script src="/myblogv1/Public/home/plug/js/custom.js"></script>
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
<script src="/myblogv1/Public/home/plug/js/fancybox/jquery.fancybox-1.2.1.js"></script>

    <script src="/myblogv1/Public/home/plug/js/jquery.tools.min.js"></script>
    <script type="text/javascript"src="/myblogv1/Public/admin/static/ueditor/third-party/SyntaxHighlighter/shCore.js"></script>
    <script type="text/javascript" src="/myblogv1/Public/home/js/index.js"></script>
    <script type="text/javascript">
        SyntaxHighlighter.all();
    </script>


</body>
</html>