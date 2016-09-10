<?php
/**
 * Created by PhpStorm.
 * User: tuanna64
 * Date: 9/5/16
 * Time: 2:43 PM
 */
/**
 * @ Thiết lập các hằng dữ liệu quan trọng
 * @ THEME_URL = get_stylesheet_directory() - đường dẫn tới thư mục theme
 * @ CORE = thư mục /core của theme, chứa các file nguồn quan trọng.
 **/
define('THEME_URL', get_stylesheet_directory());
define('CORE', THEME_URL . '/core');
require_once( CORE . '/init.php' ); // load file fptonline/core/init.php
/**
 * @ Thiết lập $content_width để khai báo kích thước chiều rộng của nội dung
 **/
if (!isset($content_width)) {
    /*
     * Nếu biến $content_width chưa có dữ liệu thì gán giá trị cho nó
     */
    $content_width = 620;
}
/**
 * @ Thiết lập các chức năng sẽ được theme hỗ trợ
 **/
if (!function_exists('fptonline_theme_setup')) {
    /*
     * Nếu chưa có hàm fptonline_theme_setup() thì sẽ tạo mới hàm đó
     */
    function fptonline_theme_setup()
    {
        /*
            * Thiết lập theme có thể dịch được
        */
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('fptonline', $language_folder); // fptonline la textdomain support translate
        /*
            * Tự chèn RSS Feed links trong <head>
        */
        add_theme_support('automatic-feed-links');
        /*
            * Thêm chức năng post thumbnail
        */
        add_theme_support( 'post-thumbnails' );
        /*
            * Thêm chức năng title-tag để tự thêm <title>
            * Hiển thị kiểu Tên website | Mô tả website ở trang chủ
            * Hiển thị kiểu Tên post/page | Tên website ở trang nội dung post type
        */
        add_theme_support( 'title-tag' );
        /*
            * Thêm chức năng post format
        */
        add_theme_support( 'post-formats',
            array(
                'image',
                'video',
                'gallery',
                'quote',
                'link'
            )
        );
        /*
            * Thêm chức năng custom background
        */
        $default_background = array(
            'default-color' => '#e8e8e8',
        );
        add_theme_support( 'custom-background', $default_background );
        /*
            * Tạo menu cho theme
        */
        register_nav_menu ( 'primary-menu', __('Primary Menu', 'fptonline') ); // ho tro co the dich duoc // de dich can cau truc __('Text', 'textdomain')
        /*
            * Tạo sidebar cho theme
        */
        $sidebar = array(
            'name' => __('Main Sidebar', 'fptonline'),
            'id' => 'main-sidebar',
            'description' => 'Main sidebar for fptonline theme',
            'class' => 'main-sidebar',
            'before_title' => '<h3 class="widgettitle">', // tag html off widgettitle(sibar header)
            'after_title' => '</h3>'
        );
        register_sidebar( $sidebar );

    }

    add_action('init', 'fptonline_theme_setup');

}
// add function for theme
/**
@ Thiết lập hàm hiển thị logo
@ fptonline_logo()
 **/
if ( ! function_exists( 'fptonline_logo' ) ) {
    function fptonline_logo() {?>
        <a href="index.html" title="FPT" class="logo"><img src="images/logo.png" alt="logo"></a>
    <?php }
}
/**
@ Thiết lập hàm hiển thị menu
@ fptonline_menu( $slug )
 **/
if ( ! function_exists( 'fptonline_menu' ) ) {
    function fptonline_menu( $slug ) {
        $menu = array(
            'theme_location' => $slug,
            'container' => 'nav',
            'container_class' => $slug,
        );
        wp_nav_menu( $menu );
    }
}
