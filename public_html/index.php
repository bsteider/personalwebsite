<!DOCTYPE html>
<html lang="en">
	<head>
		<title>interview template</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Pridi" rel="stylesheet">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
				crossorigin="anonymous"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<!--<link rel="stylesheet" href="" type="text/css"/>-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<script src="js/form-validate.js"></script>
	</head>
	<body>

		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"
							  aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Brandon Steider</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="navbar-collapse navbar-right">
					<ul class="nav navbar-nav">
						<li><a href="#boxed"> About Me </a></li>
						<li><a href="#contact-form"> Contact Me </a></li>

					</ul>

				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>


		<div class="container-fluid">
			<div class="row" id="first-div">
				<div class="col-md-12">
					<div class="img-container center-block">
						<img src="img/brandonPicture.jpg" alt="picture of brando" class="img-circle center-block">
					</div>
				</div>
			</div>
			<div class="spacer"></div>

			<div class="row">
				<div id="boxed">
				<div class="boxed col-xs-offset-1">
					<h1>About Me</h1>
					My name is Brandon Steider and i’m 20 years old. I’m in my last weeks of the Deep Dive coding bootcamp at the Stemulus center. I graduated from nex-Gen Academy in 2015. Some of my hobbies are snowboarding, playing ukulele, playing video games and writing. I have a passion for movies and someday want to make an impact on the film industry either as an actor or director. My high end dreams are becoming a famous writer, musician, or professional driver (drifting/racing). If you have any questions for me please use the contact form below to get in touch with me
				</div>
				</div>
			</div>
		</div>
		<div class="spacer"></div>
		<div class="container">
			<form id="contact-form" class="form-horizontal action="php/mailer.php">
				<div class="form-group">
					<label for="name">Name</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<input type="text" class="form-control" id="name" name="name" placeholder="Name">
					</div>
				</div>
				<div class="form-group">
					<label for="email">Email address</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="subject">Subject</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</div>
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
					</div>
				</div>
				<div class="form-group">
					<label for="message">Message</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-comment" aria-hidden="true"></i>
						</div>
						<textarea class="form-control" rows="5" id="message" name="message"
									 placeholder="Message"></textarea>
					</div>
				</div>
				<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
				<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
				<div class="g-recaptcha recap-style" data-sitekey="6LeocRcUAAAAACjPtiUO7ldndZ30JXGzQsi515Pi"></div>
			</form>
			<div class="row">
				<div class="col-xs-12">
					<div id="output-area"></div>
				</div>
			</div>
		</div>
		<!--credit: rochelle lewis form-->

		<!--empty area for form error/success output-->


	</body>
</html>