<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<!-- Head -->
<head>
    <meta charset="utf-8"/>
    <title>个人博客系统后台</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="/myblogv1/Public/assets/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="/myblogv1/Public/assets/css/bootstrap.min.css" rel="stylesheet"/>

    <link href="/myblogv1/Public/assets/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="/myblogv1/Public/assets/css/dataTables.bootstrap.css" rel="stylesheet"/>

    <!--Beyond styles-->
    <link href="/myblogv1/Public/assets/css/beyond.min.css" rel="stylesheet"/>
    <link href="/myblogv1/Public/assets/css/demo.min.css" rel="stylesheet"/>
    <link href="/myblogv1/Public/assets/css/typicons.min.css" rel="stylesheet"/>
    <link href="/myblogv1/Public/assets/css/animate.min.css" rel="stylesheet"/>

    <!--引入css文件-->
    
    <link rel="stylesheet" type="text/css" href="/myblogv1/Public/admin/static/upfile/css/jquery.fileupload.css">
    <link rel="stylesheet" type="text/css" href="/myblogv1/Public/admin/static/upfile/css/jquery.fileupload-ui.css">

    <style>
        div.dataTables_filter label {
            float: right;
            margin-right: 70px;
        }

        div.dataTables_filter {
            margin-top: -31px;
        }
        .serverSide div.dataTables_length{
            top:-38px;
        }
        .modal-header {
            border-bottom: 3px solid #03b3b2;
        }

        input[type=checkbox]:checked + .text:before {
            border: 0px;
            background: transparent;
        }

        input[type=checkbox] + .text:before {
            border: 0px;
            color: #03b3b2;
            background: transparent;
        }

        .table-toolbar .dropdown label {
            width: 100%;
            cursor: pointer;
            margin-bottom: 0px;
        }

        .panel-body label {
            padding: 7px;
            border: 1px solid #d5d5d5;
            border-right: 0px;
            margin-top: 1px;
            color: #858585;
            background-color: #f5f5f5;
        }

        .panel-body input {
            padding: 7px;
            border: 1px solid #d5d5d5;
            color: #858585;
            background-color: #fbfbfb;
        }

        .dataTables_empty {
            text-align: center;
        }

        .panel-body .input-group {
            margin-right: 10px;
        }

        .panel-body select {
            -webkit-appearance: none;
            border-radius: 0px;

        }

        .panel-body .input-group-btn {
            left: -18px;
            z-index: 10;
        }

        .panel-group {
            margin-bottom: 10px;
        }

        .input-icon.icon-right > input {
            padding-left: 14px;
        }

        .panel-body .col-lg-2 {
            padding-left: 5px;
            padding-right: 5px;
        }

        .dropdown-menu {
            z-index: 999999;
        }

        .bootbox-confirm .modal-dialog {
            width: 250px;
        }

        .btn-group {
            z-index: 100;
        }

        .animated {
            -webkit-animation-duration: 0.5s;
            animation-duration: 0.5s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        .table-striped > tbody > tr > td {
            cursor: pointer;
        }

        .table > tbody > tr > td {
            vertical-align: middle;
        }

        .table-striped > tbody > tr.tr-selected > td {
            background-color: #eed;
        }

        .tree-selected > .tree-dot:before {
            content: "\f046";
            font-family: FontAwesome;
            font-style: normal;
            font-weight: normal;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
        }

        .table-toolbar .panel-body select, .panel-body input {
            min-width: 150px;
        }

        .table-toolbar .panel-body input {
            min-width: 150px;
        }

        .table-toolbar .panel-body label {
            border-radius: 0 !important;
            background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgeG1sbnM9Imh0d…0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2xlc3NoYXQtZ2VuZXJhdGVkKSIgLz48L3N2Zz4=);
            background-image: -webkit-linear-gradient(top, #eee 0, #fbfbfb 100%);
            background-image: -moz-linear-gradient(top, #eee 0, #fbfbfb 100%);
            background-image: -o-linear-gradient(top, #eee 0, #fbfbfb 100%);
            background-image: linear-gradient(to bottom, #eee 0, #fbfbfb 100%);
            position: relative;
            left: 4px;
            padding: 7px 14px;
        }

        .table-toolbar {
            padding: 0px;
        }
    </style>

</head>
<!-- /Head -->
<!-- Body -->
<body>

<!-- Navbar -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="/myblogv1/Public/assets/img/logo.png" alt="" />
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings --->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="wave in dropdown-toggle" data-toggle="dropdown" title="Help" href="#">
                                <i class="icon fa fa-envelope"></i>
                                <span class="badge">0</span>
                            </a>
                            <!--Messages Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-messages">

                            </ul>
                            <!--/Messages Dropdown-->
                        </li>

                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="#">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>David Stevenson</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="email"><a>David.Stevenson@live.com</a></li>
                                <!--Avatar Area-->
                                <li>
                                    <div class="avatar-area">
                                        <img src="#" class="avatar">
                                        <span class="caption">Change Photo</span>
                                    </div>
                                </li>
                                <!--Avatar Area-->
                                <li class="edit">
                                    <a href="profile.html" class="pull-left">Profile</a>
                                    <a href="#" class="pull-right">Setting</a>
                                </li>
                                <!--/Theme Selector Area-->
                                <li class="dropdown-footer">
                                    <a href="login.html">
                                        Sign out
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                    </ul>

                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>

</div>
<!-- /Navbar -->
<!-- Main Container -->
<div class="main-container container-fluid">
    <!-- Page Container -->
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">

            <!-- /Page Sidebar Header -->
            <!-- Sidebar Menu -->
            <ul class="nav sidebar-menu">
                <li class="active">
                <!-- 博客的访问量 -->
                    <a href="<?php echo U('Index/index');?>">
                        <i class="menu-icon glyphicon glyphicon-home"></i>
                        <span class="menu-text"> 首页 </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo U('Mangement/manage_blog');?>" class="menu-dropdown">
                        <i class="menu-icon fa  fa-edit"></i>
                        <span class="menu-text">文章管理</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo U('Mangement/type_manage');?>" class="menu-dropdown">
                        <i class="menu-icon fa   fa-puzzle-piece"></i>
                        <span class="menu-text">类型管理</span>
                    </a>
                </li>
                <!--Databoxes-->

                <li>
                    <a href="<?php echo U('History/show_history');?>">
                        <i class="menu-icon fa  fa-th-list"></i>
                        <span class="menu-text">历史管理</span>
                        <!-- <i class="menu-expand"></i> -->
                    </a>
                </li>

                <!-- 留言管理 -->
                <li>
                    <a href="<?php echo U('Commit/show_commit');?>">
                        <i class="menu-icon fa   fa-comment"></i>
                        <span class="menu-text">留言管理</span>
                        <!-- <i class="menu-expand"></i> -->
                    </a>
                </li>


                 <!-- 留言管理 -->
                <li>
                    <a href="#">
                        <i class="menu-icon fa  fa-picture-o"></i>
                        <span class="menu-text">图片管理</span>
                        <!-- <i class="menu-expand"></i> -->
                    </a>
                </li>

                <!--UI Elements-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-user"></i>
                        <span class="menu-text"> 个人中心 </span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="elements.html">
                                <span class="menu-text">个人详情</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="menu-dropdown">
                                <span class="menu-text">我的简介</span>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
            <!-- /Sidebar Menu -->
        </div>
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    
    <li>
        <i class="fa fa-edit"></i>
        <a href="#">编辑历史</a>
    </li>
    <li class="active">编辑历史</li>

                </ul>
            </div>
            <!-- /Page Breadcrumb -->
            <!-- Page Header -->
            <div class="page-header position-relative">
                <div class="header-title">
                    

                </div>
                <!--Header Buttons-->
                <div class="header-buttons">
                    <!-- <a class="sidebar-toggler" href="#">
                        <i class="fa fa-arrows-h"></i>
                    </a> -->
                    <a class="refresh" id="refresh-toggler" href="">
                        <i class="glyphicon glyphicon-refresh"></i>
                    </a>
                   <!--  <a class="fullscreen" id="fullscreen-toggler" href="#">
                       <i class="glyphicon glyphicon-fullscreen"></i>
                   </a> -->
                </div>
                <!--Header Buttons End-->
            </div>
            <!-- /Page Header -->
            <!-- Page Body -->
            <div class="page-body">
                <!-- Your Content Goes Here -->
                
    <div class="page-body">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="widget">
                    <div class="widget-header ">
                        <span class="widget-caption"><i class="fa fa-pencil"></i>&nbsp;&nbsp;编辑历史</span>
                        <div class="widget-buttons">
                            <a href="#" data-toggle="maximize">
                                <i class="fa fa-expand"></i>
                            </a>
                            <a href="#" data-toggle="collapse">
                                <i class="fa fa-minus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="widget-body">
                        <div class="row">
                            <input type="hidden" value="<?php echo U('History/show_history');?>" id="blog_path">
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                            <form method="post" id="form" action="<?php echo U('History/submit_edit_history');?>" role="form">
                            <input type="hidden" id="ids" value="<?php echo ($blog_type_list["id"]); ?>">
                                <div class="form-group">
                                    <label>标题</label>
                                    <input class="form-control" name="title" placeholder="历史标题最多只能13个字"  maxlength="13" id="title" value="<?php echo ($blog_type_list["title"]); ?>">
                                </div>

                                <div class="form-group">
                                    <label>内容</label>
                                    <textarea id="editor" name="content"><?php echo ($blog_type_list["content"]); ?>
                                    </textarea>
                                </div>

                              
                                <input type="hidden" id="photourl">
                                <button type="submit" class="btn btn-success" id="submitbutton" style="margin-left: 90%">提 交</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Container -->
    <!-- Main Container -->
</div>
<!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
<script src="/myblogv1/Public/assets/js/skins.min.js"></script>
<!--Basic Scripts-->
<script src="/myblogv1/Public/assets/js/jquery-2.0.3.min.js"></script>
<script src="/myblogv1/Public/assets/js/bootstrap.min.js"></script>
<script src="/myblogv1/Public/assets/js/Base.js"></script>

<!--Beyond Scripts-->
<script src="/myblogv1/Public/assets/js/beyond.min.js"></script>
<script src="/myblogv1/Public/assets/js/datatable/jquery.dataTables.min.js"></script>
<script src="/myblogv1/Public/assets/js/datatable/dataTables.bootstrap.min.js"></script>
<script src="/myblogv1/Public/assets/js/datetime/moment.js"></script>
<script src="/myblogv1/Public/assets/js/datetime/daterangepicker.js"></script>
<script src="/myblogv1/Public/assets/js/bootbox/bootbox.js"></script>
<script src="/myblogv1/Public/assets/js/validation/bootstrapValidator.js"></script>
<script src="/myblogv1/Public/assets/js/fullcalendar/fullcalendar.js"></script>


<!--------base.js----------->
<!--<script type="text/javascript" src="/myblogv1/Public/admin/js/base.js"></script>-->

<!--项目常量定义-->
<script type="text/javascript">
    $(function(){
        //打开导航
        var text = $(".breadcrumb").find("li").eq($(".breadcrumb").find("li").length-1).text();
        for(var i=0;i<$(".menu-text").length;i++){
            if($(".menu-text").eq(i).text() == text){
                $(".menu-text").eq(i).parents("li").addClass("open");
            }
        }
    });
   /* var root = '/myblogv1';
    var app = "/myblogv1/index.php";
    var controll = "/myblogv1/index.php/Admin/History";
    var action = "/myblogv1/index.php/Admin/History/edit_history";
    var uploads = '/myblogv1/Uploads/';
    var open = '/myblogv1/Public';*/
  /*  $(function () {
        //上传插件实例化
        var picurl = $("#uploade_picture").attr('url');
        $("#photo_document").fileupload({
            url: picurl,
            sequentialUploads: true
        }).bind('fileuploaddone', function (e, data) { //上传完成后操作
            if (data.result == 1) {
                alert_info(1, "修改头像失败", "修改头像失败");
            } else {
                $("#picture_show").attr("src", uploads + data.result);
                $("#pthoto").attr("src", uploads + data.result);
            }
        });
    });
    $('#photo_document_upload').on('click', function (e) {
        e.stopPropagation();
    });//阻止时间冒泡*/
</script>


    <script src="/myblogv1/Public/assets/js/editors/wysiwyg/jquery.hotkeys.js"></script>
    <script src="/myblogv1/Public/assets/js/editors/wysiwyg/prettify.js"></script>
    <script src="/myblogv1/Public/assets/js/editors/wysiwyg/bootstrap-wysiwyg.js"></script>
    <script src="/myblogv1/Public/assets/js/editors/summernote/summernote.js"></script>
    <script type="text/javascript" charset="utf-8" src="/myblogv1/Public/admin/static/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/myblogv1/Public/admin/static/ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/myblogv1/Public/admin/static/ueditor/lang/zh-cn/zh-cn.js"></script>
    <script src="/myblogv1/Public/admin/js/edit_history.js"></script>
    <script type="text/javascript">
        /*加载ue插件*/
        var ue = UE.getEditor('editor');
        /*给文本框添加宽度*/
        $("textarea").css("height","300px");
    </script>

</body>
<!--  /Body -->
</html>