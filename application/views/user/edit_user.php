<div class="breadcrumb">
  <div class="container">
    <?php foreach ($user as $u) { ?>
      <form action="<?php echo base_url().'usercontroller/update'; ?>" method="post">
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="hidden" name="id" value="<?php echo $u->id?>">
            <label for="ukurankamar">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $u->nama ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="status">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $u->email ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="namakamar">Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $u->alamat ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="hargabulanan">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal" placeholder="Tanggal lahir" value="<?php echo $u->tanggal_lahir ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="hargabulanan">No Hp</label>
            <input type="number" class="form-control" name="nohp" placeholder="Nomor Handphone" value="<?php echo $u->nohp ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="hargabulanan">pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan" value="<?php echo $u->pekerjaan ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="uploadGambar">Gambar/Foto</label>
          <input type="file" class="form-control-file" id="uploadGambar">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="<?php echo base_url() ?>users">
          <button type="button" class="btn btn-default">Cancel</button>
        </a>
      </form>
    <?php } ?>
  </div>
</div>