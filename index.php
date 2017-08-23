<?php

get_header(); ?>
	
	<!-- site-content -->
	<div class="site-content clearfix">
		
		<!-- main-column -->
		<div class="main-column">

			<?php if (have_posts()) :
				while (have_posts()) : the_post();

				// get_template_part('content', get_post_format());
				the_content();

				endwhile;

				else :
					echo '<p>No content found</p>';

				endif;
				?>

		</div><!-- /main-column -->

		<?php get_sidebar(); ?>

		<?php
				
				$args = array(
					'menu' => 'footer'
				);
				
				?>
				
				<?php wp_nav_menu(  $args ); ?>
		
	</div><!-- /site-content -->
	
	<?php get_footer();

?>