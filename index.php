<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content basic-layout">
<!-- 		<div id="content" role="main"> -->


		<?php if ( have_posts() ) : ?>
			<?php $index = 0; ?>

			<div id="lede">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php if ( $index == 3 ) : ?><div id="feed"><?php endif; ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-index="<?php echo $index; ?>">
					<div class="article-wrap">

						<header class="entry-header">
							<?php if ( ! post_password_required() && ! is_attachment() ) :
								the_post_thumbnail();
							endif; ?>

							<?php if ( is_single() ) : ?>

								<h1 class="entry-title"><?php the_title(); ?></h1>
								<?php else : ?>

								<b class="category"><?php the_category('single'); ?></b><time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo get_the_date(); ?></time>
								<h1 class="entry-title">
									<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
								</h1>

							<?php endif; // is_single() ?>

						</header><!-- .entry-header -->

						<?php if ( is_search() ) : // Only display Excerpts for Search ?>

							<div class="entry-summary">
								<?php the_excerpt(); ?>
							</div><!-- .entry-summary -->

						<?php else : ?>

							<div class="entry-content">
								<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
								<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
							</div><!-- .entry-content -->

						<?php endif; ?>


						<footer class="entry-meta">


						</footer><!-- .entry-meta -->

					</div>

				</article><!-- #post -->


				<?php if ( $index == 2 ) : ?></div><?php endif; ?>

				<?php $index++; ?>

			<?php endwhile; ?>

			</div>

		<?php endif; ?>

		<?php get_sidebar(); ?>

		<!-- </div> --><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>