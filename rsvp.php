<html>

<?php
#$title = "Php Header Footer";                   
require_once "header.php";
?>
<style>
	<?php include 'assets/stylesheets/main.css'; ?>
</style>


<div class="section">
	<div class="row center">
		<div class="col m6 offset-m3 s10 offset-s1">

			<h3 class="grey-text text-darken-3">RSVP</h3>
			<p>We hope you are able to celebrate with us on our big day!</p>


			<div class="row">
				<div class="input-field col s12">
					<form id="fs-frm" name="basic-rsvp-form" accept-charset="utf-8" action="https://formspree.io/f/mzbqdjln" method="post">
						<fieldset id="fs-frm-inputs">

							<div class="row col s12">
								<label for="full-name">Name(s)</label>
								<input type="text" id="full-name" placeholder="First and Last" required>
							</div>

							<div class="row col s12">
								<label for="attending">Will you be attending?</label>
								<select name="attending" id="attending" required="">
									<option value="" selected="" disabled="">Select</option>
									<option value="Yes">Yes, of course!</option>
									<option value="No">No, only in spirit</option>
								</select>
							</div>

							<div class="row col s12">
								<label for="food">Any dietary restrictions?</label>
								<input type="text" name="food" id="food" placeholder="Vegetarian, dairy allergy, etc." required>
							</div>

							<input type="hidden" name="_subject" id="email-subject" value="RSVP">

						</fieldset>

						<br />

						<input class="deep-purple darken-3 btn" type="submit" value="SUBMIT">

					</form>

				</div>
			</div>

		</div>
	</div>
</div>

<script src="scripts.js"></script>

<?php
require_once "footer.php";
?>

</html>
