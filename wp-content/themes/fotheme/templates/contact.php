<?php
/*
 Template Name: Contact
 */
?>
<?php get_header(); ?>
    <div class="block-1 contact-block">
        <div class="container">
            <div class="map-block"><img src="<?php bloginfo('template_directory');?>/images/upload/map-1.jpg" alt="map">
            </div>
            <div class="contact-content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="address-list">
                            <address class="address-item">
                                <h2 class="title-4">Tp. Hồ Chí Minh</h2>
                                <div class="content">
                                    <div class="address-group"><i class="fa fa-home"></i>
                                        <p class="desc"><strong>Địa chỉ công ty:</strong> Tầng 02, tòa nhà FPT Tân Thuận, Lô 29B-31B-33B đường Tân Thuận, KCX Tân Thuận, Phường Tân Thuận Đông, Quận 7, TpHCM</p>
                                    </div>
                                    <div class="address-group"><i class="fa fa-phone"></i>
                                        <p class="desc"> <strong>Điện thoại: </strong>+84 - 8 - 7300 9999</p>
                                    </div>
                                    <div class="address-group"><i class="fa fa-fax"></i>
                                        <p class="desc"><strong>Fax:</strong>+84 - 8 - 7300 9998                   </p>
                                    </div>
                                </div>
                            </address>
                            <address class="address-item">
                                <h2 class="title-4">Hà Nội</h2>
                                <div class="content">
                                    <div class="address-group"><i class="fa fa-home"></i>
                                        <p class="desc"><strong>Địa chỉ công ty:</strong>  Tầng 4-5, Tòa nhà FPT, Phố Duy Tân, P. Dịch Vọng Hậu, Quận Cầu Giấy, TP. Hà Nội</p>
                                    </div>
                                    <div class="address-group"><i class="fa fa-phone"></i>
                                        <p class="desc"> <strong>Điện thoại: </strong>+84 - 8 - 7300 9999</p>
                                    </div>
                                    <div class="address-group"><i class="fa fa-fax"></i>
                                        <p class="desc"><strong>Fax:</strong>+84 - 8 - 7300 9998</p>
                                    </div>
                                </div>
                            </address>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <form action="" method="post" class="form-client">
                            <div class="form-group">
                                <div class="form-group-inner">
                                    <label for="name">Họ tên:</label>
                                    <input type="text" id="name" class="form-control">
                                </div>
                                <p id="text-error-name" class="text-error"></p>
                            </div>
                            <div class="form-group">
                                <div class="form-group-inner">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" class="form-control">
                                </div>
                                <p id="text-error-email" class="text-error"></p>
                            </div>
                            <div class="form-group">
                                <div class="form-group-inner">
                                    <label for="content">Nội dung:</label>
                                    <textarea type="text" rows="7" id="content" class="form-control"></textarea>
                                </div>
                                <p id="text-error-content" class="text-error"></p>
                            </div>
                            <button type="button" class="btn-blue" id="btn-send">Gửi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>