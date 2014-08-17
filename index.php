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
			<?php $index = 0; $end = 3; ?>

			<div id="lede">

			<?php while ( have_posts() ) : the_post(); $extraClass = "article-".$index ?>

				<?php if ( $index == $end ) : ?>
					</div><div id="feed">
				<?php endif; ?>

				<?php
					if( is_sticky() && get_post_format( $post_id ) == 'image' ) :
						$end = 1;
						$extraClass .= ' super-lede';
					endif;
				?>

				<article id="post-<?php the_ID(); ?>" class="<?php foreach(get_post_class(array($extraClass), the_ID() ) as $c){ echo $c . " "; }; ?>">

					<div class="article-wrap">
						<?php
							if( is_sticky() && get_post_format( $post_id ) == 'image' ){
								the_post_thumbnail('full');
							} else {
								the_post_thumbnail('medium');
							}
						?>
						<header class="entry-header">
							<?php if ( is_single() ) : ?>
								<h1 class="entry-title"><?php the_title(); ?></h1>
								<?php else : ?>

								<?php if( $index < $end ){ ?>
									<h1 class="entry-title">
										<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
									</h1>
								<?php } else { ?>
										<b class="category"><?php the_category('single'); ?></b><time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo get_the_date(); ?></time>
										<h1 class="entry-title">
											<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
										</h1>
								<?php } ?>


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
							<?php if( $index < $end ) : ?>
								<b class="category"><?php the_category('single'); ?></b><time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo get_the_date(); ?></time>
							<?php endif; ?>
							<!-- <a href="https://twitter.com/intent/tweet?text=<?php echo the_title(); ?>&url=<?php echo urlencode(get_permalink()); ?>">Tweet</a>
 -->

						</footer><!-- .entry-meta -->

					</div>

				</article><!-- #post -->

				<?php $index++; ?>

			<?php endwhile; ?>

			</div>

		<?php endif; ?>

		<?php get_sidebar(); ?>

		<!-- </div> --><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>