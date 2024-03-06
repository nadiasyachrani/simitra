<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "simitra";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// AWAL EDIT SESUAIKAN TABEL DATABASE
// Menangani penambahan data baru
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['id_sertif']) && isset($_POST['id_reg']) && isset($_POST['commodity']) && isset($_POST['consignment']) && isset($_POST['country']) && isset($_POST['pol']) && isset($_POST['destination']) && isset($_POST['id_order_container']) && isset($_POST['nama_customer']) && isset($_POST['telp_customer']) && isset($_POST['attn']) && isset($_POST['tin']) && isset($_POST['id_importer']) && isset($_POST['nama_importer']) && isset($_POST['alamat_importer']) && isset($_POST['telp_importer']) && isset($_POST['fax']) && isset($_POST['usci']) && isset($_POST['pic']) && isset($_POST['id_recorsheet']) && isset($_POST['tanggal_selesai']) && isset($_POST['daff_prescribed_doses_rate']) && isset($_POST['forecast_minimum_temperature']) && isset($_POST['exposure_period']) && isset($_POST['applied_dose_rate']) && isset($_POST['fumigation_conducted']) && isset($_POST['container']) && isset($_POST['wrapping']) && isset($_POST['tanggal_sertif']) && isset($_POST['noreg'])) {

      // Mengambil nilai dari $_POST
      $idsertif = $_POST['id_sertif'];
      $idreg = $_POST['id_reg'];
      $commodity = $_POST['commodity'];
      $consignment = $_POST['consignment'];
      $country = $_POST['country'];
      $pol = $_POST['pol'];
      $destination = $_POST['destination'];
      $idordercontainer = $_POST['id_order_container'];
      $namacustomer = $_POST['nama_customer'];
      $telpcustomer = $_POST['telp_customer'];
      $attn = $_POST['attn'];
      $tin = $_POST['tin'];
      $idimporter = $_POST['id_importer'];
      $namaimporter = $_POST['nama_importer'];
      $alamatimporter = $_POST['alamat_importer'];
      $telpimporter = $_POST['telp_importer'];
      $fax = $_POST['fax'];
      $usci = $_POST['usci'];
      $pic = $_POST['pic'];
      $idrecorsheet = $_POST['id_recorsheet'];
      $tanggalselesai = $_POST['tanggal_selesai'];
      $daffprescribeddosesrate = $_POST['daff_prescribed_doses_rate'];
      $forecastminimumtemperature = $_POST['forecast_minimum_temperature'];
      $exposureperiod = $_POST['exposure_period'];
      $applieddoserate = $_POST['applied_dose_rate'];
      $fumigationconducted = $_POST['fumigation_conducted'];
      $container = $_POST['container'];
      $wrapping = $_POST['wrapping'];
      $tanggalsertif = $_POST['tanggal_sertif'];
      $noreg = $_POST['noreg'];

      // Menyiapkan statement SQL untuk insert data
      $query = "INSERT INTO sertifikat (id_sertif, id_reg, commodity, consignment, country, pol, destination, id_order_container, nama_customer, telp_customer, attn, tin, id_importer, nama_importer, alamat_importer, telp_importer, fax, usci, pic, id_recorsheet, tanggal_selesai, daff_prescribed_doses_rate, forecast_minimum_temperature, exposure_period, applied_dose_rate, fumigation_conducted, container, wrapping, tanggal_sertif, noreg) VALUES ('$idsertif', '$idreg', '$commodity', '$consignment', '$country', '$pol', '$destination', '$idordercontainer', '$namacustomer', '$telpcustomer', '$attn', '$tin', '$idimporter', '$namaimporter', '$alamatimporter', '$telpimporter', '$fax', '$usci', '$pic', '$idrecorsheet', '$tanggalselesai', '$daffprescribeddosesrate', '$forecastminimumtemperature', '$exposureperiod', '$applieddoserate', '$fumigationconducted', '$container', '$wrapping', '$tanggalsertif', '$noreg')";

      $result = mysqli_query($conn, $query);

      if (!$result) {
          echo "Error: " . mysqli_error($conn);
          exit();
      }
  }

  // Menangani pembaruan data
  if (isset($_POST['edit_id_sertif']) && isset($_POST['edit_id_reg']) && isset($_POST['edit_target']) && isset($_POST['edit_commodity']) && isset($_POST['edit_consignment']) && isset($_POST['edit_country']) && isset($_POST['edit_pol']) && isset($_POST['edit_destination']) && isset($_POST['edit_id_order_container']) && isset($_POST['edit_nama_customer']) && isset($_POST['edit_telp_customer']) && isset($_POST['edit_attn']) && isset($_POST['edit_tin']) && isset($_POST['edit_id_importer']) && isset($_POST['edit_nama_importer']) && isset($_POST['edit_alamat_importer']) && isset($_POST['edit_telp_importer']) && isset($_POST['edit_fax']) && isset($_POST['edit_usci']) && isset($_POST['edit_pic']) && isset($_POST['edit_id_recorsheet']) && isset($_POST['edit_tanggal_selesai']) && isset($_POST['edit_daff_prescribed_doses_rate']) && isset($_POST['edit_forecast_minimum_temperature']) && isset($_POST['edit_exposure_period']) && isset($_POST['edit_applied_dose_rate']) && isset($_POST['edit_fumigation_conducted']) && isset($_POST['edit_container']) && isset($_POST['edit_wrapping']) && isset($_POST['edit_tanggal_sertif']) && isset($_POST['edit_noreg'])) {

      // Mengambil nilai dari $_POST
      $idsertif = $_POST['edit_id_sertif'];
      $idreg = $_POST['edit_id_reg'];
      $target = $_POST['edit_target'];
      $commodity = $_POST['edit_commodity'];
      $consignment = $_POST['edit_consignment'];
      $country = $_POST['edit_country'];
      $pol = $_POST['edit_pol'];
      $destination = $_POST['edit_destination'];
      $idordercontainer = $_POST['edit_id_order_container'];
      $namacustomer = $_POST['edit_nama_customer'];
      $telpcustomer = $_POST['edit_telp_customer'];
      $attn = $_POST['edit_attn'];
      $tin = $_POST['edit_tin'];
      $idimporter = $_POST['edit_id_importer'];
      $namaimporter = $_POST['edit_nama_importer'];
      $alamatimporter = $_POST['edit_alamat_importer'];
      $telpimporter = $_POST['edit_telp_importer'];
      $fax = $_POST['edit_fax'];
      $usci = $_POST['edit_usci'];
      $pic = $_POST['edit_pic'];
      $idrecorsheet = $_POST['edit_id_recorsheet'];
      $tanggalselesai = $_POST['edit_tanggal_selesai'];
      $daffprescribeddosesrate = $_POST['edit_daff_prescribed_doses_rate'];
      $forecastminimumtemperature = $_POST['edit_forecast_minimum_temperature'];
      $exposureperiod = $_POST['edit_exposure_period'];
      $applieddoserate = $_POST['edit_applied_dose_rate'];
      $fumigationconducted = $_POST['edit_fumigation_conducted'];
      $container = $_POST['edit_container'];
      $wrapping = $_POST['edit_wrapping'];
      $tanggalsertif = $_POST['edit_tanggal_sertif'];
      $noreg = $_POST['edit_noreg'];

      // Menyiapkan statement SQL untuk update data
      $query = "UPDATE sertifikat SET id_reg='$idreg', commodity='$commodity', consignment='$consignment', country='$country', pol='$pol', destination='$destination', id_order_container='$idordercontainer', nama_customer='$namacustomer', telp_customer='$telpcustomer', attn='$attn', tin='$tin', id_importer='$idimporter', nama_importer='$namaimporter', alamat_importer='$alamatimporter', telp_importer='$telpimporter', fax='$fax', usci='$usci', pic='$pic', id_recorsheet='$idrecorsheet', tanggal_selesai='$tanggalselesai', daff_prescribed_doses_rate='$daffprescribeddosesrate', forecast_minimum_temperature='$forecastminimumtemperature', exposure_period='$exposureperiod', applied_dose_rate='$applieddoserate', fumigation_conducted='$fumigationconducted', container='$container', wrapping='$wrapping', tanggal_sertif='$tanggalsertif', noreg='$noreg' WHERE id_sertif='$idsertif'";

      $result = mysqli_query($conn, $query);

      if (!$result) {
          echo "Error: " . mysqli_error($conn);
          exit();
      }
  }
}

