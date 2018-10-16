<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"/var/www/html/tp5manager/public/../application/demo/view/test/index.html";i:1536025560;s:68:"/var/www/html/tp5manager/public/../application/demo/view/layout.html";i:1536025560;}*/ ?>
<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<meta name="format-detection" content="telephone=no">
	<meta charset="UTF-8">
	<meta name="description" content="Violate Responsive Admin Template">
	<meta name="keywords" content="Super Admin, Admin, Template, Bootstrap">
	<title>后台管理系统模板</title>
	<!-- CSS -->
	<link href="<?php echo \think\Config::get('css'); ?>bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo \think\Config::get('js'); ?>jquery-3.2.0.min.js"></script>
    <script type="text/javascript" src="<?php echo \think\Config::get('js'); ?>bootstrap.min.js"></script>

</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a href="#" class="navbar-brand">标题</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="active"><a href="#">中国</a></li>
			<li><a href="#">中国</a></li>
			<li class="dropdown"><a href="#" data-toggle="dropdown">中国<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">子菜单一</a></li>
					<li><a href="#">子菜单二</a></li>
					<li><a href="#">子菜单三</a></li>
					<li><a href="#">子菜单四</a></li>
				</ul>
			</li>
			<li><a href="#">中国</a></li>
		</ul>
		<form class="navbar-form navbar-right">
			<div class="input-group">
				<input type="text" name=""  class="form-control">
				<div class="input-group-btn">
					<button class="btn btn-default">搜索</button>
				</div>
			</div>
		</form>
		<button class="btn btn-default navbar-btn navbar-left">按钮</button>
		<p class="navbar-text">我是一段文本 <a href="#" class="navbar-link">链接</a></p>

	</div>
</div>
<div class="container" id="content" style="margin-top:80px;">

<h1>
	我的热情，就像一把火
</h1>
</div>

<!--
<ul class="nav nav-tabs">
	<li class="active"><a href="#">首页</a></li>
	<li><a href="#">首页</a></li>
	<li><a href="#">首页</a></li>
	<li class="dropdown">
		<a href="#" data-toggle="dropdown">
			下拉菜单 <span class="caret"></span>
		</a>
		<ul class="dropdown-menu">
			<li><a href="#">子菜单一</a></li>
			<li><a href="#">子菜单二</a></li>
			<li><a href="#">子菜单三</a></li>
			<li><a href="#">子菜单四</a></li>
		</ul>
	</li>
	<li><a href="#">首页</a></li>
</ul>
-->
</body>

</html>