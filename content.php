<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!-- post title -->
    <h1>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    </h1>

    <!-- post thumbnail -->
    <?php if ( has_post_thumbnail()) : ?>
        <div class="feature-image">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>
    <!-- /post thumbnail -->


    <!-- /post title -->
    <div class="entry-content">
        <?php the_content(); // Dynamic Content ?>
    </div>


    <footer class="entry-meta">
        <b class="category"><?php the_category('single'); ?></b>
        <time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo get_the_date(); ?></time>
        <ul class="feed-share-tools">
            <li class="share-tool facebook">
                <a href="#">Facebook</a>
            </li>
            <li class="share-tool twitter">
                <a href="https://twitter.com/intent/tweet?text=<?php echo the_title(); ?>&url=<?php echo urlencode(get_permalink()); ?>">Twitter</a>
            </li>
        </ul>

    </footer>

</article>