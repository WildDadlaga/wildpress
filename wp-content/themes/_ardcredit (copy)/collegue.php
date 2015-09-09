<?php
/*
 * Template Name: Colleague
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
	            <h1 class="title"><?php echo __("[:mn]Манай бүтэц зохион байгуулалт[:en]Our organizational structure"); ?></h1>
	            <h3 class="title"><?php echo __("[:mn]Хувьцаа эзэмшигчдийн хурал[:en]Shareholders"); ?></h3>
	            	<div class="row">
						<?php query_posts( 'post_type=colleague&category_name=shareholder' ); ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'content', 'colleague' ); ?>

						<?php endwhile; // end of the loop. ?>
						<?php wp_reset_query(); ?>
	            		
	            	</div>
	            <h3 class="title"><?php echo __("[:mn]Төлөөлөн удирдах зөвлөл[:en]Board of Directors"); ?></h3>
	            	<div class="row">
	            		<?php query_posts( 'post_type=colleague&category_name=boardholder' ); ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'content', 'colleague' ); ?>

						<?php endwhile; // end of the loop. ?>
						<?php wp_reset_query(); ?>
	            	</div>
<h3 class="title">Бүтэц</h3>
            <div class="row">
              <div class="col-sm-4 col-sm-offset-4">
                <div class="structure style1">
                  <span class="line line-bottom"></span>
                  Хувьцаа эзэмшигчидийн хурал
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 col-sm-offset-4">
                <div class="structure style1">
                  <span class="line"></span>
                  <span class="line line-bottom"></span>
                  Тѳлѳѳлѳн удирдах зѳвлѳл
                </div>
              </div>
            </div>
            <div class="row structure-main structure-main1">
              <div class="main-line"></div>
              <div class="col-sm-4">
                <div class="structure">
                  <span class="line"></span>
                  Дотоод аудитын хороо
                </div>
              </div>
              <div class="col-sm-4">
                <div class="structure">
                  <span class="line"></span>
                  <span class="line-bottom line"></span>
                  Зээл эрсдэлийн хороо
                </div>
              </div>
              <div class="col-sm-4">
                <div class="structure">
                  <span class="line"></span>
                  Засаглалын хороо
                </div>
              </div>
            </div>
            <div class="row structure-main">
              <div class="main-line"></div>
              <div class="col-sm-4 col-sm-offset-4">
                <div class="structure style1">
                  <span class="line"></span>
                  <span class="line-bottom line-bottom1 line"></span>
                  Гүйцэтгэх захирал
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <div class="structure style2">
                  <span class="line"></span>
                  Зээл 
                </div>
              </div>
              <div class="col-sm-3">
                <div class="structure style2">
                  <span class="line"></span>
                  Маркетинг
                </div>
              </div>
              <div class="col-sm-3">
                <div class="structure style2">
                  <span class="line"></span>
                  Санхүү
                </div>
              </div>
              <div class="col-sm-3">
                <div class="structure style2">
                  <span class="line"></span>
                  Хууль
                </div>
              </div>
            </div>

			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>