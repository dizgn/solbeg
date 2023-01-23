<?php wp_footer(); ?>

<div class="wrap"></div>

<div id="footer">

	<div class="paddingleft paddingright">
		Demo performed by Dmitry Borovitsky<br>
		Phone:&nbsp;<a href="tel:+48506710476">+48&nbsp;506&nbsp;710&nbsp;476</a><br>
		E-mail:&nbsp;<a href="mailto:d.borovitsky@gmail.com">d.borovitsky@gmail.com</a><br>
	    Telegram: <a target="_blank" href="https://t.me/bznsangel">start conversation</a><br>
		January 2023 Wroclaw, Poland
	</div>
	
</div>

<link href="<?php echo get_template_directory_uri(); ?>/animation.css" rel="stylesheet">
<script src="<?php echo get_template_directory_uri(); ?>/animation.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


<script>
    jQuery(document).ready(function($) {
        $('ul li a').on('click', function(e) {
            //alert($(this).data('category-id'));
            e.preventDefault();
            var category_id = $(this).data('category-id');
            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'post',
                data: {
                    action: 'load_posts_by_category',
                    category_id: category_id
                },
                success: function(response) {
                    $('#posts-container').html(response);
                }
            });
        });
    });
</script>



<script>
  AOS.init();
</script>
		
</body>
</html>