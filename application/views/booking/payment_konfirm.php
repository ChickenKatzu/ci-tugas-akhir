<div class="container">
  <div class="container-fluid">
    
      <form action="<?php //echo base_url().'usercontroller/update'; ?>" method="post">
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="hidden" name="id" value="<?php echo $booking->id_booking?>">
            <label for="ukurankamar">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $booking->nama ?>"readonly>
          </div>
          <div class="form-group col-md-6">
            <label for="status">Nomor Kamar</label>
            <input type="text" class="form-control" name="nama_kamar" placeholder="Nomor Kamar" value="<?php echo $booking->nama_kamar ?>"readonly>
          </div>
          <div class="form-group col-md-6">
            <label for="status">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $booking->email ?>"readonly>
          </div>
          <div class="form-group col-md-6">
            <label for="namakamar">Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $booking->alamat ?>"readonly>
          </div>
          <div class="form-group col-md-6">
            <label for="hargabulanan">Tanggal Masuk</label>
            <input type="date" class="form-control" name="tanggalmasuk" placeholder="Tanggal lahir" value="<?php echo $booking->tanggal_masuk ?>" readonly>
          </div>
          <div class="form-group col-md-6">
            <label for="hargabulanan">Tanggal keluar</label>
            <input type="date" class="form-control" name="tanggalkeluar" placeholder="Tanggal lahir" value="<?php echo $booking->tanggal_keluar ?>" readonly>
          </div>
          <div class="form-group col-md-6">
            <label for="hargabulanan">Nomor Handphone</label>
            <input type="number" class="form-control" name="nohp" placeholder="Nomor Handphone" value="<?php echo $booking->nohp ?>"readonly>
          </div>
          <div class="form-group col-md-6">
            <label for="hargabulanan">pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan" value="<?php echo $booking->pekerjaan ?>"readonly>
          </div>
          <div class="form-group">
            <div class="col-md-6">
              <img class="img-fluid img-thumbnail" src="<?php echo base_url() ?>assets/img/gambar1.jpg">
            </div>
          </div>    
        </div>



      
          <button type="submit" class="btn btn-primary">Konfirmasi</button>
          <a href="<?php //echo base_url() ?>hapuspayment">
            <button type="button" class="btn btn-danger">Hapus</button>
          </a>
          <a href="<?php echo base_url() ?>payment">
            <button type="button" class="btn btn-default">Cancel</button>
          </a>
        
      </form>
   
  </div>
</div>