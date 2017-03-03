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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<!--<link rel="stylesheet" href="" type="text/css"/>-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>
		<script src="js/form-validate.js"> </script>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Brandon Steider Personal Website</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Dank Memes <span class="sr-only">(current)</span></a></li>
						<li><a href="#">More Memes</a></li>

							</ul>

				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<div class="container">
		<div class="img-container center-block">
			<img src="img/brandonPicture.jpg" alt="picture of brando" class="img-circle center-block">
		</div>
		</div>

		<div class="container">
		<div class="boxed">
			<h1>About Me</h1>
			Taxidermy godard four loko tumblr cliche. Offal readymade af humblebrag, vaporware cardigan chartreuse VHS post-ironic succulents four dollar toast tumeric. Pug pour-over kitsch literally, subway tile edison bulb direct trade woke vegan authentic cray banh mi tacos. Meggings iPhone bitters gluten-free, typewriter schlitz meditation tumeric sriracha 90's mustache authentic. Blue bottle franzen disrupt hoodie hammock locavore. Franzen wayfarers ugh meh, banjo banh mi asymmetrical before they sold out small batch street art synth biodiesel lyft farm-to-table kitsch. Before they sold out listicle skateboard vexillologist kitsch, tumblr blue bottle vape. Mumblecore whatever artisan narwhal, man braid four loko XOXO tattooed twee vexillologist meggings seitan jean shorts messenger bag VHS. Kale chips sriracha waistcoat cornhole. Paleo squid whatever aesthetic. Tumeric brooklyn man braid, street art fashion axe tote bag freegan. Subway tile bespoke copper mug, polaroid occupy marfa 8-bit kale chips butcher vegan drinking vinegar shoreditch cronut. Chartreuse actually YOLO, vaporware literally roof party meggings cred artisan snackwave skateboard asymmetrical slow-carb. Green juice post-ironic humblebrag, unicorn vice pok pok mustache mixtape fanny pack kogi vape readymade gastropub iceland sartorial. Vexillologist cardigan enamel pin squid, food truck keytar pop-up viral tote bag yuccie 3 wolf moon narwhal air plant readymade. Bicycle rights lo-fi wayfarers shoreditch pour-over kogi plaid taxidermy, shabby chic mumblecore. Tattooed taxidermy raclette plaid. Etsy bushwick man braid next level, prism master cleanse coloring book. Man bun butcher microdosing vice, semiotics listicle messenger bag seitan polaroid pop-up small batch. Locavore blog disrupt chillwave, organic literally deep v vaporware. Pabst raw denim yuccie, fixie live-edge mustache drinking vinegar raclette glossier.
		</div>
		</div>
<div class="container">
	<form id="contact-form"class="form-horizontal well" action="php/mailer.php">
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
				<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
			</div>
		</div>
		<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
		<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
	</form>
</div>
		<!--credit: rochelle lewis form-->

		<!--empty area for form error/success output-->
		<div class="row">
			<div class="col-xs-12">
				<div id="output-area"></div>
			</div>
		</div>

	</body>
</html>