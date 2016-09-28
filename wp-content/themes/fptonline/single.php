<?php get_header();?>Single page
    <!-- show post detail -->
<div class="block-1 news-detail-block">
    <div class="container">
        <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-sm-8">
                <div class="news-detail-inner">
                    <h2 class="title-4"><?php the_title(); ?></h2>
                    <div class="date-group"><span class="date"><?php echo date('d/m/Y',strtotime($posts[0]->post_date));?></span><span class="time"><?php echo date('h:i:s',strtotime($posts[0]->post_date));?></span></div>
                    <div class="desc">
                        <?php the_content();?>
                    </div>
                    <p class="author"><?php echo ucfirst(get_the_author_meta('nickname',$authid)); ?></p>
                </div>
            </div>
<?php endwhile;endif; ?>
            <div class="col-sm-4">
                <div class="news-different">
                    <?php get_sidebar('tintuc'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.nav-menu').find('.page-item-44').addClass('active');
    });
    console.log('nguyen Anh Tuan');
</script>