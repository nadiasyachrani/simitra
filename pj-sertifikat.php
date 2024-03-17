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
if (isset($_POST['id_sertif']) && isset($_POST['id_reg']) && isset($_POST['target_fumigasi']) && isset($_POST['commodity']) && isset($_POST['consignment']) && isset($_POST['country']) && isset($_POST['pol']) && isset($_POST['destination']) && isset($_POST['id_order']) && isset($_POST['id_order_container']) && isset($_POST['nama_customer']) && isset($_POST['telp_customer']) && isset($_POST['attn']) && isset($_POST['tin']) && isset($_POST['id_importer']) && isset($_POST['nama_importer']) && isset($_POST['alamat_importer']) && isset($_POST['telp_importer']) && isset($_POST['fax']) && isset($_POST['usci']) && isset($_POST['pic']) && isset($_POST['id_recordsheet']) && isset($_POST['tanggal_selesai']) && isset($_POST['daff_prescribed_doses_rate']) && isset($_POST['forecast_minimum_temperature']) && isset($_POST['exposure_period']) && isset($_POST['applied_dose_rate']) && isset($_POST['fumigation_conducted']) && isset($_POST['container']) && isset($_POST['wrapping']) && isset($_POST['tanggal_sertif']) && isset($_POST['no_reg'])) {
  $idSertif = $_POST['id_sertif'];
  $idReg = $_POST['id_reg'];
  $targetFumigasi = $_POST['target_fumigasi'];
  $commodity = $_POST['commodity'];
  $consignment = $_POST['consignment'];
  $country = $_POST['country'];
  $pol = $_POST['pol'];
  $destination = $_POST['destination'];
  $idOrder = $_POST['id_order'];
  $idOrderContainer = $_POST['id_order_container'];
  $namaCustomer = $_POST['nama_customer'];
  $telpCustomer = $_POST['telp_customer'];
  $attn = $_POST['attn'];
  $tin = $_POST['tin'];
  $idImporter = $_POST['id_importer'];
  $namaImporter = $_POST['nama_importer'];
  $alamatImporter = $_POST['alamat_importer'];
  $telpImporter = $_POST['telp_importer'];
  $fax = $_POST['fax'];
  $usci = $_POST['usci'];
  $pic = $_POST['pic'];
  $idRecordsheet = $_POST['id_recordsheet'];
  $tanggalSelesai = $_POST['tanggal_selesai'];
  $daffPrescribedDosesRate = $_POST['daff_prescribed_doses_rate'];
  $forecastMinimumTemperature = $_POST['forecast_minimum_temperature'];
  $exposurePeriod = $_POST['exposure_period'];
  $appliedDoseRate = $_POST['applied_dose_rate'];
  $fumigationConducted = $_POST['fumigation_conducted'];
  $container = $_POST['container'];
  $wrapping = $_POST['wrapping'];
  $tanggalSertif = $_POST['tanggal_sertif'];
  $noReg = $_POST['no_reg'];

  $query = "INSERT INTO sertifikat (id_sertif, id_reg, target_fumigasi, commodity, consignment, country, pol, destination, id_order, id_order_container, nama_customer, telp_customer, attn, tin, id_importer, nama_importer, alamat_importer, telp_importer, fax, usci, pic, id_recordsheet, tanggal_selesai, daff_prescribed_doses_rate, forecast_minimum_temperature, exposure_period, applied_dose_rate, fumigation_conducted, container, wrapping, tanggal_sertif, no_reg) VALUES ('$idSertif', '$idReg', '$targetFumigasi', '$commodity', '$consignment', '$country', '$pol', '$destination', '$idOrder', '$idOrderContainer', '$namaCustomer', '$telpCustomer', '$attn', '$tin', '$idImporter', '$namaImporter', '$alamatImporter', '$telpImporter', '$fax', '$usci', '$pic', '$idRecordsheet', '$tanggalSelesai', '$daffPrescribedDosesRate', '$forecastMinimumTemperature', '$exposurePeriod', '$appliedDoseRate', '$fumigationConducted', '$container', '$wrapping', '$tanggalSertif', '$noReg')";
  $result = mysqli_query($conn, $query);

  if (!$result) {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
      exit();
  }
}

