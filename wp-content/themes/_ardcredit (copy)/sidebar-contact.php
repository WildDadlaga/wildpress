<?php
/**
 * The contact sidebar
 *
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
  return;
}
?>
<?php dynamic_sidebar( 'sidebar-2' ); ?>