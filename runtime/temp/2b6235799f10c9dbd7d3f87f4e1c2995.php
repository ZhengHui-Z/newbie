<?php /*a:6:{s:88:"G:\web\phpStudy\PHPTutorial\WWW\newbie/application/admin/view\article\article_write.html";i:1516214882;s:71:"G:\web\phpStudy\PHPTutorial\WWW\newbie/application/admin/view\base.html";i:1504858352;s:81:"G:\web\phpStudy\PHPTutorial\WWW\newbie/application/admin/view\public\top_nav.html";i:1503295852;s:82:"G:\web\phpStudy\PHPTutorial\WWW\newbie/application/admin/view\public\side_nav.html";i:1504886992;s:101:"G:\web\phpStudy\PHPTutorial\WWW\newbie/application/admin/view\article\templet\write_article_main.html";i:1505621426;s:86:"G:\web\phpStudy\PHPTutorial\WWW\newbie/application/admin/view\public\admin_footer.html";i:1496398206;}*/ ?>
<html>

<head>
    <title>后台管理-文章</title>
    <meta charset="UTF-8">
    <link rel="icon" href="/public/static/img/logo.bmp">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/public/static/layui/css/layui.css" />
    <link rel="stylesheet" type="text/css" href="/public/static/css/newbie_admin.css" />
     <link rel="stylesheet" type="text/css" href="/public/static/layui/markdown/markdown-editor.css" />
<link rel="stylesheet" type="text/css" href="/public/static/layui/markdown/markdown.css" /> <link rel="stylesheet" type="text/css" href="/public/static/layui/markdown/prism.css" /> 
    
    
</head>

<body>
    <div class="layui-layout layui-layout-admin">
    <div class="layui-header">
    <div class="layui-main">
        <a class="logo" href="">
            <img src="/public/static/img/logo.bmp">
            <span>NewBie 博客</span>
        </a>
        <ui class="layui-nav">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <i class="layui-icon">&#xe612;</i>
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="javascript:;">个人信息</a></dd>
                    <dd><a href="javascript:;">切换账户</a></dd>
                    <dd><a href="javascript:;">退出</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <i class="layui-icon">&#xe629;</i>
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="javascript:;">个人信息</a></dd>
                    <dd><a href="javascript:;">切换账户</a></dd>
                    <dd><a href="javascript:;">退出</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <i class="layui-icon">&#xe620;</i>
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="javascript:;">个人信息</a></dd>
                    <dd><a href="javascript:;">切换账户</a></dd>
                    <dd><a href="javascript:;">退出</a></dd>
                </dl>
            </li>
        </ul>
    </div>


</div>
    <div class="layui-side">
    <div class="layui-side-scroll layui-bg-black">
        <ul class="layui-nav layui-nav-tree" lay-filter="side">
            <li class="layui-nav-header">
                <input type="text" name="search" autocomplete="off" placeholder="搜索" class="layui-input">
                <button class="layui-btn"><i class="layui-icon">&#xe615;</i></button>
            </li>
            <li class="layui-nav-item layui-nav-itemed">
                <a href="javascript:;">
                    <i class="layui-icon">&#xe636;</i>
                    <span>网站</span>
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="<?php echo url('Admin/Index/index'); ?>">基本信息</a></dd>
                    <dd><a href="<?php echo url('Admin/Index/setting'); ?>">系统设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item layui-nav-itemed">
                <a href="javascript:;">
                    <i class="layui-icon"></i>
                    <span>菜单</span>
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="<?php echo url('Admin/Menu/manage'); ?>">菜单管理</a></dd>
                    <dd><a href="<?php echo url('Admin/Menu/setting'); ?>">菜单设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item layui-nav-itemed">
                <a href="javascript:;">
                    <i class="layui-icon"></i>
                    <span>文章</span>
                    <span class="layui-nav-more"></span>
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="<?php echo url('Admin/Article/index'); ?>">文章管理</a></dd>
                    <dd><a href="<?php echo url('Admin/Article/write'); ?>">写文章</a></dd>
                    <dd><a href="<?php echo url('Admin/Article/comment'); ?>">评论管理</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item layui-nav-itemed">
                <a href="javascript:;">
                    <i class="layui-icon"></i>
                    <span>用户</span>
                    <span class="layui-nav-more"></span>
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="<?php echo url('Admin/User/manage'); ?>">用户管理</a></dd>
                    <dd><a href="<?php echo url('Admin/User/record'); ?>">操作记录</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item layui-nav-itemed">
                <a href="javascript:;">
                    <i class="layui-icon"></i>
                    <span>扩展</span>
                    <span class="layui-nav-more"></span>
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="<?php echo url('Admin/Extend/backup'); ?>">数据备份</a></dd>
                    <dd><a href="<?php echo url('Admin/Extend/cache'); ?>">清理缓存</a></dd>
                </dl>
            </li>
    </div>
