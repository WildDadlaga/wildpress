    <div id="company-logos" class="hidden-xs">
      <h4><?php echo __("[:mn]Хамтран ажилладаг байгууллагууд[:en]Partners"); ?></h4>
      <div class="container">
        <div class="swiper-container">
          <a href="#" class="control l-right"><i class="fa fa-angle-right"></i></a>
          <a href="#" class="control l-left"><i class="fa fa-angle-left"></i></a>
          <div class="swiper-wrapper">


              <?php if ( have_posts() ) : ?>
                <?php query_posts( 'post_type=partner&orderby=menu_order&order=ASC' ); ?>
                
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); 
                      $meta = get_post_meta(get_the_ID()); ?>
                  <?php if ( isset($meta['link'][0]) ) : ?>
                  <div class="swiper-slide">
                      
                    <a href="http://<?php echo $meta['link'][0]; ?>">
                      <?php the_post_thumbnail(); ?>
                    </a>

                  </div>
                  <?php endif; ?>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
              <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
              <?php endif; ?>

          </div>
          <div class="pagination"></div> 
        </div>
      </div>
    </div>
    <div id="footer">
      <div class="container">
        <div class="pull-left">
          <?php echo __("[:mn]© 2015 Ард кредит Бүх эрх хуулиар хамгаалагдсан.[:en]© 2015 Ard Credit. All rights reserved."); ?>
        </div>

        <?php wp_nav_menu( array( 'theme_location' => 'social', 'container' => 'false', 'depth' => 0 ) ); ?>

      </div>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.3.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/dist/js/bootstrap.js"></script>
    <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/idangerous.swiper.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/three.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.marquee.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/controler.js"></script>
    
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/qs.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-datepicker.mn.js" charset="UTF-8"></script>
    <script>
      var calculate = function () {
          var numberOfPeriods = parseFloat( $( 'input#numberOfPeriods' ).val() ),
              precentValue = parseFloat( $( 'input#precentValue' ).val() ),
              annualInterest = parseFloat($( 'input#annualInterest' ).val() ), // annual interest in percentage
              interest = annualInterest / 100 / 12, // monthly interest 
              currentDate = new Date( $( 'input#startDate' ).val() + 'T00:00:00.000Z' ),
              nextDate = new Date( new Date( currentDate.getFullYear(), currentDate.getMonth() + 1, currentDate.getDate() ) - new Date( currentDate.getFullYear(), currentDate.getMonth() + 1, currentDate.getDate() ).getTimezoneOffset()*60*1000 ),
              dateDiff = parseInt( ( nextDate - currentDate ) / ( 1000*60*60*24 ) ),
              equal = ( precentValue * interest )/( 1 - Math.pow( 1 + interest, -1 * numberOfPeriods ) ), // formula is ( Value * InterestPerMonth ) / ( 1 - ( 1 + InterestPerMonth ^ -Payoff ) )
              periodicInterest = precentValue * annualInterest/100/12,
              // for search query for filled datas to keep 
              query = {
                precentValue: precentValue,
                annualInterest: annualInterest,
                startDate: currentDate.toJSON().substr( 0, 10 ),
                numberOfPeriods: numberOfPeriods
              };

          window.history.pushState( '', '', '?' + qs.stringify( query ) );

          $( 'table.loan > tbody' ).empty();

          for ( var i = 0; i < numberOfPeriods; i += 1 ) {
            $( 'table.loan > tbody' ).append(
              '<tr>' +
                '<td>' +
                  ( i + 1 ) +
                '</td>' + 
                '<td>' +
                  nextDate.toJSON().substr( 0, 10 ) +
                '</td>' +
                '<td>' +
                  dateDiff +
                '</td>' + 
                '<td>' +
                  ( ( equal - periodicInterest ).toFixed( 2 ) ).replace( /\B(?=(\d{3})+(?!\d))/g, "," ) +
                '</td>' +
                '<td>' +
                  ( periodicInterest.toFixed( 2 ) ).replace( /\B(?=(\d{3})+(?!\d))/g, "," ) +
                '</td>' +
                '<td>' +
                  ( equal.toFixed( 2 ) ).replace( /\B(?=(\d{3})+(?!\d))/g, "," ) +
                '</td>' + 
                '<td>' +
                  //( ( i === numberOfPeriods-1 ? '0' : ( precentValue - ( equal - periodicInterest ) ).toFixed( 2 ) ) ).replace( /\B(?=(\d{3})+(?!\d))/g, "," ) +
                  ( ( ( precentValue - ( equal - periodicInterest ) ).toFixed( 2 ) ) ).replace( /\B(?=(\d{3})+(?!\d))/g, "," ) +
                '</td>' +
               '</tr>'
             );
            currentDate = nextDate;
            precentValue -= ( equal - periodicInterest )
            nextDate = new Date( new Date( currentDate.getFullYear(), currentDate.getMonth() + 1, currentDate.getDate() ) - new Date( currentDate.getFullYear(), currentDate.getMonth() + 1, currentDate.getDate() ).getTimezoneOffset()*60*1000 ),
            dateDiff = parseInt( ( nextDate - currentDate ) / ( 1000*60*60*24 ) );
            periodicInterest = precentValue * annualInterest/100/12;
          }
        },
        query = qs.parse();

      $('input#startDate').datepicker({
        format: 'yyyy-mm-dd',
        language: 'mn'
      });

      if ( query.numberOfPeriods && query.precentValue && query.annualInterest && query.startDate ) {
        $( 'input#numberOfPeriods' ).val( query.numberOfPeriods );
        $( 'input#precentValue' ).val( query.precentValue );
        $( 'input#startDate' ).val( query.startDate );
        $( 'input#annualInterest' ).val( query.annualInterest );
        calculate();
      }

      $( 'form[name=loanCalc]' ).submit( function ( e ) {
        e.preventDefault();
        calculate();
      });
    </script>
    <?php 
    wp_footer(); ?>
  </body>
</html>
