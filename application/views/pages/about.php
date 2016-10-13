<!-- Header -->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">About KiraKiraCon</h1>
			<ol class="breadcrumb">
				<li><?php echo anchor('home','Home'); ?></li>
				<li class="active">About</li>
				<li><?php echo anchor('about/faq','FAQ').' | '.anchor('about/policies','Convention Policies'); ?></li>
			</ol>
		</div>
	</div>
	
	<!-- Image carousel -->
	<div id="about-carousel" class="carousel slide">
		<!-- Icons for carousel slides -->
		<ol class="carousel-indicators">
			<li data-target="#about-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#about-carousel" data-slide-to="1"></li>
			<li data-target="#about-carousel" data-slide-to="2"></li>
		</ol>
		<!-- Carousel slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="<?php echo base_url(); ?>files/img/gallery/002.jpg" alt="Slide One" />
				<div class="carousel-caption">
					<h4>Our arts and crafts vendors sell a wide variety of commercial and handmade goods.</h4>
				</div>
			</div>
			<div class="item">
				<img src="<?php echo base_url(); ?>files/img/gallery/007.jpg" alt="Slide Two" />
				<div class="carousel-caption">
					<h4>Exciting and informative panels are held around the convention center every day.</h4>
				</div>
			</div>
			<div class="item">
				<img src="<?php echo base_url(); ?>files/img/gallery/006.jpg" alt="Slide Three" />
				<div class="carousel-caption">
					<h4>Convention attendees love dressing up as some of their favorite characters.</h4>
				</div>
			</div>
		</div>
		<!-- Carousel controls -->
		<a class="left carousel-control" href="#about-carousel" data-slide="prev"><span class="icon-prev"></span></a>
		<a class="right carousel-control" href="#about-carousel" data-slide="next"><span class="icon-next"></span></a>
	</div>
	
	<!-- Page content -->
	<div class="section">
		<div class="row">
			<div class="col-md-12">
				<p>KiraKiraCon is an annual anime convention held by the University of North Carolina at Charlotte. For the past four years the school's Costumes and Cultures and JAMS clubs have gathered with people from all over to celebrate the culture surrounding Japanese anime and manga. The convention is organized and run entirely by UNCC students.</p>
			</div>
		</div>
	</div>
</div>