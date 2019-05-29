<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Contact</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
  crossorigin="anonymous">
  <link href="contact.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<header>
  <?php include 'header.php' ?>
</header>

<main>
  <div class="container contactform">
  	<div class="row">
  		<div class="col-md-3">
  			<div class="contact-info">
  				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
  				<h2>Nous contacter</h2>
  			</div>
  		</div>
  		<div class="col-md-9">
  			<div class="contact-form">
  				<div class="form-group">
  				  <label class="control-label col-sm-2" for="fname">Nom:</label>
  				  <div class="col-sm-10">
  					<input type="text" class="form-control" id="fname" placeholder="Entrez votre nom" name="fname">
  				  </div>
  				</div>
  				<div class="form-group">
  				  <label class="control-label col-sm-2" for="lname">Prénom(s):</label>
  				  <div class="col-sm-10">
  					<input type="text" class="form-control" id="lname" placeholder="Entrez votre prénom" name="lname">
  				  </div>
  				</div>
  				<div class="form-group">
  				  <label class="control-label col-sm-2" for="email">Email:</label>
  				  <div class="col-sm-10">
  					<input type="email" class="form-control" id="email" placeholder="Entrez votre mail" name="email">
  				  </div>
  				</div>
  				<div class="form-group">
  				  <label class="control-label col-sm-2" for="comment">Votre message:</label>
  				  <div class="col-sm-10">
  					<textarea class="form-control" rows="5" id="comment"></textarea>
  				  </div>
  				</div>
  				<div class="form-group">
  				  <div class="col-sm-offset-2 col-sm-10">
  					<button type="submit" class="btn btn-default">Submit</button>
  				  </div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
</main>

<footer>
</footer>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script src="testvideo.js" type="text/javascript"></script>
</body>
</html>
