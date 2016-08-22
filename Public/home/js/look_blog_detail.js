$("#imagse").click(function(){
	var id=$(this).attr('data');
	$.ajax({
        type: 'POST',
        url: $("#prise_number").attr("value"),
        data: {
            'id': id
        },
        success: function (data) {
            if(data==1){
                layer.msg('+ 1');
                window.location.reload();
            }else if(data==0){
                layer.msg('亲！点赞失败！');
            }else{
            	layer.msg('亲！你已经点过赞！');
            }
        }
    });
});


    var img = $('#verify_img');
    var verifyimg = img.attr("src");
    img.click(function(){
      if( verifyimg.indexOf('?')>0){
            $(this).attr("src", verifyimg+'&random='+Math.random());
        }else{
            $(this).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
        }
    });

function refuse(){
    if(verifyimg.indexOf('?')>0){
            $('#verify_img').attr("src", verifyimg+'&random='+Math.random());
    }else{
        $('#verify_img').attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
    }
}


/*添加博客*/
$("#form").submit(function(){
    var email = $("#email").val();
    var name = $("#name").val();
    var  content = $("textarea").val();
    var ids=$("#blog_ids").attr("value");
    var code=$("#code").val();
    if (email == '') {
    	layer.msg('邮箱不能为空！');
    }else if (!email.match(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/)) {
        layer.msg('邮箱格式不正确！');
    }else if (name == '') {
        layer.msg('姓名不能为空！');
    }else if(content == ''){
        layer.msg('内容不能为空！');
    }else if(code == ''){
        layer.msg('验证码不能为空！');
    }else{
        $.ajax({
            type:'POST',
            url:$('#form').attr('action'),
            data:{
                'email':email,
                'name':name,
                'content':content,
                'id':ids,
                'code':code
            },
            success:function(data){
                if (data== 0) {
                   layer.msg('留言成功！');
                   window.location.reload();
                    $("#email").val('');
                   $("#name").val('');
                   $("textarea").val('');
                   $("#code").val('');
                }else if(data==2){
                     layer.msg('验证码错误！');
                     refuse();

                }else{
                    layer.msg('留言失败！');
                }
            }
        });
    }
    return false;
});
