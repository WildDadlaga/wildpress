<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _ARDcredit
 */
get_header(); ?>
	<div id="home-news">
		<div class="container">
			<?php if ( have_posts() ) : ?>
				<h1 class="title text-center">Мэдээ, мэдээлэл</h1>
			        <ul class="news-list news-list1 row">
						<?php query_posts( 'post_type=post&category_name=News' ); ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<?php get_template_part( 'content', get_post_format() ); ?>
							<?php endwhile; ?>
						<?php wp_reset_query(); ?>	
					</ul>
					<!--div class="text-center">
						<?php //the_posts_navigation(); ?>
					</div>
			        <div class="text-center">
			          <ul class="page-number">
			            <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
			            <li class="active"><a href="#">1</a></li>
			            <li><a href="#">2</a></li>
			            <li><a href="#">3</a></li>
			            <li><a href="#">4</a></li>
			            <li><a href="#">5</a></li>
			            <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
			          </ul>
			        </div-->
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>