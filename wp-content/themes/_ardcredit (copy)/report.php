<?php
/*
 * Template Name: Report
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
		            <h1 class="title"><?php the_title(); ?></h1>
		            <?php query_posts( 'post_type=post&category_name=report' ); ?>
						<?php while ( have_posts() ) : the_post(); ?>
				            <div class="download-file">
								<?php preg_match_all('#\bhttps?://[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/))#',
																 get_the_content(get_the_ID()), $match);?>
								<a href="<?php echo $match[0][0] ?>" target="windowName" onClick="window.open(this.href,this.target,'width=700,height=600'); return false;">
					                <div class="row">
					                  <div class="col-sm-9">
										<i class="fa fa-file-pdf-o"></i>
										<h2><?php the_title() ?></h2>
					                  </div>
					                  <div class="col-sm-3">
					                    <span class="pull-right btn btn-default">Татах</span>
					                  </div>
					                </div>
					            </a>
				            </div>
						<?php endwhile; // end of the loop. ?>
					<?php wp_reset_query(); ?>
		        </div>
			</div>
		</div>
	</div>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>