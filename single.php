<?php get_header(); ?>

	<main id="main" role="main">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<?php get_template_part( 'content', get_post_format() ); ?>

	<?php endwhile; ?>

	<?php else: ?>

		<article>
			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
		</article>

	<?php endif; ?>

		<nav class="nav-footer">
			<div class="nav-previous">
				<b>Previous Post</b>
				<h3><?php previous_post_link('%link'); ?></h3>
			</div>
			<div class="nav-next">
				<b>Next Post</b>
				<h3><?php next_post_link('%link'); ?></h3>
			</div>
		</nav>

	</main>

<?php get_footer(); ?>
