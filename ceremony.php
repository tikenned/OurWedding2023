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

	  <h3 class="grey-text text-darken-3">Ceremony & Reception</h3>

	  <p>
		We are thrilled to be getting married at our home parish in our very own Chicago neighborhood! Our hyper-local reception is just a couple blocks away at Chicago Theater Works.
	  </p>

	  <br/>

          <div class="row center">
              <image height=150 src="/assets/images/flowers/purple_flowers_square_1.png"/>
          </div>
	
	  <h3>Ceremony</h3>
	  <a href="https://www.stalphonsuschicago.org/">
	  	<img src="assets/images/logos/st_alphonsus_wide.jpeg" width="50%" style="border-radius:20px"></img>
          </a>
          <h5 class="teal-text text-darken-4 wedding-date"><b>St. Alphonsus Church</b></h5>
	  <a href="https://goo.gl/maps/h1tzjfFEPVb37iLNA">
	      <p>1429 W Wellington Ave, Chicago IL 60657</p>
 	  </a>
          <p>Nuptial Mass</p>
          <p>3:00pm - 4:30pm</p>

	  <br/>
	  <br/>

          <p>~ 12min walk (0.6 miles) ~</p>

	  <br/>

	  <h3>Reception</h3>
	  <a href="https://www.chicagotheaterworks.com/">
	  	<img src="assets/images/logos/chicago_theater_works_inside.jpeg" width="50%" style="border-radius:20px"></img>
          </a>
          <h5 class="teal-text text-darken-4 wedding-date"><b>Chicago Theater Works</b></h5>
	  <a href="https://goo.gl/maps/zgbzTjqGuQarQDA1A">
                <p>1113 W Belmont Ave, Chicago, IL 60657</p>
	  </a>
          <p>Dinner & Dancing</p>
          <p>6:00pm - 11:00pm</p>


      	</div>
      </div>
    </div>

<?php
require_once "footer.php";                
?>

</html>
