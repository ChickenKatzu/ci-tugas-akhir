
<div class="container-fluid">
	<div class="wrapper">
		<div class="row no-gutter">
			<div class="col-lg-6 col-lg-4 col-md-4 col-md-6 mx-auto" style=" background-image: url(assets/img/gambar5.jpg); background-size: cover; background-position: center;">
			</div>
			<div class="col-md-8 col-lg-6">
				<div class="login d-flex align-items-center py-5">
					<div class="container">
						<div class="row">
							<div class="col-md-9 col-lg-8 mx-auto">
								<h1 class="login-heading mb-3 text-center">
									<a href="<?php echo base_url(); ?>home">
										<button class="btn" href="#" active>
											KOS R-CELL
										</button>
									</a>
								</h1>
								<form>
									<div class="form-label-group">
										<input type="text" id="inputUsername"  name="email" class="form-control" placeholder="Email">
										<label for="inputUsername">Email</label>
									</div>

									<div class="form-label-group">
										<input type="password" id="inputPassword" class="form-control" placeholder="password">
										<label for="inputPassword">Password</label>
									</div>
									<a href="<?php echo base_url() ?>dashboard">
										<button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Login</button>
									</a>									
								</form>
								<hr>
								<a href="<?php echo base_url() ?>register">
									<button class="btn btn-lg btn-default btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Register</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>