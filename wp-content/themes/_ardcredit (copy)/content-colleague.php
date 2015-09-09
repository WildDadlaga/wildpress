<!-- Modal -->
          <div class="modal fade membermodal" id="memberModal<?php echo get_the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <i class="close fa fa-close" data-dismiss="modal" aria-label="Close"></i>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-4">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="col-sm-8">
                      <h4>
                        <?php the_title(); ?><br>
                        <span>
				<?php if ( !has_excerpt() ) {
      					echo ' ';
				} else { 
      					the_excerpt();
				}?>
                        </span>
                      </h4>
                      <p>
                        <?php the_content(); ?>
                      </p>
                      
                      <h4>
                      </h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- Modal tugsgul-->

<div class="col-md-2 col-sm-3">
    <div class="member">
        <a href="#"  data-toggle="modal" data-target="#memberModal<?php echo get_the_ID(); ?>">
            <?php the_post_thumbnail(); ?>
            <span class="desc">
                <?php the_title(); ?>
            </span>
        </a>
    </div>
</div>