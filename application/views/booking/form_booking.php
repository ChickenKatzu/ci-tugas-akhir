<div class="breadcrumb">
  <div class="container">

   <form action="<?php echo base_url('bookingcontroller/order') ?>" method="post" onload='getdates();'>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="idkamar">Nomor Kamar</label>
        <select class="form-control" name="idkamar">
          <option value="">-</option>


          <?php foreach ($kamar as $k) { ?>
           <?php if ($k->status == 'available'){ ?>
            <option value="<?php echo $k->id_kamar ?>"><?php echo $k->nama_kamar ?></option>

          <?php } }?>



        </select>
      </div>
      <?php //foreach ($user as $u ){ ?>
        

        <div class="form-group col-md-6">
          <label for="hargabulanan">Tanggal masuk</label>
          <input type="date" class="form-control" id="tanggalmasuk" name="tanggal_masuk" placeholder="Tanggal Masuk">
        </div>
        
        <div class="form-group col-md-6">
          <label for="tanggal_keluar">Tanggal keluar</label>
          <input type="date" class="form-control" id="tanggalkeluar" name="tanggal_keluar" placeholder="Tanggal keluar" readonly>
        </div>
        <?php //} ?>
            <!-- <div class="form-group col-md-6">
              <label for="status">status</label>
              <input type="text" class="form-control" name="status1" placeholder="status1" value="<?php echo $k->status ?>">
            </div> -->

          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="<?php echo base_url() ?>home">
            <button type="button" class="btn btn-default">Cancel</button>
          </a>
        </form>
      </div>
    </div>