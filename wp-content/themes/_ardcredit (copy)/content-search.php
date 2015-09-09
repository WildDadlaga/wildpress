<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _ARDcredit
 */
?>

<li class="col-sm-4">
	<a href="<?php the_permalink(); ?>" class="thumb">
		<?php the_post_thumbnail(); ?>
		<?php //the_title(); ?>
	</a>
	<?php the_title( sprintf( '<a class="title" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), sprintf('<span class="date">%s&nbsp%s</span></a>' , esc_html( get_the_date() ), esc_html( get_the_time() ) )  ); ?>
	<?php //the_content( '', false ); ?>
	<a href="<?php the_permalink(); ?>" class="more" >
		<?php _e("[:en]Continue reading[:mn]Дэлгэрэнгүй"); ?>
	</a>
</li>