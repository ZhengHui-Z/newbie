layui.config({
	base: '/static/layui/lay/modules/'
}).use(['layer', 'element', 'jquery', 'form'], function () {
	var layer = layui.layer,
		element = layui.element,
		$ = layui.jquery,
		form = layui.form;
	//layer.msg('加载成功');
	$(".send-btn").click(
		function () {
			var _this = $(this);
			var url = $(".my-action").attr("action");
			console.log(url);
			var data = {
				"title" : $("input[name='title']").val()
			};
			console.log(data.title);

			layer.msg(data.title);
			$.ajax({
				data: data,//提交数据
				type: "Post",//提交方式
				dataType: "json",//服务器返回数据格式
				url: url,
				success: function (info) {
					layer.msg(info.msg,{icon:1,time:500});
				},
				error: function (info) {
					layer.msg('炸了' + info.msg);
				}
			});
		});

});