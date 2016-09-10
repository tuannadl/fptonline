<?php
/*
 Template Name: Tintuc
 */
?>
<?php get_header(); ?>
<div id="body">
    <div class="row">
        <div class="col-md-8">
            <ol class="breadcrumb">
                <li><a href="<?php bloginfo('url'); ?>"><i class="icon-home"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>">Tin tức</a></li>
                <li class="active">Tin tức</li>
            </ol> <?php global $post;
            global $paged;
            $idObj = get_category_by_slug('tin-tuc');
            $this_id_cat = $idObj->term_id;
            $arg = array('posts_per_page' => -1, 'paged' => $paged, 'cat' => $this_id_cat);
            $myposts = query_posts($arg);
            echo '<pre>';print_r($myposts);
            foreach ($myposts as $post): setup_postdata($post);
                {
                echo '<pre>';print_r($post);
                    echo '<hr/>';
              }endforeach; ?>
            <div id=”navigation”>// Nhiều người dùng nav nhưng mình dùng div cho lành

                <div class=”wp-pagenavi”>

                    <?php

                    global $wp_query;

                    $big = 999999999; // phân trang seocam.edu.vn

                    echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'prev_text' => __('« Mới hơn'),
    'next_text' => __('Xem trang sau »'),
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages
    ) );
    ?>

                    <div class=”clear”></div>

                </div>

            </div>
            <div class="text-right">
                <ul class="pagination">                    <?php //wp_pagenavi(); ?>                </ul>
            </div>
        </div>
        <br class="hidden-sm hidden-md hidden-lg"> <?php get_sidebar(); ?>    </div>
</div>

<?php get_footer(); ?>
