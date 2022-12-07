<?php
#$title = "Php Header Footer";                   
require_once "header.php";              
?>
<style><?php include 'assets/stylesheets/main.css'; ?></style>

<!--

STYLE GUIDE
mad and tim: together, photo and blurb side by side 
left side photo, right side blurb
left side blurb, right side photo

-->
    <!--
    <main>
      <div class="container">
      <div class="card-panel teal darken-4">
      <span class="white-text"> 
        <h1 class="center-align"> Arriving to Chicago </h1>
      <br><br>
        <p class="center-align flow-text">Whether you come from near or far, we are looking forward to welcoming you into Chicago.
         <br>
         We know many of you will be traveling, so to make your journey a smooth one, we want to help you arrive easily and safely.</p> 
        </p>
      </span>
    </div>
    </div>
-->

    


    <div class="row deep-purple">
      <div class="col s6 m6 l6">
        <div class="card">
        <div class="card-image">
          <img src="assets/images/weddingParty/headshot.jpg">
        </div>
      </div>
      </div>
      
      <div class="col s6">
        <div class="card">
          <div class="card-content teal darken-4">
            <p class="center-align flow-text">This is some crap about Tim</p>
          </div>
        </div>
      </div>
    </div> 

    <div class="row teal">
      <div class="col s6 m6 l6">
        <div class="card">
        <div class="card-content teal darken-4">
            <p class="center-align flow-text">This is some crap about Madelyn</p>
          </div>
      </div>
      </div>
      
      <div class="col s6">
        <div class="card">
        <div class="card-image">
          <img src="assets/images/weddingParty/madelynRedDress.jpg">
        </div>
        </div>
      </div>
    </div> 
     
<?php
require_once "footer.php";                
?>