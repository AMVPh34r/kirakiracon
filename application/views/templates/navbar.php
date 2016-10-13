<?php
$nav = array(
	"Home"=>"home",
	"About"=>array(
		"MAIN"=>"about",
		"About KiraKiraCon"=>"about",
		"FAQs"=>"about/faq",
		"Convention Policies"=>"about/policies",
	),
	"Register"=>"register",
	// "Events"=>"events",
	// "Guests"=>"guests",
	"Directions"=>"directions",
	"Contact"=>"contact",
);

//$cur_page = substr(current_url(),strrpos(current_url(),'/')+1);
$cur_page = uri_string();
$nav_html = '<div class="collapse navbar-collapse navbar-ex1-collapse"><ul class="nav navbar-nav navbar-right">';
foreach($nav as $label=>$dest) {
	if (is_array($dest)) {
		$nav_html .= '<li class="dropdown'.(in_array($cur_page, $dest) ? ' active' : '').'">'.anchor($dest["MAIN"],$label,'class="dropdown-toggle"').'<ul class="dropdown-menu">';
		foreach(array_slice($dest,1,count($dest)) as $sub_lbl=>$sub_dest) {
			$nav_html .= '<li>'.anchor($sub_dest,$sub_lbl).'</li>';
		}
		$nav_html .= '</ul></li>';
	} else {
		$nav_html .= '<li'.($dest == $cur_page ? ' class="active"' : '').'>'.anchor($dest,$label).'</li>';
	}
}
$nav_html .= '</ul></div>';
?>

<!-- Main navigation bar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<!-- Menu button - shows on mobile devices to expand the navbar -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?php echo anchor("home", SITE_NAME, 'class="navbar-brand"'); ?>
		</div>
		<!-- Navbar items -->
		<?php echo $nav_html; ?>
	</div>
</nav>