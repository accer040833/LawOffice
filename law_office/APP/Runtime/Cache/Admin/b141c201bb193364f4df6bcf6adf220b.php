<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>律师事务所信息管理系统</title>
		<link href="__PUBLIC__/Css/law2.css" type="text/css" rel="stylesheet" />
		<base target="iframe"/>
	</head>
	<body>
		<div id="main">
			<div class="top">
				<h1>律师事务所信息管理系统</h1>
				<p>欢迎您：<?php echo ($user); ?></p>
			</div>
			<div class="nav">
				<ul>
					<li><a href="<?php echo U(GROUP_NAME . '/Content/logout');?>" target="_self">退出登录</a></li>
					<li><a href="http://www.baidu.com">获得帮助</a></li>
				</ul>
			</div>
			<div class="left" id="menu_left">
				<li style="height: 160px;"><img src="__PUBLIC__/Images/law-top1.jpg" /> </li>
                <ul class="ul">
                	<li><a href="<?php echo U(GROUP_NAME . '/Indexcase/index');?>" style="text-decoration:none;color:#39a9ab;">案件浏览</a><li>
					<li>案件管理
						<ul>
							<li><a href="<?php echo U(GROUP_NAME . '/Case/index');?>">案件列表</a></li>
							<li><a href="<?php echo U(GROUP_NAME . '/Case/cases');?>">案件录入</a></li>
							<li><a href="<?php echo U(GROUP_NAME . '/Case/trach');?>">回收站</a></li>
						</ul>
					</li>


					<li>案件分类
						<ul>
							<li><a href="<?php echo U(GROUP_NAME . '/Category/index');?>">分类列表</a></li>
							<li><a href="<?php echo U(GROUP_NAME . '/Category/addCate');?>">添加分类</a></li>
							<li><a href="#">回收站</a></li>
						</ul>
					</li>
					
					<li>博文共享
						<ul>
							<li><a href="<?php echo U(GROUP_NAME . '/Blog/index');?>">博文列表</a></li>
							<li><a href="<?php echo U(GROUP_NAME . '/Blog/addBlog');?>">发表博文</a></li>
							<li><a href="<?php echo U(GROUP_NAME . '/Blog/trach');?>">回收站</a></li>
						</ul>
					</li>
					<li>律师介绍
						<ul>
							<li><a href="<?php echo U(GROUP_NAME . '/Law/lawyerIndex');?>">律师列表</a></li>
							<li><a href="<?php echo U(GROUP_NAME . '/Law/lawyer');?>">添加律师信息</a></li>
							<li><a href="<?php echo U(GROUP_NAME . '/Law/trach');?>">回收站</a></li>
						</ul>
					</li>
					<li>律师管理
						<ul>
							<li><a href="<?php echo U(GROUP_NAME . '/Manage/index');?>">注册律师一览表</a></li>
						</ul>
					</li>
					<li>系统设置
						<ul>
							<li><a href="#">验证码设置</a></li>
							<li><a href="#">风格设置</a></li>
						</ul>
					</li>
				</ul>
				
			</div>	      
			<div class="right">
				<iframe name="iframe" src="show.html" style="width: 100%;height: 100%;background-color: #fff;"></iframe>
			</div>
			<!-- <div style="background:#97efcb;text-align:center;"><small>@ Copyright 2016  经纬实验室| Powered by <a href="#">刘敬雄</a> | <a href="#">Top</a> </small> </div> -->
		</div>
		<script src="__PUBLIC__/Js/jquery-2.1.1.min.js"></script>
		<script src="__PUBLIC__/Js/lawyer.js"></script>
	</body>
</html>