if (isset($_POST['edit_id_sertif']) && isset($_POST['edit_id_reg']) && isset($_POST['edit_target_fumigasi']) && isset($_POST['edit_commodity']) && isset($_POST['edit_consignment']) && isset($_POST['edit_country']) && isset($_POST['edit_pol']) && isset($_POST['edit_destination']) && isset($_POST['edit_id_order']) && isset($_POST['edit_id_order_container']) && isset($_POST['edit_nama_customer']) && isset($_POST['edit_telp_customer']) && isset($_POST['edit_attn']) && isset($_POST['edit_tin']) && isset($_POST['edit_id_importer']) && isset($_POST['edit_nama_importer']) && isset($_POST['edit_alamat_importer']) && isset($_POST['edit_telp_importer']) && isset($_POST['edit_fax']) && isset($_POST['edit_usci']) && isset($_POST['edit_pic']) && isset($_POST['edit_id_recordsheet']) && isset($_POST['edit_tanggal_selesai']) && isset($_POST['edit_daff_prescribed_doses_rate']) && isset($_POST['edit_forecast_minimum_temperature']) && isset($_POST['edit_exposure_period']) && isset($_POST['edit_applied_dose_rate']) && isset($_POST['edit_fumigation_conducted']) && isset($_POST['edit_container']) && isset($_POST['edit_wrapping']) && isset($_POST['edit_tanggal_sertif']) && isset($_POST['edit_no_reg'])) {
  $idSertif = $_POST['edit_id_sertif'];
  $idReg = $_POST['edit_id_reg'];
  $targetFumigasi = $_POST['edit_target_fumigasi'];
  $commodity = $_POST['edit_commodity'];
  $consignment = $_POST['edit_consignment'];
  $country = $_POST['edit_country'];
  $pol = $_POST['edit_pol'];
  $destination = $_POST['edit_destination'];
  $idOrder = $_POST['edit_id_order'];
  $idOrderContainer = $_POST['edit_id_order_container'];
  $namaCustomer = $_POST['edit_nama_customer'];
  $telpCustomer = $_POST['edit_telp_customer'];
  $attn = $_POST['edit_attn'];
  $tin = $_POST['edit_tin'];
  $idImporter = $_POST['edit_id_importer'];
  $namaImporter = $_POST['edit_nama_importer'];
  $alamatImporter = $_POST['edit_alamat_importer'];
  $telpImporter = $_POST['edit_telp_importer'];
  $fax = $_POST['edit_fax'];
  $usci = $_POST['edit_usci'];
  $pic = $_POST['edit_pic'];
  $idRecordsheet = $_POST['edit_id_recordsheet'];
  $tanggalSelesai = $_POST['edit_tanggal_selesai'];
  $daffPrescribedDosesRate = $_POST['edit_daff_prescribed_doses_rate'];
  $forecastMinimumTemperature = $_POST['edit_forecast_minimum_temperature'];
  $exposurePeriod = $_POST['edit_exposure_period'];
  $appliedDoseRate = $_POST['edit_applied_dose_rate'];
  $fumigationConducted = $_POST['edit_fumigation_conducted'];
  $container = $_POST['edit_container'];
  $wrapping = $_POST['edit_wrapping'];
  $tanggalSertif = $_POST['edit_tanggal_sertif'];
  $noReg = $_POST['edit_no_reg'];

  $query = "UPDATE sertifikat SET id_reg='$idReg', target_fumigasi='$targetFumigasi', commodity='$commodity', consignment='$consignment', country='$country', pol='$pol', destination='$destination', id_order='$idOrder', id_order_container='$idOrderContainer', nama_customer='$namaCustomer', telp_customer='$telpCustomer', attn='$attn', tin='$tin', id_importer='$idImporter', nama_importer='$namaImporter', alamat_importer='$alamatImporter', telp_importer='$telpImporter', fax='$fax', usci='$usci', pic='$pic', id_recordsheet='$idRecordsheet', tanggal_selesai='$tanggalSelesai', daff_prescribed_doses_rate='$daffPrescribedDosesRate', forecast_minimum_temperature='$forecastMinimumTemperature', exposure_period='$exposurePeriod', applied_dose_rate='$appliedDoseRate', fumigation_conducted='$fumigationConducted', container='$container', wrapping='$wrapping', tanggal_sertif='$tanggalSertif', no_reg='$noReg' WHERE id_sertif='$idSertif'";
  $result = mysqli_query($conn, $query);

  if (!$result) {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
      exit();
  }
}

// Menangani penghapusan data
if (isset($_GET['id_sertif'])) {
  $idSertif = $_GET['id_sertif'];

  $query = "DELETE FROM sertifikat WHERE id_sertif='$idSertif'";
  $result = mysqli_query($conn, $query);

  if (!$result) {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
      exit();
  }
}

// Mengambil data dari tabel sertifikat
$query_select = "SELECT * FROM sertifikat";
$result_select = mysqli_query($conn, $query_select);

