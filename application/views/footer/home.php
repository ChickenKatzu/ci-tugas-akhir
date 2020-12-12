

<!-- footer start -->
<section id="footer">
	<div class="container">
		<div class="row text-center text-xs-center text-sm-left text-md-left" >
			<div class="col-xs-12 col-sm-4 col-md-4">
				<h5>Quick links</h5>
				<ul class="list-unstyled quick-links">
					<li><a href="#"><i class="fa fa-angle-double-right"></i>Home</a></li>
					<li><a href="#"><i class="fa fa-angle-double-right"></i>Booking</a></li>
					<li><a href="#"><i class="fa fa-angle-double-right"></i>Login</a></li>
					<li><a href="#"><i class="fa fa-angle-double-right"></i>Register</a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 text-white">
				<img src="<?php base_url() ?>assets/img/gambar1.jpg" style="max-width: 50%"><br>
				For Contact & Information 0123456789 <br>
				Alamat: Jl. Raya Bakungan RT.2/RW.56, Bakungan, Wedomartani, Kec. Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<h5>Contact Us/Visit Us</h5>
				<ul class="list-unstyled quick-links">
					<li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
					<li><a href="#"><i class="fa fa-whatsapp"></i>WhatsApps</a></li>
					<li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i>Google+</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
				<ul class="list-unstyled list-inline social text-center">
					<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-whatsapp"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>
			</div>
			<hr>
		</div>	
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
				<p class="h6">Kos R-Cell © All right Reversed.<a class="text-green ml-2" href="#" target="_blank">Sunlimetech</a></p>
			</div>
			<hr>
		</div>	
	</div>
</section>
<!-- footer end -->


</body>
<!-- scripts w3schools -->
<script>
// Script to open and close sidebar when on tablets and phones
function w3_open() {
	document.getElementById("mySidebar").style.display = "block";
	document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
	document.getElementById("mySidebar").style.display = "none";
	document.getElementById("myOverlay").style.display = "none";
}

// Slideshow Apartment Images
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
	showDivs(slideIndex += n);
}

function currentDiv(n) {
	showDivs(slideIndex = n);
}

function showDivs(n) {
	var i;
	var x = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("demo");
	if (n > x.length) {slideIndex = 1}
		if (n < 1) {slideIndex = x.length}
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
			}
			x[slideIndex-1].style.display = "block";
			dots[slideIndex-1].className += " w3-opacity-off";
		}
	</script>
	<!-- end of scripts w3schools -->

	<!-- jQuery -->
	<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- ChartJS -->
	<script src="<?php echo base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
	<!-- Sparkline -->
	<script src="<?php echo base_url(); ?>assets/plugins/sparklines/sparkline.js"></script>
	<!-- JQVMap -->
	<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<!-- Summernote -->
	<script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
	<!-- overlayScrollbars -->
	<script src="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.js"></script>
	<!-- slick slider-->
	<script  src="<?php echo base_url('assets/js/slick.min.js');?>"></script>
	<script src="<?php echo base_url(); ?>assets/css/slick/slick/slick.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- export -->
	<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
	<script  src="<?php echo base_url('assets/js/bootstrap-submenu.js');?>"></script>
	<script  src="<?php echo base_url('assets/js/rangeslider.js');?>"></script>
	<script  src="<?php echo base_url('assets/js/bootstrap-select.min.js');?>"></script>
	<script  src="<?php echo base_url('assets/js/jquery.scrollUp.js');?>"></script>
	<script  src="<?php echo base_url('assets/js/slick.min.js');?>"></script>
	<script  src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js');?>"></script>
	<script  src="<?php echo base_url('assets/js/maps.js');?>"></script>
	<script  src="<?php echo base_url('assets/js/app.js');?>"></script>
	</html>