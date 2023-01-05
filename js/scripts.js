$(document).ready(function (){

    // jQuery methods go here...
    $(".dropdown-trigger").dropdown({ hover: true });
    $('.carousel').carousel();
    
    $myCanvas.drawImage({
    source: 'imgs/cat.jpg',
    x: 250, y: 100,
    fromCenter: false,
    shadowColor: '#222',
    shadowBlur: 3,
    rotate: 40
    });
    
  }); 
/*
  <script>
  $(document).ready(function(){
        $('#demo-carousel').carousel();
      });
  </script>
  */