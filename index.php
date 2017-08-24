<?php

get_header(); ?>

<!-- wrapper --> 
		<div class="wrapper">
	
	<!-- site-content -->
	<div class="site-content clearfix"> 

		<!-- main-column -->
		<div class="main-column">

			<?php if (have_posts()) :
				while (have_posts()) : the_post(); ?>

				 <!-- get_template_part('content', get_post_format()); --> 
			<article class="post">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 

				<!-- line below adds date and time to posts --> 
				<h5 class="post-info"><?php the_time('F jS, Y'); ?> | Posted in 

				<!-- line below finds what categories are associated with each post --> 
				<?php 

				$categories = get_the_category(); 
				$separator = ", ";
				$output = "";

				if ($categories) {

					foreach ($categories as $category) {
						// creates categories as links 
						$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;

					}

						echo trim($output, $separator); // removes comma at end of string
 
				}

				?> 
				</h5>

				<?php the_content();?> 
			</article>

				<?php endwhile;

				else :
					echo '<p>No content found</p>';

				endif;
				?>

		</div><!-- /main-column -->

		</div> <!-- wrapper --> 

		<div class="side-column">

		<?php get_sidebar(); ?>

		</div>

		
	</div><!-- /site-content -->
	
	<?php get_footer();

?>

</div> <!-- footer --> 