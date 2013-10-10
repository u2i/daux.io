<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<title><?php echo $options['title']; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?php echo $options['tagline'];?>" />
	<meta name="author" content="<?php echo $options['title']; ?>">
<?php if (isset($options['daux_colors'])) { ?>
	<link rel="icon" href="<?php echo $template_path ?>/img/favicon.png" type="image/x-icon">
<?php } else { ?>
	<link rel="icon" href="<?php echo $template_path ?>/img/favicon-<?php echo $options['daux_theme'];?>.png" type="image/x-icon">
<?php } ?>
	<!-- Mobile -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Font -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>

	<!-- LESS -->
	<?php if (isset($options['daux_colors'])) { ?>
		<style type="text/less">
			<?php foreach($options['daux_colors'] as $k => $v) { ?>
		    @<?php echo $k;?>: <?php echo $v;?>;
		    <?php } ?>
		    @import "/<?php echo $template_path ?>/less/import/daux-base.less";
		</style>
		<script src="/<?php echo $template_path ?>/js/less.min.js"></script>
	<?php } else { ?>
		<link rel="stylesheet" href="<?php echo $template_path ?>/css/daux-<?php echo $options['daux_theme'];?>.css">
	<?php } ?>

	<!-- hightlight.js -->
	<script src="<?php echo $template_path ?>/js/highlight.min.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>

	<!-- Navigation -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
	<script src="<?php echo $template_path ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo $template_path ?>/js/custom.js"></script>
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>