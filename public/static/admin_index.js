layui.config({
	base: '/static/layui/lay/modules/'
}).use(['layer', 'element', 'jquery', 'form'], function () {
	var layer = layui.layer,
		element = layui.element,
		$ = layui.jquery,
		form = layui.form;
	layer.msg('后台加载成功');

});