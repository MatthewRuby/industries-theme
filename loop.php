<?php $index = 0; $end = 3; ?>

	<section id="lede" class="clear"><!--  OPEN #lede -->
	<?php if (have_posts()): while (have_posts()) : the_post(); $extraClass = "article-".$index; ?>

		<?php if ( $index == $end ) : ?>
			</section><!--  CLOSE LEDE -->
			<div class="feed-wrap clear"><!--  OPEN .feed-wrap -->
				<section id="feed"><!--  OPEN #feed -->
		<?php endif; ?>

		<?php
			if( is_sticky() && get_post_format( $post_id ) == 'image' ) :
				$end = 1;
				$extraClass .= ' super-lede';
			endif;
		?>


		<article id="post-<?php the_ID(); ?>" class="<?php foreach(get_post_class(array($extraClass), the_ID() ) as $c){ echo $c . " "; }; ?>">

			<div class="article-wrap">
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<div class="feature-image">
					<?php if( is_sticky() && ( get_post_format( $post_id ) == 'image' || get_post_format( $post_id ) == 'video' ) ) :
						the_post_thumbnail('full');
					elseif(get_post_format( $post_id ) == 'image'):
						the_post_thumbnail('large');
					else:
						the_post_thumbnail('medium');
					endif; ?>
					</div>
				<?php endif; ?>
				<header class="entry-header">
					<?php if ( is_single() ) : ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php else : ?>

						<?php if( $index < $end ) : ?>
							<h1 class="entry-title">
								<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
							</h1>
						<?php else: ?>
								<b class="category"><?php the_category('single'); ?></b><time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo get_the_date(); ?></time>
								<h1 class="entry-title">
									<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
								</h1>
						<?php endif; ?>


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
					<ul class="feed-share-tools">
						<li class="share-tool facebook">
							<a href="#">Facebook</a>
						</li>
						<li class="share-tool twitter">
							<a href="https://twitter.com/intent/tweet?text=<?php echo the_title(); ?>&url=<?php echo urlencode(get_permalink()); ?>">Twitter</a>
						</li>
					</ul>

				</footer><!-- .entry-meta -->

			</div>

		</article>
		<!-- /article -->

		<?php $index++; ?>
	<?php endwhile; ?>

	<?php else: ?>

		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</article>

	<?php endif; ?>

		<?php get_template_part('pagination'); ?>

		</section><!--  CLOSE #feed -->

		<?php get_sidebar(); ?>

	</div><!--  CLOSE .feed-wrap -->