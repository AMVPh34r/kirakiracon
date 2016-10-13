<!-- Page header -->
<div class="container"> 
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Contact Us</h1>
			<ol class="breadcrumb">
				<li><?php echo anchor('home','Home'); ?></li>
				<li class="active">Contact</li>
			</ol>
		</div>
	</div>
  
	<!-- Contact form -->
	<div class="row">
		<div class="col-sm-12">
			<p>Got a question for us? Awesome! Shoot us an email and we'll try and have an answer for you as soon as possible. Please try to include as much information as possible in your email for us to better assist you.</p>
			<p>Also see our <a href="faq">FAQ section</a> for some answers to common questions.</p>
			<p><a class="btn btn-primary" href="mailto:unccjams@yahoo.com?subject=KiraKira Con 2016" target="_blank">Email Us</a></p>
		</div>
	</div>
</div>

<?php
			/*<form role="form" name="contact" method="POST" action="/contact">
				<div class="row">
					<div class="form-group col-lg-4">
						<label for="name-input">Name</label>
						<input type="text" name="contact_name" class="form-control" id="name-input" placeholder="John Smith" required />
					</div>
					<div class="form-group col-lg-4">
						<label for="email-input">Email Address</label>
						<input type="email" name="contact_email" class="form-control" id="email-input" placeholder="name@company.com" required />
					</div>
					<div class="clearfix"></div>
					<div class="form-group col-lg-8">
						<label for="subject-input">Topic</label>
						<select name="contact_topic" class="form-control" id="subject-input" required>
							<option value="null" disabled selected>-Please choose a topic-</option>
							<option value="general">General convention question</option>
							<option value="registration">Help with registration</option>
							<option value="rules">Convention policies and rules</option>
							<option value="volunteer">Volunteering</option>
							<option value="other">Other</option>
						</select>
					</div>
					<div class="clearfix"></div>
					<div class="form-group col-lg-12">
						<label for="msg-input">Message</label>
						<textarea name="contact_message" class="form-control" rows="12" id="msg-input" required></textarea>
					</div>
					<div class="form-group col-lg-12">
						<input type="hidden" name="save" value="contact">
						<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					</div>
					<div class="form-error"></div>
			  </div>
			</form>
			<div id="result"></div>
		</div>
	</div>
</div>
<script>
window.onload = function() {
	var form = document.contact;
	// Check if form is valid when submitted, and display entered data
	form.submit.onclick = function(e) {
		form.contact_name.setCustomValidity('');
		form.contact_message.setCustomValidity('');
		if (form.contact_name.value.indexOf(' ') == -1)
			form.contact_name.setCustomValidity('Please enter a first and last name.');
		if (form.contact_message.value.length < 30)
			form.contact_message.setCustomValidity('Please enter a message of 30 characters or longer.');
		if (form.checkValidity()) {
			e.preventDefault();
			document.getElementById("result").innerHTML = "<hr /><h3>Form result</h3>" +
				"<b>Name: </b>"+form.contact_name.value+"<br />" +
				"<b>Email: </b>"+form.contact_email.value+"<br />" +
				"<b>Topic: </b>"+form.contact_topic.value+"<br />" +
				"<b>Message: </b>"+form.contact_message.value+"<br />";
		}
	}
}
</script>*/
?>