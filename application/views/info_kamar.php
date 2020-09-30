

<!-- Main content -->
<section class="content">
 <div class="breadcrumb">
  <div class="box-body table-responsive table-hover">
   <table class="table table-hover">
     <tr class="label-primary">
      <th>No Kamar</th>
       <th>Status</th>
       <th>Nama</th>
       <th>Email</th>
       <th>Gambar</th>
       <th>Action</th>
     </tr>
     <?php 
     $no=1;
     foreach($kamar as $k)
     {
      ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $k->status ?></td>
        <td><?php echo $k->nama ?></td>
        <td><?php echo $k->email ?></td>
        <td><img src="<?php echo base_url('gambar/'.$u->gambar) ?>" width="72"></td>
        <td>
          <a class="btn label-warning" href="<?php echo base_url('welcome/edit/'.$u->id) ?>">
            <i class="fa fa-edit"></i>
          </a>
          <a href="<?php echo base_url('welcome/hapus/'.$u->id) ?>" class="btn label-danger">
           <i class="fa fa-trash-o"></i>
         </a>
       </td>
     </tr>
   <?php } ?>
 </table>
</div>
</div>
</section>