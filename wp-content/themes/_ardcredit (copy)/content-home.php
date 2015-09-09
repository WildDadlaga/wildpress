<div class="col-sm-4">
  <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail(); ?>
  </a>
</div>

<div class="col-sm-8">
  <?php the_title( sprintf( '<a class="title" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
    
    <?php the_content( '', false ); ?>
    
    <a href="<?php the_permalink(); ?>" class="more" >
      <?php _e("[:en]Continue reading[:mn]Дэлгэрэнгүй"); ?>
    </a>
  
  <?php edit_post_link( __( 'Контент засах', '_ardcredit' ), '<span class="edit-link">', '</span>' ); ?>
</div>