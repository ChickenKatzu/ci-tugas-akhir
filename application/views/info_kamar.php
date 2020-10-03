

<!-- Main content -->
<section class="content">
 <div class="wrapper">
   <a href="<?php echo base_url('info_kamar/tambah') ?>">
    <button type="submit" class="btn btn-primary btn-lg mx-right">Tambah Kamar</button>
  </a>
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
        <a class="btn btn-warning" href="<?php echo base_url('info_kamar/edit/'.$k->id_kamar) ?>">
          <i class="fa fa-edit"></i>
        </a>
        <a class="btn btn-danger" href="<?php echo base_url('info_kamar/hapus/'.$k->id_kamar) ?>">
         <i class="fa fa-trash-o"></i>
       </a>
     </td>
   </tr>
 <?php } ?>
</table>
</div>
</div>
</section>