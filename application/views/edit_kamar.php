<div class="breadcrumb">
  <div class="container">
    <?php foreach ($kamar as $k){ ?>
      <form action="<?php echo base_url().'kamarcontroller/update' ?> " method="post">
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="hidden" name="idkamar" value="<?php echo $k->id_kamar?>">
            <label for="ukuranKamar">Ukuran kamar</label>
            <input type="text" name="ukurankamar" class="form-control" id="ukuranKamar" placeholder="Ukuran Kamar" value="<?php echo $k->ukuran_kamar ?>">
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
            <label for="namaKamar">Nama Kamar</label>
            <input type="text" name="namakamar" class="form-control" id="namaKamar" placeholder="Nama Kamar" value="<?php echo $k->nama_kamar ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="hargaBulanan">Harga Bulanan</label>
            <input type="number" name="hargabulanan" class="form-control" id="hargaBulanan" placeholder="Harga Bulanan" value="<?php echo $k->harga_bulanan ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Example file input</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="<?php echo base_url() ?>info_kamar">
          <button type="button" class="btn btn-default">Cancel</button>
        </a>
      </form>
    <?php } ?>
  </div>
</div>