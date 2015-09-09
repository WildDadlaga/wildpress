<?php
/**
 * The template for displaying search results pages.
 *
 * @package _ARDcredit
 */
get_header(); ?>
	<div id="home-news">
		<div class="container">
			<?php if ( have_posts() ) : ?>
				<h1 class="title text-center">Хайлтын үр дүн</h1>
			        <ul class="news-list news-list1 row">
						<?php //query_posts( 'post_type=product&post_type=post' ); ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<?php
								$cat = get_the_category($post->ID);
								if( $cat[0]->name 		!== 'Product_table' && 
									$cat[0]->name 		!== 'Product_items' && 
									$post->post_type 	!== 'slide' &&
									$post->post_type 	!== 'partner' 
									// && $post->post_type 	!== 'faq'
								):
									get_template_part( 'content', 'search' );
								endif;
								?>

								<?php //echo '<pre>' . print_r( $post, true ) . '</pre>'; ?>
							<?php endwhile; ?>
						<?php //wp_reset_query(); ?>	
					</ul>
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>