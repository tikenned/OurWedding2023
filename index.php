<?php
#$title = "Php Header Footer";                   
require_once "header.php";              
?>
<style><?php include 'assets/stylesheets/main.css'; ?></style>

  <main>

    <div class="section">
      <div class="row">
        <span class="center-align flow-text">
          <h1 class="grey-text text-darken-3"><b>We're getting married!</b></h1>
          <h4 class="teal-text text-darken-4"><b>Saturday October 28, 2023</b></h4>
          <p>3 o'clock in the afternoon</p>

          <div class="row center">
            <div class="col offset-s4 s4">
              <i class="small material-icons teal-text text-lighten-4">train</i>
              <i class="small material-icons teal-text text-lighten-4">church</i>
              <i class="small material-icons teal-text text-lighten-4">cake</i>
              <i class="small material-icons teal-text text-lighten-4">liquor</i>
              <i class="small material-icons teal-text text-lighten-4">music_note</i>
            </div>
          </div>

          <p>St. Alphonsus Catholic Church | Chicago, IL</p>
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

    <br/>

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