// Menangani penghapusan data
if (isset($_GET['id_order'])) {
  $idordercontainer = $_GET['id_order'];

  $query = "DELETE FROM data_order WHERE id_order='$idordercontainer'";
  $result = mysqli_query($conn, $query);

  if (!$result) {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
      exit();
  }
}

// Mengambil data dari tabel data_harga
$query_select = "SELECT * FROM data_order";
$result_select = mysqli_query($conn, $query_select);

// Memeriksa apakah query berhasil dieksekusi
if (!$result_select) {
  echo "Error: " . $query_select . "<br>" . mysqli_error($conn);
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>SIMITRA - Order</title> <!-- EDIT NAMA -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/simitra.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">SIMITRA</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Master</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <!-- Konten dropdown Master -->
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Master</h6>
            <a class="collapse-item" href="standar-treatment.php">Standar treatment</a>
            <a class="collapse-item" href="harga-jasa.php">Order</a>
            <a class="collapse-item" href="persediaan.php">Persediaan</a>
            <a class="collapse-item" href="importer.php">Importer</a>
            <a class="collapse-item" href="pegawai.php">Pegawai</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Penerimaan Jasa</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <!-- Konten dropdown Penerimaan Jasa -->
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Penerimaan Jasa</h6>
            <a class="collapse-item" href="customer.php">Customer</a>
            <a class="collapse-item" href="order.php">Order</a>
            <a class="collapse-item" href="dokumen-order.php">Dokumen Order</a>
            <a class="collapse-item" href="sertifikat.php">Sertifikat</a>
            <a class="collapse-item" href="invoice.php">Invoice</a>
            <a class="collapse-item" href="bukti-pembayaran.php">Bukti Pembayaran</a>
            <a class="collapse-item" href="detail-customer.php">Detail Customer</a>
            <a class="collapse-item" href="rekap-penjualan.php">Rekap Penjualan</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOperasional"
          aria-expanded="true" aria-controls="collapseOperasional">
          <i class="fa fa-users" aria-hidden="true"></i>
          <span>Operasional</span>
        </a>
        <div id="collapseOperasional" class="collapse" aria-labelledby="headingOperasional" data-parent="#accordionSidebar">
          <!-- Konten dropdown Operasional -->
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Operasional</h6>
            <a class="collapse-item" href="verifikasi-order.php">Verifikasi Order</a>
            <a class="collapse-item" href="surat-perintah.php">Surat Perintah Kerja</a>
            <a class="collapse-item" href="surat-pemberitahuan.php">Surat Pemberitahuan</a>
            <a class="collapse-item" href="ceklist-fumigasi.php">Ceklist Fumigasi</a>
            <a class="collapse-item" href="methyl-recordsheet.php">Methyl Recordsheet</a>
            <a class="collapse-item" href="pemakaian-methyl.php">Pemakaian Methyl</a>
            <a class="collapse-item" href="kartu-stok.php">Kartu Stok Persediaan</a>
            <a class="collapse-item" href="pemberitahuan-kegiatan.php">Pemberitahuan Kegiatan</a>
            <a class="collapse-item" href="draft-pelayaran.php">Draft Pelayaran</a>
            <a class="collapse-item" href="treatment-sesungguhnya.php">treatment Sesunggguhnya</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMoney" aria-expanded="true"
          aria-controls="collapseMoney">
          <i class="fas fa-money-bill"></i>
          <span>Akuntansi</span>
        </a>
        <div id="collapseMoney" class="collapse" aria-labelledby="headingMoney" data-parent="#accordionSidebar">
          <!-- Konten dropdown Akuntansi -->
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Akuntansi</h6>
            <a class="collapse-item" href="akun.php">Akun</a>
            <a class="collapse-item" href="supplier.php">Supplier</a>
            <a class="collapse-item" href="penggajian.php">Penggajian</a>
            <a class="collapse-item" href="aset-tetap.php">Aset Tetap</a>
            <a class="collapse-item" href="penyusutan-aset.php">Penyusutan Aset Tetap</a>
            <a class="collapse-item" href="rekap-treatment.php">Rekap treatment Standar</a>
            <a class="collapse-item" href="jurnal-umum.php">Jurnal Umum</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTableLaporan" aria-expanded="true"
          aria-controls="collapseTableLaporan">
          <i class="fas fa-file-invoice-dollar"></i>
          <span>Laporan Keuangan</span>
        </a>
        <div id="collapseTableLaporan" class="collapse" aria-labelledby="headingTableLaporan" data-parent="#accordionSidebar">
          <!-- Konten dropdown Laporan Keuangan -->
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Laporan Keuangan</h6>
            <a class="collapse-item" href="buku-besar.php">Buku Besar</a>
            <a class="collapse-item" href="neraca-saldo.php">Neraca Saldo</a>
            <a class="collapse-item" href="laporan-treatment.php">Harga Pokok Penjualan</a>
            <a class="collapse-item" href="laporan-lr.php">Laba Rugi</a>
            <a class="collapse-item" href="laporan-neraca.php">Posisi Keuangan</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="user.php">
          <i class="fas fa-user-plus"></i>
          <span>Account</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user-logs.php">
          <i class="fas fa-address-card"></i>
          <span>User Logs</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span>
        </a>
      </li>
    </ul>
    <!-- Sidebar -->

    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                      aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-warning badge-counter">2</span>
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/man.png" style="max-width: 60px" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been
                      having.</div>
                    <div class="small text-gray-500">Udin Cilok · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/girl.png" style="max-width: 60px" alt="">
                    <div class="status-indicator bg-default"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people
                      say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Jaenab · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="img/girl.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Aida Ika Nadia</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <!-- Your container content -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Order</h1> <!-- EDIT NAMA -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Master</a></li>
              <li class="breadcrumb-item active" aria-current="page">Order</li> <!-- EDIT NAMA -->
            </ol>
          </div>
          <!-- AWAL EDIT SESUAIKAN TABEL DATABASE -->
          <!-- Modal Tambah Data -->
          <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Tambah Data sertif</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="id_sertif" class="form-label">ID Sertif:</label>
                            <input type="text" class="form-control" id="id_sertif" name="id_sertif" required>
                        </div>
                        <div class="mb-3">
                            <label for="id_reg" class="form-label">ID Reg:</label>
                            <input type="text" class="form-control" id="id_reg" name="id_reg" required>
                        </div>
                                <div class="mb-3">
            <label for="target" class="form-label">Target:</label>
            <input type="number" class="form-control" id="target" name="target" required>
        </div>
        <div class="mb-3">
            <label for="commodity" class="form-label">Commodity:</label>
            <input type="text" class="form-control" id="commodity" name="commodity" required>
        </div>
        <div class="mb-3">
            <label for="consignment" class="form-label">Consignment:</label>
            <input type="text" class="form-control" id="consignment" name="consignment" required>
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country:</label>
            <input type="text" class="form-control" id="country" name="country" required>
        </div>
        <div class="mb-3">
            <label for="pol" class="form-label">POL:</label>
            <input type="text" class="form-control" id="pol" name="pol" required>
        </div>
        <div class="mb-3">
            <label for="destination" class="form-label">Destination:</label>
            <input type="text" class="form-control" id="destination" name="destination" required>
        </div>
        <div class="mb-3">
            <label for="id_order_container" class="form-label">ID Order Container:</label>
            <input type="text" class="form-control" id="id_order_container" name="id_order_container" required>
        </div>
        <div class="mb-3">
            <label for="nama_customer" class="form-label">Nama Customer:</label>
            <input type="text" class="form-control" id="nama_customer" name="nama_customer" required readonly>
        </div>
        <div class="mb-3">
            <label for="telp_customer" class="form-label">Telepon Customer:</label>
            <input type="text" class="form-control" id="telp_customer" name="telp_customer" required readonly>
        </div>
        <div class="mb-3">
            <label for="jumlah_order" class="form-label">Jumlah Order:</label>
            <input type="number" class="form-control" id="jumlah_order" name="jumlah_order" required>
        </div>
        <div class="mb-3">
            <label for="treatment" class="form-label">Treatment:</label>
            <input type="text" class="form-control" id="treatment" name="treatment" required>
        </div>
        <div class="mb-3">
            <label for="stuffing_date" class="form-label">Stuffing Date:</label>
            <input type="date" class="form-control" id="stuffing_date" name="stuffing_date" required>
        </div>
        <div class="mb-3">
            <label for="id_datastandar" class="form-label">ID Data Standar:</label>
            <input type="text" class="form-control" id="id_datastandar" name="id_datastandar" required>
        </div>
        <div class="mb-3">
            <label for="volume" class="form-label">Volume:</label>
            <input type="number" class="form-control" id="volume" name="volume" required>
        </div>
        <div class="mb-3">
            <label for="container" class="form-label">Container:</label>
            <input type="text" class="form-control" id="container" name="container" required>
        </div>
        <div class="mb-3">
            <label for="container_volume" class="form-label">Container Volume:</label>
            <input type="number" class="form-control" id="container_volume" name="container_volume" required>
        </div>
        <div class="mb-3">
            <label for="vessel" class="form-label">Vessel:</label>
            <input type="text" class="form-control" id="vessel" name="vessel" required>
        </div>
        <div class="mb-3">
            <label for="place_fumigation" class="form-label">Place Fumigation:</label>
            <input type="date" class="form-control" id="place_fumigation" name="place_fumigation" required>
        </div>
        <div class="mb-3">
            <label for="pic" class="form-label">PIC:</label>
            <input type="text" class="form-control" id="pic" name="pic" required>
        </div>
        <div class="mb-3">
            <label for="phone_pic" class="form-label">Phone PIC:</label>
            <input type="number" class="form-control" id="phone_pic" name="phone_pic" required>
        </div>
        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

          <!-- Modal Edit Data -->
          <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data Pegawai</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="edit_id_sertif" class="form-label">ID Sertif:</label>
                            <input type="text" class="form-control" id="edit_id_sertif" name="edit_id_sertif" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_id_reg" class="form-label">ID Reg:</label>
                            <input type="text" class="form-control" id="edit_id_reg" name="edit_id_reg" required>
                        </div>
                                <div class="mb-3">
            <label for="edit_target" class="form-label">Target:</label>
            <input type="number" class="form-control" id="edit_target" name="edit_target" required>
        </div>
        <div class="mb-3">
            <label for="edit_commodity" class="form-label">Commodity:</label>
            <input type="text" class="form-control" id="edit_commodity" name="edit_commodity" required>
        </div>
        <div class="mb-3">
            <label for="edit_consignment" class="form-label">Consignment:</label>
            <input type="text" class="form-control" id="edit_consignment" name="edit_consignment" required>
        </div>
        <div class="mb-3">
            <label for="edit_country" class="form-label">Country:</label>
            <input type="text" class="form-control" id="edit_country" name="edit_country" required>
        </div>
        <div class="mb-3">
            <label for="edit_pol" class="form-label">POL:</label>
            <input type="text" class="form-control" id="edit_pol" name="edit_pol" required>
        </div>
        <div class="mb-3">
            <label for="edit_destination" class="form-label">Destination:</label>
            <input type="text" class="form-control" id="edit_destination" name="edit_destination" required>
        </div>
        <div class="mb-3">
            <label for="edit_id_order_container" class="form-label">ID Order Container:</label>
            <input type="text" class="form-control" id="edit_id_order_container" name="edit_id_order_container" required>
        </div>
        <div class="mb-3">
            <label for="edit_nama_customer" class="form-label">Nama Customer:</label>
            <input type="text" class="form-control" id="edit_nama_customer" name="edit_nama_customer" required readonly>
        </div>
        <div class="mb-3">
            <label for="edit_telp_customer" class="form-label">Telepon Customer:</label>
            <input type="text" class="form-control" id="edit_telp_customer" name="edit_telp_customer" required readonly>
        </div>
        <div class="mb-3">
            <label for="edit_jumlah_order" class="form-label">Jumlah Order:</label>
            <input type="number" class="form-control" id="edit_jumlah_order" name="edit_jumlah_order" required>
        </div>
        <div class="mb-3">
            <label for="edit_treatment" class="form-label">Treatment:</label>
            <input type="text" class="form-control" id="edit_treatment" name="edit_treatment" required>
        </div>
        <div class="mb-3">
            <label for="edit_stuffing_date" class="form-label">Stuffing Date:</label>
            <input type="date" class="form-control" id="edit_stuffing_date" name="edit_stuffing_date" required>
        </div>
        <div class="mb-3">
            <label for="edit_id_datastandar" class="form-label">ID Data Standar:</label>
            <input type="text" class="form-control" id="edit_id_datastandar" name="edit_id_datastandar" required>
        </div>
        <div class="mb-3">
            <label for="edit_volume" class="form-label">Volume:</label>
            <input type="number" class="form-control" id="edit_volume" name="edit_volume" required>
        </div>
        <div class="mb-3">
            <label for="edit_container" class="form-label">Container:</label>
            <input type="text" class="form-control" id="edit_container" name="edit_container" required>
        </div>
        <div class="mb-3">
            <label for="edit_container_volume" class="form-label">Container Volume:</label>
            <input type="number" class="form-control" id="edit_container_volume" name="edit_container_volume" required>
        </div>
        <div class="mb-3">
            <label for="edit_vessel" class="form-label">Vessel:</label>
            <input type="text" class="form-control" id="edit_vessel" name="edit_vessel" required>
        </div>
        <div class="mb-3">
            <label for="edit_place_fumigation" class="form-label">Place Fumigation:</label>
            <input type="date" class="form-control" id="edit_place_fumigation" name="edit_place_fumigation" required>
        </div>
        <div class="mb-3">
            <label for="edit_pic" class="form-label">PIC:</label>
            <input type="text" class="form-control" id="edit_pic" name="edit_pic" required>
        </div>
        <div class="mb-3">
            <label for="edit_phone_pic" class="form-label">Phone PIC:</label>
            <input type="number" class="form-control" id="edit_phone_pic" name="edit_phone_pic" required>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

        <div class="mb-3">
            <label for="id_reg" class="form-label">ID Reg:</label>
            <input type="text" class="form-control" id="id_reg" name="id_reg" required>
        </div>
        <div class="mb-3">
            <label for="target" class="form-label">Target:</label>
            <input type="number" class="form-control" id="target" name="target" required>
        </div>
        <div class="mb-3">
            <label for="commodity" class="form-label">Commodity:</label>
            <input type="text" class="form-control" id="commodity" name="commodity" required>
        </div>
        <div class="mb-3">
            <label for="consignment" class="form-label">Consignment:</label>
            <input type="text" class="form-control" id="consignment" name="consignment" required>
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country:</label>
            <input type="text" class="form-control" id="country" name="country" required>
        </div>
        <div class="mb-3">
            <label for="pol" class="form-label">POL:</label>
            <input type="text" class="form-control" id="pol" name="pol" required>
        </div>
        <div class="mb-3">
            <label for="destination" class="form-label">Destination:</label>
            <input type="text" class="form-control" id="destination" name="destination" required>
        </div>
        <div class="mb-3">
            <label for="id_order_container" class="form-label">ID Order Container:</label>
            <input type="text" class="form-control" id="id_order_container" name="id_order_container" required>
        </div>
        <div class="mb-3">
            <label for="nama_customer" class="form-label">Nama Customer:</label>
            <input type="text" class="form-control" id="nama_customer" name="nama_customer" required readonly>
        </div>
        <div class="mb-3">
            <label for="telp_customer" class="form-label">Telepon Customer:</label>
            <input type="text" class="form-control" id="telp_customer" name="telp_customer" required readonly>
        </div>
        <div class="mb-3">
            <label for="jumlah_order" class="form-label">Jumlah Order:</label>
            <input type="number" class="form-control" id="jumlah_order" name="jumlah_order" required>
        </div>
        <div class="mb-3">
            <label for="treatment" class="form-label">Treatment:</label>
            <input type="text" class="form-control" id="treatment" name="treatment" required>
        </div>
        <div class="mb-3">
            <label for="stuffing_date" class="form-label">Stuffing Date:</label>
            <input type="date" class="form-control" id="stuffing_date" name="stuffing_date" required>
        </div>
        <div class="mb-3">
            <label for="id_datastandar" class="form-label">ID Data Standar:</label>
            <input type="text" class="form-control" id="id_datastandar" name="id_datastandar" required>
        </div>
        <div class="mb-3">
            <label for="volume" class="form-label">Volume:</label>
            <input type="number" class="form-control" id="volume" name="volume" required>
        </div>
        <div class="mb-3">
            <label for="container" class="form-label">Container:</label>
            <input type="text" class="form-control" id="container" name="container" required>
        </div>
        <div class="mb-3">
            <label for="container_volume" class="form-label">Container Volume:</label>
            <input type="number" class="form-control" id="container_volume" name="container_volume" required>
        </div>
        <div class="mb-3">
            <label for="vessel" class="form-label">Vessel:</label>
            <input type="text" class="form-control" id="vessel" name="vessel" required>
        </div>
        <div class="mb-3">
            <label for="place_fumigation" class="form-label">Place Fumigation:</label>
            <input type="date" class="form-control" id="place_fumigation" name="place_fumigation" required>
        </div>
        <div class="mb-3">
            <label for="pic" class="form-label">PIC:</label>
            <input type="text" class="form-control" id="pic" name="pic" required>
        </div>
        <div class="mb-3">
            <label for="phone_pic" class="form-label">Phone PIC:</label>
            <input type="number" class="form-control" id="phone_pic" name="phone_pic" required>
        </div>
        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
          <!-- AKHIR EDIT SESUAIKAN TABEL DATABASE -->

          <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Order</h6> <!-- EDIT NAMA -->
                  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <!-- Tombol Tambah dengan Icon -->
                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#addModal">
                      Tambah
                    </button>
                    <!-- Tombol Filter Tanggal dengan Icon -->
                    <div class="input-group">
                      <input type="date" class="form-control-sm border-0" id="tanggalMulai" aria-describedby="tanggalMulaiLabel">
                      <input type="date" class="form-control-sm border-0" id="tanggalAkhir" aria-describedby="tanggalAkhirLabel">
                      <button type="button" class="btn btn-secondary btn-sm" onclick="filterTanggal()">
                        Filter
                      </button>
                    </div>
                    <!-- Tombol Cetak Tabel dengan Icon -->
                    <button type="button" class="btn btn-sm btn-warning" onclick="cetakTabel()">
                      Cetak
                    </button>
                  </div>

                    <!-- Skrip JavaScript untuk Filter Tanggal dan Cetak Tabel -->
                    <script>
                    function filterTanggal() {
                        var tanggalMulai = document.getElementById("tanggalMulai").value;
                        var tanggalAkhir = document.getElementById("tanggalAkhir").value;
                        
                        // Lakukan sesuatu dengan tanggalMulai dan tanggalAkhir, misalnya menyaring data tabel
                        // Anda dapat menambahkan logika Anda di sini
                        console.log("Tanggal Mulai:", tanggalMulai);
                        console.log("Tanggal Akhir:", tanggalAkhir);
                    }

                    function cetakTabel() {
                        // Mencetak isi tabel yang sesuai dengan rentang tanggal yang dipilih
                        filterTanggal(); // Memanggil fungsi filterTanggal() untuk mendapatkan rentang tanggal yang dipilih
                        
                        // Lakukan pencetakan sesuai dengan rentang tanggal yang dipilih
                        window.print();
                    }
                    </script>
                </div>
                
                <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                  <!-- AWAL EDIT SESUAIKAN TABEL DATABASE -->
                  <thead class="thead-light">
                      <tr>
                      <th>ID Sertif</th>
                                <th>ID Reg</th>
                                <th>Target</th>
                                <th>Commodity</th>
                                <th>Consignment</th>
                                <th>Country</th>
                                <th>POL</th>
                                <th>Destination</th>
                                <th>ID Order Container</th>
                                <th>Nama Customer</th>
                                <th>Telepon Customer</th>
                                <th>Jumlah Order</th>
                                <th>Treatment</th>
                                <th>Stuffing Date</th>
                                <th>ID Data Standar</th>
                                <th>Volume</th>
                                <th>Container</th>
                                <th>Container Volume</th>
                                <th>Vessel</th>
                                <th>Place Fumigation</th>
                                <th>PIC</th>
                                <th>Phone PIC</th>
                                <th>Tanggal Sertif</th>
                                <th>NoReg</th>
                                <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                      $query = "SELECT * FROM data_order";
                      $result = mysqli_query($conn, $query);
                      while ($data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$data['id_sertif']."</td>";
                        echo "<td>".$data['Id_reg']."</td>";
                        echo "<td>".$data['Target']."</td>";
                        echo "<td>".$data['commodity']."</td>";
                        echo "<td>".$data['Consignment']."</td>";
                        echo "<td>".$data['Country']."</td>";
                        echo "<td>".$data['POL']."</td>";
                        echo "<td>".$data['destination']."</td>";
                        echo "<td>".$data['id_order_container']."</td>";
                        echo "<td>".$data['nama_customer']."</td>";
                        echo "<td>".$data['telp_customer']."</td>";
                        echo "<td>".$data['jumlah_order']."</td>";
                        echo "<td>".$data['treatment']."</td>";
                        echo "<td>".$data['stuffing_date']."</td>";
                        echo "<td>".$data['id_datastandar']."</td>";
                        echo "<td>".$data['volume']."</td>";
                        echo "<td>".$data['container']."</td>";
                        echo "<td>".$data['container_volume']."</td>";
                        echo "<td>".$data['vessel']."</td>";
                        echo "<td>".$data['place_fumigation']."</td>";
                        echo "<td>".$data['pic']."</td>";
                        echo "<td>".$data['phone_pic']."</td>";
                        echo "<td>".$data['Tanggal_sertif']."</td>";
                        echo "<td>".$data['NoReg']."</td>";                       
                echo "<td><span class='badge badge-success'>Delivered</span></td>";
                        echo "<td>";
                        echo "<button type='button' class='btn btn-success btn-sm' data-bs-toggle='modal' data-bs-target='#editModal' onclick='openEditModal(\"".$data['id_order_container']."\", \"".$data['tanggal_order']."\", \"".$data['id_customer']."\", \"".$data['nama_customer']."\", \"".$data['telp_customer']."\")'><i class='fas fa-edit'></i></button>";
                        echo "<button type='button' class='btn btn-danger btn-sm' onclick='deleteData(\"".$data['id_order_container']."\")'><i class='fas fa-trash'></i></button>";
                        echo "<a href='generate_pdf.php?id_order_container=".htmlspecialchars($data['id_order_container'])."' class='btn btn-primary btn-sm' target='_blank' role='button'><i class='fas fa-print'></i></a>";
                        echo "</td>";
                        echo "</tr>"; 
                        }
                    ?>
                  </tbody>
                  <!-- AKHIR EDIT SESUAIKAN TABEL DATABASE -->
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  <!-- Footer -->
  <footer>
    <p id="tanggalJam" style="font-size: 12px; margin: 0; justify-content: flex-end; display: flex; background-color: #f8f9fa;"></p>
  </footer>

  <script>
    function updateTanggalJam() {
      var date = new Date();
      var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' };
      var formattedDate = date.toLocaleDateString('id-ID', options);
      document.getElementById('tanggalJam').textContent = formattedDate;
    }

    // Memanggil fungsi untuk pertama kali saat halaman dimuat
    updateTanggalJam();

    // Memperbarui tanggal dan jam setiap detik
    setInterval(updateTanggalJam, 1000);
  </script>
  <!-- Footer -->
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- AWAL EDIT SESUAIKAN TABEL DATABASE -->
  <script>
   function openEditModal(id_sertif, Id_reg, Target, commodity, Consignment, Country, POL, destination, id_order_container, nama_customer, telp_customer, ATTN, TIN, id_importer, nama_importer, alamat_importer, telp_importer, fax, usci, pic, id_recorsheet, tanggal_selesai, daff_prescribed_doses_rate, forecast_minimum_temperature, exposure_period, applied_dose_rate, Fumigation_Conducted, Container, Wrapping, Tanggal_sertif, NoReg) {
    document.getElementById("edit_id_sertif").value = id_sertif;
    document.getElementById("edit_Id_reg").value = Id_reg;
    document.getElementById("edit_Target").value = Target;
    document.getElementById("edit_commodity").value = commodity;
    document.getElementById("edit_Consignment").value = Consignment;
    document.getElementById("edit_Country").value = Country;
    document.getElementById("edit_POL").value = POL;
    document.getElementById("edit_destination").value = destination;
    document.getElementById("edit_id_order_container").value = id_order_container;
    document.getElementById("edit_nama_customer").value = nama_customer;
    document.getElementById("edit_telp_customer").value = telp_customer;
    document.getElementById("edit_ATTN").value = ATTN;
    document.getElementById("edit_TIN").value = TIN;
    document.getElementById("edit_id_importer").value = id_importer;
    document.getElementById("edit_nama_importer").value = nama_importer;
    document.getElementById("edit_alamat_importer").value = alamat_importer;
    document.getElementById("edit_telp_importer").value = telp_importer;
    document.getElementById("edit_fax").value = fax;
    document.getElementById("edit_usci").value = usci;
    document.getElementById("edit_pic").value = pic;
    document.getElementById("edit_id_recorsheet").value = id_recorsheet;
    document.getElementById("edit_tanggal_selesai").value = tanggal_selesai;
    document.getElementById("edit_daff_prescribed_doses_rate").value = daff_prescribed_doses_rate;
    document.getElementById("edit_forecast_minimum_temperature").value = forecast_minimum_temperature;
    document.getElementById("edit_exposure_period").value = exposure_period;
    document.getElementById("edit_applied_dose_rate").value = applied_dose_rate;
    document.getElementById("edit_Fumigation_Conducted").value = Fumigation_Conducted;
    document.getElementById("edit_Container").value = Container;
    document.getElementById("edit_Wrapping").value = Wrapping;
    document.getElementById("edit_Tanggal_sertif").value = Tanggal_sertif;
    document.getElementById("edit_NoReg").value = NoReg;
}


    function deleteData(idordercontainer) {
      if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        window.location.href = "?id_order=" + idorder;
      }
    }
  </script>
  <!-- AKHIR EDIT SESUAIKAN TABEL DATABASE -->
     
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/simitra.min.js"></script>
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTableHover').DataTable();
    });
  </script>
</body>

</html>
<?php
mysqli_close($conn);
?>