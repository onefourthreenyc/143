<?php get_header(); ?>
	<div id="session-header">
		<div class="container">
			<div class="logo">
				<a href="/">143</a>
			</div>
			<div class="track">
			<?php $previous_post = get_previous_post();
				if (!empty( $previous_post )): ?>
				<a class="previous" href="<?php echo get_permalink( $previous_post->ID ); ?>"><i class="icon-arrow-left"></i></a>
				<?php endif; ?>
				<strong>Nº<?php the_field('session_number'); ?> <?php the_title(); ?></strong>
				<?php $next_post = get_next_post();
				if (!empty( $next_post )): ?>
					<a class="next" href="<?php echo get_permalink( $next_post->ID ); ?>"><i class="icon-arrow-right"></i></a>
				<?php endif; ?>
			</div>
			<!--<div class="play">
				<a class="btn btn-small" href=""><i class="icon-play"></i><span>PLAY DJ SESSION</span></a>
			</div>-->
		</div>
	</div>
    <div class="parallax-image"></div>
    <section class="session">
      <div class="session-cover">
        <div class="img-holder" data-image="<?php the_field('cover_image'); ?>" data-image-mobile="<?php the_field('cover_image'); ?>" ></div>
      </div>
      <div class="session-head">
	      <div class="container">
		      <div class="inner-container">
		        <div class="social square">
			      <ul>
				      <li class="facebook">
					      <a href="javascript:fbShare('<?php echo get_permalink( $post->ID ); ?>', '<?php the_title(); ?>', '<?php the_field('session_description'); ?>', '<?php the_field('cover_image'); ?>', 520, 350)"><i class="icon-facebook"></i></a>
				      </li>
				      <li class="twitter">
					      <a href="javascript:twitterShare('<?php echo get_permalink( $post->ID ); ?>', '<?php the_title(); ?>', '<?php the_field('session_description'); ?>', '<?php the_field('cover_image'); ?>', 520, 350)"><i class="icon-twitter"></i></a>
				      </li>
			      </ul>
		        </div>
	        </div>
	      <!--  <div class="play">
		      <a class="btn" href=""><i class="icon-play"></i><span>PLAY DJ SESSION</span></a>
	      </div> -->
		    <div class="session-intro">
          <h1>
	          <div class="rank">
		          Nº<?php the_field('session_number'); ?>
	          </div>
	          <div class="name">
		          <span><?php the_title(); ?></span>
	          </div>
          </h1>
          <p>
	          <?php the_field('session_description'); ?>
          </p>
			<p>
				<?php if( wp_is_mobile() ) { $width = 200; } else { $width = 600; } ?>
	         	<iframe width="<?= $width ?>" height="60" src="https://www.mixcloud.com/widget/iframe/?embed_type=widget_standard&amp;embed_uuid=<?php the_field('mixcloud_embed_uid'); ?>&amp;feed=<?php the_field('mixcloud_embed_feed'); ?>&amp;hide_artwork=1&amp;hide_cover=1&amp;hide_tracklist=1&amp;light=1&amp;mini=1&amp;replace=0" frameborder="0"></iframe>
			</p>
        </div>
	      </div>
      </div>
      <div class="session-info">
        <ul>
          <li>
	          <?php the_field('bio'); ?>
          </li>
		<?php if(get_field('record_label')): ?>
          <li>
            Record label: <?php the_field('record_label'); ?>
          </li>
		<?php endif; ?>
          <li>
            <div class="social">
              <ul>
				<?php if(get_field('soundcloud_link')): ?>
	                <li>
	                  <a class="sc" href="<?php the_field('soundcloud_link') ?>" target="_blank"><i class="icon-soundcloud"></i></a>
	                </li>
				<?php endif; ?>
				<?php if(get_field('facebook_link')): ?>
	                <li>
	                  <a class="fb" href="<?php the_field('facebook_link') ?>" target="_blank"><i class="icon-facebook"></i></a>
	                </li>
				<?php endif; ?>
				<?php if(get_field('twitter_link')): ?>
	                <li>
	                  <a class="tw" href="<?php the_field('twitter_link') ?>" target="_blank"><i class="icon-twitter"></i></a>
	                </li>
				<?php endif; ?>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </section>
	<section class="post">
        <div class="container">
        <div class="box-list">
          <h2>
            ROLL CALL
          </h2>
          <ul>
	          <?php if( have_rows('roll_calls')): ?>
		          <?php while ( have_rows('roll_calls') ) : the_row(); ?>
			          <li>
						<?php if(get_sub_field("link")): ?>
				          <a href="<?php echo the_sub_field("link"); ?>" target="_blank">
						<?php else: ?>
							<span>
						<?php endif; ?>
							<?php echo the_sub_field("name"); ?>
						<?php if(get_sub_field("link")): ?>
				          </a>
				        <?php else: ?>
				          </span>
					    <?php endif; ?>
			          </li>
		          <?php endwhile ?>
	          <?php endif ?>
          </ul>
        </div>
        <div class="box-list-photo">
	        <h2>
		        PHOTOGRAPHY
	        </h2>
	        <ul>
		        <?php if( have_rows('photographers')): ?>
			        <?php while ( have_rows('photographers') ) : the_row(); ?>
				        <li>
					        <?php if(get_sub_field("link")): ?>
					        <a href="<?php echo the_sub_field("link"); ?>" target="_blank">
						        <?php else: ?>
						        <span>
					<?php endif; ?>
					<?php echo the_sub_field("name"); ?>
					<?php if(get_sub_field("link")): ?>
					        </a>
				        <?php else: ?>
					        </span>
				        <?php endif; ?>
				        </li>
			        <?php endwhile ?>
		        <?php endif ?>
	        </ul>
        </div>
        <article>
	        <?php if( have_rows('session_images')): ?>
		        <?php while ( have_rows('session_images') ) : the_row(); ?>
			        <?php $images[] = get_sub_field('image'); ?>
		        <?php endwhile ?>
	        <?php endif ?>
	        <?php if( have_rows('blockquotes')): ?>
		        <?php while ( have_rows('blockquotes') ) : the_row(); ?>
			       <?php if(get_sub_field('position')): ?>
				        <?php  $blockquotes[get_sub_field('position')] = array(
				         'text' => get_sub_field('blockquote'),
				         'side' => get_sub_field('side'),
			            ); ?>
	                <?php endif ?>
		        <?php endwhile ?>
	        <?php endif ?>
	        <?php if( have_rows('captions')): ?>
		        <?php while ( have_rows('captions') ) : the_row(); ?>
			        <?php
			        if(get_sub_field('position')) {
				        $captions[get_sub_field('position')] = array (
					        'title' => get_sub_field('caption_title'),
					        'text' => get_sub_field('caption_text'),
					        'image' => get_sub_field('caption_image')
				        );
			        }
			        ?>
		        <?php endwhile ?>
	        <?php endif ?>
	        <?php if( have_rows('qa') ): ?>
				<?php $qa_counter = 0; ?>
				<?php $images_counter = 0; ?>
		        <?php while ( have_rows('qa') ) : the_row(); ?>
			        <p class="q"><?php echo the_sub_field('question'); ?></p>
			        <p class="a"><?php echo the_sub_field('answer'); ?></p>
			        <?php if(!empty($captions) && array_key_exists($qa_counter, $captions)): ?>
				        <div class="sideright">
					        <img src="<?php echo $captions[$qa_counter]['image']; ?>" />
					        <div class="caption">
						        <h3><?php echo $captions[$qa_counter]['title']; ?></h3>
						        <p><?php echo $captions[$qa_counter]['text']; ?></p>
					        </div>
				        </div>
			        <?php endif; ?>
			        <?php if(!empty($blockquotes) && array_key_exists($qa_counter, $blockquotes)): ?>
				        <blockquote  <?php if($blockquotes[$qa_counter]['side'] == 'left'): ?>class="bqleft" <?php endif; ?>>
					        <p><?php echo $blockquotes[$qa_counter]['text']; ?></p>
				        </blockquote>
			        <?php endif; ?>
			        <?php if(!empty($qa_counter) && $qa_counter %4 == 0): ?>
						<?php if(!empty($images) && array_key_exists($images_counter, $images)): ?>
					        <div class="img-holder" data-image="<?php echo $images[$images_counter]; ?>" data-image-mobile="<?php echo $images[$images_counter]; ?>"></div>
				        <?php endif; ?>
				        <?php $images_counter++; ?>
			        <?php endif; ?>
			        <?php $qa_counter++; ?>
		        <?php endwhile ?>
	        <?php endif ?>
        <div class="post-foot">
          <div class="social square">
            <ul>
              <li>
	              <a href="javascript:fbShare('<?php echo get_permalink( $post->ID ); ?>', '<?php the_title(); ?>', '<?php the_field('session_description'); ?>', '<?php the_field('cover_image'); ?>', 520, 350)"><i class="icon-facebook"></i></a>
              </li>
              <li>
	              <a href="javascript:twitterShare('<?php echo get_permalink( $post->ID ); ?>', '<?php the_title(); ?>', '<?php the_field('session_description'); ?>', '<?php the_field('cover_image'); ?>', 520, 350)"><i class="icon-twitter"></i></a>
              </li>
            </ul>
          </div>
          <div class="reference">
            <h2>
              REFERENCE LINKS
            </h2>
            <ul>
	            <?php if( have_rows('reference')): ?>
		            <?php while ( have_rows('reference') ) : the_row(); ?>
			            <li>
				            <a href="<?php echo the_sub_field("reference_url"); ?>" target="_blank"><?php echo the_sub_field("reference_title"); ?></a>
			            </li>
		            <?php endwhile ?>
	            <?php endif ?>
            </ul>
          </div>
        </div>
        </div>
        <div class="related">
          <ul>
			<?php query_posts(array('post__not_in' => array($post->ID), 'posts_per_page' => 2, 'orderby' => 'rand')); ?>
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<li class="opcover">
							<a href="<?php echo get_permalink(); ?>">
								<h1>
									<span>Nº<?php the_field('session_number'); ?><br /></span> <?php the_title(); ?>
								</h1>
								<img src="<?php the_field('non_featured_image'); ?>" />
							</a>
						</li>
					<?php endwhile; ?>
				<?php endif; ?>
          </ul>
        </div>
    </section>
<?php get_footer(); ?>

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-60489257-1', 'auto');
	ga('send', 'pageview');

	function fbShare(url, title, descr, image, winWidth, winHeight) {
		var winTop = (screen.height / 2) - (winHeight / 2);
		var winLeft = (screen.width / 2) - (winWidth / 2);
		window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width='+winWidth+',height='+winHeight);
	}
	function twitterShare(url, title, descr, image, winWidth, winHeight) {
		var winTop = (screen.height / 2) - (winHeight / 2);
		var winLeft = (screen.width / 2) - (winWidth / 2);
		window.open('https://twitter.com/home?status=' + url, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width='+winWidth+',height='+winHeight);
	}
</script>
