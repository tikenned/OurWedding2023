<?php
#$title = "Php Header Footer";                   
require_once "header.php";              
?>
<style><?php include 'assets/stylesheets/main.css'; ?></style>

    <main>
      <div class="container">
      <div class="card-panel deep-purple">
      <span class="white-text center-align"> 
        <h1> Welcome to our Wedding! </h1>
        <br>
        
        <div class="row white">
          <div class="col s1">
            <i class="large material-icons grey">cake</i>
          </div>
          
          <div class="col s1 orange">
            <i class="large material-icons black">church</i>
          </div>

          <div class="col s1 red">
            <i class="large material-icons black">liquor</i>
          </div>
        </div>
        <br>
        <p class="flow-text">We are getting married in Chicago!</p>
      </span>
      
     
    </div>
    </div>
     
    
     <!----->
    <div class="carousel">
      <a class="carousel-item" href="#one!"><img src="assets/images/engagement/L1120698.jpg"></a>
      <a class="carousel-item" href="#two!"><img src="assets/images/engagement/572A9654.jpg"></a>
      <a class="carousel-item" href="#three!"><img src="assets/images/engagement/L1120649.jpg"></a>
      <a class="carousel-item" href="#four!"><img src="assets/images/engagement/L1120607.jpg"></a>
      <a class="carousel-item" href="#five!"><img src="assets/images/engagement/572A9675.jpg"></a>
    </div>

    <!--
    <div class="card">
      <div class="card-image">
      <img src="assets/images/engagement/572A9622.jpg">
      </div>
      </div>

     -->
    </main>

<?php
require_once "footer.php";                
?>