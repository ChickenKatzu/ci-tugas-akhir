    <div class="bg-blur"></div>
    <div class="col-lg-10 col-xl-9 mx-auto content">
      <div class="card card-signin flex-row my-5">
        <div class="card-img-left d-none d-md-flex" style="background-image: url(assets/img/gambar5.jpg);">
         <!-- Background image for card set in CSS! -->
       </div>
       <div class="card-body">
        <h5 style="margin-bottom: 2rem; font-weight: 300; font-size: 1.5rem; text-align: center">Register</h5>
         <form class="form-signin" action="<?php echo base_url('register') ?>" method="post">
          <div class="form-label-group">
            <input type="text" id="inputnama" name="nama" class="form-control" placeholder="Nama" required autofocus value="<?php echo set_value('nama') ?>">
            <label for="inputnama">Nama</label>
          </div>

          <div class="form-label-group">
            <input type="text" name="alamat" placeholder="Alamat" class="form-control" id="inputalamat" required value="<?php echo set_value('alamat') ?>">
            <label for="inputalamat">Alamat</label>
          </div>

          <div class="form-label-group">
            <input type="date" name="tanggal" id="tanggal" placeholder="TangalLahir" class="form-control" required value="<?php echo set_value('tanggal') ?>">
            <label for="tanggal" >Tanggal Lahir</label>
          </div>

          <div class="form-label-group">
            <input type="number" name="nohp" placeholder="NomorHandphone" class="form-control" id="inputnomor" minlength="12" value="<?php echo set_value('nohp') ?>">
            <label for="inputnomor">Nomor Handphone</label>
          </div>

          <div class="form-label-group">
            <input type="text" name="pekerjaan" placeholder="Pekerjaan" class="form-control" id="inputpekerjaan" required value="<?php echo set_value('pekerjaan') ?>">
            <label for="inputpekerjaan">Pekerjaan</label>
          </div>

          <div class="form-label-group">
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required value="<?php echo set_value('email') ?>">
            <label for="inputEmail">Email address</label>
          </div>

          <hr>

          <div class="form-label-group">
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
            <label for="inputPassword">Password</label>
          </div>

          <div class="form-label-group">
            <input type="password" id="inputConfirmPassword" name="cpassword" class="form-control" placeholder="Password" required>
            <label for="inputConfirmPassword">Confirm password</label>
          </div>

          <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit">Register</button>
          <a class="d-block text-center mt-2 small" href="<?php echo base_url('login'); ?>">Already Have A Account?</a>
          <hr class="my-4">
        </form>
      </div>
    </div>
  </div>
