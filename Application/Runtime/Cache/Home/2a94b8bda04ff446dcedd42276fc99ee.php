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
    
    <!-- CSS Files -->
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="/myblogv1/Public/home/plug/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/myblogv1/Public/home/plug/menu/css/simple_menu.css">
    <link type="text/css" href="/myblogv1/Public/home/js/scal/css/style.css" rel="stylesheet" /> -->


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
     
<div class="banner">
      <ul class="texts">
        <p>The best preparation for tomorrow is doing your best today.</p>
        <p>对明天做好的准备就是今天做到最好！</p>
      </ul>
</div>
<div class="bloglist">
      <h2>
        <p><span>推荐</span>文章</p>
      </h2>
      <input type="hidden" value="<?php echo U('Index/add_blog_number');?>" id="plug_number">
      <?php if(is_array($blog_data)): $i = 0; $__LIST__ = $blog_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="blogs">
            <h3><a href="<?php echo U('Index/look_blog_detail');?>?id=<?php echo ($vo["id"]); ?>" class="readmore1" data="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></h3>
            <figure><img src="/myblogv1/Uploads//<?php echo ($vo["blog_photo"]); ?>" ></figure>
            <ul>
              <p><?php echo (htmlspecialchars_decode($vo["blog_newsletter"])); ?></p>
              <a href="<?php echo U('Index/look_blog_detail');?>?id=<?php echo ($vo["id"]); ?>" class="readmore" data="<?php echo ($vo["id"]); ?>">阅读全文&gt;&gt;</a>
            </ul>
            <p class="autor"><span>作者：程鹏辉</span><span>分类：【<a href="/"><?php echo ($vo["type_name"]); ?></a>】</span><span>浏览（<a href="/"><?php echo ($vo["browsenumber"]); ?></a>）</span><span>评论（<a href="/"><?php echo ($vo["commit_count"]); ?></a>）</span><span>点赞（<a href="/"><?php echo ($vo["praise"]); ?></a>）</span></p>
            <div class="dateview"><?php echo (date("Y-m-d",$vo["public_date"])); ?></div>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>      

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

    <script type="text/javascript">
      $(".readmore").click(function(){
        var id= $(this).attr("data");
        $.ajax({
           type: 'POST',
           url: $("#plug_number").attr("value"),
           data: {
              'id': id
             }
          });
      });

      $(".readmore1").click(function(){
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


</body>
</html>