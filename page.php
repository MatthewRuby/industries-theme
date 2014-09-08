<?php get_header(); ?>

	<main role="main">
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
