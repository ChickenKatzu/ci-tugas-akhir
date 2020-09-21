 <div class="container">
  <div class="row">
    <div class="col-lg-10 col-xl-9 mx-auto">
      <div class="card card-signin flex-row my-5">
        <div class="card-img-left d-none d-md-flex" style="background-image: url(assets/img/gambar5.jpg);">
         <!-- Background image for card set in CSS! -->
       </div>
       <div class="card-body">
        <h5 style="margin-bottom: 2rem; font-weight: 300; font-size: 1.5rem; text-align: center">Register</h5>
        <form class="form-signin">
          <div class="form-label-group">
            <input type="text" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
            <label for="inputUserame">Username</label>
          </div>

          <div class="form-label-group">
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
            <label for="inputEmail">Email address</label>
          </div>

          <hr>

          <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <label for="inputPassword">Password</label>
          </div>

          <div class="form-label-group">
            <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
            <label for="inputConfirmPassword">Confirm password</label>
          </div>

          <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
          <a class="d-block text-center mt-2 small" href="<?php echo base_url(); ?>login">Already Have A Account?</a>
          <hr class="my-4">
        </form>
      </div>
    </div>
  </div>
</div>
</div>