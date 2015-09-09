<?php
/*
 * Template Name: Home
 * @package _ARDcredit
 */

get_header(); ?>

    <div id="slider" class="clearfix">
      <div id="slider-control" class="container">
        <div class="s-left control">
          <i class="fa fa-angle-left"></i>
        </div>
        <div class="s-right control">
          <i class="fa fa-angle-right"></i>
        </div>
      </div>
      <div class="swiper-container">
        <div class="swiper-wrapper">
	        <?php if ( have_posts() ) : ?>
				<?php query_posts( 'post_type=slide&orderby=menu_order&order=ASC'); ?>
				
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php if ( has_post_thumbnail() ) :
							  $id = get_post_thumbnail_id();
							  $url = wp_get_attachment_image_src($id, 'full', true);
							  $meta = get_post_meta(get_the_ID()); ?>
								<div class="swiper-slide" style="background-image:url(<?php echo $url[0] ?>)">
								    <div class="caption">
										<div class="container">
											<h4>
												<span><?php the_title() ?></span>
												<?php the_content(); ?>
											</h4>

											<a href="<?php echo $meta['Дэлгэрэнгүй'][0]; ?>" class="more"><?php echo __("[:mn]Дэлгэрэнгүй[:en]View more"); ?></a>
							                <!-- <a href="#" class="more">Дэлгэрэнгүй</a> -->
									    </div>
								    </div>
						            <a href="<?php echo $meta['Дэлгэрэнгүй'][0]; ?>" class="link"></a>
								</div>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php wp_reset_query(); ?>
				
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
        </div>
        <div class="slide-pagination">
          <div class="container">
            <div class="sw-pagination"></div> 
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row service-list">

	        <?php if ( have_posts() ) : ?>
				<?php query_posts( 'post_type=product&orderby=menu_order&order=ASC' ); ?>
				
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); 
							  $meta = get_post_meta(get_the_ID()); ?>
						<?php if ( isset($meta['icon'][0]) ) :
							  $id = get_post_thumbnail_id();
							  $url = wp_get_attachment_image_src($id, 'full', true);?>
								
								<div class="col-md-3 col-sm-6 service">
									<a href="<?php the_permalink(); ?>" class="s-header">
							            <i class="<?php echo $meta['icon'][0]; ?>"></i>
										<span><?php the_title() ?></span>
									</a>
									<?php the_excerpt(); ?>
									<a href="<?php the_permalink(); ?>" class="more"><?php echo __("[:mn]Дэлгэрэнгүй[:en]View more"); ?></a>
								</div>

						<?php endif; ?>
					<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
        
      </div>
    </div>
	<div id="home-news">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<?php if ( have_posts() ) : ?>
						<ul class="news-list">
							<?php query_posts( 'post_type=post&category_name=News' ); ?>
								<?php $i = 0; ?>
								<?php while ( have_posts() && $i < 3 ) : the_post(); ?>
									<li>
										<div class="row">
											<?php get_template_part( 'content', 'home' ); ?>
										</div>
									</li>
									<?php $i++; ?>
								<?php endwhile; ?>
							<?php wp_reset_query(); ?>
						</ul>
						<a href="<?php echo __("[:mn]мэдээ[:en]news/"); ?>" class="more more-link"><?php echo __("[:mn]Нийт мэдээ[:en]All News"); ?></a>
						
					<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>
				</div>
				<div class="col-md-3">
		            <div class="subscribe">
		              <h1 class="title"><i class="fa fa-calculator"></i>Зээлийн <br>тооцоолуур</h1>
		              <form method="GET" action="/тооцоолуур">
		                <label for="precentValue">
		                  Зээлийн хэмжээ:
		                </label>
		                <input type="nubmer" id="precentValue" name="precentValue" class="form-control" placeholder="Төгрөгөөр" required>
		                <label for="annualInterest">
		                  Зээлийн хүү:
		                </label>
		                <input type="number" id="annualInterest" name="annualInterest" class="form-control" placeholder="Жилээр (сарын хүү &times; 12) %" required>
		                <label for="numberOfPeriods">
		                  Зээл тѳлѳлтийн хугацаа
		                </label>
		                <input type="number" id="numberOfPeriods" name="numberOfPeriods" class="form-control" placeholder="Сараар" required>
		                <label for="startDate">
		                  Зээл авах огноо
		                </label>
		                <input type="date" id="startDate" name="startDate" class="form-control" placeholder="Огноо" required>
		                <input type="submit" class="btn btn-sm" value="Тооцоолох">
		              </form>
		            </div>
				</div>
			</div>
		</div>
	</div>
 
		 	<?php //while ( have_posts() ) : the_post(); ?>

				<?php //get_template_part( 'content', 'home' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
					// endif;
				?>

			<?php //endwhile; // end of the loop. ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
