<head>
  <?php
	Theme::charset('utf-8');
	Theme::viewport('width=device-width, initial-scale=1');
	Theme::title();
	Theme::description();
	Theme::favicon('favicon.png'); ?>
	<meta name="generator" content="Hugo 0.26"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="referrer" content="no-referrer">
    <base href="<?php echo $page->permalink() ?>">
    <link rel="canonical" href="<?php echo $page->permalink() ?>">
    <link href="<?php echo $page->permalink() ?>" rel="alternate" type="application/rss+xml" title="RSS"/>
	<link href="<?php echo HTML_PATH_THEME ?>assets/css/style.css" rel='stylesheet' type='text/css' />
	<?php Theme::plugins('siteHead'); ?>
</head>