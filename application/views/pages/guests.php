<?php
$guests = array(
	"guest-1"=>array(
		"name"=>"Guest 1 Name",
		"bio"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at leo sed elit interdum cursus bibendum quis orci. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris congue malesuada quam, ut pulvinar tortor commodo sed. Nunc turpis nisi, aliquam et vulputate ut, hendrerit vel elit. Phasellus pulvinar quam non tortor feugiat venenatis. Nullam pulvinar diam et erat tempor varius. Maecenas mauris purus, viverra id malesuada feugiat, dignissim placerat sapien. Vivamus tincidunt aliquam euismod. Nam viverra hendrerit quam quis iaculis. Vivamus ullamcorper ligula vel neque malesuada ultrices. Maecenas scelerisque neque nec pharetra rhoncus. Fusce sapien lacus, congue a pellentesque id, mattis nec ligula. In facilisis augue vitae ornare varius. Fusce id ipsum aliquam, lobortis metus non, venenatis dui. Etiam lobortis suscipit elit non interdum.",
		"img"=>"guest1.png",
	),
	"guest-2"=>array(
		"name"=>"Guest 2 Name",
		"bio"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam molestie ligula eros, at fermentum tellus convallis eget. Suspendisse potenti. Nam rutrum nulla vulputate faucibus dapibus. Proin non ligula viverra, congue magna in, vehicula sem. Nulla facilisis purus vel magna rhoncus, eget mattis erat placerat. Vivamus a pretium libero. Maecenas semper metus arcu, nec vehicula nisi condimentum vitae. Etiam ut molestie augue, non ullamcorper metus. Etiam non auctor magna. Pellentesque laoreet mauris sit amet metus varius pulvinar in vel metus. Nunc nulla enim, pharetra eget suscipit fringilla, mattis ut lectus. Morbi blandit elit et ligula vulputate elementum.",
		"img"=>"guest2.png",
	),
	"guest-3"=>array(
		"name"=>"Guest 3 Name",
		"bio"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lacus eu elit pharetra gravida eu non magna. Phasellus diam arcu, interdum non mauris lacinia, consectetur fermentum metus. Vivamus vitae lobortis tellus, vel ultricies elit. Sed in hendrerit massa. Donec dolor lectus, molestie eu metus ultricies, fringilla gravida odio. Nunc ut ante ac nisl consequat rutrum. Mauris quis gravida ligula. Maecenas posuere fermentum urna a congue. Suspendisse vestibulum leo et dapibus interdum. Nam aliquam sem massa, eu cursus nisi mollis vitae. Donec adipiscing tempor magna, sit amet posuere nunc. Suspendisse porttitor nec magna euismod bibendum. Cras commodo ultricies ante, lacus pretium a.",
		"img"=>"guest3.png",
	),
);

$c = true;
$guest_html = '';
foreach($guests as $link=>$item) {
	$guest_html .= '<div class="section'.(($c=!$c)? '-colored' : '' ).'"><div class="container"><div class="row"><div class="col-md-12">
		<h2>'.$item['name'].'</h2><hr />
		<p>'.$item['bio'].'</p>
		[GUEST IMG]
		</div></div></div></div>';
}
?>

<!-- Header -->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Guests</h1>
			<ol class="breadcrumb">
				<li><?php echo anchor('home','Home'); ?></li>
				<li class="active">Guests</li>
			</ol>
		</div>
	</div>
	
	<!-- Page content -->
	<?php echo $guest_html; ?>
</div>