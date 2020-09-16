<!-- Navigation -->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <button class="btn btn-outline-warning">Kos R-Cell</button>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#"><button class="btn btn-outline-warning">home</button>
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() ?>login" >
            <button class="btn btn-outline-warning">login</button>
          </a>
        </li>        
      </ul>
    </div>
  </div>
</nav>

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url(assets/img/gambar5.jpg)">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">First Slide</h3>
          <p class="lead">This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url(assets/img/gambar1.jpg)">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Second Slide</h3>
          <p class="lead">This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url(assets/img/gambar6.jpg)">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Third Slide</h3>
          <p class="lead">This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>


<!-- Page Content -->
<section class="py-5">
  <div class="breadcrumb">
    <div data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
  <div><h3>1</h3></div>
  <div><h3>2</h3></div>
  <div><h3>3</h3></div>
  <div><h3>4</h3></div>
  <div><h3>5</h3></div>
  <div><h3>6</h3></div>
</div>
  </div>
</section>
<section class="py-5">
  <div class="container">
    <div id="card-slide1" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#card-slide1" data-slide-to="0" class="active"></li>
        <li data-target="#card-slide1" data-slide-to="1"></li>
        <li data-target="#card-slide1" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url(assets/img/gambar5.jpg)">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="display-4">First Slide</h3>
            <p class="lead">This is a description for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item active" style="background-image: url(assets/img/gambar2.jpg)">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="display-4">First Slide</h3>
            <p class="lead">This is a description for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item active" style="background-image: url(assets/img/gambar6.jpg)">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="display-4">First Slide</h3>
            <p class="lead">This is a description for the third slide.</p>
          </div>
        </div>
        <a class="carousel-control-prev" href="#card-slide1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#card-slide1" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</section>