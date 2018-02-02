<?php /*a:1:{s:78:"G:\web\phpStudy\PHPTutorial\WWW\newbie/application/index/view\index\index.html";i:1504856251;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>we</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/public/static/newbie.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/public/static/layui/css/layui.css" />
    <link rel="stylesheet" type="text/css" href="/public/static/swiper/swiper-3.4.2.min.css" />
    <div>
        /public/static
    </div>
    <style>
        .card div {
            height: 20rem;
        }

        .test {
            height: 500px;
            width: 100%;
            padding-right: 17px;
            background-image: linear-gradient( 135deg, #92FFC0 0%, #002661 100%);
        }

        .swiper-slide {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="top">
        <div class="block">按钮</div>
    </div>
    <div class="top" style="background: #8080ff;">
        <div class="block">按钮</div>
    </div>
    <div class="nb-container-fluid" style="height: 500px;background-image: url('/static/img/kg.jpg');">

    </div>
    <div class="nb-container" style="background: #80ff00;margin-top: -300px;">
        <div class="nb_content-area" style="background: #00ffff;">
            <div class="swiper-container" style="width: 100%;height: 500px;position: relative;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: linear-gradient( 135deg, #FFD26F 0%, #3677FF 100%);">Slide 1</div>
                    <div class="swiper-slide" style="background-image: linear-gradient( 135deg, #5EFCE8 0%, #736EFE 100%);">Slide 2</div>
                    <div class="swiper-slide" style="background-image: linear-gradient( 135deg, #FDD819 0%, #E80505 100%);">Slide 3</div>
                    <div class="swiper-slide" style="background-image: linear-gradient( 135deg, #FDD819 0%, #E80505 100%);">Slide 4</div>
                    <div class="swiper-slide" style="background-image: linear-gradient( 135deg, #FDD819 0%, #E80505 100%);">Slide 5</div>
                    <div class="swiper-slide" style="background-image: linear-gradient( 135deg, #aDD119 0%, #E80505 100%);">Slide 6</div>
                    <div class="swiper-slide" style="background-image: linear-gradient( 135deg, #FDD819 0%, #E80505 100%);">Slide 7</div>
                    <div class="swiper-slide" style="background-image: linear-gradient( 135deg, #FDD819 0%, #E80505 100%);">Slide 8</div>
                    <div class="swiper-slide" style="background-image: linear-gradient( 135deg, #FDD819 0%, #E80505 100%);">Slide 9</div>
                    <div class="swiper-slide" style="background-image: linear-gradient( 135deg, #FDD819 0%, #E80505 100%);">Slide 10</div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-scrollbar"></div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="cms-post-grid">
                <div class="post">
                    <div id="mousedown" style="width: auto;background: #32ebeb;">鼠标右键事件</div>
                </div>
                <div class="post">
                    <div style="width: auto;background: #32ebeb;">222</div>
                </div>
                <div class="post">
                    <div style="width: auto;background: #32ebeb;">333</div>
                </div>
            </div>
            <div class="card-4col-grid">
                <div class="card">
                    <div style="width: auto;background: #32ebeb;"></div>
                </div>
                <div class="card">
                    <div style="width: auto;background: #32ebeb;"></div>
                </div>
                <div class="card">
                    <div style="width: auto;background: #32ebeb;"></div>
                </div>
                <div class="card">
                    <div style="width: auto;background: #32ebeb;"></div>
                </div>
                <div class="card">
                    <div style="width: auto;background: #32ebeb;"></div>
                </div>
                <div class="card">
                    <div style="width: auto;background: #32ebeb;"></div>
                </div>
            </div>
        </div>
        <div class="nb_sidebar nb-fl" style="height:50rem;background:#ff8040;">
        </div>
    </div>
    <div class="footer" style="height: 200px;background: #918287;">
        <ul id="demo"></ul>
    </div>
</body>
<script type="text/javascript" src="/public/static/layui/layui.js"></script>
<script type="text/javascript" src="/public/static/swiper/swiper-3.4.2.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        observer: true,
        observeParents: true,
        paginationClickable: true,
        mousewheelControl: true,
        prevButton: '.swiper-button-prev',
        nextButton: '.swiper-button-next',
        scrollbar: '.swiper-scrollbar',
        pagination: '.swiper-pagination',
        loop: true,
    });
    layui.config({
        base: '/public/static/layui/lay/modules/'
    }).use(['layer', 'element', 'jquery', 'form', 'tree', 'context'], function () {
        var layer = layui.layer,
            element = layui.element,
            $ = layui.jquery,
            context = layui.context,
            form = layui.form;

        layer.msg('加载成功');
        context.init({ preventDoubleContext: false });
        context.attach('#mousedown', [
            { header: 'Options' },
            { text: 'Open', href: '#' },
            { text: 'Open in new Window', href: '#' },
            { divider: true },
            { text: 'Copy', href: '#' },
            { text: 'Dafuq!?', href: '#' }
        ]);
        layui.tree({
            elem: '#demo' //传入元素选择器
            , nodes: [
                {
                    "id": 1,
                    "name": "book",
                    "parent_id": 0,
                    "expanded": false,
                    "children": [
                        {
                            "id": 3,
                            "name": "book1",
                            "parent_id": 1,
                            "expanded": false,
                            "children": [
                                {
                                    "id": 4,
                                    "name": "book2",
                                    "parent_id": 3,
                                    "leaf": true
                                }
                            ]
                        }
                    ]
                },
                {
                    "id": 2,
                    "name": "music",
                    "parent_id": 0,
                    "leaf": true
                }
            ]
            , click: function (node) {
                console.log(node) //node即为当前点击的节点数据
            }
        });
    });

</script>

</html>