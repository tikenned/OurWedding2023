<?php
#$title = "Php Header Footer";                   
require_once "header.php";              
?>
<style><?php include 'assets/stylesheets/main.css'; ?></style>
<style><?php include 'assets/stylesheets/game.css'; ?></style>


    <div class="section">
      <div class="row center">
	<div class="col s8 offset-s2">

	  <h3 class="grey-text text-darken-3">We're still making our RSVP form :)</h3>

	  <p>In the meantime, enjoy this homemade wedding game!</p>

	  <p>Use the arrow keys to collect the wedding rings.</p>

	  <br/>

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
