<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-23 21:59:21
         compiled from "..\application\views\templates\header.php" */ ?>
<?php /*%%SmartyHeaderCode:28843550fb3d06e9f62-69507363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f2015c56948a41a6cd8439dffba65d33dd903b7' => 
    array (
      0 => '..\\application\\views\\templates\\header.php',
      1 => 1427119158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28843550fb3d06e9f62-69507363',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550fb3d084b6b7_15595594',
  'variables' => 
  array (
    'baseurl' => 0,
    'title' => 0,
    'login_user' => 0,
    'nav_tab' => 0,
    'uri_string' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550fb3d084b6b7_15595594')) {function content_550fb3d084b6b7_15595594($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh_CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="jinxi">
	<meta name="author" content="fabkxd">
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
img/icon/icon.png">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title> <!-- Bootstrap core CSS -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
css/bootstrap.css" rel="stylesheet"/>
	<link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
css/font-awesome.css" rel="stylesheet"/>
	<link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
css/flat-ui.css" rel="stylesheet"/>
	<link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
css/jinxi.css" rel="stylesheet"/>
	<link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
css/Jcrop.css" rel="stylesheet"/>
	<link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
css/sticky-footer-navbar.css" rel="stylesheet"/>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
js/jquery.js"><?php echo '</script'; ?>
>

</head>

<body>
	<div id="header" class="row">
		<div>
			<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
img/icon/header.png" alt="header.png"/>
			</a>
		</div>
		<div class="form-group">
			<input type="text" placeholder="请输入关键词搜索" class="form-control flat"/>
			<a href="#">
				<span href="#" class="fui-search input-search"></span>
			</a>
		</div>
		<div>
			<img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
img/icon/invite.png" alt="invite.png"/>
		</div>
		<div>
			<?php if (isset($_smarty_tpl->tpl_vars['login_user']->value)) {?>
			<a type="button" class="btn btn-primary" href="#" onclick="addfavorite('<?php echo '<?php'; ?>
 echo '今昔网'<?php echo '?>'; ?>
', '<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
')">收藏本站</a>
			<?php } else { ?>
			<a type="button" class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
account/regidit">立即注册</a>
			<?php }?>
		</div>
	</div>

	<div id="navbar" class="navbar-wrapper">
		<div class="navbar navbar-inverse">
			<div class="mycontainer">
				<div>
					<ul class="nav">
						<li <?php if ($_smarty_tpl->tpl_vars['nav_tab']->value==1) {?> class=" active" <?php }?>>
							<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
">首页</a>
						</li>
						<li <?php if ($_smarty_tpl->tpl_vars['nav_tab']->value==2) {?> class=" active" <?php }?>>
							<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;
if (isset($_smarty_tpl->tpl_vars['login_user']->value)) {?>user/<?php echo $_smarty_tpl->tpl_vars['login_user']->value['user_id'];
} else { ?>account/loginfo}<?php }?>">个人中心</a>
						</li>
						<li <?php if ($_smarty_tpl->tpl_vars['nav_tab']->value==3) {?> class=" active" <?php }?>>
							<a href="#">商品大厅</a>
						</li>
					</ul>
					<ul class="nav pull-right">
						<?php if (isset($_smarty_tpl->tpl_vars['login_user']->value)) {?>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/<?php echo $_smarty_tpl->tpl_vars['login_user']->value['user_id'];?>
">
								<img id="user_headimg_thumb" src="$baseurl . 'img/head/' . $login_user.user_headimg . '_thumb.jpg'"/>
								<?php echo $_smarty_tpl->tpl_vars['login_user']->value['user_name'];?>

							</a>
						</li>
						<?php }?>
						<li <?php if ($_smarty_tpl->tpl_vars['nav_tab']->value==4) {?> class=" active" <?php }?>>
							<a href="#">关于</a>
						</li>
						<li <?php if ($_smarty_tpl->tpl_vars['nav_tab']->value==5) {?> class=" active" <?php }?>>
							<a href="#">帮助</a>
						</li>
						<li <?php if ($_smarty_tpl->tpl_vars['nav_tab']->value==6) {?> class=" active" <?php }?>>
							<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
setup">设置</a>
						</li>
						<?php if (isset($_smarty_tpl->tpl_vars['login_user']->value)) {?>
						<li>
							<a href="#" onClick="logout();return false;">退出</a>
						</li>
						<?php } elseif ($_smarty_tpl->tpl_vars['uri_string']->value=='') {?>						
						<li>
							<a id="navbarlogin" href="#" onClick="prelogin(0);return false;">登录</a>
						</li>
						<?php } else { ?>
						<li>
							<a id="navbarlogin" href="#" onClick="memlogin();return false;">登录</a>
						</li>
						<?php }?>
					</ul>
				</div>
			</div>
		</div>
	</div><?php }} ?>
