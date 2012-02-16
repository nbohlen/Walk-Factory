<?php include('includes/default.php') ?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="description" content="<?php if( isset($meta_description) && $meta_description != '' ) { echo $meta_description; } else { echo $default_meta_description; }; ?>"/>
  <meta name="keywords" content="<?php if( isset($meta_keywords) && $meta_keyywords != '') { echo $meta_keywords; } else { echo $default_meta_keywords; } ?>" />
  <title><? if( isset($title) && $title != '' ) { echo $title; } else { echo $default_title; } ?></title>

	<meta name="viewport" content="width=device-width">
  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-precomposed.png">
  <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-precomposed.png">
  <link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-precomposed.png">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

	<link rel="stylesheet" href="css/style.css">

	<script src="../js/libs/modernizr-2.5.2-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
