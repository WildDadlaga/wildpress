<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _ARDcredit
 */

get_header(); ?>

<div id="home-news">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 sidebar">
				<h2 class="title"><?php echo __("[:mn]Бидний тухай[:en]About Us"); ?></h2>
				<?php 	$defaults = array(
				    'theme_location'  => 'aboutus',
				    'menu'            => '',
				    'container'       => 'false',
				    'container_class' => '',
				    'container_id'    => '',
				    'menu_class'      => '',
				    'menu_id'         => '',
				    'echo'            => true,
				    'fallback_cb'     => 'wp_page_menu',
				    'before'          => '',
				    'after'           => '',
				    'link_before'     => '',
				    'link_after'      => '<i class="fa fa-angle-right"></i>',
				    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				    'depth'           => 0,
				    'walker'          => ''
				);	wp_nav_menu( $defaults ); ?>
			</div>
			<div class="col-sm-9 post-main">
			
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php //the_post_navigation(); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						// if ( comments_open() || get_comments_number() ) :
						// 	comments_template();
						// endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</div>
		</div>
	</div>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>

