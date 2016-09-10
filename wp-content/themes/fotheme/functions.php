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
require_once( CORE . '/init.php' ); // load file fotheme/core/init.php
if (!function_exists('fotheme_theme_setup')) {
    function fotheme_theme_setup()
    {
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('fotheme', $language_folder); // fotheme la textdomain support translate
        $sidebar = array(
            'name' => __('Tin đã đăng', 'fotheme'),
            'id' => 'tin-da-dang',
            'description' => 'Main sidebar for fotheme theme',
            'class' => 'main-sidebar',
            'before_title' => '<h2 class="title-6">', // tag html off widgettitle(sibar header)
            'after_title' => '</h2>'
        );
        register_sidebar( $sidebar );
        add_image_size( 'fotheme_theme_smallimage', 180, 108, TRUE );
    }
    add_action('init', 'fotheme_theme_setup');

}
