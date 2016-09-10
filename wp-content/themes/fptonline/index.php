<?php get_header(); ?>
    <div class="slide bonus-block owl-carousel" id="owl_slide_topbanner">
        <div class="slide-item"><img src="<?php bloginfo('template_directory');?>/images/upload/map.jpg" alt="map" class="map">
            <div class="container">
                <figure class="main-img"><img src="<?php bloginfo('template_directory');?>/images/upload/girl.png" alt="people">
                </figure>
                <div class="inner">
                    <h2 class="title-1">Tập đoàn khen thưởng FPT Online vì áp dụng tốt BSC</h2>
                    <p class="desc">Công ty CP Dịch vụ trực tuyến FPT là đơn vị duy nhất trong tập đoàn hoàn thành kế hoạch BSC trong 3 tháng đầu năm nay với các chỉ số đều xanh. </p>
                </div>
            </div>
        </div>
        <div class="slide-item"><img src="<?php bloginfo('template_directory');?>/images/upload/map.jpg" alt="map" class="map">
            <div class="container">
                <figure class="main-img"><img src="<?php bloginfo('template_directory');?>/images/upload/girl.png" alt="people">
                </figure>
                <div class="inner">
                    <h2 class="title-1">Tập đoàn khen thưởng FPT Online</h2>
                    <p class="desc">Công ty CP Dịch vụ trực tuyến FPT là đơn vị duy nhất trong tập đoàn hoàn thành kế hoạch BSC trong 3 tháng đầu năm nay với các chỉ số đều xanh. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="newspaper">
        <div class="container">
            <div class="newspaper-block newspaper-block-1">
                <div class="content">
                    <h2 class="title-2">Tòa soạn Báo Điện Tử</h2>
                    <p class="desc">Phát hành nội dung Báo điện tử Vnexpress, Ngoisao.net, Ione, Game thủ về Thông tin nhanh & mới nhất được cập nhật hàng giờ. Tin tức Việt Nam & thế giới về xã hội, kinh doanh, pháp luật, khoa học, công nghệ, sức khoẻ, đời sống, văn hóa, rao vặt, tâm sự... và các sự kiện trưc tuyến khác.</p>
                </div>
                <figure class="main-img"><img src="<?php bloginfo('template_directory');?>/images/upload/computer.png" alt="computer">
                </figure>
            </div>
            <div class="newspaper-block newspaper-block-2">
                <figure class="main-img"><img src="<?php bloginfo('template_directory');?>/images/upload/earth.png" alt="earth">
                </figure>
                <div class="content">
                    <h2 class="title-2">Quảng cáo trực tuyến </h2>
                    <p class="desc">Với các sản phẩm dịch vụ của eClick: Ad Network, Banner, Tin bài PR, Bảo trợ thông tin, Phỏng vấn trực tuyến, Tài trợ sự kiện, Chiến dịch quảng cáo, Topic / Subfolder cùng các thương hiệu hàng đầu. Truyền tải thông tin nhanh nhất đến hàng triệu người dùng Việt Nam và thế giới</p>
                </div>
            </div>
        </div>
    </div>
    <div class="introdution container">
        <h2 class="title-3"> <i class="wi-icon wi-icon-people"></i>Giới thiệu</h2>
        <div class="introdution-block">
            <a href="#" class="main-img"><img src="<?php bloginfo('template_directory');?>/images/upload/intro-img.jpg" alt="fpt"><span class="text-1">Toà nhà FPT Tân Thuận - Trụ sở FPT Online Hồ Chí Minh</span>
            </a>
            <div class="left-block">
                <div class="inner">
                    <a href="#">
                        <h3 class="title-4">Công ty Cổ phần Dịch vụ Trực tuyến FPT (FPT Online)</h3>
                    </a>
                    <div class="desc">
                        <p>Công ty Cổ Phần Dịch vụ Trực tuyến FPT (FPT Online) chính thức thành lập ngày 1/7/2007. FPT Online ra đời đánh dấu sự khởi đầu của một hướng kinh doanh tuy không mới nhưng đầy hứa hẹn trong xu thế công nghệ số toàn cầu của Tập đoàn FPT. </p>
                        <p>FPT Online tập trung vào các mảng hoạt động quảng cáo trực tuyến, game online, thương mại điện tử, âm nhạc trực tuyến, mạng xã hội và dịch vụ sms. Với những hoạt động này, FPT Online đã từng bước khẳng định vị thế trên thị trường nội dung số Việt Nam.</p><a href="<?php bloginfo('url'); ?>/gioi-thieu" title="Xem tiếp" class="link-1"><i class="wi-icon wi-icon-arrow"></i>Xem tiếp</a>
                    </div>
                </div>
                <div class="product">
                    <h3 class="title-5">Các thương hiệu sản phẩm của FPT Online</h3>
                    <div class="slide">
                        <div class="slide-item">
                            <div class="product-list"><a href="#" class="product-item"><img src="<?php bloginfo('template_directory');?>/images/upload/vn-express.png" alt="vn Express"></a><a href="#" class="product-item"><img src="<?php bloginfo('template_directory');?>/images/upload/ngoisao.png" alt="vn Express"></a><a href="#" class="product-item"><img src="<?php bloginfo('template_directory');?>/images/upload/ione.png" alt="vn Express"></a><a href="#" class="product-item"><img src="<?php bloginfo('template_directory');?>/images/upload/game.png" alt="vn Express"></a><a href="#" class="product-item"><img src="<?php bloginfo('template_directory');?>/images/upload/vitalk.png" alt="vn Express"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="event-block container">
        <h2 class="title-3"> <i class="wi-icon wi-icon-computer"></i>Tin tức - Sự kiện</h2>
        <div class="event-list">

                <?php
                $args_my_query = array(
                    'post_type' => 'post',
                    'orderby' => 'DESC',
                    'posts_per_page' => 4
                );
                $my_query_post = new WP_Query($args_my_query);
                $dataTin = $my_query_post->posts;
                if( $my_query_post->have_posts()) : while( $my_query_post->have_posts() ) : $my_query_post->the_post();
                ?>
                <div class="event-media col-sm-6">
                    <div class="media-left">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php echo get_the_post_thumbnail(get_the_ID(), 'fptonline_theme_smallimage' ); ?></a>
                    </div>
                    <div class="media-body">
                        <a href="<?php the_permalink(); ?>">
                            <h3 class="title-4"><?php the_title();?></h3>
                        </a>
                        <p class="date">31/03/2016<span>12:00</span></p>
                        <p class="desc"><?php the_excerpt();?></p>
                    </div>
                </div>
                <?php $i++ ;endwhile; endif;?>

        </div>
    </div>
    <div class="download-block container">
        <h2 class="title-3"> <i class="wi-icon wi-icon-download"> </i>Download</h2>
        <div class="list-download">
            <div class="row">
                <div class="col-sm-6 col-md-4"><a href="#" class="item-download"><i class="wi-icon-adobe wi-icon"></i><span class="text-1">Báo cáo tài chính hợp nhất Q01.2016</span></a><a href="#" class="item-download"><i class="wi-icon-paper wi-icon"></i><span class="text-1">Giấy ủy quyền tham dự ĐHCĐ 2016</span></a><a href="#" class="item-download"><i class="wi-icon-x wi-icon"></i><span class="text-1">Thông báo đại hội cổ đông 2016</span></a>
                </div>
                <div class="col-sm-6 col-md-4"><a href="#" class="item-download"><i class="wi-icon-adobe wi-icon"></i><span class="text-1">Báo cáo tài chính hợp nhất Q01.2016</span></a><a href="#" class="item-download"><i class="wi-icon-paper wi-icon"></i><span class="text-1">Giấy ủy quyền tham dự ĐHCĐ 2016</span></a><a href="#" class="item-download"><i class="wi-icon-x wi-icon"></i><span class="text-1">Thông báo đại hội cổ đông 2016</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="recruitment container">
        <figure class="main-img"><img src="<?php bloginfo('template_directory');?>/images/upload/laptop.png" alt="laptop">
        </figure>
        <div class="recruitment-block">
            <h2 class="title-3"> <i class="wi-icon wi-icon-setting"></i>Tuyển dụng</h2>
            <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">
                <div class="panel">
                    <div id="heading-1" role="tab" class="panel-heading">
                        <div class="panel-title"><a href="#collapseOne" title="Nhân viên kinh doanh quảng cáo" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne"><i class="wi-icon wi-icon-cavat"></i><span class="text-1">Nhân viên kinh doanh quảng cáo</span></a>
                        </div>
                    </div>
                    <div role="tabpanel" aria-labelledby="heading-1" class="panel-collapse">
                        <div class="panel-body">
                            <div class="desc">
                                <p>- Kinh doanh quảng cáo online banner trên các trang báo VNExpress.net, Ngoisao.net, dự án eClick.vn...</p>
                                <p>- Tìm kiếm và tiếp cận khách hàng tiềm năng để tư vấn về dịch vụ quảng cáo trực tuyến.</p>
                                <p>- Thu nhận thông tin phản hồi và chăm sóc khách hàng của mình hoặc được giao từ Team/ Account Manager<a href="#" title="xem chi tiết" class="link-2">xem chi tiết</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div id="heading-2" role="tab" class="panel-heading">
                        <div class="panel-title"><a href="#collapseOne" title="Nhân viên kinh doanh quảng cáo" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne"><i class="wi-icon wi-icon-cavat"></i><span class="text-1">Nhân viên kinh doanh quảng cáo</span></a>
                        </div>
                    </div>
                    <div role="tabpanel" aria-labelledby="heading-2" class="panel-collapse">
                        <div class="panel-body">
                            <div class="desc">
                                <p>- Kinh doanh quảng cáo online banner trên các trang báo VNExpress.net, Ngoisao.net, dự án eClick.vn...</p>
                                <p>- Tìm kiếm và tiếp cận khách hàng tiềm năng để tư vấn về dịch vụ quảng cáo trực tuyến.</p>
                                <p>- Thu nhận thông tin phản hồi và chăm sóc khách hàng của mình hoặc được giao từ Team/ Account Manager<a href="#" title="xem chi tiết" class="link-2">xem chi tiết</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>