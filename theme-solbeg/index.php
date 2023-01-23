<?php require('header.php');?>

<div class="paddingleft paddingright" align="center">
	<ul>
		<?php 
		$categories = get_categories( array(
			'orderby' => 'name',
			'order'   => 'ASC'
		) );
		foreach( $categories as $category ) {
			echo '<li><a href="#" data-category-id="' . $category->term_id . '">' . $category->name . '</a></li>';
		}
		?>
	</ul>
</div>

<div class="wrap"></div>

<div class="paddingleft paddingright pagination">
	<div id="posts-container" align="center">
	<div class="flexbox">

	<?php 
	if ( have_posts() ) : 
		while ( have_posts() ) : 
			the_post(); 
			require 'loop.php';
		endwhile; 
	endif; 
	?>
	</div>
</div>


<div class="paddingleft paddingright pagination" align="center">
    <?php next_posts_link( __(' Prev ', 'textdomain') ); ?>
    <?php previous_posts_link( __(' Next ', 'textdomain') ); ?>
</div>

</div>



<?php require('footer.php');?>