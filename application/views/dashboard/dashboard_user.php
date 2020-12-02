<section class="content">
	<div class="container">
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<?php if( $this->session->flashdata('pesan')) ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="breadcrumb text-auto">			
			<p>Selamat datang, di Halaman Dashboard <b><?php echo $user->user_level ?></b>
				<br>Login Sebagai,<b><?php echo $user->nama ?></b> 
				</p>
			</div>
		</div>	
	</section>