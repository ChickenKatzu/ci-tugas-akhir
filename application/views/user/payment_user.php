<div class="container">
  <div class="container-fluid">
   <form action="<?php echo base_url().'bookingcontroller/upload_gambar'; ?>" method="post" enctype="multipart/form-data">
    <div class="form-row">
      <div class="form-group col-md-6">
         <input type="hidden" name="id" value="<?php echo $user->id?>">
        <label for="ukurankamar">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $user->nama ?>"readonly>
      </div>
      <div class="form-group col-md-6">
        <label for="status">Nomor Kamar</label>
        <input type="text" class="form-control" name="nama_kamar" placeholder="Nomor Kamar" value="<?php echo $user->nama_kamar ?>"readonly>
      </div>
      <div class="form-group col-md-6">
        <label for="status">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $user->email ?>"readonly>
      </div>
      <div class="form-group col-md-6">
        <label for="hargabulanan">Tanggal Masuk</label>
        <input type="date" class="form-control" name="tanggalmasuk" placeholder="Tanggal lahir" value="<?php echo $user->tanggal_masuk ?>" readonly>
      </div>
      <div class="form-group col-md-6">
        <label for="namakamar">Alamat</label>
        <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $user->alamat ?>"readonly>
      </div>
      <div class="form-group col-md-6">
        <label for="hargabulanan">Tanggal keluar</label>
        <input type="date" class="form-control" name="tanggalkeluar" placeholder="Tanggal lahir" value="<?php echo $user->tanggal_keluar ?>" readonly>
      </div>
      <div class="form-group col-md-6">
        <label for="hargabulanan">Nomor Handphone</label>
        <input type="number" class="form-control" name="nohp" placeholder="Nomor Handphone" value="<?php echo $user->nohp ?>"readonly>
      </div>
      <div class="form-group col-md-6">
        <label for="hargabulanan">Status</label>
        <input type="text" class="form-control" name="status" placeholder="Pekerjaan" value="<?php echo $user->status_booking ?>"readonly>
      </div>
      <div class="form-group col-md-6">
        <label for="hargabulanan">Pekerjaan</label>
        <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan" value="<?php echo $user->pekerjaan ?>"readonly>
      </div>
      <div class="form-group">
        <label for="uploadGambar">Gambar/Foto</label>
        <input type="file" class="form-control-file" name="gambar" value="<?php echo $user->gambar ?>">
      </div> 
    </div>

    <a href="">
      <button type="submit" class="btn btn-primary">Konfirmasi</button>
    </a>
    <a href="<?php echo base_url() ?>hapuspayment">
      <button type="button" class="btn btn-danger">Hapus</button>
    </a>
    <a href="<?php echo base_url() ?>userinbox">
      <button type="button" class="btn btn-default">Cancel</button>
    </a>

  </form>
</div>
</div>