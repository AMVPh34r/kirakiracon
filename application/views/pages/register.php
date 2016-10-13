<?php
$reg = array(
	"pre-reg"=>array(
		"title"=>"Standard entry",
		"desc"=>"There's no pre-registration for KKC 2016, but standard entry on April 9 is just $5! We only accept cash, so bring your bills to the door on the day of the convention and gain full entry for the day.",
		"price"=>'$5<span class="super">00</span> at the door',
		"contact_subject"=>FALSE,
	),
	"arist-alley"=>array(
		"title"=>"Get a table at the Artists' Alley",
		"desc"=>"To get an artist table for selling your arts, crafts and other products, add $5 to the cost of admission. Just contact us ahead of time to let us know you're interested!",
		"price"=>'$5<span class="super">00</span> at the door',
		"contact_subject"=>'KiraKira Con 2016: Artist Alley Registration',
	),
	"vendor"=>array(
		"title"=>"Get a Vendor's Table",
		"desc"=>"Sell your wares or crafts at one of our vendor tables for no additional charge. Just contact us before the convention date to let us know of your interest.",
		"price"=>FALSE,
		"contact_subject"=>'KiraKira Con 2016: Vendor Registration',
	),
	"panel"=>array(
		"title"=>"Host a panel",
		"desc"=>"You may host a panel at the convention for no extra cost, but please notify us ahead of time that you are interested! Be sure to include your contact information and the content of your panel, with a copy of any slideshows or videos you will be showing if possible.",
		"price"=>FALSE,
		"contact_subject"=>'KiraKira Con 2016: Panel Registration',
	),
);

$c = FALSE;
$reg_html = '';
foreach($reg as $link=>$item) {
	$reg_html .= '<div class="section'.(($c=!$c)? '-colored' : '' ).'"><div class="container"><div class="row"><div class="col-md-8 col-md-offset-2 text-center">
		<h2>'.$item['title'].'</h2><hr />
		<p>'.$item['desc'].'</p>
		' . ($item['price'] !== FALSE ? '<p class="pricing">'.$item['price'].'</p>' : '') . '
		' . ($item['contact_subject'] !== FALSE ? '<a class="btn btn-primary" href="mailto:unccjams@yahoo.com?subject=' . $item['contact_subject'] . '" target="_blank">Register</a>' : '') . '
		</div></div></div></div>';
}
?>

<!-- Header -->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Registration</h1>
			<ol class="breadcrumb">
				<li><?php echo anchor('home','Home'); ?></li>
				<li class="active">Register</li>
			</ol>
		</div>
	</div>
	
	<!-- Page content -->
	<?php echo $reg_html; ?>
</div>