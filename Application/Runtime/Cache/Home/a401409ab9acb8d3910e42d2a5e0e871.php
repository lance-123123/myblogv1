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
    <!-- Contact Form -->
<link href="/myblogv1/Public/home/plug/contact-form/css/style.css" media="screen" rel="stylesheet" type="text/css">
<link href="/myblogv1/Public/home/plug/contact-form/css/uniform.css" media="screen" rel="stylesheet" type="text/css"> 
<link rel="stylesheet" type="text/css" media="screen" href="/myblogv1/Public/home/plug/syntaxhighlighter/styles/shCoreDefault.css">
<link rel="stylesheet" type="text/css" href="/myblogv1/Public/home/css/look_blog_detail.css">


</head>
<body>
<div class="ibody">
<input type="hidden" value="<?php echo U('Index/add_blog_number');?>" id="plug_number">
  <header>
    <h1>lance--blog</h1>
    <h2>当你珍惜自己的过去，满意自己的现在，乐观自己的未来时，你就站在了生活的最高处…</h2>
    <div class="logo"><a href="#"></a></div>
    <nav id="topnav"><a href="<?php echo U('Index/index');?>">首页</a><a href="<?php echo U('ShowArtical/blog_list');?>">文章</a><!-- <a href="<?php echo U('Index/blog_type');?>">分类</a> --><a href="<?php echo U('AboutMe/show_about_me');?>">关于</a><a href="<?php echo U('ChatMe/chat_me');?>">记忆</a></nav>
  </header>
  <article>
     
<input type="hidden" value="<?php echo U('Index/add_prise_number');?>" id="prise_number">
<h2 class="about_h">您现在的位置是：<a href="/">文章</a>>><a href="1/"><?php echo ($blog_detail["title"]); ?></a></h2>
  <div class="index_about">
      <h2 class="c_titile"><?php echo ($blog_detail["title"]); ?></h2>
      <p class="box_c"><span class="d_time">发布时间：<?php echo (date("Y-m-d",$blog_detail["public_date"])); ?></span><span>编辑：杨青</span><span>浏览（<?php echo ($blog_detail["browsenumber"]); ?>）</span><span>评论览（<?php echo ($blog_detail["commit_count"]); ?>）</span><span>点赞（<?php echo ($blog_detail["praise"]); ?>）</span></p>
      <ul class="infos">
        <p><?php echo ($blog_detail["blog_content"]); ?></p>
      </ul>
      <div style="clear:both;"></div>
           <a href="#" id="imagse" data="<?php echo ($blog_detail["id"]); ?>"><img src="/myblogv1/Public/home/image/13.png" style="margin-left: 45%;margin-top:20px" ></a>
        <div style="clear:both; height: 40px"></div>
      <div class="keybq">
        <p><span>标签</span>：<?php echo ($blog_detail["tags"]); ?></p>
      </div>
      <div class="nextinfo">
        <?php if($blog_title["last_id"] == null ): else: ?> <p>上一篇：<a href="<?php echo U('Index/look_blog_detail');?>?id=<?php echo ($blog_title["last_id"]); ?>" class="look_cout_last"><?php echo ($blog_title["last_title"]); ?> </a></p><?php endif; ?>

        <?php if($blog_title["after_id"] == null ): else: ?> <p>下一篇:  <a href="<?php echo U('Index/look_blog_detail');?>?id=<?php echo ($blog_title["after_id"]); ?>" class="look_cout_after"><?php echo ($blog_title["after_title"]); ?></a></p><?php endif; ?>
        <div>
          <div class="bshare-custom icon-medium"><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count">0</span></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
        </div>
      </div>
      <div class="otherlink">
        <h2>相关评论</h2>

        <div id="commit_content">
        <?php if(!empty($commit_detail)): if(is_array($commit_detail)): foreach($commit_detail as $key=>$vo): ?><div class="comment">
            <div class="comment-body">
                <div class="comment-text">
                    <div class="comment-header">
                        <a href="#" title="" style="color:#3399FF">“ <?php echo ($vo["userful_chat"]); ?> ”</a><span style="">网友（<?php echo ($vo["province"]); ?> <?php echo ($vo["city"]); ?>）</span><span><?php echo (date("Y-m-d H:i:s",$vo["message_time"])); ?></span>
                    </div>
                   <p style="margin-left:20px;margin-top:5px;font-size:16px"><?php echo ($vo["message"]); ?></p>
                </div>
            </div>
          </div><?php endforeach; endif; ?>
         <?php else: ?>
               <p style="text-align:center;margin-top:20px">暂无评论！</p><?php endif; ?>
       </div>
      </div>

      <div style="margin-top:20px" id="me_set">
      <div class="widget-header bg-blue">
          <span class="widget-caption">添加评论：</span>
      </div>
      <form role="form"  method="post" id="form" action="<?php echo U('Index/add_blog_commit');?>" >
            <input type="hidden" value="<?php echo ($blog_detail["id"]); ?>" id="blog_ids">
            <div class="form-group" style="margin-top:20px;margin-bottom: 25px; ">
              <label for="exampleInputEmail2">邮箱：</label>
                <input type="text" class="form-control" id="email" style="width:270px;height:25px;" placeholder="亲！请留下你的邮箱">
                     
               <label for="exampleInputName2" style="margin-left:20px">姓名：</label>
                <input type="text" class="form-control" style="width:270px;height:25px"   id="name" placeholder="亲！请留下你的姓名">
            </div>
      
            <div class="form-group" id="message_content">
                    <textarea class="form-control"  style="width:100%;resize:none;font-size:14px;" rows="10"   placeholder="  你想说点什么？"></textarea>
             <label for="exampleInputName2" style="">验证码：</label>       
            <input type="text" name="code" class="form-control" id="code" placeholder="请输入验证码" style="width:270px;height:25px;margin-top:10px">
            <img id="verify_img" alt="点击更换" style="position: relative;top: -31px;left: 350px;" class="form-control" title="点击更换" src="<?php echo U('Index/verify',array());?>" >
              <button type="submit" class="btn btn-info shiny" style="margin-left:91%;margin-top:10px;" id="submit">发布</button>      
            </div>
        </form>
      </div>

    </div>

  </article>
  <aside>
    <div class="avatar"><a href="about.html"><span>关于我</span></a></div>
    <div class="topspaceinfo">
      <h1>座右铭</h1>
      <p>我确信我热爱自己所做的事情，这就是这些年来支持我继续走下去的唯一理由。</p>
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

  
  <script type="text/javascript"src="/myblogv1/Public/admin/static/ueditor/third-party/SyntaxHighlighter/shCore.js"></script>
  <script type="text/javascript" src="/myblogv1/Public/home/js/look_blog_detail.js"></script>
    <script type="text/javascript">
        SyntaxHighlighter.all();
    </script>


</body>
</html>