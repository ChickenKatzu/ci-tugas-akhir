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

<section class="py-2">
  <div class="container col-lg-11 col-sm-11 mx-auto">
    <div class="card-deck" >
      <?php foreach ($kamar as $k){ ?>
        <div class="card">
          <img src="<?php echo base_url() ?>assets/img/gambar6.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Kos R-Cell</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item" name="ukurankamar"><?php echo $k->ukuran_kamar ?></li>
            <li class="list-group-item" name="hargabulanan"><?php echo $k->harga_bulanan ?></li>
            <li class="list-group-item" name="status"><?php echo $k->status ?></li>
          </ul>
          <div class="card-body">
            <a href="<?php echo base_url('bookingcontroller/tambah') ?>" class="card-link">
              <button class="btn btn-primary">Booking</button></a>
            </div>
          </div>
          
        <?php } ?>
      </div>
    </div>
  </section>
  <!-- Page Content -->
  <section>
    <div class="text-center">
      <h1>Tentang Kos R-Cell</h1>
    </div>
    <div class="container">

      <div id="slide2" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slide2" data-slide-to="0" class="active"></li>
          <li data-target="#slide2" data-slide-to="1"></li>
          <li data-target="#slide2" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" style="background-image: url(assets/img/gambar5.jpg)">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="display-4">First Slide</h3>
              <p class="lead">This is a description for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url(assets/img/gambar6.jpg)">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="display-4">First Slide</h3>
              <p class="lead">This is a description for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url(assets/img/gambar1.jpg)">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="display-4">First Slide</h3>
              <p class="lead">This is a description for the first slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#slide2" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slide2" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
    <div class="container py-4">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    <section>