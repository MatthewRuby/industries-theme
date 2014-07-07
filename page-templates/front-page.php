<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

?>

	<div id="primary" class="site-content basic-layout hello">
		<div id="content" role="main">
		<?php if ( have_posts() ) : ?>
			<?php $index = 0; ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-index="<?php echo $index; ?>">

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


				</article><!-- #post -->

				<?php $index++; ?>


			<?php endwhile; ?>

			<?php //twentytwelve_content_nav( 'nav-below' ); ?>

		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->