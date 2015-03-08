<?php get_header(); ?>
      <section class="homepage">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	        <article class="opcover">
	          <a href="<?php echo get_permalink(); ?>">
	            <h1>
		            <div class="rank">
	                    Nº<?php the_field('session_number'); ?>
		            </div>
		            <div class="name">
			            <span>
				            <?php strtoupper(the_title()); ?>
			            </span>
		            </div>
	            </h1>
		        <?php if ( has_post_thumbnail() && get_post_field('featured', $post->id)) { ?>
			        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" />
		        <?php } else {?>
			        <img src="<?php echo the_field('non_featured_image'); ?>" />
				<?php } ?>
	          </a>
	        </article>
		<?php endwhile; ?>
		<?php endif; ?>
      </section>
<?php get_footer(); ?>

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-60489257-1', 'auto');
	ga('send', 'pageview');

</script>