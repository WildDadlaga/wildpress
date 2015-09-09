<?php
/**
 * @package _ARDcredit
 */
?>

		<?php the_content(); ?>
	<!-- <footer class="entry-footer"> -->
		<?php //_ardcredit_entry_footer(); ?>
	<!-- </footer>.entry-footer -->
<?php
// Set up the objects needed
$my_wp_query = new WP_Query();
$all_wp_pages = $my_wp_query->query(array('post_type' => 'product', 'orderby' => 'menu_order', 'order' => 'ASC'));

// Get the page as an Object
// $portfolio =  get_page_by_title('%d0%b1%d0%b8%d0%b7%d0%bd%d0%b5%d1%81-%d0%b7%d1%8d%d1%8d%d0%bb');
// echo '<pre>' . print_r( $post, true ) . '</pre>';

// Filter through all pages and find Portfolio's children
$post_children = get_page_children( $post->ID, $all_wp_pages );
// echo '<pre>' . print_r( $post_children, true ) . '</pre>';
?>
<div class="row">
	
<?php				for ($i = 0; $i<sizeof($post_children); $i++){
					$cat = get_the_category($post_children[$i]->ID);
					if( $cat[0]->name == 'Product_table'){
						// echo $cat[0]->name;
						echo '<div class="col-sm-12">';
	                    	echo '<h5>'.$post_children[$i]->post_title.'</h5>';
	                    	echo $post_children[$i]->post_content;
	                    echo '</div>';
					}else{

					// echo $cat_name;
					// echo '<pre>' . print_r( $cat, true ) . '</pre>';

					// echo get_the_category( $post_children[$i]->ID );
                    echo '<div class="col-sm-6">';
                    	echo '<h5>'.$post_children[$i]->post_title.'</h5>';
                    	echo $post_children[$i]->post_content;
                    echo '</div>';
					}
                }
?>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php //_ardcredit_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php //echo '<pre>' . print_r( $post, true ) . '</pre>'; ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_ardcredit' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //_ardcredit_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