</div>
    <div class="layui-body">
    <div style="padding-left: 5px;padding-top: 5px;">
    <div class="layui-tab-item layui-show">
        <div class="layui-markdown-container">
            <div class="layui-markdown-edit layui-markdown-scroll">
                <form class="layui-form post-add-action" action="javascript:;">
                    <div class="layui-form-item">
                        <label class="layui-form-label">文章标题</label>
                        <div class="layui-input-block">
                            <input type="text" name="title" required lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item layui-form-text">
                        <label class="layui-form-label">文章摘要</label>
                        <div class="layui-input-block">
                            <textarea name="excerpt" required placeholder="100字以内" lay-verify="required" class="layui-textarea"></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">密码访问</label>
                        <div class="layui-input-block">
                            <input type="checkbox" name="switch" lay-skin="switch" lay-filter="switchTest" lay-text="ON|OFF">
                        </div>
                    </div>
                    <div>
                        <input id="haspass" type="text" placeholder="输入密码" autocomplete="off" class="layui-input" style="width: 15rem;display: none;margin-left: 50px;">
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">是否原创</label>
                        <div class="layui-input-block">
                            <input type="checkbox" checked="" name="switch" lay-skin="switch" lay-filter="post_origin" lay-text="原|转">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">文章正文</label>
                    </div>
                    <div class="layui-form-item">
                        <div id="layui_md"></div>
                    </div>
                    <div class="layui-form-item">
                        <button id="submitTest" class="layui-btn" lay-submit="">立即提交</button>
                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                    </div>
                </form>
            </div>
            <div class="layui-markdown-preview">
                <div id="markdown_html" style="height: 100%;"></div>
            </div>
        </div>
    </div>
</div>
</div>
    
    <div class="layui-footer">
    <div style="text-align: center;padding-top: 12px">Copyright © 2017 NewBie Blog 版权所有</div>
</div>
    </div>
</body>
<script type="text/javascript" src="/public/static/layui/layui.js"></script><script type="text/javascript" src="/public/static/admin_index.js"></script>

    <script type="text/javascript" src="/public/static/layui/markdown/clipboard.min.js"></script>
    <script type="text/javascript" src="/public/static/layui/markdown/Parser.js"></script>
    <script type="text/javascript" src="/public/static/layui/markdown/prism.js"></script>


<script>
    layui.config({
        base: '/public/static/layui/lay/modules/'
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
        form.on('switch(art_origin)', function () {
            if (this.checked) { isOrigin = 1; }
            else { isOrigin = 0; }
        });
        //origin
        layer.msg('后台加载成功');
        $("#submitTest").click(function () {
            console.log($('#layui-markdown-textarea').val());
            console.log($('#layui-markdown-show').html());
            var data = {
                "art_title": $("input[name='title']").val(),
                "art_excerpt": $("textarea[name='excerpt']").val(),
                "art_content": $('#layui-markdown-textarea').val(),
                "art_content_md": $('#layui-markdown-show').html(),
                "art_original": isOrigin,
                "art_password": "",
                "art_img": ""
            };
            if (isSwitch) data['art_password'] = $("#haspass").val();
            console.log(data);
            layer.msg("正在提交");
            $.ajax({
                data: data,//提交数据
                type: "Post",//提交方式
                dataType: "json",//服务器返回数据格式
                url: "<?php echo url('Admin/Article/add'); ?>",
                success: function (info) {
                    layer.msg(info.msg, { icon: 1, time: 500 });
                    console.log(info);
                },
                error: function (info) {
                    layer.msg('炸了' + info.msg);
                }
            });
        });

    });
</script>

</html>