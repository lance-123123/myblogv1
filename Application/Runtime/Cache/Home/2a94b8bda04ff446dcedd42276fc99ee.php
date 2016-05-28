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
    
    <!-- tab panes -->
    <div id="prod_wrapper">
        <div id="panes">
            <?php if(is_array($blog_data)): $i = 0; $__LIST__ = $blog_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div> <img src="/myblogv1/Uploads//<?php echo ($vo["blog_photo"]); ?>" width="465px" height="300px" alt="">
                    <h1><?php echo ($vo["title"]); ?></h1>
                    <ul class="post_meta" style="margin:0">
                        <li class="post_meta_date"><a href="#"><?php echo (date("Y-m-d",$vo["public_date"])); ?></a></li>
                        <li class="post_meta_comments"><a href="#"><?php echo ($vo["commit_count"]); ?></a></li>
                        <li class="post_meta_admin"><a href="#"><?php echo ($vo["praise"]); ?></a></li>
                        <li class="post_meta_prise"><a href="#"><?php echo ($vo["browsenumber"]); ?></a></li>
                    </ul>
                    <p><?php echo (htmlspecialchars_decode($vo["blog_newsletter"])); ?></p>
                    <p style="text-align:right; margin-right: 16px"><a href="<?php echo U('Index/look_blog_detail');?>?id=<?php echo ($vo["id"]); ?>" class="button">More Info</a></p>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

        <!-- END tab panes -->
        <div style="clear:both"></div>
        <!-- navigator -->
        <div id="prod_nav">
            <ul>
                <?php if(is_array($blog_data)): $i = 0; $__LIST__ = $blog_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="#1"> <img src="/myblogv1/Uploads//<?php echo ($vo["blog_photo"]); ?>" width="160px" alt=""><strong><?php echo ($vo["tags"]); ?></strong> </a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <!-- END navigator -->
    </div>
    <!-- END prod wrapper -->
    <div style="clear:both"></div>

    <div class="one-third">
        <h2>Business Solutions</h2>
        <p>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida.</p>
        <p style="text-align:right; margin-right: 15px"><a href="#" class="button_small">Find out more</a></p>
    </div>

    <div class="one-third">
        <h2>Become a Partner</h2>
        <p>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida.</p>
        <p style="text-align:right; margin-right: 15px"><a href="#" class="button_small">Contact Us Today</a></p>
    </div>

    <div class="one-third last">
        <h2>Latest News</h2>
        <p>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida.</p>
        <p style="text-align:right; margin-right: 15px"><a href="#" class="button_small">Read Article</a></p>
    </div>

    <div style="clear:both"></div>

    <div class="box_highlight" style="margin-top:40px">
        <h4 style="text-align:center">当你感到悲哀痛苦时，最好是去学些什么东西。学习会使你永远立于不败之地。    —— 王尔德</h4>
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
    <script type="text/javascript" src="/myblogv1/Public/home/js/index.js"></script>


</body>
</html>