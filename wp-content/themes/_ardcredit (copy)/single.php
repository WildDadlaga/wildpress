<?php
/**
 * The template for displaying all single posts.
 *
 * @package _ARDcredit
 */
get_header(); ?>
<div id="home-news">
	<div class="container">
		<div class="row">
			<?php $cat = get_the_category($post->ID); ?>
			<!-- echo $cat[0]->name; -->
			<?php if ( $cat[0]->name == 'News' ) : ?>
				<div class="col-sm-3 sidebar hidden-xs">
					<h2 class="title">Шинээр нэмэгдсэн</h2>
					<?php if ( have_posts() ) : ?>
						<?php query_posts( 'post_type=post&category_name=News' ); ?>
							<?php $i = 0; ?>
							<?php while ( have_posts() && $i < 7 ) : the_post(); ?>
								<div class="sidebar-news">
									<div class="row">
										<div class="col-sm-4">
											<a href="<?php the_permalink(); ?>">
												<?php the_post_thumbnail(); ?>
											</a>
										</div>
										<div class="col-sm-8">
											<?php the_title( sprintf( '<a class="title" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
										</div>
									</div>
								</div>			
								<?php $i++; ?>
							<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>
				</div>

			<?php else : ?>

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

			<?php endif; ?>

			<div class="col-sm-9 post-main">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'single' ); ?>
					<?php //the_post_navigation(); ?>
					<?php
						// If comments are open or we have at least one comment, load up the comment template
						//if ( comments_open() || get_comments_number() ) :
						//	comments_template();
						//endif;
					?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
	</div>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>