<!-- sidebar -->
<aside class="sidebar four columns offset-by-one" role="complementary">

<?php

// display additional services on services pages
if ( $post->post_parent == 5 ) :

	include( locate_template( 'sidebar-services.php' ) );

endif;

?>

	<div class="sidebar-widget">
	<?php

		if( function_exists('dynamic_sidebar') ) dynamic_sidebar( 'widget-main-sidebar' );

	?>
	</div>

</aside>
<!-- /sidebar -->
