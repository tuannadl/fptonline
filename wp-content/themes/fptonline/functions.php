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
            'before_title' => '<h2 class="title-6">', // tag html off widgettitle(sibar header)
            'after_title' => '</h2>'
        );
        register_sidebar( $sidebar );
        add_image_size( 'fptonline_theme_smallimage', 180, 108, TRUE );
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
        <a href="<?php bloginfo('url'); ?>" title="FPT" class="logo"><img src="<?php echo get_theme_root_uri().'/testtheme/'?>images/logo.png" alt="logo"></a>
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
/**
@ Tạo hàm phân trang cho index, archive.
@ Hàm này sẽ hiển thị liên kết phân trang theo dạng chữ: Newer Posts & Older Posts
@ fptonline_pagination()
 **/
if ( ! function_exists( 'fptonline_pagination' ) ) {
    function fptonline_pagination() { echo $GLOBALS['wp_query']->max_num_pages;
        /*
         * Không hiển thị phân trang nếu trang đó có ít hơn 2 trang
         */
        if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
            return '';
        }
        ?>
        <?php if ( get_next_post_link() ) : ?>
            <li><button type="button" class="prev-btn"><?php next_posts_link( __('Trang trước', 'fptonline') ); ?></button></li>
        <?php endif; ?>

        <?php if ( get_previous_post_link() ) : ?>
            </li><button type="button" class="next-btn"><?php previous_posts_link( __('Trang sau', 'fptonline') ); ?></button></li>
        <?php endif; ?>

        <?php
    }
}

if ( ! function_exists( 'fptonline_thumbnail' ) ) {
    function fptonline_thumbnail( $size ) {

        // Chỉ hiển thumbnail với post không có mật khẩu
        if ( ! is_single() &&  has_post_thumbnail()  && ! post_password_required() || has_post_format( 'image' ) ) : ?>
            <figure class="post-thumbnail"><?php the_post_thumbnail( $size ); ?></figure><?php
        endif;
    }
}

/**
@ Hàm hiển thị tiêu đề của post trong .entry-header
@ Tiêu đề của post sẽ là nằm trong thẻ <h1> ở trang single
@ Còn ở trang chủ và trang lưu trữ, nó sẽ là thẻ <h2>
@ fptonline_entry_header()
 **/
if ( ! function_exists( 'fptonline_entry_header' ) ) {
    function fptonline_entry_header() {
        if ( is_single() ) : ?>
            <h1 class="entry-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                    <?php the_title(); ?>
                </a>
            </h1>
        <?php else : ?>
            <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                <?php the_title(); ?>
            </a>
            </h2><?php

        endif;
    }
}

/**
@ Hàm hiển thị thông tin của post (Post Meta)
@ fptonline_entry_meta()
 **/
if( ! function_exists( 'fptonline_entry_meta' ) ) {
    function fptonline_entry_meta() {
        if ( ! is_page() ) :
            echo '<div class="entry-meta">';

            // Hiển thị tên tác giả, tên category và ngày tháng đăng bài
            printf( __('<span class="author">Posted by %1$s</span>', 'fptonline'),
                get_the_author() );

            printf( __('<span class="date-published"> at %1$s</span>', 'fptonline'),
                get_the_date() );

            printf( __('<span class="category"> in %1$s</span>', 'fptonline'),
                get_the_category_list( ', ' ) );

            // Hiển thị số đếm lượt bình luận
            if ( comments_open() ) :
                echo ' <span class="meta-reply">';
                comments_popup_link(
                    __('Leave a comment', 'fptonline'),
                    __('One comment', 'fptonline'),
                    __('% comments', 'fptonline'),
                    __('Read all comments', 'fptonline')
                );
                echo '</span>';
            endif;
            echo '</div>';
        endif;
    }
}

/*
 * Thêm chữ Read More vào excerpt
 */
function fptonline_readmore() {
    echo '<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Xem thêm', 'fptonline') . '</a>';
}


/**
@ Hàm hiển thị nội dung của post type
@ Hàm này sẽ hiển thị đoạn rút gọn của post ngoài trang chủ (the_excerpt)
@ Nhưng nó sẽ hiển thị toàn bộ nội dung của post ở trang single (the_content)
@ fptonline_entry_content()
 **/
if ( ! function_exists( 'fptonline_entry_content' ) ) {
    function fptonline_entry_content() {

        if ( ! is_single() ) :
            the_excerpt();
        else :
            the_content();

            /*
             * Code hiển thị phân trang trong post type
             */
            $link_pages = array(
                'before' => __('<p>Page:', 'fptonline'),
                'after' => '</p>',
                'nextpagelink'     => __( 'Next page', 'fptonline' ),
                'previouspagelink' => __( 'Previous page', 'fptonline' )
            );
            wp_link_pages( $link_pages );
        endif;

    }
}
/**
@ Hàm hiển thị tag của post
@ fptonline_entry_tag()
 **/
if ( ! function_exists( 'fptonline_entry_tag' ) ) {
    function fptonline_entry_tag() {
        if ( has_tag() ) :
            echo '<div class="entry-tag">';
            printf( __('bài viết liên quan %1$s', 'fptonline'), get_the_tag_list( '', ', ' ) );
            echo '</div>';
        endif;
    }
}