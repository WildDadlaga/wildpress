<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _ARDcredit
 */
get_header();?>
<?php
// parsing url to get page num
define("POSTPERPAGE", 3);
?>

	<div id="home-news">
		<div class="container">
			<?php if ( have_posts() ) : ?>
				<h1 class="title text-center">Мэдээ, мэдээлэл</h1>
					<?php
						$url=explode("/",$_SERVER['REQUEST_URI']);
						if($url[3]==NULL) $url[3]=1;

							$post_count = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->term_relationships WHERE term_taxonomy_id=6;");
					?>
			        <ul class="news-list news-list1 row">
						<?php query_posts( 'post_type=post&posts_per_page=3&category_name=News&offset='.(($url[3]-1)*POSTPERPAGE)); ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<?php get_template_part( 'content', get_post_format() ); ?>
							<?php endwhile; ?>
						<?php 
						wp_reset_query();
						 ?>	
					</ul>
					</div>
				    <div class="text-center">
			        	<ul class="page-number">

						<!--making list-->
							
							<?php if($url[3]>1) : ?>
								<li><a href="http://localhost/wildpress/news/<?php echo ($url[3]-1); ?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
				        	<?php endif; ?>

				        	<li><a href="http://localhost/wildpress/news/"<?php echo $url[3]-1 ?>"\">".$i."</a></li>






				            <?php
				            for($i=1;$i<($post_count/POSTPERPAGE+1);$i++) :
				            	if($i!=$url[3]) : echo "<li><a href=\"http://localhost/wildpress/news/".$i."\">".$i."</a></li>";
				            	else : echo "<li class=\"active\"><a href=\"http://localhost/wildpress/news/".$i."\">".$i."</a></li>";
				            	endif;
				            endfor;
				            ?>

				            <?php if($url[3]<$post_count/POSTPERPAGE) : ?>
								<li><a href="http://localhost/wildpress/news/<?php echo ($url[3]+1); ?>" aria-label="Next"><span aria-hidden="true">»</span></a></li>
				        	<?php endif; ?>
			        	</ul>
			        </div>
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>