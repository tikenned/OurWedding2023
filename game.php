<?php
require_once('protect-this.php');
require_once("header.php");
?>

<html>
<style>
	<?php include 'assets/stylesheets/main.css'; ?>
</style>
<style>
	<?php include 'assets/stylesheets/game.css'; ?>
</style>


<div class="section">
	<div class="row center">
		<div class="col m6 offset-m3 s10 offset-s1">
			<div class="row center">
				<image height=150 src="/assets/images/flowers/purple_flowers_square_1.png" />
			</div>


			<p>After RSVP-ing, please enjoy our homemade wedding game!</p>

			<p>Use the arrow keys to collect the wedding rings.</p>

			<h3 class="score"></h3>
			<section class="snakeTable"></section>

			<br />

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
