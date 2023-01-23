<div class="flexpost">

    <div class="imgzoom img_rounded">
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
    </div>
    <div class="wrap"></div>
		<h2 class="news_title">
			<?php echo esc_html(get_the_title()); ?>
		</h2>
		
	<div class="post-category">
		<?php 
			$categories = get_the_category();
			$separator = ', ';
			$output = '';
			if ( ! empty( $categories ) ) {
				foreach( $categories as $category ) {
					$output .= esc_html( $category->name ) . $separator;
				}
				echo trim( $output, $separator );
			}
		?>
	</div>
	
	<div class="location">
    	<?php
            add_post_meta(get_the_ID(), 'location', 'Worldwide' );
			$location = get_post_meta(get_the_ID(), 'location', true);
            if (!empty($location)) {
                echo '<p>Location: ' . $location . '</p>';
            }
        ?>
    </div>
		
	<p class="post_description">
		<?php echo esc_html(get_the_excerpt()); ?>
	</p>
		
    
</div>