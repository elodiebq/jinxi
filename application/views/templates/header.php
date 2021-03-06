<!DOCTYPE html>
<html lang="zh_CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="jinxi">
	<meta name="author" content="fabkxd">
	<link rel="shortcut icon" href="{$baseurl}img/icon/icon.png">
	<title>{$title}</title> <!-- Bootstrap core CSS -->
	<link href="{$baseurl}css/bootstrap.css" rel="stylesheet"/>
	<link href="{$baseurl}css/font-awesome.css" rel="stylesheet"/>
	<link href="{$baseurl}css/flat-ui.css" rel="stylesheet"/>
	<link href="{$baseurl}css/jinxi.css" rel="stylesheet"/>
	<link href="{$baseurl}css/Jcrop.css" rel="stylesheet"/>
	<link href="{$baseurl}css/sticky-footer-navbar.css" rel="stylesheet"/>
	<script src="{$baseurl}js/jquery.js"></script>

</head>

<body>
	<div id="header" class="row">
		<div>
			<a href="{$baseurl}">
				<img src="{$baseurl}img/icon/header.png" alt="header.png"/>
			</a>
		</div>
		<div class="form-group">
			<input type="text" placeholder="请输入关键词搜索" class="form-control flat"/>
			<a href="#">
				<span href="#" class="fui-search input-search"></span>
			</a>
		</div>
		<div>
			<img src="{$baseurl}img/icon/invite.png" alt="invite.png"/>
		</div>
		<div>
			{if isset($login_user)}
			<a type="button" class="btn btn-primary" href="#" onclick="addfavorite('<?php echo '今昔网'?>', '{$baseurl}')">收藏本站</a>
			{else}
			<a type="button" class="btn btn-primary" href="{$baseurl}account/regidit">立即注册</a>
			{/if}
		</div>
	</div>

	<div id="navbar" class="navbar-wrapper">
		<div class="navbar navbar-inverse">
			<div class="mycontainer">
				<div>
					<ul class="nav">
						<li {if $nav_tab == 1} class=" active" {/if}>
							<a href="{$baseurl}">首页</a>
						</li>
						<li {if $nav_tab == 2} class=" active" {/if}>
							<a href="{$baseurl}{if isset($login_user)}user/{$login_user.user_id}{else}account/loginfo}{/if}">个人中心</a>
						</li>
						<li {if $nav_tab == 3} class=" active" {/if}>
							<a href="#">商品大厅</a>
						</li>
					</ul>
					<ul class="nav pull-right">
						{if isset($login_user)}
						<li>
							<a href="{$baseurl}user/{$login_user.user_id}">
								<img id="user_headimg_thumb" src="$baseurl . 'img/head/' . $login_user.user_headimg . '_thumb.jpg'"/>
								{$login_user.user_name}
							</a>
						</li>
						{/if}
						<li {if $nav_tab == 4} class=" active" {/if}>
							<a href="#">关于</a>
						</li>
						<li {if $nav_tab == 5} class=" active" {/if}>
							<a href="#">帮助</a>
						</li>
						<li {if $nav_tab == 6} class=" active" {/if}>
							<a href="{$baseurl}setup">设置</a>
						</li>
						{if isset($login_user)}
						<li>
							<a href="#" onClick="logout();return false;">退出</a>
						</li>
						{elseif $uri_string == ''}						
						<li>
							<a id="navbarlogin" href="#" onClick="prelogin(0);return false;">登录</a>
						</li>
						{else}
						<li>
							<a id="navbarlogin" href="#" onClick="memlogin();return false;">登录</a>
						</li>
						{/if}
					</ul>
				</div>
			</div>
		</div>
	</div>