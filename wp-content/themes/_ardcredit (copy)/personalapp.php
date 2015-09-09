<?php
/*
Template Name: Personal Application
*/
?>

<?php get_header(); ?>
    <div id="home-news">
      <div class="container online-send text-center">
<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		<?php }
	}?>
      </div>
    </div>
<?php get_footer(); ?>
