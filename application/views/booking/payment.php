

<!-- Main content -->
<section class="content">
 <div class="wrapper">
   <!-- <a href="<?php //echo base_url('bookingcontroller/tambah') ?>">
    <button type="submit" class="btn btn-primary btn-lg mx-right">Tambah User</button>
  </a> -->
  
  <div class="box-body table-responsive table-hover col-md-10 col-md-11 col-md-12 col-md-9 col-md-8 col-md-7 col-md-6 col-lg-12 col-lg-9 col-lg-10 col-lg-8 col-lg-7 col-lg-6 col-lg-11 ">
   <table class="table table-hover table-striped col-md-10 col-md-11 col-md-12 col-md-9 col-md-8 col-md-7 col-md-6 col-lg-12 col-lg-9 col-lg-10 col-lg-8 col-lg-7 col-lg-6 col-lg-11">
    <thead class="thead-dark">
     <tr class="label-primary">
      <th>Nomor Kamar</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Alamat</th>
      <th>Nomor Handphone</th>
      <th>Level</th>
      <th>status</th>
      <th>Action</th>
    </tr>
  </thead>
  <?php
  $no=1;

  foreach($booking as $b)
    {

    ?>
      <tr> 
        <td><?php echo $b->nama_kamar?></td>
        <td><?php echo $b->nama ?></td>
        <td><?php echo $b->email ?></td>
        <td><?php echo $b->alamat ?></td>
        <td><?php echo $b->nohp ?></td>
        <td><?php echo $b->user_level ?></td>
        <td><?php echo $b->status_booking ?></td>

        <td>
          <a class="btn btn-primary" href="<?php echo base_url('bookingcontroller/konfirmasi_payment/'.$b->id_kamar) ?>">
            <i class="fa fa-eye"></i>
          </a>
          <a class="btn btn-success" href="<?php echo base_url() ?>konfirmasi">
            <i class="far fa-check-square"></i>
          </a>
          <a class="btn btn-danger" href="<?php echo base_url() ?>delete">
           <i class="fa fa-trash-o"></i>
         </a>
       </td>
     </tr>
   <?php } ?>
 </table>
</div>
</div>


</section>

<!-- <div class="row">
  <div class="col">
    Tampilkan pagination
    <?php //echo $pagination; ?>
  </div>
</div> -->