<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-thumbnail">
        <?php fptonline_thumbnail( 'thumbnail' ); ?>
    </div>
    <header class="entry-header">
        <?php fptonline_entry_header(); ?>
        <?php fptonline_entry_meta() ?>
    </header>
    <div class="entry-content">
        <?php fptonline_entry_content(); ?>
        <?php ( !is_single() ? fptonline_readmore() : '' ); ?>
        <?php ( is_single() ? fptonline_entry_tag() : '' ); ?>
    </div>
</article>