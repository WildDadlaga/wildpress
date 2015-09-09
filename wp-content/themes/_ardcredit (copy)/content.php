<?php
/**
 * @package _ARDcredit
 */
?>
<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnail', false);?>
<li class="col-sm-4">
	<a href="<?php the_permalink(); ?>" class="thumb" style="background-image: url('<?php echo $thumbnail[0] ?>')"></a>
	<?php the_title( sprintf( '<a class="title" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
	<?php the_content( '', false ); ?>
	<a href="<?php the_permalink(); ?>" class="more" >
		<?php _e("[:en]Continue reading[:mn]Дэлгэрэнгүй"); ?>
	</a>
	<?php edit_post_link( __( 'Контент засах', '_ardcredit' ), '<span class="edit-link">', '</span>' ); ?>
</li>