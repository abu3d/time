<?php
/**
 * 前端基于Multiverse，for TYPECHO 的相册模板，由钻芒开发适配  你可以在<a href="https://www.zmki.cn">钻芒博客</a>获得更多关于此模板的信息
 * @package Time
 * @author zmki
 * @version 1.0.2
 * @link https://www.zmki.cn/
 */
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php $this->options->IndexName(); ?>-<?php $this->options->Indexdict() ?>	</title>
		<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="keywords" content="<?php $this->options->keywords(); ?>"/>
		<meta name="description" content="<?php $this->options->description(); ?>"/>
		<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/fontawesome-all.min.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/main.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/noscript.css'); ?>" />
		<noscript><link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/noscript.css'); ?>" /></noscript>
		<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/main.css'); ?>" />
		<link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css">
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
		<div id="wrapper">
				<!-- Header -->
					<header id="header">
						<h1><a href="<?php $this->options->siteUrl(); ?>"><strong><?php $this->options->zmkiabout() ?></strong> <?php $this->options->zmkiabouts() ?></a></h1>
						<nav>
							<ul>
								<li><a href="#footer" class="icon solid fa-info-circle">关于</a></li>
							</ul>
						</nav>
					</header>
					<!-- Main -->
				<div id="main">					
				<?php while($this->next()): ?>
				   <article class="thumb">
					<a href="<?php echo $this->fields->img();?>" class="image" > <img  src="<?php echo $this->fields->img();?>"  /></a>
					<h2><?php $this->title() ?></h2>
					<p><?php $this->content('Continue Reading...'); ?></p>
				   </article>
				  <?php endwhile; ?>
				</div> 
				
				<!-- Footer -->
					<footer id="footer" class="panel">
						<div class="inner split">
							<div class="inner split">
							<div>
								<section>
									<h2>关于<?php $this->options->IndexName() ?></h2>
									<p><?php $this->options->Biglogo () ?></p>
								</section>
								<section>
									<h2>联系我</h2>
									<ul class="icons">								
						<li><a href="<?php $this->options->xxhome()?>" target="_blank" class="icon brands fa-telegram"><span class="label">HOOME</span></a></li>
						<li><a href="<?php $this->options->xxqq()?>"  target="_blank" class="icon brands fa-qq"><span class="label">QQ</span></a></li>
						<li><a href="<?php $this->options->xxweibo()?>"  target="_blank" class="icon brands fa-weibo"><span class="label">weibo</span></a></li>
						<li><a href="<?php $this->options->xxgithub()?> "  target="_blank" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
										</ul>
								</section>
								<p class="copyright">
									&copy; Design BY HTML UP  Modify BY ZMKI  THEME:<a href="https://www.zmki.cn/">Time</a>. ICP备案号:<a href="http://beian.miit.gov.cn/"target="_blank" ><?php $this->options->icp()?></a>
								</p>
							</div>
							<div>
					</footer>
</div>		
</div> 
		<!-- Scripts -->
			<script src="<?php $this->options->themeUrl('assets/js/jquery.min.js'); ?>"></script>
			<script src="<?php $this->options->themeUrl('assets/js/jquery.poptrox.min.js'); ?>"></script>
			<script src="<?php $this->options->themeUrl('assets/js/browser.min.js'); ?>"></script>
			<script src="<?php $this->options->themeUrl('assets/js/breakpoints.min.js'); ?>"></script>
			<script src="<?php $this->options->themeUrl('assets/js/util.js'); ?>"></script>
			<script src="<?php $this->options->themeUrl('assets/js/main.js'); ?>"></script>
	</body>
</html>