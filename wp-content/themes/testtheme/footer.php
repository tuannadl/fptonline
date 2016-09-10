<footer>
    <div class="container">
        <div class="content">
            <nav>
                <ul class="nav-menu-footer">
                    <li class="active"><a href="#" title="	Liên hệ - Giấy phép">	Liên hệ - Giấy phép</a>
                    </li>
                    <li><a href="#" title="Chính sách bảo mật">Chính sách bảo mật</a>
                    </li>
                    <li><a href="#" title="Điều khoản sử dụng">Điều khoản sử dụng</a>
                    </li>
                </ul>
            </nav>
            <?php fptonline_logo();?>
            <p class="text-1">Bản quyền thuộc về <a href="index.html" title="FPT Online">FPT Online</a> 2016 </p>
        </div>
    </div>
</footer>
<script>
    var username = document.getElementById("name");
    var email = document.getElementById("email");
    var content = document.getElementById("content");
    var errorName = document.getElementById("text-error-name");
    var errorEmail = document.getElementById("text-error-email");
    var errorContent = document.getElementById("text-error-content");
    var btn = document.getElementById("btn-send");
    btn.addEventListener('click',function(){
        if(username.value == "") {
            errorName.innerHTML = "Họ tên không được để trống";
        }else {
            errorName.innerHTML = "";
        }
        if(email.value == "") {
            errorEmail.innerHTML = "Email không được để trống";
        }else {
            errorEmail.innerHTML = "";
        }
        if(content.value == "") {
            errorContent.innerHTML = "Nội dung không được để trống";
        }else {
            errorContent.innerHTML = "";
        }
    });

</script>
<script src="js/l10n.js"></script>
<script src="js/libs.js"></script>
<script src="js/jquery-1.9.0.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/script.js"></script><!-- build:development-only -->
<script src="//localhost:35729/livereload.js"></script><!-- endbuild -->
<!--[if lte IE 9]><p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
<noscript>JavaScript is off. Please enable to view full site.</noscript>
<?php wp_footer(); ?>
</body> <!--end body-->
</html> <!--end html -->