

<!-- Main content -->
<section class="content">
 <div class="wrapper">
   <a href="<?php echo base_url('usercontroller/tambah') ?>">
    <button type="submit" class="btn btn-primary btn-lg mx-right">Tambah User</button>
  </a>
  <div class="box-body table-responsive table-hover">
   <table class="table table-hover table-striped">
    <thead class="thead-dark">

     <tr class="label-primary">
      <th>No</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Alamat</th>
      <th>Tanggal Lahir</th>
      <th>Nomor Handphone</th>
      <!-- <th>umur</th> -->
      <th>Pekerjaan</th>

      <th>Action</th>
    </tr>
  </thead>
  <?php 
  $no=1;

  foreach($user->result() as $k)
  {
    ?>
    <tr>
      <td><?php echo $k->id ?></td>
      <td><?php echo $k->nama ?></td>
      <td><?php echo $k->email ?></td>
      <td><?php echo $k->alamat ?></td>
      <td><?php echo $k->tanggal_lahir ?></td>
      <td><?php echo $k->nohp ?></td>
      <!-- <td><?php echo $k->umur ?></td> -->
      <td><?php echo $k->pekerjaan ?></td>
      <td>
        <a class="btn btn-warning" href="<?php echo base_url('usercontroller/edit/'.$k->id) ?>">
          <i class="fa fa-edit"></i>
        </a>
        <a class="btn btn-danger" href="<?php echo base_url('usercontroller/hapus/'.$k->id) ?>">
         <i class="fa fa-trash-o"></i>
       </a>
     </td>
   </tr>
 <?php } ?>
</table>
</div>
</div>


</section>

<div class="row">
  <div class="col">
    <!--Tampilkan pagination-->
    <?php echo $pagination; ?>
  </div>
</div>