<!-- header -->
<?php get_header(); ?>
<?php get_sidebar('slideshow'); ?>
<?php get_sidebar('top-content'); ?>
<?php get_sidebar('gioithieu'); ?>
<div class="event-block container">
    <h2 class="title-3"><i class="wi-icon wi-icon-computer"></i>Tin tức - Sự kiện</h2>

    <div class="event-list">
        <?php
        $args_my_query = array(
            'post_type' => 'post',
            'orderby' => 'DESC',
            'posts_per_page' => 4
        );
        $my_query_post = new WP_Query($args_my_query);//echo '<pre>';print_r($my_query_post->posts);
        ?>
        <?php foreach($my_query_post->posts as $post){ setup_postdata($post);?>
            <div class="event-media col-sm-6">
                <div class="media-left">
                    <a href="<?php  ?>"
                       title="<?php ?>"><?php echo get_the_post_thumbnail($post->ID, 'fotheme_theme_smallimage'); ?></a>
                </div>
                <div class="media-body">
                    <a href="<?php the_permalink(); ?>">
                        <h3 class="title-4""><?php echo ucfirst(the_title('','',false)); ?></h3>
                    </a>
                    <p class="date"><?php the_modified_date('d/m/Y'); ?><span><?php echo the_modified_date('H:i:s'); ?></span></p>
                    <p class="desc"><?php the_excerpt(); ?></p>
                </div>
            </div>
        <?php } wp_reset_postdata();unset($my_query_post,$args_my_query);?>
    </div>
</div>
<?php get_sidebar('download'); ?>
<?php get_sidebar('tuyendung'); ?>
<?php get_footer(); ?>