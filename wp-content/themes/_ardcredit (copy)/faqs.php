<?php
/*
 * Template Name: FAQs
 * @package _ARDcredit
 */
get_header(); ?>
    <div id="home-news">
		<div class="container">
			<h1 class="title text-center">
<?php echo __("[:mn]Түгээмэл асуулт хариулт[:en]Frequently Asked Questions"); ?>
</h1>
			<?php if ( have_posts() ) : ?>
				<?php query_posts( 'post_type=faq&category_name=general' ); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'faq' ); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
<?php
/*
*<hr>
*			<h1 class="title text-center">Барьцаат зээлийн асуулт хариулт</h1>
*			<?php if ( have_posts() ) : ?>
*				<?php query_posts( 'post_type=faq&category_name=collateral' ); ?>
*				<?php while ( have_posts() ) : the_post(); ?>
*					<?php get_template_part( 'content', 'faq' ); ?>
*				<?php endwhile; ?>
*			<?php else : ?>
*				<?php get_template_part( 'content', 'none' ); ?>
*			<?php endif; ?>
*/?>
		</div>
    </div>
<?php get_footer(); ?>