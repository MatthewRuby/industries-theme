<?php get_header(); ?>

    <main role="main">

        <img src="http://assindustries.com/beta/wp-content/uploads/2014/08/sealofapproval-250x379.png" alt="sealofapproval" class="golden-seal" />

        <div class="wax-header clear">
            <img src="http://assindustries.com/beta/wp-content/uploads/2014/08/waxchart-large.png" alt="waxchart-large" class="wax-chart" />
            <img src="http://assindustries.com/beta/wp-content/uploads/2014/08/11514-900x1349.jpg" alt="pat moore pouring wax" class="wax-pour" />
        </div>

        <div class="wax-wrap clear">
            <?php $my_query = new WP_Query( array('category__and' => array( 6, 10 ) ) );
            $productIndex = 0;
            while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

                <article id="post-<?php the_ID(); ?>" class="product product-<?php echo $productIndex ?>">
                    <div class="article-wrap clear">
                        <?php if ( has_post_thumbnail()) :
                            the_post_thumbnail('medium');
                        endif; ?>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                            </h2>
                        </header>
                        <div class="entry-content">
                            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
                        </div><!-- .entry-content -->
                    </div>
                </article>
            <?php $productIndex++; endwhile; ?>
        </div>

        <!-- section -->
        <section>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php the_content(); ?>

            </article>
            <!-- /article -->

        <?php endwhile; ?>

        <?php else: ?>

            <!-- article -->
            <article>

                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

            </article>
            <!-- /article -->

        <?php endif; ?>

        <img class="snowboarder-spread" src="http://assindustries.com/beta/wp-content/uploads/2014/08/snowboarder.jpg" alt="snowboarder" />


        <nav class="nav-footer">
            <?php if( get_previous_post() ) : ?>
                <div class="nav-previous">
                    <b>Previous Page</b>
                    <h3><?php previous_post_link('%link'); ?></h3>
                </div>
            <?php else: ?>
                <div class="nav-next">
                    <h3><a href="/">Home</a></h3>
                </div>
            <?php endif; ?>
            <?php if( get_next_post() ) : ?>
                <div class="nav-next">
                    <b>Next Page</b>
                    <h3><?php next_post_link('%link'); ?></h3>
                </div>
            <?php else: ?>
                <div class="nav-next">
                    <h3><a href="/">Home</a></h3>
                </div>
            <?php endif; ?>
        </nav>

        </section>
        <!-- /section -->
    </main>

<?php get_footer(); ?>
