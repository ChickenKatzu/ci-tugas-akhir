

<!-- Main content -->
<section class="content">
 <div class="wrapper">
   <div class="box-body table-responsive table-hover">
     <table class="table table-hover table-striped">
      <thead class="thead-dark">

       <tr class="label-primary">
        <th>No Kamar</th>
        <th>Ukuran Kamar</th>
        <th>Nama Kamar</th>
        <th>Harga Bulanan</th>
        <th>Status</th>

        <th>Action</th>
      </tr>
    </thead>
    <?php 
    $no=1;

    foreach($kamar as $k)
    {
      ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $k->ukuran_kamar ?></td>
        <td><?php echo $k->nama_kamar ?></td>
        <td>Rp. <?php echo $k->harga_bulanan ?></td>
        <td><?php echo $k->status ?></td>
        <td>
          <a class="btn btn-primary" href="<?php echo base_url('kamarcontroller/view_kamar/'.$k->id_kamar) ?>">
            <i class="fa fa-eye"></i>
          </a>
        </td>
      </tr>
    <?php } ?>
  </table>
</div>
</div>
</section>