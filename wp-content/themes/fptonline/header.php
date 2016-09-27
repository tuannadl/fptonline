<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <link rel="icon" href="favicon-16x16.png" type="image/x-icon" sizes="16x16">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/libs.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/style.css">
    <script src="<?php bloginfo('template_directory');?>/js/modernizr.js"></script>
</head>
<body <?php echo is_home()?'class="home"':''?>>
<header>
    <?php fptonline_logo();?>
    <div class="toggle-wrap">
        <div class="grid">
            <button data-navbar=".navbar-wrap" class="navbar-toggle"><span></span></button>
        </div>
    </div>
    <nav class="navbar-wrap">
        <div class="container">
            <ul class="nav-menu">
                <li <?php echo is_home()?'class="active"':''?>><a href="<?php bloginfo('url');?>" title="Trang chủ">Trang chủ</a>
                </li>

                <?php
                $argsmenu = array(
                    'depth'        => 1,
                    'show_date'    => '',
                    'date_format'  => get_option('date_format'),
                    'child_of'     => 0,
                    //'exclude'      => '267',
                    'include'      => '',
                    'title_li'     => (''),
                    'echo'         => 1,
                    'authors'      => '',
                    'sort_column'  => 'menu_order',
                    'link_before'  => '',
                    'link_after'   => '',
                    'walker'       => '',
                    'post_type'    => 'page',
                    'post_status'  => 'publish'
                );
                wp_list_pages($argsmenu);
                ?>
            </ul>
            <div class="wrap-social">
                <ul class="social-list">
                    <li >      <a href="javascript:;" title="Search" class="wi-icon wi-icon-search">search</a>
                    </li>
                    <li class="item-social">      <a href="facebook.com" title="facebook" class="wi-icon wi-icon-fb">facebook</a>
                    </li>
                    <li>       <a href="google.com" title="goo+" class="wi-icon wi-icon-goo">goo+</a>
                    </li>
                    <li class="item-social"><a href="javascript:;" title="IE" class="wi-icon wi-icon-ie">IE</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php if(is_page()){?>
        <nav class="navbar-wrap-1">
            <div class="container">
                <div class="menu-active">
                    <a href="<?php bloginfo('url'); ?>" title="Trang chủ" class="wi-icon wi-icon-home"></a>
                    <a href="<?php bloginfo('url'); ?>/category/tin-tuc" title="" class="menu-item">
                    <?php $category_detail = get_the_category($posts[0]->ID);
                        echo($category_detail[0]->name);
                    ?>
                    </a>
                    <span class="arrow-bottom-menu"></span>
                </div>
                <ul class="nav-menu-1">
                    <li class="active"><a href="javascript:;" title="Tổng quan">Tổng quan</a>
                    </li>
                    <li><a href="javascript:;" title="Tầm nhìn">Tầm nhìn</a>
                    </li>
                    <li><a href="javascript:;" title="Văn hóa">Văn hóa</a>
                    </li>
                    <li><a href="javascript:;" title="Điều lệ &amp; Ban Lãnh đạo Công ty ">Điều lệ & Ban Lãnh đạo Công ty </a>
                    </li>
                    <li><a href="javascript:;" title="Đối tác">Đối tác</a>
                    </li>
                </ul>
            </div>
        </nav>
    <?php }?>
</header>
<main></main>