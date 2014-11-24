<?php get_header(); ?>
      <section class="homepage">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	        <article class="opcover">
	          <a href="<?php echo get_permalink(); ?>">
	            <h1>
	              <span>Nº<?php the_field('session_number'); ?></span><?php the_title(); ?>
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