// Memeriksa apakah query berhasil dieksekusi
if (!$result_select) {
    echo "Error: " . $query_select . "<br>" . mysqli_error($conn);
    exit();
}
// AKHIR EDIT SESUAIKAN TABEL DATABASE
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
  <title>SIMITRA - Sertifikat</title> <!-- EDIT NAMA -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/simitra.min.css" rel="stylesheet">
  <link href="css/simitra.css" rel="stylesheet">
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
            <a class="collapse-item" href="ms-standar-hpp.php">Standar HPP</a>
            <a class="collapse-item" href="ms-harga-jasa.php">Harga Jasa</a>
            <a class="collapse-item" href="ms-persediaan.php">Persediaan</a>
            <a class="collapse-item" href="ms-importer.php">Importer</a>
            <a class="collapse-item" href="ms-pegawai.php">Pegawai</a>
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
            <a class="collapse-item" href="pj-customer.php">Customer</a>
            <a class="collapse-item" href="pj-order.php">Order</a>
            <a class="collapse-item" href="pj-dokumen-order.php">Dokumen Order</a>
            <a class="collapse-item" href="pj-sertifikat.php">Sertifikat</a>
            <a class="collapse-item" href="pj-invoice.php">Invoice</a>
            <a class="collapse-item" href="pj-bukti-pembayaran.php">Bukti Pembayaran</a>
            <a class="collapse-item" href="pj-detail-customer.php">Detail Customer</a>
            <a class="collapse-item" href="pj-rekap-penjualan.php">Rekap Penjualan</a>
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
            <a class="collapse-item" href="opr-verifikasi-order.php">Verifikasi Order</a>
            <a class="collapse-item" href="opr-surat-perintah.php">Surat Perintah Kerja</a>
            <a class="collapse-item" href="opr-surat-pemberitahuan.php">Surat Pemberitahuan</a>
            <a class="collapse-item" href="opr-ceklist-fumigasi.php">Ceklist Fumigasi</a>
            <a class="collapse-item" href="opr-methyl-recordsheet.php">Methyl Recordsheet</a>
            <a class="collapse-item" href="opr-pemakaian-methyl.php">Pemakaian Methyl</a>
            <a class="collapse-item" href="opr-kartu-persediaan.php">Kartu Persediaan</a>
            <a class="collapse-item" href="opr-pemberitahuan-kegiatan.php">Pemberitahuan Kegiatan</a>
            <a class="collapse-item" href="opr-draft-pelayaran.php">Draft Pelayaran</a>
            <a class="collapse-item" href="opr-hpp-sesungguhnya.php">HPP Sesunggguhnya</a>
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
            <a class="collapse-item" href="ak-akun.php">Akun</a>
            <a class="collapse-item" href="ak-supplier.php">Supplier</a>
            <a class="collapse-item" href="ak-detail-supplier.php">Detail Supplier</a>
            <a class="collapse-item" href="ak-penggajian.php">Penggajian</a>
            <a class="collapse-item" href="ak-aset-tetap.php">Aset Tetap</a>
            <a class="collapse-item" href="ak-penyusutan-aset.php">Penyusutan Aset Tetap</a>
            <a class="collapse-item" href="ak-rekap-hpp.php">Rekap HPP Standar</a>
            <a class="collapse-item" href="ak-jurnal-umum.php">Jurnal Umum</a>
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
            <a class="collapse-item" href="lk-buku-besar.php">Buku Besar</a>
            <a class="collapse-item" href="lk-neraca-saldo.php">Neraca Saldo</a>
            <a class="collapse-item" href="lk-laporan-hpp.php">Harga Pokok Penjualan</a>
            <a class="collapse-item" href="lk-laporan-lr.php">Laba Rugi</a>
            <a class="collapse-item" href="lk-laporan-neraca.php">Posisi Keuangan</a>
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
        <a class="nav-link" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#logoutModal">
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
                <a class="dropdown-item" href="profile.html">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
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
            <h1 class="h3 mb-0 text-gray-800">Sertifikat</h1> <!-- EDIT NAMA -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Penerimaan Jasa</a></li>
              <li class="breadcrumb-item active" aria-current="page">Sertifikat</li> <!-- EDIT NAMA -->
            </ol>
          </div>
          <!-- AWAL EDIT SESUAIKAN TABEL DATABASE -->
          <!-- Modal Tambah Data Sertifikat -->
          <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="addModalLabel">Tambah Data Sertifikat</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <form method="POST">
                              <div class="mb-3">
                                  <label for="id_sertif" class="form-label">ID Sertifikat:</label>
                                  <input type="text" class="form-control" id="id_sertif" name="id_sertif" required>
                              </div>
                              <div class="mb-3">
                                  <label for="id_reg" class="form-label">ID Reg:</label>
                                  <input type="text" class="form-control" id="id_reg" name="id_reg" required>
                              </div>
                              <div class="mb-3">
                                <label for="target_fumigasi" class="form-label">Target of Fumigation:</label>
                                <select class="form-select" id="target_fumigasi" name="target_fumigasi" required>
                                    <option value="">Pilih Target Fumigasi</option>
                                    <option value="Commodity">Commodity</option>
                                    <option value="Packing">Packing</option>
                                    <option value="Both Commodity and Packing">Both Commodity and Packing</option>
                                </select>
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
                                  <label for="pol" class="form-label">Port of Loading:</label>
                                  <input type="text" class="form-control" id="pol" name="pol" value="Semarang, Indonesia" required readonly>
                              </div>
                              <div class="mb-3">
                                  <label for="destination" class="form-label">Destination:</label>
                                  <input type="text" class="form-control" id="destination" name="destination" required>
                              </div>
                              <div class="mb-3">
                                  <label for="id_order" class="form-label">ID Order:</label>
                                  <div class="input-group">
                                      <input type="text" class="form-control" id="id_order" name="id_order" required>
                                      <button type="button" onclick="displayDataOrder()" class="btn btn-warning" id="search_button">
                                          <img src="https://www.freeiconspng.com/uploads/search-icon-png-0.png" alt="Search" style="width: 20px; height: 20px;">
                                      </button>
                                  </div>
                              </div>
                              <div class="mb-3">
                                  <label for="id_order_container" class="form-label">ID Order Container:</label>
                                  <input type="text" class="form-control" id="id_order_container" name="id_order_container" required>
                              </div>
                              <div class="mb-3">
                                  <label for="nama_customer" class="form-label">Nama Customer:</label>
                                  <input type="text" class="form-control" id="nama_customer" name="nama_customer" required>
                              </div>
                              <div class="mb-3">
                                  <label for="telp_customer" class="form-label">Telp Customer:</label>
                                  <input type="text" class="form-control" id="telp_customer" name="telp_customer" required>
                              </div>
                              <div class="mb-3">
                                  <label for="attn" class="form-label">ATTN:</label>
                                  <input type="text" class="form-control" id="attn" name="attn" required>
                              </div>
                              <div class="mb-3">
                                  <label for="tin" class="form-label">TIN:</label>
                                  <input type="text" class="form-control" id="tin" name="tin" required>
                              </div>
                              <div class="mb-3">
                                  <label for="id_importer" class="form-label">ID Importer:</label>
                                  <div class="input-group">
                                      <input type="text" class="form-control" id="id_importer" name="id_importer" required>
                                      <button type="button" onclick="displayDataOrder()" class="btn btn-warning" id="search_button">
                                          <img src="https://www.freeiconspng.com/uploads/search-icon-png-0.png" alt="Search" style="width: 20px; height: 20px;">
                                      </button>
                                  </div>
                              </div>
                              <div class="mb-3">
                                  <label for="nama_importer" class="form-label">Nama Importer:</label>
                                  <input type="text" class="form-control" id="nama_importer" name="nama_importer" required>
                              </div>
                              <div class="mb-3">
                                  <label for="alamat_importer" class="form-label">Alamat Importer:</label>
                                  <input type="text" class="form-control" id="alamat_importer" name="alamat_importer" required>
                              </div>
                              <div class="mb-3">
                                  <label for="telp_importer" class="form-label">Telp Importer:</label>
                                  <input type="text" class="form-control" id="telp_importer" name="telp_importer" required>
                              </div>
                              <div class="mb-3">
                                  <label for="fax" class="form-label">Fax Importer:</label>
                                  <input type="text" class="form-control" id="fax" name="fax" required>
                              </div>
                              <div class="mb-3">
                                  <label for="usci" class="form-label">USCI Importer:</label>
                                  <input type="text" class="form-control" id="usci" name="usci" required>
                              </div>
                              <div class="mb-3">
                                  <label for="pic" class="form-label">PIC Importer:</label>
                                  <input type="text" class="form-control" id="pic" name="pic" required>
                              </div>
                              <div class="mb-3">
                                  <label for="id_recordsheet" class="form-label">ID Recordsheet:</label>
                                  <div class="input-group">
                                      <input type="text" class="form-control" id="id_recordsheet" name="id_recordsheet" required>
                                      <button type="button" onclick="displayDataOrder()" class="btn btn-warning" id="search_button">
                                          <img src="https://www.freeiconspng.com/uploads/search-icon-png-0.png" alt="Search" style="width: 20px; height: 20px;">
                                      </button>
                                  </div>
                              </div>
                              <div class="mb-3">
                                  <label for="tanggal_selesai" class="form-label">Tanggal Selesai:</label>
                                  <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required>
                              </div>
                              <div class="mb-3">
                                  <label for="daff_prescribed_doses_rate" class="form-label">Daff Prescribed Doses Rate (g/m³):</label>
                                  <input type="number" class="form-control" id="daff_prescribed_doses_rate" name="daff_prescribed_doses_rate" required>
                              </div>
                              <div class="mb-3">
                                  <label for="forecast_minimum_temperature" class="form-label">Forecast Minimum Temperature (hours):</label>
                                  <input type="number" class="form-control" id="forecast_minimum_temperature" name="forecast_minimum_temperature" required>
                              </div>
                              <div class="mb-3">
                                  <label for="exposure_period" class="form-label">Exposure Period (°c):</label>
                                  <input type="number" class="form-control" id="exposure_period" name="exposure_period" required>
                              </div>
                              <div class="mb-3">
                                  <label for="applied_dose_rate" class="form-label">Applied Dose Rate (g/m³):</label>
                                  <input type="number" class="form-control" id="applied_dose_rate" name="applied_dose_rate" required>
                              </div>
                              <div class="mb-3">
                                  <label for="fumigation_conducted" class="form-label">Fumigation Conducted:</label>
                                  <select class="form-select" id="fumigation_conducted" name="fumigation_conducted" required>
                                    <option value="">Pilih Fumigation Conducted</option>
                                    <option value="Un-sheeted Container">Un-sheeted Container</option>
                                    <option value="Sheeted Container/s">Sheeted Container/s</option>
                                    <option value="Chamber">Chamber</option>
                                    <option value="Preassure Tested Container">Preassure Tested Container</option>
                                    <option value="Sheeted Stack">Sheeted Stack</option>
                                  </select>    
                              </div>
                              <div class="mb-3">
                                  <label for="container" class="form-label">Container:</label>
                                  <input type="text" class="form-control" id="container" name="container" required>
                              </div>
                              <div class="mb-3">
                                  <label for="wrapping" class="form-label">Wrapping:</label>
                                  <select class="form-select" id="wrapping" name="wrapping" required>
                                    <option value="">Pilih Status Wrapping</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                  </select>  
                              </div>
                              <div class="mb-3">
                                  <label for="tanggal_sertif" class="form-label">Tanggal Sertifikat:</label>
                                  <input type="date" class="form-control" id="tanggal_sertif" name="tanggal_sertif" required>
                              </div>
                              <div class="mb-3">
                                  <label for="no_reg" class="form-label">Nomor Registrasi:</label>
                                  <input type="text" class="form-control" id="no_reg" name="no_reg" required>
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
          <!-- Modal Edit Data Sertifikat -->
          <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="editModalLabel">Edit Data Sertifikat</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <form method="POST">
                              <div class="mb-3">
                                  <label for="edit_id_sertif" class="form-label">ID Sertifikat:</label>
                                  <input type="text" class="form-control" id="edit_id_sertif" name="edit_id_sertif" readonly required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_id_reg" class="form-label">ID Reg:</label>
                                  <input type="text" class="form-control" id="edit_id_reg" name="edit_id_reg" required>
                              </div>
                              <div class="mb-3">
                                <label for="edit_target_fumigasi" class="form-label">Target of Fumigation:</label>
                                <select class="form-select" id="edit_target_fumigasi" name="edit_target_fumigasi" required>
                                    <option value="">Pilih Target Fumigasi</option>
                                    <option value="Commodity">Commodity</option>
                                    <option value="Packing">Packing</option>
                                    <option value="Both Commodity and Packing">Both Commodity and Packing</option>
                                </select>
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
                                  <label for="edit_pol" class="form-label">Port of Loading:</label>
                                  <input type="text" class="form-control" id="edit_pol" name="edit_pol" value="Semarang, Indonesia" required readonly>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_destination" class="form-label">Destination:</label>
                                  <input type="text" class="form-control" id="edit_destination" name="edit_destination" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_id_order" class="form-label">ID Order:</label>
                                  <div class="input-group">
                                      <input type="text" class="form-control" id="edit_id_order" name="edit_id_order" required>
                                      <button type="button" onclick="displayDataOrder()" class="btn btn-warning" id="search_button">
                                          <img src="https://www.freeiconspng.com/uploads/search-icon-png-0.png" alt="Search" style="width: 20px; height: 20px;">
                                      </button>
                                  </div>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_id_order_container" class="form-label">ID Order Container:</label>
                                  <input type="text" class="form-control" id="edit_id_order_container" name="edit_id_order_container" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_nama_customer" class="form-label">Nama Customer:</label>
                                  <input type="text" class="form-control" id="edit_nama_customer" name="edit_nama_customer" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_telp_customer" class="form-label">Telp Customer:</label>
                                  <input type="text" class="form-control" id="edit_telp_customer" name="edit_telp_customer" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_attn" class="form-label">ATTN:</label>
                                  <input type="text" class="form-control" id="edit_attn" name="edit_attn" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_tin" class="form-label">TIN:</label>
                                  <input type="text" class="form-control" id="edit_tin" name="edit_tin" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_id_importer" class="form-label">ID Importer:</label>
                                  <div class="input-group">
                                      <input type="text" class="form-control" id="edit_id_importer" name="edit_id_importer" required>
                                      <button type="button" onclick="displayDataOrder()" class="btn btn-warning" id="search_button">
                                          <img src="https://www.freeiconspng.com/uploads/search-icon-png-0.png" alt="Search" style="width: 20px; height: 20px;">
                                      </button>
                                  </div>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_nama_importer" class="form-label">Nama Importer:</label>
                                  <input type="text" class="form-control" id="edit_nama_importer" name="edit_nama_importer" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_alamat_importer" class="form-label">Alamat Importer:</label>
                                  <input type="text" class="form-control" id="edit_alamat_importer" name="edit_alamat_importer" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_telp_importer" class="form-label">Telp Importer:</label>
                                  <input type="text" class="form-control" id="edit_telp_importer" name="edit_telp_importer" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_fax" class="form-label">Fax Importer:</label>
                                  <input type="text" class="form-control" id="edit_fax" name="edit_fax" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_usci" class="form-label">USCI Importer:</label>
                                  <input type="text" class="form-control" id="edit_usci" name="edit_usci" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_pic" class="form-label">PIC Importer:</label>
                                  <input type="text" class="form-control" id="edit_pic" name="edit_pic" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_id_recordsheet" class="form-label">ID Recordsheet:</label>
                                  <div class="input-group">
                                      <input type="text" class="form-control" id="edit_id_recordsheet" name="edit_id_recordsheet" required>
                                      <button type="button" onclick="displayDataOrder()" class="btn btn-warning" id="search_button">
                                          <img src="https://www.freeiconspng.com/uploads/search-icon-png-0.png" alt="Search" style="width: 20px; height: 20px;">
                                      </button>
                                  </div>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_tanggal_selesai" class="form-label">Tanggal Selesai:</label>
                                  <input type="date" class="form-control" id="edit_tanggal_selesai" name="edit_tanggal_selesai" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_daff_prescribed_doses_rate" class="form-label">Daff Prescribed Doses Rate (g/m³):</label>
                                  <input type="number" class="form-control" id="edit_daff_prescribed_doses_rate" name="edit_daff_prescribed_doses_rate" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_forecast_minimum_temperature" class="form-label">Forecast Minimum Temperature (hours):</label>
                                  <input type="number" class="form-control" id="edit_forecast_minimum_temperature" name="edit_forecast_minimum_temperature" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_exposure_period" class="form-label">Exposure Period (°c):</label>
                                  <input type="number" class="form-control" id="edit_exposure_period" name="edit_exposure_period" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_applied_dose_rate" class="form-label">Applied Dose Rate (g/m³):</label>
                                  <input type="number" class="form-control" id="edit_applied_dose_rate" name="edit_applied_dose_rate" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_fumigation_conducted" class="form-label">Fumigation Conducted:</label>
                                  <select class="form-select" id="edit_fumigation_conducted" name="edit_fumigation_conducted" required>
                                    <option value="">Pilih Fumigation Conducted</option>
                                    <option value="Un-sheeted Container">Un-sheeted Container</option>
                                    <option value="Sheeted Container/s">Sheeted Container/s</option>
                                    <option value="Chamber">Chamber</option>
                                    <option value="Preassure Tested Container">Preassure Tested Container</option>
                                    <option value="Sheeted Stack">Sheeted Stack</option>
                                  </select>   
                              </div>
                              <div class="mb-3">
                                  <label for="edit_container" class="form-label">Container:</label>
                                  <input type="text" class="form-control" id="edit_container" name="edit_container" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_wrapping" class="form-label">Wrapping:</label>                                 <label for="edit_Wrapping" class="form-label">Wrapping:</label>
                                  <select class="form-select" id="edit_wrapping" name="edit_wrapping" required>
                                    <option value="">Pilih Status Wrapping</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                  </select>  
                              </div>
                              <div class="mb-3">
                                  <label for="edit_tanggal_sertif" class="form-label">Tanggal Sertifikat:</label>
                                  <input type="date" class="form-control" id="edit_tanggal_sertif" name="edit_tanggal_sertif" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_no_reg" class="form-label">Nomor Registrasi:</label>
                                  <input type="text" class="form-control" id="edit_no_reg" name="edit_no_reg" required>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                  <button type="submit" class="btn btn-primary">Update</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Modal Hapus -->
          <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Penghapusan Data</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                          </button>
                      </div>
                      <div class="modal-body">Apakah Anda Yakin Ingin Menghapus Data Ini?</div>
                      <div class="modal-footer">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                          <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Hapus</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Modal Konfirmasi Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Logout</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          Apakah Anda Yakin Ingin Keluar dari Sistem?
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                          <a href="login.html" class="btn btn-primary">Logout</a>
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
                  <h6 class="m-0 font-weight-bold text-primary">Sertifikat</h6> <!-- EDIT NAMA -->
                  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <!-- Tombol Tambah dengan Icon -->
                    <div>
                      <button type="button" class="btn btn-sm btn-info" style='width: 70px; height: 30px;' data-bs-toggle="modal" data-bs-target="#addModal">
                        Tambah
                      </button>
                    </div>
                    <!-- Tombol Filter Tanggal dengan Icon -->
                    <div class="input-group">
                      <input type="date" class="form-control-sm border-1" id="tanggalMulai" aria-describedby="tanggalMulaiLabel">
                      <input type="date" class="form-control-sm border-1" id="tanggalAkhir" aria-describedby="tanggalAkhirLabel">
                        <button type="button" class="btn btn-secondary btn-sm" style='width: 60px; height: 30px;' onclick="filterTanggal()">
                          Filter
                        </button>
                    </div>
                    <!-- Tombol Cetak Tabel dengan Icon -->
                    <div>
                      <button type="button" class="btn btn-sm btn-warning" style='width: 60px; height: 30px;' onclick="cetakTabel()">
                        Cetak
                      </button>
                    </div>
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
                            <th>Id Sertifikat</th>
                            <th>Id Reg</th>
                            <th>Target of Fumigation</th>
                            <th>Commodity</th>
                            <th>Consignment</th>
                            <th>Country</th>
                            <th>Port of Loading</th>
                            <th>Destination</th>
                            <th>Id Order</th>
                            <th>Id Order Container</th>
                            <th>Nama Customer</th>
                            <th>Telp Customer</th>
                            <th>ATTN</th>
                            <th>TIN</th>
                            <th>Id Importer</th>
                            <th>Nama Importer</th>
                            <th>Alamat Importer</th>
                            <th>Telp Importer</th>
                            <th>Fax Importer</th>
                            <th>USCI Importer</th>
                            <th>PIC Importer</th>
                            <th>Id Recordsheet</th>
                            <th>Tanggal Selesai</th>
                            <th>Daff Prescribed Doses Rate</th>
                            <th>Forecast Minimum Temperature</th>
                            <th>Exposure Period</th>
                            <th>Applied Dose Rate</th>
                            <th>Fumigation Conducted</th>
                            <th>Container</th>
                            <th>Wrapping</th>
                            <th>Tanggal Sertif</th>
                            <th>No Reg</th>
                            <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      $query = "SELECT * FROM sertifikat";
                      $result = mysqli_query($conn, $query);
                      while ($data = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                          echo "<td>".$data['id_sertif']."</td>";
                          echo "<td>".$data['id_reg']."</td>";
                          echo "<td>".$data['target_fumigasi']."</td>";
                          echo "<td>".$data['commodity']."</td>";
                          echo "<td>".$data['consignment']."</td>";
                          echo "<td>".$data['country']."</td>";
                          echo "<td>".$data['pol']."</td>";
                          echo "<td>".$data['destination']."</td>";
                          echo "<td>".$data['id_order']."</td>";
                          echo "<td>".$data['id_order_container']."</td>";
                          echo "<td>".$data['nama_customer']."</td>";
                          echo "<td>".$data['telp_customer']."</td>";
                          echo "<td>".$data['attn']."</td>";
                          echo "<td>".$data['tin']."</td>";
                          echo "<td>".$data['id_importer']."</td>";
                          echo "<td>".$data['nama_importer']."</td>";
                          echo "<td>".$data['alamat_importer']."</td>";
                          echo "<td>".$data['telp_importer']."</td>";
                          echo "<td>".$data['fax']."</td>";
                          echo "<td>".$data['usci']."</td>";
                          echo "<td>".$data['pic']."</td>";
                          echo "<td>".$data['id_recordsheet']."</td>";
                          echo "<td>".$data['tanggal_selesai']."</td>";
                          echo "<td>".$data['daff_prescribed_doses_rate']."</td>";
                          echo "<td>".$data['forecast_minimum_temperature']."</td>";
                          echo "<td>".$data['exposure_period']."</td>";
                          echo "<td>".$data['applied_dose_rate']."</td>";
                          echo "<td>".$data['fumigation_conducted']."</td>";
                          echo "<td>".$data['container']."</td>";
                          echo "<td>".$data['wrapping']."</td>";
                          echo "<td>".$data['tanggal_sertif']."</td>";
                          echo "<td>".$data['no_reg']."</td>";
                          echo "<td>";
                          echo "<button type='button' class='btn btn-success btn-sm' style='width: 30px; height: 30px;' data-bs-toggle='modal' data-bs-target='#editModal' onclick='openEditModal(\"".$data['id_sertif']."\", \"".$data['id_reg']."\", \"".$data['target_fumigasi']."\", \"".$data['commodity']."\", \"".$data['consignment']."\", \"".$data['country']."\", \"".$data['pol']."\", \"".$data['destination']."\", \"".$data['id_order']."\", \"".$data['id_order_container']."\", \"".$data['nama_customer']."\", \"".$data['telp_customer']."\", \"".$data['attn']."\", \"".$data['tin']."\", \"".$data['id_importer']."\", \"".$data['nama_importer']."\", \"".$data['alamat_importer']."\", \"".$data['telp_importer']."\", \"".$data['fax']."\", \"".$data['usci']."\", \"".$data['pic']."\", \"".$data['id_recordsheet']."\", \"".$data['tanggal_selesai']."\", \"".$data['daff_prescribed_doses_rate']."\", \"".$data['forecast_minimum_temperature']."\", \"".$data['exposure_period']."\", \"".$data['applied_dose_rate']."\", \"".$data['fumigation_conducted']."\", \"".$data['container']."\", \"".$data['wrapping']."\", \"".$data['tanggal_sertif']."\", \"".$data['no_reg']."\")'><i class='fas fa-edit'></i></button>";
                          echo "<button type='button' class='btn btn-danger btn-sm' style='width: 30px; height: 30px;' onclick='openDeleteModal(\"".$data['id_sertif']."\")'><i class='fas fa-trash'></i></button>";
                          echo "<a href='generate_pdf.php?id_sertif=".htmlspecialchars($data['id_sertif'])."' class='btn btn-primary btn-sm' style='width: 30px; height: 30px;' target='_blank' role='button'><i class='fas fa-print'></i></a>";
                          echo "<button type='button' class='btn btn-info btn-sm' style='width: 30px; height: 30px;' onclick='approveData(\"".$data['id_sertif']."\")'><i class='fas fa-check'></i></button>";
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
    function openEditModal(idSertif, idReg, targetFumigasi, commodity, consignment, country, pol, destination, idOrder, idOrderContainer, namaCustomer, telpCustomer, attn, tin, idImporter, namaImporter, alamatImporter, telpImporter, fax, usci, pic, idRecordsheet, tanggalSelesai, daffPrescribedDosesRate, forecastMinimumTemperature, exposurePeriod, appliedDoseRate, fumigationConducted, container, wrapping, tanggalSertif, noReg) {
        document.getElementById("edit_id_sertif").value = idSertif;
        document.getElementById("edit_id_reg").value = idReg;
        document.getElementById("edit_target_fumigasi").value = targetFumigasi;
        document.getElementById("edit_commodity").value = commodity;
        document.getElementById("edit_consignment").value = consignment;
        document.getElementById("edit_country").value = country;
        document.getElementById("edit_pol").value = pol;
        document.getElementById("edit_destination").value = destination;
        document.getElementById("edit_id_order").value = idOrder;
        document.getElementById("edit_id_order_container").value = idOrderContainer;
        document.getElementById("edit_nama_customer").value = namaCustomer;
        document.getElementById("edit_telp_customer").value = telpCustomer;
        document.getElementById("edit_attn").value = attn;
        document.getElementById("edit_tin").value = tin;
        document.getElementById("edit_id_importer").value = idImporter;
        document.getElementById("edit_nama_importer").value = namaImporter;
        document.getElementById("edit_alamat_importer").value = alamatImporter;
        document.getElementById("edit_telp_importer").value = telpImporter;
        document.getElementById("edit_fax").value = fax;
        document.getElementById("edit_usci").value = usci;
        document.getElementById("edit_pic").value = pic;
        document.getElementById("edit_id_recordsheet").value = idRecordsheet;
        document.getElementById("edit_tanggal_selesai").value = tanggalSelesai;
        document.getElementById("edit_daff_prescribed_doses_rate").value = daffPrescribedDosesRate;
        document.getElementById("edit_forecast_minimum_temperature").value = forecastMinimumTemperature;
        document.getElementById("edit_exposure_period").value = exposurePeriod;
        document.getElementById("edit_applied_dose_rate").value = appliedDoseRate;
        document.getElementById("edit_fumigation_conducted").value = fumigationConducted;
        document.getElementById("edit_container").value = container;
        document.getElementById("edit_wrapping").value = wrapping;
        document.getElementById("edit_tanggal_sertif").value = tanggalSertif;
        document.getElementById("edit_no_reg").value = noReg;
    }
    
    function openDeleteModal(idSertif) {
        var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'), {
            keyboard: false
        });
        deleteModal.show();
        
        // Tambahkan event listener pada tombol konfirmasi hapus
        document.getElementById('confirmDeleteBtn').onclick = function() {
            window.location.href = "?id_sertif=" + idSertif;
        };
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