<?php
/*
 Template Name: Contact
 */
?>
<?php get_header(); ?>

    <div id="content">

        <section id="main-content">
            <div class="contact-info">
                <h4>�?a ch? li�n l?c</h4>
                <p>Ghi �?a ch? v�o ��y</p>
                <p>090 456 765</p>
            </div>
            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="31" title="form_lien_he"]'); ?>
            </div>
        </section>
        <section id="sidebar">
            <?php get_sidebar(); ?>
        </section>

    </div>

<?php get_footer(); ?>