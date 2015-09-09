<?php
/*
 * Template Name: Social Responsibility
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
					<?php if ( have_posts() ) : ?>
						<h1 class="title">
							<?php the_title();?> 
						</h1>
						<ul class="news-list">
							<?php query_posts( 'post_type=post&category_name=social-responsibility' ); ?>
								<?php while ( have_posts() ) : the_post(); ?>

									<li>
										<div class="row">
											<?php get_template_part( 'content', 'home' ); ?>
										</div>
									</li>
									
								<?php endwhile; ?>
							<?php wp_reset_query(); ?>	
						</ul>
						<div class="text-center">
							<?php the_posts_navigation(); ?>
						</div>
					<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>