			<!-- footer -->
			<footer class="site-footer" role="contentinfo">
                <nav class="nav">
					<?php html5blank_nav(); ?>
				</nav>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-54482803-1']);
			_gaq.push(['_trackPageview']);

			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();

			window.onload = function(){

				/* TITLE LINK */
				jQuery('.site-logo').on('click', function(e){
					_gaq.push(['_trackEvent', 'site-logo', 'click']);
				});
				jQuery('.site-title').on('click', function(e){
					_gaq.push(['_trackEvent', 'site-title', 'click']);
				});

				/* MENU */
				jQuery('.site-header .menu-item').on('click', function(e){
					_gaq.push(['_trackEvent', 'header-menu', 'click']);
				});

				jQuery('.site-footer .menu-item').on('click', function(e){
					_gaq.push(['_trackEvent', 'footer-menu', 'click']);
				});

				jQuery('.entry-title').on('click', function(e){
					_gaq.push(['_trackEvent', 'entry-title', 'click']);
				});

				jQuery('.feature-image').on('click', function(e){
					_gaq.push(['_trackEvent', 'feature-image', 'click']);
				});


				/* Slider Controls */
				jQuery('.slick-prev').on('click', function(e){
					_gaq.push(['_trackEvent', 'slideshow-previous', 'click']);
				});
				jQuery('.slick-next').on('click', function(e){
					_gaq.push(['_trackEvent', 'slideshow-next', 'click']);
				});
				jQuery('.slideshow .slider-nav .slide').on('click', function(e){
					_gaq.push(['_trackEvent', 'slideshow-thumbnail', 'click']);
				});

				/* Pagination */
				jQuery('.pagination .page-numbers').on('click', function(e){
					_gaq.push(['_trackEvent', 'pagination-numbers', 'click']);
				});
				jQuery('.pagination .next').on('click', function(e){
					_gaq.push(['_trackEvent', 'pagination-next', 'click']);
				});
				jQuery('.pagination .prev').on('click', function(e){
					_gaq.push(['_trackEvent', 'pagination-previous', 'click']);
				});

				jQuery('.nav-footer .nav-next').on('click', function(e){
					_gaq.push(['_trackEvent', 'article-next', 'click']);
				});
				jQuery('.nav-footer .nav-previous').on('click', function(e){
					_gaq.push(['_trackEvent', 'article-previous', 'click']);
				});

		 	}

		</script>

	</body>
</html>
