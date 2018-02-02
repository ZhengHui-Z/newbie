<?php /*a:5:{s:89:"G:\web\phpStudy\PHPTutorial\WWW\newbie/application/admin/view\article\article_manage.html";i:1516216030;s:71:"G:\web\phpStudy\PHPTutorial\WWW\newbie/application/admin/view\base.html";i:1504858352;s:81:"G:\web\phpStudy\PHPTutorial\WWW\newbie/application/admin/view\public\top_nav.html";i:1503295852;s:82:"G:\web\phpStudy\PHPTutorial\WWW\newbie/application/admin/view\public\side_nav.html";i:1504886992;s:86:"G:\web\phpStudy\PHPTutorial\WWW\newbie/application/admin/view\public\admin_footer.html";i:1496398206;}*/ ?>
<html>

<head>
    <title>文章管理</title>
    <meta charset="UTF-8">
    <link rel="icon" href="/public/static/img/logo.bmp">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/public/static/layui/css/layui.css" />
    <link rel="stylesheet" type="text/css" href="/public/static/css/newbie_admin.css" />
    
    
    
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
<div style="padding: 5px;">
    <div class="layui-btn-group demoTable">
        <button class="layui-btn" data-type="getCheckData">获取选中行数据</button>
        <button class="layui-btn" data-type="getCheckLength">获取选中数目</button>
        <button class="layui-btn" data-type="isAll">验证是否全选</button>
    </div>
    <table class="layui-table" lay-data="{height:'full-200', url:'<?php echo url('Admin/Article/list'); ?>', page:false, id:'idTest'}" lay-filter="demo">
        <thead>
            <tr>
                <th lay-data="{checkbox:true, fixed: true}"></th>
                <th lay-data="{field:'id', width:100, sort: true, fixed: true}">文章ID</th>
                <th lay-data="{field:'postname', width:300}">文章名</th>
                <th lay-data="{field:'author', width:200, sort: true}">作者</th>
                <th lay-data="{field:'date', width:200}">发布日期</th>
                <th lay-data="{field:'tag', width:300}">标签</th>
                <th lay-data="{field:'read', width:177}">阅读量</th>
                <th lay-data="{fixed: 'right', width:300, align:'center', toolbar: '#barDemo'}"></th>
            </tr>
        </thead>
    </table>
    <script type="text/html" id="barDemo">
        <a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>
        <a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>
        <a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>
    </script>
</div>
</div>
    
    <div class="layui-footer">
    <div style="text-align: center;padding-top: 12px">Copyright © 2017 NewBie Blog 版权所有</div>
</div>
    </div>
</body>
<script type="text/javascript" src="/public/static/layui/layui.js"></script><script type="text/javascript" src="/public/static/admin_index.js"></script>


<script>
    layui.use('table', function () {
        var table = layui.table;
        //监听表格复选框选择
        table.on('checkbox(demo)', function (obj) {
            console.log(obj)
        });
        //监听工具条
        table.on('tool(demo)', function (obj) {
            var data = obj.data;
            if (obj.event === 'detail') {
                layer.msg('ID：' + data.id + ' 的查看操作');
            } else if (obj.event === 'del') {
                layer.confirm('真的删除行么', function (index) {
                    obj.del();
                    layer.close(index);
                });
            } else if (obj.event === 'edit') {
                layer.alert('编辑行：<br>' + JSON.stringify(data))
            }
        });

        var $ = layui.$, active = {
            getCheckData: function () { //获取选中数据
                var checkStatus = table.checkStatus('idTest')
                    , data = checkStatus.data;
                layer.alert(JSON.stringify(data));
            }
            , getCheckLength: function () { //获取选中数目
                var checkStatus = table.checkStatus('idTest')
                    , data = checkStatus.data;
                layer.msg('选中了：' + data.length + ' 个');
            }
            , isAll: function () { //验证是否全选
                var checkStatus = table.checkStatus('idTest');
                layer.msg(checkStatus.isAll ? '全选' : '未全选')
            }
        };

        $('.demoTable .layui-btn').on('click', function () {
            var type = $(this).data('type');
            active[type] ? active[type].call(this) : '';
        });
    });

</script>

</html>