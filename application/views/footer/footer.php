

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- /.content-wrapper -->
<footer class="main-footer">
	<!-- <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
	All rights reserved.
	<div class="float-right d-none d-sm-inline-block">
		<b>Version</b> 3.0.0 -->
	</div>
</footer>
</body>
<!-- load js/jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- date pick 30 days from now -->
<script type="text/javascript">
	// jQuery(document).ready(()=>{
	// 	jQuery('#tanggalmasuk').change(()=>{
	// 		var _date = jQuery('#tanggalmasuk').val();
	// 		var res = new Date(_date).setTime(new Date(_date).getTime() + (31 * 24 * 60 * 60 * 1000));
	// 		console.log('tanggal kapan? '+res);
	// 		var month = new Date(res).getMonth()+1;
	// 		var day = new Date(res).getDate();
	// 		var output = new Date(res).getFullYear() + '-' +(month < 10 ? '0' : '') + month + '-' +
	// 		(day < 10 ? '0' : '') + day;

	

	// 	})if $("button").ready(()=>{
	// 			var _bulan = jQuery('#3bulan').onClick().val();
	// 			var bulan = new Date(_bulan).setTime(new Date (res).getTime() + (93 * 24 * 60 * 60 * 1000));
	// 		})

	// 		
// 		jQuery('#tanggalkeluar').val(output);
	// 		console.log('test');




	// })





	// $("#searchDateFrom").val();

	// console.log((date.getMonth() ) + '/' + (date.getDate()) + '/' + (date.getFullYear()));


	$( document ).ready(function() {


		$("waktu").prop('disabled', true);

		$("#rentang").change(function(){

			var value = $('#rentang').val();
			if (value != '') {

				$("#waktu").prop('disabled', false);
			}
		});
		$("#waktu").change(function(){

			var _date = jQuery('#tanggalmasuk').val();

			var date = new Date();
			var value = $('#rentang').val();
			var waktu = $('#waktu').val();

			var dateToInt = new Date(_date).setTime(new Date(_date).getTime() + (31 * 24 * 60 * 60 * 1000));
			// console.log('tanggal kapan? '+dateToInt);
			if (waktu == 'bulan') {
				// result = value*31;
				

				var year = new Date(dateToInt).getFullYear();
				var month = new Date(dateToInt).getMonth()+parseInt(value);
				console.log(month);
				if ( parseInt(month) > 12) {
					console.log('hallo');
					for (var i = 0; i < parseInt(month)/12; i++) {
						console.log(i);
						if(i == 0){
							valueMonth = parseInt(month) - 12;
							valueYear = parseInt(year)+1;
						}else if(i > 0){
							valueMonth = valueMonth - 12;
							valueYear = valueYear+1;
							console.log(valueMonth);
							if (valueMonth < 0 ) {
								valueMonth = 12+valueMonth;
								valueYear = valueYear-1;								
							}
						}

					}
					console.log(valueMonth);
					var month = valueMonth;
					var year = valueYear;
					// $(month).val()
				}
				console.log(month);
				// date.setMonth( date.getMonth() + );
			}else if (waktu == 'tahun') {
				// result = value*31*12;
				
				var year = new Date(dateToInt).getFullYear()+parseInt(value);
				var month = new Date(dateToInt).getMonth();

				// date.setFullYear( date.getFullYear() + parseInt(value));
				console.log(year);

			}

			var day = new Date(dateToInt).getDate();
			console.log(day);
			var output =  year + '-' +(month < 10 ? '0' : '') + month + '-' +
			(day < 10 ? '0' : '') + day;
			console.log(output);


			// console.log((date.getMonth() ) + '/' + (date.getDate()) + '/' + (date.getFullYear()));
			// var tanggalreturn = (date.getMonth()) + '/' + (date.getDate()) + '/' + (date.getFullYear());

			// var tanggalkeluar = tanggalreturn;

			console.log(tanggalkeluar);
			$('#tanggalkeluar').val(output);

		});

	});


</script>
<!-- w3schoools -->


<!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal">
	<div class="w3-modal-content w3-animate-zoom w3-padding-large">
		<div class="w3-container w3-white w3-center">
			<i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-button w3-xlarge w3-right w3-transparent"></i>
			<h2 class="w3-wide">SUBSCRIBE</h2>
			<p>Join our mailing list to receive updates on available dates and special offers.</p>
			<p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
			<button type="button" class="w3-button w3-padding-large w3-green w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
		</div>
	</div>
</div>

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



	<!-- w3schools ends -->
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
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
	<!-- slick slider carousel-->
	<script src="<?php echo base_url(); ?>assets/css/slick/slick/slick.min.js"></script>
	</html>
