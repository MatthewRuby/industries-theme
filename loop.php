<?php
	$index = 0;
	$isSuper = false;
	$do_not_duplicate = array();
?>
	<div class="top-area clear">
		<div id="products">
			<header class="section-header">
				<h3>Featured Products</h3>
			</header>
			<?php $my_query = new WP_Query( 'category_name=products' );
			$productIndex = 0;
			while ( $my_query->have_posts() ) : $my_query->the_post();
				$do_not_duplicate[$post->ID] = true ?>

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
							<?php the_excerpt(); ?>
						</div><!-- .entry-content -->
					</div>
				</article>
			<?php $productIndex++; endwhile; ?>
		</div>

	<?php if (have_posts()): while (have_posts()) : the_post();
		if ( $do_not_duplicate[$post->ID] == true ) continue;
		$extraClass = "article-".$index;

		if( $index == 0):

			if(is_sticky() && (get_post_format( $post_id ) == 'image' ||
				 			   get_post_format( $post_id ) == 'gallery' ||
				 			   get_post_format( $post_id ) == 'video') ) :

				$extraClass .= ' super-lede';
				$isSuper = true;
			?>
				<section id="lede" class="wide clear">

			<?php else: ?>

				<section id="lede" class="clear">
			<?php endif;
		endif;

		if ( $index == 1 ) : ?>
				</section><!--  CLOSE LEDE -->
			</div>

			<div id="products-area2" class="clear">
				<header class="section-header">
					<h3>Products</h3>
				</header>
			</div>

			<div class="feed-wrap clear"><!--  OPEN .feed-wrap -->
				<section id="feed">
					<header class="section-header">
						<h3>Newsfeed</h3>
					</header><!--  OPEN #feed -->
		<?php endif; ?>


		<article id="post-<?php the_ID(); ?>" class="<?php foreach(get_post_class(array($extraClass), the_ID() ) as $c){ echo $c . " "; }; ?>">

			<div class="article-wrap clear">


				<?php if ( has_post_thumbnail() && get_post_format( $post_id ) != 'gallery') : // Check if Thumbnail exists ?>
					<div class="feature-image">
						<a href="<?php the_permalink(); ?>" rel="bookmark">
					<?php if( is_sticky() && ( get_post_format( $post_id ) == 'image' || get_post_format( $post_id ) == 'video' ) ) :
						the_post_thumbnail('full');
					elseif(get_post_format( $post_id ) == 'image'):
						the_post_thumbnail('large');
					else:
						the_post_thumbnail('medium');
					endif; ?>
						</a>
					</div>
				<?php endif; ?>


				<?php if( $index < $end) : ?>

					<?php if( !$isSuper && get_post_format( $post_id ) != 'gallery' ) : ?>

						<header class="entry-header">
							<h2 class="entry-title">
								<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
							</h2>
						</header>

					<?php endif; ?>

				<?php else: ?>
					<?php if( $index > $end || ($index < $end && get_post_format( $post_id ) != 'gallery') ) : ?>

						<header class="entry-header">
							<b class="category"><?php the_category('single'); ?></b><time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo get_the_date(); ?></time>
							<h2 class="entry-title">
								<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
							</h2>
						</header>

					<?php endif; ?>
				<?php endif; ?>


				<?php if ( is_search() ) : // Only display Excerpts for Search ?>

					<div class="entry-content">
						<?php the_excerpt(); ?>
					</div><!-- .entry-summary -->

				<?php else : ?>

					<?php if( $index > 0 && $index < $end) : ?>

						<div class="entry-content">
							<a href="<?php the_permalink(); ?>" rel="bookmark">
								<?php the_excerpt(); ?>
							</a>
						</div><!-- .entry-content -->

					<?php else: ?>

						<div class="entry-content">
							<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
							<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
						</div><!-- .entry-content -->

					<?php endif; ?>

				<?php endif; ?>


				<footer class="entry-meta">
					<?php if( $index < $end ) : ?>
						<b class="category"><?php the_category('single'); ?></b><time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo get_the_date(); ?></time>
					<?php endif; ?>

<!-- 					<ul class="feed-share-tools">
						<li class="share-tool facebook">
							<a href="#">Facebook</a>
						</li>
						<li class="share-tool twitter">
							<a href="https://twitter.com/intent/tweet?text=<?php echo the_title(); ?>&url=<?php echo urlencode(get_permalink()); ?>">Twitter</a>
						</li>
					</ul> -->

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

<!-- 		<?php get_template_part('pagination'); ?> -->

		</section><!--  CLOSE #feed -->

		<?php get_sidebar(); ?>

	</div><!--  CLOSE .feed-wrap -->