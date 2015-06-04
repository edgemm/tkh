<?php

// set team member email based on name
list( $team_name ) = explode( ' ', trim( get_the_title() ) );

$team_name_cap = ucwords( $team_name );
$team_name_lower = strtolower( $team_name );

?>

<aside class="sidebar four columns offset-by-one" role="complementary">

	<h2 class="header-aside">Contact <?php echo $team_name_cap; ?></h2>

	<ul class="team-contact">
		<li class="team-contact-item team-contact-phone">
			<a class="team-contact-medium" href="tel:503.228.2612">503.228.2612</a>
		</li>
		<li class="team-contact-item team-contact-email">
			<a href="mailto:<?php echo $team_name_lower; ?>@tkhllp.com" class="team-contact-medium trig-modal modal-contact-team" data-modal="contact-team" data-eLoc="<?php echo $team_name_lower; ?>" title="Contact <?php $team_name_cap; ?>">Email <?php echo $team_name_cap; ?></a>
		</li>
	</ul>

</aside>
<!-- /.sidebar -->
