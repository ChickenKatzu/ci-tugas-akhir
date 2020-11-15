

<!-- Main content -->


<section class="content">
	<div class="wrapper">
		<div class="box-body table-responsive table-hover">
			<table class="table table-hover table-striped">
				<thead class="thead-dark">

					<tr class="label-primary">
						<th>Kamar</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Alamat</th>
						<th>Nomor Handphone</th>
						<th>Tanggal Masuk</th>
						<th>Tanggal Keluar</th>
						<th>Action</th>

					</tr>
				</thead>
				<tr>
						<td><?php echo $user->nama_kamar ?></td>
						<td><?php echo $user->nama ?></td>
						<td><?php echo $user->email ?></td>
						<td><?php echo $user->alamat ?></td>
						<td><?php echo $user->nohp ?></td>
						<td><?php echo $user->tanggal_masuk ?></td>
						<td><?php echo $user->tanggal_keluar ?></td>					
						<td>
							<a class="btn btn-primary" href="<?php echo base_url() ?>paymentuser">
								<i class="fa fa-eye"></i>
							</a>
							<a class="btn btn-success" href="#">
								<i class="fas fa-dolly"></i>
							</a>
							<a class="btn btn-danger" href="#">
								<i class="fa fa-trash-o"></i>
							</a>
						</td>
					</tr>
				</table>
		</div>
	</div>


</section>

<div class="row">
	<div class="col">
		<!--Tampilkan pagination-->
		<!-- <?php echo $pagination; ?> -->
	</div>
</div>
