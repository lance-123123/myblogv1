<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
Beyond Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3
Version: 1.0.0
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!--Head-->
<head>
    <meta charset="utf-8" />
    <title>登陆</title>

    <meta name="description" content="login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="/myblogv1/Public/assets/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="/myblogv1/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="/myblogv1/Public/assets/css/font-awesome.min.css" rel="stylesheet" />


    <!--Beyond styles-->
    <link id="beyond-link" href="/myblogv1/Public/assets/css/beyond.min.css" rel="stylesheet" />
    <link href="/myblogv1/Public/assets/css/demo.min.css" rel="stylesheet" />
    <link href="/myblogv1/Public/assets/css/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="/myblogv1/Public/assets/js/skins.min.js"></script>
</head>
<!--Head Ends-->
<!--Body-->
<body>
    <div class="login-container animated fadeInDown">
        <div class="loginbox bg-white" style="height: 260px !important;">
            <div class="loginbox-title">登陆</div>
            <input type="hidden" id="path" data="<?php echo U('Public/check_login');?>">
            <div class="loginbox-textbox">
                <input type="text" id="username" class="form-control" placeholder="请输入用户名" />
            </div>
            <div class="loginbox-textbox">
                <input type="password" id="password" class="form-control" placeholder="请输入密码" />
            </div>
            
            <div class="loginbox-submit">
                <input type="button" id="submit_button" class="btn btn-primary btn-block" value="Login">
            </div>
            
        </div>
    </div>

    <!--Basic Scripts-->
    <script src="/myblogv1/Public/assets/js/jquery-2.0.3.min.js"></script>
    <script src="/myblogv1/Public/assets/js/bootstrap.min.js"></script>
    <script src="/myblogv1/Public/admin/static/layer/layer/layer.js"></script>

    <!--Beyond Scripts-->
    <script src="/myblogv1/Public/assets/js/beyond.js"></script>

    <!--Google Analytics::Demo Only-->
    <script type="text/javascript">
    $(function(){
         $('#username').val('');
        $('#password').val('');
    });
     $('#submit_button').click(function(){
        var username = $('#username').val();
        var password = $('#password').val();
        if(username == ''){
            layer.msg('用户名不能为空！', {icon: 5});
        }else if(password == ''){
            layer.msg('密码不能为空！', {icon: 5});
        }else{
            $.ajax({
                type:'POST',
                url:$('#path').attr('data'),
                data:{
                    'username':$('#username').val(),
                    'password':$('#password').val()
                },
                success:function(data){
                  if (data==0) {
                     window.location.href = "<?php echo U('Index/index');?>";
                  }else if(data==1) {
                    layer.msg('用户名或密码错误！', function(){
                     });
                    $('#username').val('');
                    $('#password').val('');
                  }
                  
                }
            });
        }
        return false;
     });
      
    </script>
</body>
<!--Body Ends-->
</html>