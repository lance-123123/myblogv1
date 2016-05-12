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
    
    <!--<link rel="stylesheet" type="text/css" href="/myblogv1/Public/admin/css/index.css">-->

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
                            <a href="<?php echo U('Mangement/manage_blog');?>">
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
        <i class="fa fa-home"></i>
        <a href="#">首页</a>
    </li>
    <li class="active">网站访问量</li>

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
                        <span class="widget-caption"><i class="fa fa-globe"></i>&nbsp;&nbsp;网站访问量</span>
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
   /* var root = '/myblogv1';
    var app = "/myblogv1/index.php";
    var controll = "/myblogv1/index.php/Admin/Index";
    var action = "/myblogv1/index.php/Admin/Index/index";
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


   <!-- <script type="text/javascript" src="/myblogv1/Public/admin/js/index.js"></script>
    <script type="text/javascript" src="/myblogv1/Public//Home/Data/js/jquery.tmpl.js"></script>-->

</body>
<!--  /Body -->
</html>