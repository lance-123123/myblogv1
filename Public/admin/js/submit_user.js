$("#form").submit(function(){
    var pwd = $.trim($("#pwd").val());
    var req_pwd =$.trim($("#req_pwd").val());
    if (pwd == '') {
        bootMessage("warning","新密码不能为空！");
    }else if (req_pwd == '') {
        bootMessage("warning","确认密码不能为空！");
    }else if (pwd  != req_pwd) {
        bootMessage("warning","确认新密码和新密不一致！");
    }else{
        $.ajax({
            type:'POST',
            url:$('#form').attr('action'),
            data:{
                'password':pwd
            },
            success:function(data){
                if (data== 0) {
                    bootMessage("success","亲！密码修改成功了！");
                    $('.refresh').trigger('click');
                    window.location.href = $("#blog_path").val();
                }else{
                    bootMessage("danger","亲！密码修改失败了！");
                }
            }
        });
    }
    return false;
});
