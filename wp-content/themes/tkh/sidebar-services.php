<?php

$p = get_the_id();

switch( $p ) {
	// set alternate service
	case 18:
		$service = "accounting";
		$icon = "pencil";
		$desc = "Maintain profitability and capitalize on new opportunities on an ongoing basis.";
		break;
	case 19:
		$service = "tax";
		$icon = "calc";
		$desc = "Advise, develop and implement tax saving strategies.";
		break;
	default:
		$service = "";
		break;
}

// display alternative service if above a page id is matched
if ( !empty( $service ) ) :

?>
	<div class="sidebar-widget sidebar-services text-center">

		<h1 class="header-icon sidebar-icon icon-<?php echo $icon; ?>">
			<a href="/services/<?php echo $service; ?>-services"><?php echo ucfirst( $service ); ?> Services</a>
		</h1>
		
		<p class="services-desc"><?php echo $desc; ?></p>

	</div>
<?php

endif;

?>