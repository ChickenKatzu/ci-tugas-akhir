<div class="breadcrumb">
  <div class="container">
    <form action="<?php echo base_url('usercontroller/aksi_tambah') ?>" method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="ukurankamar">Nama</label>
          <input type="text" class="form-control" name="nama" placeholder="Nama">
        </div>
        <div class="form-group col-md-6">
          <label for="status">Email</label>
          <input type="text" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
          <label for="namakamar">Alamat</label>
          <input type="text" class="form-control" name="alamat" placeholder="Alamat">
        </div>
        <div class="form-group col-md-6">
          <label for="hargabulanan">Tanggal Lahir</label>
          <input type="date" class="form-control" name="tanggallahir" placeholder="Tanggal lahir">
        </div>
        <div class="form-group col-md-6">
          <label for="hargabulanan">No Hp</label>
          <input type="text" class="form-control" name="nohp" placeholder="Nomor Handphone">
        </div>
        <div class="form-group col-md-6">
          <label for="hargabulanan">pekerjaan</label>
          <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
        </div>

        <div class="form-group col-md-6">
          <label for="hargabulanan">Level</label>
          <select class="form-control" name="user_level">
            <option value="">-</option>
            <option value="admin">admin</option>
            <option value="owner">owner</option>
          </select>
        </div>

      </div>
      <!--<div class="form-group">
        <label for="uploadGambar">Gambar/Foto</label>
        <input type="file" class="form-control-file" id="uploadGambar">
      </div>-->
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="<?php echo base_url() ?>users">
        <button type="button" class="btn btn-default">Cancel</button>
      </a>
    </form>
  </div>
</div>