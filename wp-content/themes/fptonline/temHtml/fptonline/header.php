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
    <link rel="stylesheet" href="css/libs.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/modernizr.js"></script>
    <!-- code wp -->
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
      <link rel="profile" href="http://gmgp.org/xfn/11" />
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

      <?php wp_head(); ?>
    <!-- end code wp -->

  </head>
  <body <?php body_class(); ?>>
  <header>
      <?php fptonline_logo();?>
      <div class="toggle-wrap">
          <div class="grid">
              <button data-navbar=".navbar-wrap" class="navbar-toggle"><span></span></button>
          </div>
      </div>
      <nav class="navbar-wrap">
          <div class="container">
              <?php fptonline_menu( 'primary-menu' ); ?>
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
  </header>
  <main></main>