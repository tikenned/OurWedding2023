<html>
    <head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-7PPTGD0FHQ"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-7PPTGD0FHQ');
	</script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>  
      <meta charset="UTF-8">
	<!-- Compiled and minified CSS -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
	<!--Import materialize.css
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>-->

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="assets/stylesheets/main.css">

	<link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/cursive" type="text/css"/> 
	<link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/metropolitano" type="text/css"/> 
	<title>Madelyn and Timothy - Welcome!</title>
	<script src="scripts.js"></script>
      </head>

<?php
#$title = "Php Header Footer";                   
require_once "header.php";              
?>
<style><?php include 'assets/stylesheets/main.css'; ?></style>
<style><?php include 'assets/stylesheets/game.css'; ?></style>


    <div class="section">
      <div class="row center">
	<div class="col m8 offset-m2 s10 offset-s1">

	  <h3 class="grey-text text-darken-3">We're still making our RSVP form :)</h3>

	  <p>In the meantime, enjoy this homemade wedding game!</p>

	  <p>Use the arrow keys to collect the wedding rings.</p>
	  <br/>

        <div class="row center">
            <image height=150 src="/assets/images/flowers/purple_flowers_square_1.png"/>
        </div>

	  <h3 class="score"></h3>
	  <section class="snakeTable"></section>

	  <br/>

          <a class="waves-effect waves-light deep-purple darken-3 btn start">Start</a>
	  <h3 class="game-results"></h3>

      	</div>
      </div>
    </div>

  <script src="game.js"></script>

<?php
require_once "footer.php";                
?>

</html>
