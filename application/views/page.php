<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $page_title; ?> - KiraKiraCon</title>
	
	<!-- Include CSS files -->
	<?php
		echo link_tag('styles/default/css/bootstrap.css');
		echo link_tag('styles/default/css/style.css');
		echo link_tag('styles/default/font-awesome/css/font-awesome.min.css');
	?>
</head>

<body>
	
	<?php include("templates/navbar.php"); ?>

	<?php echo $page_body; ?>

	<?php include("templates/footer.php"); ?>
	
	<!-- Javascript -->
	<script src="<?php echo base_url(); ?>styles/default/js/jquery-1.10.2.js"></script>
	<script src="<?php echo base_url(); ?>styles/default/js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>styles/default/js/script.js"></script>
</body>
</html>