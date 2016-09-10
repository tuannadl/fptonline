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
                <li><a href="<?php bloginfo('url'); ?>/san-pham-dich-vu" title="Sản phẩm - Dịch vụ">Sản phẩm - Dịch vụ</a>
                </li>
                <li><a href="<?php bloginfo('url'); ?>/category/tin-tuc" title="Tin tức">Tin tức</a>
                </li>
                <li><a href="<?php bloginfo('url'); ?>/gioi-thieu" title="Giới thiệu">Giới thiệu</a>
                </li>
                <li><a href="<?php bloginfo('url'); ?>/quan-he-co-dong" title="Quan hệ cổ đông">Quan hệ cổ đông</a>
                </li>
                <li><a href="<?php bloginfo('url'); ?>/tuyen-dung" title="Tuyển dụng">Tuyển dụng</a>
                </li>
                <li><a href="<?php bloginfo('url'); ?>/lien-he" title="Liên hệ">Liên hệ</a>
                </li>
            </ul>
            <div class="wrap-social">
                <ul class="social-list">
                    <li >      <a href="#" title="Search" class="wi-icon wi-icon-search">search</a>
                    </li>
                    <li class="item-social">      <a href="facebook.com" title="facebook" class="wi-icon wi-icon-fb">facebook</a>
                    </li>
                    <li>       <a href="google.com" title="goo+" class="wi-icon wi-icon-goo">goo+</a>
                    </li>
                    <li class="item-social">       <a href="#" title="IE" class="wi-icon wi-icon-ie">IE</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php if(is_single()){?>
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
                    <li class="active"><a href="#" title="Tổng quan">Tổng quan</a>
                    </li>
                    <li><a href="#" title="Tầm nhìn">Tầm nhìn</a>
                    </li>
                    <li><a href="#" title="Văn hóa">Văn hóa</a>
                    </li>
                    <li><a href="#" title="Điều lệ &amp; Ban Lãnh đạo Công ty ">Điều lệ & Ban Lãnh đạo Công ty </a>
                    </li>
                    <li><a href="#" title="Đối tác">Đối tác</a>
                    </li>
                </ul>
            </div>
        </nav>
    <?php }?>
</header>
<main></main>