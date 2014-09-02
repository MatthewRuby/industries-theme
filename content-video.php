<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content">
    <?php
        $content = strip_shortcode_gallery( get_the_content() );
        preg_match( '/<iframe(.*)\/iframe>/is', $content, $video);
        echo $video[0];
    ?>
        <h1 class="entry-title no-image"><?php the_title(); ?> </h1>

        <div class="body-text">
    <?php

        echo preg_replace( '/<iframe(.*)\/iframe>/is', '', $content );

    ?>
        </div>
    </div>


    <footer class="entry-meta">
        <b class="category"><?php the_category('single'); ?></b>
        <time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo get_the_date(); ?></time>
<!--         <ul class="feed-share-tools">
            <li class="share-tool facebook">
                <a href="#">Facebook</a>
            </li>
            <li class="share-tool twitter">
                <a href="https://twitter.com/intent/tweet?text=<?php echo the_title(); ?>&url=<?php echo urlencode(get_permalink()); ?>">Twitter</a>
            </li>
        </ul> -->
    </footer>

</article>