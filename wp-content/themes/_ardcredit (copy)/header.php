<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _ARDcredit
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>Ard Credit</title>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo get_template_directory_uri(); ?>/dist/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/idangerous.swiper.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/datepicker.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" />


<style>
    #bywild {
        position: fixed;
        bottom: 0;
        right: 0;
        z-index: 999;
        color: white;
        background-color: rgba(0,0,0,0.5);
        padding: 4px;
        padding-left: 10px;
        border-top-left-radius: 15px;
        cursor: pointer;
    }

    #bywild .bywildby {
    }

    #bywild .bywildwild {
        display: inline-block;
        width: 0;
        overflow: hidden;
        vertical-align: middle;
        transition: width 0.5s;
    }

    #bywild .bywildwild img {
        width: 50px;
    }

    #bywild:hover .bywildwild {
        width: 50px;
    }

</style>
<?php 
wp_head(); ?>
</head>
  <body <?php body_class(); ?>>
  <div id="bywild" class="">
        <div class="bywildby">
            by
            <div class="bywildwild">
                <a href="http://wild.agency" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/wild_white.svg">
                </a>
            </div>
        </div>
    </div><!-- #bywild -->
    <div id="bg"></div>
    <div id="header">
      <div class="black-bg"></div>
      <div class="header-top">
        <div class="container">
          <div class="pull-left lang">
              <?php echo qtranxf_generateLanguageSelectCode('both'); ?>
          </div>
          <div class="pull-right desc">
            <span class="phone"><i class="fa fa-phone"></i>+(976) 77003322</span>

            <?php wp_nav_menu( array( 'theme_location' => 'social', 'container' => 'false', 'depth' => 0 ) ); ?> 
  
          </div>
        </div>
      </div>
      <div class="container">
        <i class="fa fa-bars pull-right visible-xs visible-sm"></i>
        <div class="row">

          <div class="col-sm-3">
              <?php if(qtranxf_getLanguage()=='mn'){?>
                <a href='<?php echo esc_url( home_url( '/' ) ); ?>' rel='home' class="logo" >
                    <img src='<?php echo esc_url( get_theme_mod( '_ardcredit_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                </a>
              <?php }elseif(qtranxf_getLanguage()=='en'){?>
                <a href='<?php echo esc_url( home_url( '/' ) ); ?>' rel='home' class="logo" >
                    <img src='<?php echo esc_url( get_theme_mod( '_ardcredit_ENlogo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                </a>
              <?php }?>
           <!--  <?php if ( get_theme_mod( '_ardcredit_logo' ) ) : ?>
                <a href='<?php echo esc_url( home_url( '/' ) ); ?>' rel='home' class="logo" >
                    <img src='<?php echo esc_url( get_theme_mod( '_ardcredit_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
            <?php else : ?>
                <a href='<?php echo esc_url( home_url( '/' ) ); ?>' rel='home' class="logo" >
                        <?php bloginfo( 'name' ); ?>
                </a>
            <?php endif; ?> -->
          </div>

          <div class="col-sm-9 navmain">
            <div class="search pull-right hidden-sm hidden-xs">
              <i class="fa fa-search"></i>
              <div class="search-main">
                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                  <label>
                    <input type="search" class="form-control" placeholder="<?php echo esc_attr_x( '', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                  </label>
                  <i class="fa fa-search"></i>
                    <input type="submit" class="search-submit" value="<?php echo esc_attr_x( '', 'submit button' ) ?>"/>
                  </i>
                </form>
              </div>
            </div>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'false', 'depth' => 0 ) ); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="sub-btn">
      <div class="sub-btn-main">
        <div class="container">
          <a href="/зээлийн-ѳргѳдѳл-илгээх" class="pull-right">
            <i class="fa fa-share-square-o"></i>
            <span>
              <?php echo __("[:mn]Зээлийн ѳргѳдѳл<br>илгээх[:en]Application<br>form"); ?>
            </span>
          </a>
        </div>
      </div>
    </div>
