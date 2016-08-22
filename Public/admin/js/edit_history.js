
$("#form").submit(function(){
    var title = $("#title").val();
    var  id =$("#ids").val();
    var  blog_content = $("textarea").val();
    if (title == '') {
        bootMessage("warning","博客标题不能为空！");
    }else if (blog_content == '') {
        bootMessage("warning","博客内容不能为空！");
    }else{
        $.ajax({
            type:'POST',
            url:$('#form').attr('action'),
            data:{
                'title':title,
                'blog_content':blog_content,
                'id':id
            },
            success:function(data){
                if (data== 0) {
                    bootMessage("success","亲！历史编辑成功了！");
                    window.location.href = $("#blog_path").val();
                }else{
                    bootMessage("danger","亲！历史编辑失败了！");
                }
            }
        });
    }
    return false;
});


