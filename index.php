<?php include("header.php"); ?>
<div class="container">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/intro-carousel/1.jpg" alt="Seaside branch" style="width:100%;">
        <div class="carousel-caption">
          <p>I~Cha SM Seaside</p>
        </div>
      </div>

      <div class="item">
        <img src="img/intro-carousel/2.jpg" alt="cubicle" style="width:100%;">
        <div class="carousel-caption">
          <p>Seside Cubicles</p>
        </div>
      </div>

    
      <div class="item">
        <img src="img/intro-carousel/3.jpg" alt="cdu cubicle" style="width:100%;">
        <div class="carousel-caption">
          <p>CDU Cubicles</p>
        </div>
      </div>


      <div class="item">
        <img src="img/intro-carousel/4.jpg" alt="bingsu" style="width:100%;">
        <div class="carousel-caption">
          <p>Bingsu</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<?php include("footer.php"); ?>