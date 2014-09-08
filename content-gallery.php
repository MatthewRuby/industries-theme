<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content">
    <?php

        $gallery = get_post_gallery();
        echo $gallery;
    ?>
        <div class="body-text">
    <?php
        $content = strip_shortcode_gallery( get_the_content() );
        $content = str_replace( ']]>', ']]&gt;', apply_filters( 'the_content', $content ) );
        echo $content;

    ?>
        </div>
    </div>


    <footer class="entry-meta">
        <b class="category"><?php the_category(' '); ?></b>
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