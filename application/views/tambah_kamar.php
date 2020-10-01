<div class="breadcrumb">
  <div class="container">
    <form action="<?php echo base_url('info_kamar/aksi_tambah') ?>" method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="ukurankamar">Ukuran kamar</label>
          <input type="text" class="form-control" id="ukurankamar" name="ukurankamar" placeholder="Ukuran Kamar">
        </div>
        <div class="form-group col-md-6">
          <label for="status">Status</label>
          <input type="text" class="form-control" id="status" name="status" placeholder="status">
        </div>
        <div class="form-group col-md-6">
          <label for="hargabulanan">Harga Bulanan</label>
          <input type="text" class="form-control" id="hargabulanan" name="hargabulanan" placeholder="Harga Bulanan">
        </div>
      </div>
      <div class="form-group">
        <label for="uploadGambar">Gambar/Foto</label>
        <input type="file" class="form-control-file" id="uploadGambar">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="<?php echo base_url('info_kamar') ?>">
        <button type="button" class="btn btn-default">Cancel</button>
      </a>
    </form>
  </div>
</div>