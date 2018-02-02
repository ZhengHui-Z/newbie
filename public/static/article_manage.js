layui.config({
    base: '/static/layui/lay/modules/'
}).use(['layer', 'element', 'jquery', 'form', 'markdown'], function () {
    var layer = layui.layer,
        element = layui.element,
        $ = layui.jquery,
        form = layui.form,
        markdown = layui.markdown;
    markdown.build("layui_md", 'markdown_html', {
        image_upload_action: '#',
        height: '666px',
        required: true,
    });
    var isSwitch = 0;
    var isOrigin = 1;
    //监听指定开关
    form.on('switch(switchTest)', function () {
        if (this.checked) {
            isSwitch = 1;
            $("#haspass").css('display', 'inline-block');
            $("#haspass").attr('lay-verify', 'required');
        }
        else {
            isSwitch = 0;
            $("#haspass").css('display', 'none');
            $("#haspass").removeAttr('lay-verify');
        }
    });
    form.on('switch(post_origin)', function () {
        if (this.checked) { isOrigin = 1; }
        else { isOrigin = 0; }
    });
    //origin
    layer.msg('后台加载成功');
    $("#submitTest").click(function () {
        layer.msg("submit");
        var data = {
            "post_title": $("input[name='title']").val(),
            "post_excerpt": $("textarea[name='excerpt']").val(),
            "post_content": markdown.getHtml(),
            "post_content_md": markdown.getMarkdown(),
            "post_original": isOrigin,
            "post_password": ""
        };
        if (isSwitch) data['post_password'] = $("#haspass").val();
        $.ajax({
            data: data,//提交数据
            type: "Post",//提交方式
            dataType: "json",//服务器返回数据格式
            url: "{:url('Admin/Article/post_add')}",
            success: function (info) {
                layer.msg(info.msg, { icon: 1, time: 500 });
            },
            error: function (info) {
                layer.msg('炸了' + info.msg);
            }
        });
    });

});