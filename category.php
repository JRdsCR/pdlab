<?php get_header();

?>
<script src="//cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js" type="text/javascript"></script>

<div class="projects-in-page">
	<div class="marquee"><?php single_cat_title(); ?></div>
	<div class="posts-bin">
		<?php
		$ten = new WP_Query(array('posts_per_page' => 10));
		if ($ten->have_posts()) {
			while( $ten->have_posts() ) {
				$ten->the_post();
					if ( has_post_thumbnail() ) { 
						$thumb_id = get_post_thumbnail_id();
						$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
						$thumb_url = $thumb_url_array[0]; 
					} 
					?>
					<div class="post-container">
						<div class="post-pic" style="background-image:url(<?php echo $thumb_url; ?>)">
							<a href="<?php echo get_post_permalink(); ?>"></a>
						</div>
						<a href="<?php  echo get_post_permalink(); ?>" style="display:block" class="post-title"><p><?php echo get_the_title(); ?></p></a> 
					</div>
	
						<?php
			}
		}
		get_footer(); ?>
		<script>
		$('.marquee').marquee({
		//speed in milliseconds of the marquee
		duration: 10000,
		//gap in pixels between the tickers
		gap: 500,
		//time in milliseconds before the marquee will start animating
		delayBeforeStart: 0,
		//'left' or 'right'
		direction: 'left',
		//true or false - should the marquee be duplicated to show an effect of continues flow
		duplicated: true,
		startVisible: true
		});
	</script>