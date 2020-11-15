
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
  .mySlides {display: none}
</style>
<body class="w3-content w3-border-left w3-border-right">

  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-light-grey w3-collapse w3-top" style="z-index:3;width:260px" id="mySidebar">
    <div class="w3-container w3-display-container w3-padding-16">
      <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-transparent w3-display-topright"></i>
      <h3>Rental</h3>
      <h3>from $99</h3>
      <h6>per night</h6>
      <hr>
      <form action="/action_page.php" target="_blank">
       <p><label><i class="fa fa-calendar-check-o"></i> Check In</label></p>
       <label for="idkamar">Nomor Kamar</label>
       <select class="form-control" name="idkamar">
        <option value="">-</option>


        <?php foreach ($kamar as $k) { ?>
         <?php if ($k->status == 'available'){ ?>
          <option value="<?php echo $k->id_kamar ?>"><?php echo $k->nama_kamar ?></option>

        <?php } }?>



      </select>
      <label for="tanggalmasuk">Tanggal Order</label>
      <input type="date" class="form-control" id="tanggalmasuk" name="tanggal_masuk" placeholder="Tanggal Masuk" value="<?php echo date('Y-m-d'); ?>">

      <div class="form-group">
        <div class="input-group-addon"><b>Rentang :</b></div>
        <input id="rentang" type="number" name="" class='form-control'>

        <select id="waktu" class="form-control" disabled>
          <option value="-">-</option>
          <option value="tahun">Tahun</option>
          <option value="bulan">Bulan</option>
        </select>
      </div>
      <div class="form-group">
        <label for="tanggal_keluar">Tanggal keluar</label>
        <input type="date" class="form-control" id="tanggalkeluar" name="tanggal_keluar" placeholder="Tanggal keluar" readonly>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="<?php echo base_url() ?>home">
      <button type="button" class="btn btn-default">Cancel</button>
    </a>
  </form>
</div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <span class="w3-bar-item">Rental</span>
  <a href="javascript:void(0)" class="w3-right w3-bar-item w3-button" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>