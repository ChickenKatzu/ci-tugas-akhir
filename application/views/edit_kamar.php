<div class="breadcrumb">
  <div class="container">
    <?php foreach ($kamar as $k){ ?>
      <form action="<?php echo base_url().'info_kamar/update' ?>" method="post">
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="hidden" name="idkamar" value="<?php echo $k->id_kamar?>">
            <label for="ukuranKamar">Ukuran kamar</label>
            <input type="text" class="form-control" id="ukuranKamar" placeholder="Ukuran Kamar" value="<?php echo $k->ukuran_kamar ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" placeholder="status" value="<?php echo $k->status ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="hargaBulanan">Harga Bulanan</label>
            <input type="text" class="form-control" id="hargaBulanan" placeholder="Harga Bulanan" value="<?php echo $k->harga_bulanan ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Example file input</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="<?php echo base_url('info_kamar') ?>">
          <button type="button" class="btn btn-default">Cancel</button>
        </a>
      </form>
    <?php } ?>
  </div>
</div>