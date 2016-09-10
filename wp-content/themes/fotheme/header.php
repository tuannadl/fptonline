<!DOCTYPE html>
<html <?php language_attributes();?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Nguyen Anh Tuan | 
        <?php wp_title('|',true,'right');?>
        <?php bloginfo('name');?>
    </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <link rel="icon" href="favicon-16x16.png" type="image/x-icon" sizes="16x16">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/libs.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/modernizr.js"></script>
</head>
<body class="home">
<header><a href="index.html" title="FPT" class="logo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="logo"></a>
    <div class="toggle-wrap">
        <div class="grid">
            <button data-navbar=".navbar-wrap" class="navbar-toggle"><span></span></button>
        </div>
    </div>
    <?php get_sidebar('menu-top');?>
</header>
<main></main>