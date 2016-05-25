
var photo=$("#show_image").attr('value');

$("#document").fileupload({
    url:$("#upimagurl").attr('value'),
    sequentialUploads: true
}).bind('fileuploadprogress', function (e, data) {
    var progress = parseInt(data.loaded / data.total * 100, 10);
    $("#document_progress").css('width',progress + '%');
    $("#document_progress").html(progress + '%');
}).bind('fileuploaddone', function (e,data) {
    if (escape(data.result).indexOf("%u")<0) {
        $("#weixin_show").attr("src", photo+data.result);
        $("#document_upload").css({display:"none"});
        $("#document_cancle").css({display:""});
        $("#photourl").val(data.result);
    }else{
        layer.msg(data.result, function(){
            document.location.reload();
        });
    }

});


/*图片删除事件*/
$("#document_cancle").click(function(){
    $("#weixin_show").attr("src",photo+"Picture/journalism_default.png");
    $("#document_progress").css('width','0%');
    $("#photourl").val('');//清除图片路径
    $("#document_upload").css({display:""});
    $("#document_cancle").css({display:"none"});
});

$("#form").submit(function(){
    var title = $("#title").val();
    var photourl = $("#photourl").val();
    var  blog_content = $("textarea").val();
    var choice = $("#tagsvalue").val();
    if (title == '') {
        bootMessage("warning","博客标题不能为空！");
    }else if (photourl == '') {
        bootMessage("warning","博客没有封面图片！");
    }else if (blog_content == '') {
        bootMessage("warning","博客内容不能为空！");
    }else if (choice == '') {
        bootMessage("warning","博客标签不能为空！");
    }else{
        $.ajax({
            type:'POST',
            url:$('#form').attr('action'),
            data:{
                'title':title,
                'photourl':photourl,
                'blog_content':blog_content,
                'choice':choice
            },
            success:function(data){
                if (data== 0) {
                    bootMessage("success","亲！博客添加成功了！");
                    window.location.href = $("#blog_path").val();
                }else{
                    bootMessage("danger","亲！博客添加失败了！");
                }
            }
        });
    }
    return false;
});


