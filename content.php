<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <?php if ( has_post_thumbnail()) : ?>

        <div class="feature-image"><?php the_post_thumbnail(); ?></div>
        <h1 class="entry-title"><?php the_title(); ?></h1>

    <?php else: ?>

        <h1 class="entry-title no-image"><?php the_title(); ?> </h1>

    <?php endif; ?>


    <!-- /post title -->
    <div class="entry-content">
        <?php the_content(); // Dynamic Content ?>
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