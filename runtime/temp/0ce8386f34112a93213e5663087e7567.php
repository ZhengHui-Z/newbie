<?php /*a:6:{s:78:"G:\web\phpStudy\PHPTutorial\WWW\newbie/application/admin/view\index\index.html";i:1504856929;s:71:"G:\web\phpStudy\PHPTutorial\WWW\newbie/application/admin/view\base.html";i:1504858352;s:81:"G:\web\phpStudy\PHPTutorial\WWW\newbie/application/admin/view\public\top_nav.html";i:1503295852;s:82:"G:\web\phpStudy\PHPTutorial\WWW\newbie/application/admin/view\public\side_nav.html";i:1504886992;s:78:"G:\web\phpStudy\PHPTutorial\WWW\newbie/application/admin/view\public\body.html";i:1504885784;s:86:"G:\web\phpStudy\PHPTutorial\WWW\newbie/application/admin/view\public\admin_footer.html";i:1496398206;}*/ ?>
<html>

<head>
    <title>后台管理-信息</title>
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
    <div class="layui-body"><div class="layui-tab layui-tab-brief" lay-filter="tabs">
    <ul class="layui-tab-title">
        <li class="layui-this">关于本博客</li>
        <li>基本信息</li>
    </ul>
    <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">内容1</div>
        <div class="layui-tab-item">
            <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
                <legend>服务器信息</legend>
            </fieldset>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th colspan="4">基本参数</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(is_array($server_info) || $server_info instanceof \think\Collection || $server_info instanceof \think\Paginator): $i = 0; $__LIST__ = $server_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
                    <tr>
                        <td><?php echo htmlentities($key); ?></td>
                        <td><?php echo htmlentities($data); ?></td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th colspan="4">实时数据</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(is_array($now_info) || $now_info instanceof \think\Collection || $now_info instanceof \think\Paginator): $i = 0; $__LIST__ = $now_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
                    <tr>
                        <td><?php echo htmlentities($key); ?></td>
                        <td><?php echo htmlentities($data); ?></td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div></div>
    
    <div class="layui-footer">
    <div style="text-align: center;padding-top: 12px">Copyright © 2017 NewBie Blog 版权所有</div>
</div>
    </div>
</body>
<script type="text/javascript" src="/public/static/layui/layui.js"></script><script type="text/javascript" src="/public/static/admin_index.js"></script>


</html>