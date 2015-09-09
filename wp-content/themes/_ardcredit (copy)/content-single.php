<?php
/**
 * @package _ARDcredit
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="title">', sprintf('<span class="date">%s&nbsp%s</span></h1>' , esc_html( get_the_date() ), esc_html( get_the_time() ) )  ); ?>
	</header><!-- .entry-header -->
		<?php //the_post_thumbnail(); ?>
		<?php the_content(); ?>
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Контент засах', '_ardcredit' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
