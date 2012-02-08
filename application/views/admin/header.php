<!DOCTYPE html PUBLIC "-//W3C//	DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh_CN" lang="zh_CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="star">
	<meta name="author" content="jh">
	<meta name="keywords" content="star">
	<title><?=$page_title ?></title>
	<link href="<?=base_url()?>img/favicon.ico" rel="shortcut icon">		
	<link href="<?=base_url()?>css/style.less" type="text/css" rel="stylesheet/less" />	
	<script src="<?=base_url()?>js/less.js" type="text/javascript"></script>
	<script src="<?=base_url()?>js/jquery.js" type="text/javascript" charset="utf-8"></script>	
	<script src="<?=base_url()?>js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>	
	<script src="<?=base_url()?>js/base.js" type="text/javascript" charset="utf-8"></script>	
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">Star后台</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li class="active"><a href="#">外卖管理</a></li>
						<li><a href="#">打印管理</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">资源市场<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">商品交易</a></li>
								<li><a href="#">交通资源</a></li>
								<li><a href="#">帐号交易</a></li>
							</ul>
						</li>
					</ul>
					<form class="navbar-search pull-left" action="">
						<input type="text" class="search-query span2" placeholder="搜搜更健康">
					</form>					
					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">用户名<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">选项</a></li>
								<li><a href="#">选项</a></li>
								<li><a href="#">选项</a></li>
								<li class="divider"></li>
								<li><a href="logout">退出</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div>