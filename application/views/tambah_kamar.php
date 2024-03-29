<div class="breadcrumb">
  <div class="container">
    <form action="<?php echo base_url('kamarController/aksi_tambah') ?>" method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
            <label for="ukurankamar">Ukuran Kamar</label>
            <select class="form-control" name="ukurankamar">
              <option value="">-</option>
              <option value="3m x 3m">3m x 3m</option>
              <option value="5m x 5m">5m x 5m</option>
            </select>
          </div>
        <div class="form-group col-md-6">
            <label for="status">Status</label>
            <select class="form-control" name="status">
              <option value="">-</option>
              <option value="Available">Available</option>
              <option value="Booked">Booked</option>
            </select>
          </div>
        <div class="form-group col-md-6">
          <label for="namakamar">Nama Kamar</label>
          <select class="form-control" name="namakamar">
              <option value="">-</option>
              <option value="kamar 1">kamar 1</option>
              <option value="kamar 2">kamar 2</option>
              <option value="kamar 3">kamar 3</option>
              <option value="kamar 4">kamar 4</option>
              <option value="kamar 5">kamar 5</option>
              <option value="kamar 6">kamar 6</option>
              <option value="kamar 7">kamar 7</option>
              <option value="kamar 8">kamar 8</option>
              <option value="kamar 9">kamar 9</option>
              <option value="kamar 10">kamar 10</option>
            </select>
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
      <a href="<?php echo base_url() ?>info_kamar">
        <button type="button" class="btn btn-default">Cancel</button>
      </a>
    </form>
  </div>
</div>