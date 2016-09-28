<?php
/*
 Template Name: Tintuc
 */
?>
<?php get_header(); ?>
<div class="block-1 news-detail-block">
<div class="container">
<div class="row">
<div class="col-sm-8">
    <div class="news-detail-inner news-detail-inner-1">
        <?php
        $idObj = get_category_by_slug('tin-tuc');
        $this_id_cat = $idObj->term_id;
        $arg = array('posts_per_page' => 1, 'paged' => $paged, 'cat' => $this_id_cat,'order' => 'DESC','offset' => 0);
        $myposts = query_posts($arg);
        foreach ($myposts as $post) {
        setup_postdata($post);
       ?>
        <div class="event-media event-media-group">
            <div class="media-left"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo get_the_post_thumbnail(get_the_ID(), 'medium' ); ?></a>
            </div>
            <div class="media-body">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <h3 class="title-4"><?php the_title(); ?></h3>
                </a>
                <div class="date-group">
                    <span class="date"><?php echo date('d/m/Y',strtotime($posts[0]->post_date));?></span>
                    <span class="time"><?php echo date('h:i:s',strtotime($posts[0]->post_date));?></span>
                </div>
                <p class="desc"><?php the_excerpt();?></p>
            </div>
        </div>
        <?php } ?>
        <div class="event-list event-list-1">
            <?php
            global $paged;
            global $post;
            $arg = array('posts_per_page' => 8, 'paged' => $paged, 'cat' => $this_id_cat,'order' => 'DESC');//,'offset' => 1);
            $myposts = query_posts($arg);
            ?>
            <!--<div class="col-1">-->
                <?php
                    foreach ($myposts as $post) {
                        setup_postdata($post);
                        $i++;
                ?>
                <div class="event-media col-2">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <h3 class="title-4"><?php the_title(); ?></h3>
                    </a>
                    <div class="media-left"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail' ); ?></a>
                    </div>
                    <div class="media-body">
                        <p class="desc"><?php the_excerpt();?></p>
                    </div>
                </div>
                <?php }?>
        </div>
        <ul class="list-news-btn">
            <?php  //fptonline_pagination(); ?>
           <?php
          global $wp_query;
            $big = 99; // phân trang seocam.edu.vn
            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'prev_text' => __('Trang trước'),
                'next_text' => __('Trang sau'),
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages
            ) );
           ?>
        </ul>
    </div>
</div>
<div class="col-sm-4">
    <div class="news-different">
        <h2 class="title-6">Thông tin cổ đông</h2>
        <ul class="news-list news-list-1">
            <li>
                <div class="date-group"><span class="date">31/03/2016</span><span class="time">12:00</span></div>
                <p class="desc">Nghị Quyết Đại Hội Đồng Cổ Đông Thường Niên 2016</p>
            </li>
            <li>
                <div class="date-group"><span class="date">31/03/2016</span><span class="time">12:00</span></div>
                <p class="desc">Nghị Quyết Đại Hội Đồng Cổ Đông Thường Niên 2016</p>
            </li>
            <li>
                <div class="date-group"><span class="date">31/03/2016</span><span class="time">12:00</span></div>
                <p class="desc">Nghị Quyết Đại Hội Đồng Cổ Đông Thường Niên 2016</p>
            </li>
            <li>
                <div class="date-group"><span class="date">31/03/2016</span><span class="time">12:00</span></div>
                <p class="desc">Nghị Quyết Đại Hội Đồng Cổ Đông Thường Niên 2016</p>
            </li>
            <li>
                <div class="date-group"><span class="date">31/03/2016</span><span class="time">12:00</span></div>
                <p class="desc">Nghị Quyết Đại Hội Đồng Cổ Đông Thường Niên 2016</p>
            </li>
        </ul>
    </div>
    <div class="news-different news-different-1">
        <h2 class="title-6">Thông tin liên hệ</h2>
        <ul class="news-list">
            <li>
                <dl class="contact-text-group">
                    <dt>
                    <p>
                        <i class="wi-icon wi-icon-email"></i>
                        Địa chỉ email:
                    </p>
                    </dt>
                    <dd>
                        <ul class="mail-list">
                            <li><a href="#" title="lienhe@fpt.com.vn">lienhe@fpt.com.vn</a></li>
                            <li><a href="#" title="info@vnexpress.net">info@vnexpress.net</a></li>
                        </ul>
                    </dd>
                </dl>
            </li>
            <li>
                <dl class="contact-text-group">
                    <dt>
                    <p>
                        <i class="wi-icon wi-icon-phone"></i>
                        Liên hệ qua tổng đài điện thoại::
                    </p>
                    </dt>
                    <dd>
                        <p class="number-phone">+84 8 7300 9999</p>
                    </dd>
                </dl>
            </li>
        </ul>
        <figure class="img-email">
            <img src="images/upload/email-big.png" alt="email-big.png"/>
        </figure>
    </div>
</div>
</div>
</div>
</div>

<?php get_footer(); ?>
