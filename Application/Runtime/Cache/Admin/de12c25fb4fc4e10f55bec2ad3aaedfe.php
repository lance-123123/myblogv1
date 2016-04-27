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
        .uploadWallpaperButton {
            height: 25px;
            width: 119px;
            cursor: pointer;
            margin: 0px -13px;
            border-radius: 5px;
            cursor: pointer;
        }

        .photo_image {
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
            overflow: hidden;
            font-size: 90px;
            width: 101px;
            height: 31px;
            margin-top: -22%;
        }

        .pro-gress {
            margin-bottom: 0px;
            overflow: hidden;
        }

        .caption-edit {
            zoom: 1;
            filter: alpha(opacity=70);
            -webkit-opacity: .7;
            -moz-opacity: .7;
            opacity: .7;
            bottom: 3px;
            left: 0;
            font-size: 10px;
            line-height: 9px;
            position: absolute;
            padding: 0px 0;
            text-align: center;
            width: 128px;
            height: 34px;
            cursor: pointer;
        }

        .btn-primary-edit {
            background-color: #2dc3e8 !important;
            width: 120px;
            height: 31px;
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
                    <a href="<?php echo U('AddBlog/addblog');?>">
                        <i class="menu-icon glyphicon glyphicon-home"></i>
                        <span class="menu-text"> 首页 </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo U('AddBlog/addblog');?>">
                        <i class="menu-icon fa  fa-edit"></i>
                        <span class="menu-text"> 写文章 </span>
                    </a>
                </li>
                <!--Databoxes-->

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-desktop"></i>
                        <span class="menu-text">后台管理</span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="elements.html">
                                <span class="menu-text">博客管理</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="menu-dropdown">
                                <span class="menu-text">留言管理</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <!--Widgets-->

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
        <a href="#">写文章</a>
    </li>
    <li class="active">添加博客</li>

                </ul>
            </div>
            <!-- /Page Breadcrumb -->
            <!-- Page Header -->
            <div class="page-header position-relative">
                <div class="header-title">
                    

                </div>
                <!--Header Buttons-->
                <div class="header-buttons">
                    <a class="sidebar-toggler" href="#">
                        <i class="fa fa-arrows-h"></i>
                    </a>
                    <a class="refresh" id="refresh-toggler" href="">
                        <i class="glyphicon glyphicon-refresh"></i>
                    </a>
                    <a class="fullscreen" id="fullscreen-toggler" href="#">
                        <i class="glyphicon glyphicon-fullscreen"></i>
                    </a>
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
                        <span class="widget-caption"><i class="fa fa-pencil"></i>&nbsp;&nbsp;添加博客</span>
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
                            <input type="hidden" value="<?php echo U('AddBlog/submitphoto');?>" id="upimagurl">
                            <input type="hidden" value="/myblogv1/Uploads/" id="show_image">
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                            <form method="post" id="form" action="<?php echo U('AddBlog/submitblog');?>" role="form">
                                <div class="form-group">
                                    <label>标题</label>
                                    <input class="form-control" name="title" placeholder="博客标题最多只能13个字"  maxlength="13" id="title">
                                </div>

                                <div class="form-group">
                                    <label>内容</label>
                                    <textarea id="editor" name="content">
                                    </textarea>
                                </div>

                                <div class="form-group" style="margin-left: 7%">
                                    <div class="row fileupload-buttonbar">
                                        <div class="thumbnail col-sm-11" align="center">
                                            <img id="weixin_show" style="height:180px;margin-top:10px;margin-bottom:8px;"  src="/myblogv1/Public/admin/image/journalism_default.png" data-holder-rendered="true">
                                            <div class="progress progress-striped active" role="progressbar" aria-valuemin="10" aria-valuemax="100" aria-valuenow="0"><div id="document_progress" class="progress-bar progress-bar-success" style="width:0%;"></div></div>
                                            <div class="caption" align="center">
                                                <span id="document_upload" class="btn btn-primary fileinput-button">
                                                <span>选择封面图片</span>
                                                <input type="file" id="document" name="document" multiple>
                                                </span>
                                                <a id="document_cancle" href="javascript:void(0)" class="btn btn-warning" role="button"  style="display:none">删除</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>标签</label>
                                        <input type="text" id="tagsvalue" class="form-control" value="技术" data-role="tagsinput" name="tags" placeholder="Add tags" />
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
<!--<script src="/myblogv1/Public/Home/Lib/FileUpload/js/vendor/jquery.ui.widget.js"></script>
<script src="/myblogv1/Public/Home/Lib/FileUpload/js/jquery.iframe-transport.js"></script>
<script src="/myblogv1/Public/Home/Lib/FileUpload/js/jquery.fileupload.js"></script>-->

<!--------base.js----------->
<!--<script type="text/javascript" src="/myblogv1/Public/admin/js/base.js"></script>-->

<!--项目常量定义-->
<script type="text/javascript">
    var root = '/myblogv1';
    var app = "/myblogv1/index.php";
    var controll = "/myblogv1/index.php/Admin/AddBlog";
    var action = "/myblogv1/index.php/Admin/AddBlog/addblog";
    var uploads = '/myblogv1/Uploads/';
    var open = '/myblogv1/Public';
   /* var root = '/myblogv1';
    var app = "/myblogv1/index.php";
    var controll = "/myblogv1/index.php/Admin/AddBlog";
    var action = "/myblogv1/index.php/Admin/AddBlog/addblog";
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


    <script src="/myblogv1/Public/assets/js/tagsinput/bootstrap-tagsinput.js"></script>
    <script src="/myblogv1/Public/assets/js/editors/wysiwyg/jquery.hotkeys.js"></script>
    <script src="/myblogv1/Public/assets/js/editors/wysiwyg/prettify.js"></script>
    <script src="/myblogv1/Public/assets/js/editors/wysiwyg/bootstrap-wysiwyg.js"></script>
    <script src="/myblogv1/Public/assets/js/editors/summernote/summernote.js"></script>
    <script type="text/javascript" charset="utf-8" src="/myblogv1/Public/admin/static/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/myblogv1/Public/admin/static/ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/myblogv1/Public/admin/static/ueditor/lang/zh-cn/zh-cn.js"></script>

    <script type="text/javascript" src="/myblogv1/Public/admin/static/upfile/js/vendor/jquery.ui.widget.js"></script>
    <script type="text/javascript" src="/myblogv1/Public/admin/static/upfile/js/jquery.fileupload.js"></script>
    <script type="text/javascript" src="/myblogv1/Public/admin/static/upfile/js/jquery.iframe-transport.js"></script>
    <script type="text/javascript" src="/myblogv1/Public/admin/static/upfile/js/jquery.fileupload.js"></script>

    <script src="/myblogv1/Public/admin/js/addblog.js"></script>
    <script type="text/javascript">
        /*加载ue插件*/
        var ue = UE.getEditor('editor');
        /*给文本框添加宽度*/
        $("textarea").css("height","300px");
    </script>

</body>
<!--  /Body -->
</html>