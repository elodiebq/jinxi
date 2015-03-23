<!DOCTYPE html>
<html lang="zh_CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="jinxi">
	<meta name="author" content="fabkxd">
	<link rel="shortcut icon" href="{$data.baseurl}img/icon/icon.png">
	<title>今昔网</title> <!-- Bootstrap core CSS -->
	<link href="{$data.baseurl}css/bootstrap.css" rel="stylesheet"/>
	<link href="{$data.baseurl}css/font-awesome.css" rel="stylesheet"/>
	<link href="{$data.baseurl}css/flat-ui.css" rel="stylesheet"/>
	<!-- my CSS -->
	<link href="{$data.baseurl}css/jinxi.css" rel="stylesheet"/>
	<link href="{$data.baseurl}css/Jcrop.css" rel="stylesheet"/>
	<link href="{$data.baseurl}css/sticky-footer-navbar.css" rel="stylesheet"/>
	<script src="{$data.baseurl}js/jquery.js"></script>

</head>

<body>
	<div class="row" style="margin-bottom: 0;">
		<div style="position: relative; float: left; width: 176px;">
			<a href="<?=$baseurl?>"><img
				style="height: 80px; margin-left: -50px;"
				src="<?=$baseurl?>img/icon/header.png" /></a>
			</div>
			<div style="position: relative; float: left; width: 352px;">
				<div class="form-group"
				style="margin-left: 30px; margin-right: 30px;">
				<input type="text" placeholder="请输入关键词搜索" class="form-control"
				style="border-radius: 1px; margin-top: 25px; background-color: #f5f5f5;" />
				<a href="#"><span href="#" class="fui-search input-search"
					style="background-color: #f5f5f5;"></span></a>
				</div>
			</div>
			<div style="position: relative; float: left; width: 440px;">
				<img style="height: 50px; margin-top: 15px;"
				src="<?=$baseurl?>img/icon/invite.png" />
			</div>
			<div style="position: relative; float: left; width: 88px;">
				<?php if(isset($login_user)): ?>
				<a type="button" class="btn btn-primary"
				style="border-radius: 1px; margin-top: 25px;" href="#"
				onclick="addfavorite('<?php echo '今昔网'?>', '<?=$baseurl?>');return false;">收藏本站</a>
			<?php else:?>
			<a type="button" class="btn btn-primary"
			style="border-radius: 1px; margin-top: 25px;"
			href="<?=$baseurl?>account/regidit">立即注册</a>
		<?php endif;?>
	</div>
</div>

<div class="navbar-wrapper" style="z-index: 900; width: 100%;">
	<div class="navbar navbar-inverse"
	style="margin-bottom: 0; height: 45px; padding: 0; border-radius: 0; min-width: 1266px;">
	<div class="mycontainer" style="min-width: 1266px;">
		<div>
			<ul class="nav">
				<li <?php if($choose==1): ?> class=" active" <?php endif;?>><a
					href="<?=$baseurl?>">首页</a></li>
					<li <?php if($choose==2): ?> class=" active" <?php endif;?>><a
						href="<?=$baseurl?><?php if (isset ( $login_user ))echo 'user/' . $login_user ['user_id'];else echo 'account/loginfo';?>">个人中心</a></li>
						<li <?php if($choose==3): ?> class=" active" <?php endif;?>><a
							href="#">商品大厅</a></li>
						</ul>
						<ul class="nav pull-right">
							<?php if(isset($login_user)): ?>
							<li><a href="<?=$baseurl?>user/<?=$login_user['user_id']?>"><img
								src="<?php
								$this->load->helper ( 'file' );
								if ($login_user ['image'] == '0')
									echo $baseurl . 'img/head/0.jpg';
								else
									echo $baseurl . 'img/head/' . $login_user ['user_id'] . '_' . $login_user ['image'];
								?>"
								style="height: 35px; margin-top: -7px; margin-right: 5px;" /><?=$login_user['user_name']?></a>
							</li>
						<?php endif;?>
						<li <?php if($choose==5): ?> class=" active" <?php endif;?>><a
							href="#">关于</a></li>
							<li <?php if($choose==6): ?> class=" active" <?php endif;?>><a
								href="#">帮助</a></li>
								<li <?php if($choose==7): ?> class=" active" <?php endif;?>><a
									href="<?=$baseurl?>setup">设置</a></li>
									<?php if(isset($login_user)): ?>
									<li><a href="#" onClick="logout();return false;">退出</a></li>
								<?php elseif($this->uri->uri_string()==''): ?>
								<li><a id="navbarlogin" href="#"
									onClick="prelogin(0);return false;">登陆</a></li>
								<?php else: ?>
								<li><a id="navbarlogin" href="#"
									onClick="memlogin();return false;">登陆</a></li>
								<?php endif;?>
							</ul>
						</div>
					</div>
				</div>
			</div>
	<!-- END NAVBAR -->