<h2 class="title-6">Tin khác - <?php if(is_single()&&isset($post)){
        echo($post->ID);
    }?></h2>

<ul class="news-list">
    <?php
    $arrData = (wp_get_recent_posts());
    foreach($arrData as $value){
    ?>
        <li><a href="<?php the_permalink($value['ID']); ?>" title="<?php echo $value['post_title']?>"><i class="icon-arrow-green"></i><span><?php echo $value['post_title'];?></span></a></li>
    <?php }?>
</ul>
