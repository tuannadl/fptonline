<?php
/*
 Template Name: static-page
 */
?>
<?php get_header(); ?>
    <div class="introduce-wrap">
        <?php if(isset($post)){
            echo '<pre>';print_r($post);
        }else{
            echo 'Đi chết đi mày ơi';
        }?>
    </div>

<?php get_footer(); ?>