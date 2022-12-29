<?php
#$title = "Php Header Footer";                   
require_once "header.php";              
?>
<style><?php include 'assets/stylesheets/main.css'; ?></style>

  <main>

    <div class="section">
      <div class="row center">
        <span class="center-align">
          <h1 class="grey-text text-darken-3"><b>We're getting married!</b></h1>
          <h4 class="teal-text text-darken-4 wedding-date"><b>Saturday October 28, 2023</b></h4>
          <p>3 o'clock in the afternoon</p>
          <p><a href="https://www.stalphonsuschicago.org/">St. Alphonsus Catholic Church</a> | Chicago, IL</p>
        </span>
      </div>

      <div class="row center">
    <image height=150 src="/assets/images/flowers/purple_flowers_long_3.png"/>
      </div>
    </div>
    
    <div class="carousel">
      <a class="carousel-item" href="#one!"><img src="assets/images/engagement/L1120698.jpg"></a>
      <a class="carousel-item" href="#two!"><img src="assets/images/engagement/572A9654.jpg"></a>
      <a class="carousel-item" href="#three!"><img src="assets/images/engagement/L1120649.jpg"></a>
      <a class="carousel-item" href="#four!"><img src="assets/images/engagement/L1120607.jpg"></a>
      <a class="carousel-item" href="#five!"><img src="assets/images/engagement/572A9675.jpg"></a>
    </div>

    <br/>

  </main>

<?php
require_once "footer.php";                
?>
