<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBLIC__/Admin/Images/css1/css.css" rel="stylesheet"
	type="text/css">
<script language='javascript' src='__PUBLIC__/Admin/Js/public.js'></script>
</head>

<SCRIPT language=javascript>
<!--
	var displayBar = true;
	function switchBar(obj) {
		if (displayBar) {
			parent.frame.cols = "0,*";
			displayBar = false;
			obj.value = "打开左边管理菜单";
		} else {
			parent.frame.cols = "195,*";
			displayBar = true;
			obj.value = "关闭左边管理菜单";
		}
	}

	function fullmenu(url) {
		if (url == null) {
			url = "admin_left.asp";
		}
		parent.leftFrame.location = url;
	}
//-->
</SCRIPT>
<script type="text/javascript" src="/Public/Admin/Js/jquery.js"></script>
<script>
	$().ready(function() {
		createFirst();
		//绑定一级分类的onchange事件
		$('#cateFirst').bind('change', function() {
			//取出一级分类选中的值
			var cid = $('#cateFirst').val();
			//生成json数据
			var data = {
				cid : cid
			};
			//发送Ajax请求
			$.post('__GROUP__/Category/createFirst', data, function(msg) {
				$('#cid')[0].length = 0;
				$(msg.data).each(function(i, item) {
					var op = new Option(item.name, item.id);
					$('#cid')[0].options.add(op);
				});
			}, 'json');
		});
	});

	//创建一级分类显示在第一个下拉列表中
	function createFirst() {
		//生成json数据
		var data = {
			cid : 0
		};
		//发送ajax请求
		$.post('__GROUP__/Category/createFirst', data, function(msg) {
			$(msg.data).each(function(i, item) {
				var op = new Option(item.name, item.id);
				$('#cateFirst')[0].options.add(op);
			});
		}, 'json');
	}
</script>
<body>
	<form method="POST" action="__URL__/addOk"
		enctype="multipart/form-data">
		<table class="table" cellspacing="1" cellpadding="2" width="99%"
			align="center" border="0">
			<tbody>
				<tr>
					<th class="bg_tr" align="left" colspan="2" height="25">添加商品信息</th>
				</tr>
				<tr>
					<td class="td_bg" width="17%" height="23" align="right">所属分类</td>
					<td width="83%" class="td_bg">
						<select id='cateFirst'>
							<option>请选择</option>
						</select>
						<select name='cid' id='cid'>
							<option>请选择</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="td_bg" width="17%" height="23" align="right">商品名</td>
					<td width="83%" class="td_bg">
						<input type="text" name="name" />
					</td>
				</tr>
				<tr>
					<td class="td_bg" width="17%" height="23" align="right">商品价格</td>
					<td width="83%" class="td_bg">
						<input type="text" name="price" />
					</td>
				</tr>
				<tr>
					<td class="td_bg" width="17%" height="23" align="right">商品图片</td>
					<td width="83%" class="td_bg">
						<input type='file' name='photo' />
					</td>
				</tr>
				<tr>
					<td class="td_bg" width="17%" height="23" align="right">商品描述</td>
					<td width="83%" class="td_bg">
						<textarea name='remark' rows='4' cols='80'></textarea>
					</td>
				</tr>
				<tr>
					<td class="td_bg" width="17%" height="23"></td>
					<td class="td_bg" width="83%">
						<input type="submit" name="submit" value="添加" />
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>