

<!-- Main content -->
<section class="content">
 <div class="wrapper">
   <!-- <a href="<?php //echo base_url('bookingcontroller/tambah') ?>">
    <button type="submit" class="btn btn-primary btn-lg mx-right">Tambah User</button>
  </a> -->
  
  <div class="box-body table-responsive table-hover col-md-9 col-md-8 col-md-7 col-md-6 col-xl-12 col-xl-9 col-xl-10 col-xl-8 col-xl-7 col-xl-6 ">
   <table class="table table-hover table-striped">
    <thead class="thead-dark">
     <tr class="label-primary">
      <th>Nomor Kamar</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Alamat</th>
      <th>Nomor Handphone</th>
      <th>Level</th>
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

        <td>
          <a class="btn btn-primary" href="<?php echo base_url() ?>viewpayment">
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