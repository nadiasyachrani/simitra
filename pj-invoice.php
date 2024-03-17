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
if (isset($_POST['id_invoice']) && isset($_POST['tanggal_invoice']) && isset($_POST['id_order']) && isset($_POST['nama_customer']) && isset($_POST['alamat_customer']) && isset($_POST['id_sertif']) && isset($_POST['no_bl']) && isset($_POST['shipper']) && isset($_POST['destination']) && isset($_POST['commodity']) && isset($_POST['stuffing_date']) && isset($_POST['closing_time']) && isset($_POST['id_recordsheet']) && isset($_POST['applied_dose_rate']) && isset($_POST['treatment']) && isset($_POST['jumlah_order']) && isset($_POST['volume']) && isset($_POST['container']) && isset($_POST['id_data_standar']) && isset($_POST['harga_jual']) && isset($_POST['total_penjualan']) && isset($_POST['ppn']) && isset($_POST['jumlah_dibayar'])) {
  $idInvoice = $_POST['id_invoice'];
  $tanggalInvoice = $_POST['tanggal_invoice'];
  $idOrder = $_POST['id_order'];
  $namaCustomer = $_POST['nama_customer'];
  $alamatCustomer = $_POST['alamat_customer'];
  $idSertif = $_POST['id_sertif'];
  $noBl = $_POST['no_bl'];
  $shipper = $_POST['shipper'];
  $destination = $_POST['destination'];
  $commodity = $_POST['commodity'];
  $stuffingdate= $_POST['stuffing_date'];
  $closingtime = $_POST['closing_time'];
  $idRecordsheet = $_POST['id_recordsheet'];
  $appliedDoseRate = $_POST['applied_dose_rate'];
  $treatment = $_POST['treatment'];
  $jumlahOrder = $_POST['jumlah_order'];
  $volume = $_POST['volume'];
  $container = $_POST['container'];
  $idDataStandar = $_POST['id_data_standar'];
  $hargaJual = $_POST['harga_jual'];
  $totalPenjualan = $_POST['total_penjualan'];
  $ppn = $_POST['ppn'];
  $jumlahDibayar = $_POST['jumlah_dibayar'];

  $query = "INSERT INTO invoice (id_invoice, tanggal_invoice, id_order, nama_customer, alamat_customer, id_sertif, no_bl, shipper, destination, commodity, stuffing_date, closing_time, id_recordsheet, applied_dose_rate, treatment, jumlah_order, volume, container, id_data_standar, harga_jual, total_penjualan, ppn, jumlah_dibayar) VALUES ('$idInvoice', '$tanggalInvoice', '$idOrder', '$namaCustomer', '$alamatCustomer', '$idSertif', '$noBl', '$shipper', '$destination', '$commodity', '$stuffingdate', '$closingtime', '$idRecordsheet', '$appliedDoseRate', '$treatment', '$jumlahOrder', '$volume', '$container', '$idDataStandar', '$hargaJual', '$totalPenjualan', '$ppn', '$jumlahDibayar')";
  $result = mysqli_query($conn, $query);

  if (!$result) {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
      exit();
  }
}

// Menangani pembaruan data
if (isset($_POST['edit_id_invoice']) && isset($_POST['edit_tanggal_invoice']) && isset($_POST['edit_id_order']) && isset($_POST['edit_nama_customer']) && isset($_POST['edit_alamat_customer']) && isset($_POST['edit_id_sertif']) && isset($_POST['edit_no_bl']) && isset($_POST['edit_shipper']) && isset($_POST['edit_destination']) && isset($_POST['edit_commodity']) && isset($_POST['edit_stuffing_date']) && isset($_POST['edit_closing_time']) && isset($_POST['edit_id_recordsheet']) && isset($_POST['edit_applied_dose_rate']) && isset($_POST['edit_treatment']) && isset($_POST['edit_jumlah_order']) && isset($_POST['edit_volume']) && isset($_POST['edit_container']) && isset($_POST['edit_id_data_standar']) && isset($_POST['edit_harga_jual']) && isset($_POST['edit_total_penjualan']) && isset($_POST['edit_ppn']) && isset($_POST['edit_jumlah_dibayar'])) {
  $idInvoice = $_POST['edit_id_invoice'];
  $tanggalInvoice = $_POST['edit_tanggal_invoice'];
  $idOrder = $_POST['edit_id_order'];
  $namaCustomer = $_POST['edit_nama_customer'];
  $alamatCustomer = $_POST['edit_alamat_customer'];
  $idSertif = $_POST['edit_id_sertif'];
  $noBl = $_POST['edit_no_bl'];
  $shipper = $_POST['edit_shipper'];
  $destination = $_POST['edit_destination'];
  $commodity = $_POST['edit_commodity'];
  $stuffingdate= $_POST['edit_stuffing_date'];
  $closingtime= $_POST['edit_closing_time'];
  $idRecordsheet = $_POST['edit_id_recordsheet'];
  $appliedDoseRate = $_POST['edit_applied_dose_rate'];
  $treatment = $_POST['edit_treatment'];
  $jumlahOrder = $_POST['edit_jumlah_order'];
  $volume = $_POST['edit_volume'];
  $container = $_POST['edit_container'];
  $idDataStandar = $_POST['edit_id_data_standar'];
  $hargaJual = $_POST['edit_harga_jual'];
  $totalPenjualan = $_POST['edit_total_penjualan'];
  $ppn = $_POST['edit_ppn'];
  $jumlahDibayar = $_POST['edit_jumlah_dibayar'];

  $query = "UPDATE invoice SET tanggal_invoice='$tanggalInvoice', id_order='$idOrder', nama_customer='$namaCustomer', alamat_customer='$alamatCustomer', id_sertif='$idSertif', no_bl='$noBl', shipper='$shipper', destination='$destination', commodity='$commodity', stuffing_date='$stuffingdate', closing_time='$closingtime', id_recordsheet='$idRecordsheet', applied_dose_rate='$appliedDoseRate', treatment='$treatment', jumlah_order='$jumlahOrder', volume='$volume', container='$container', id_data_standar='$idDataStandar', harga_jual='$hargaJual', total_penjualan='$totalPenjualan', ppn='$ppn', jumlah_dibayar='$jumlahDibayar' WHERE id_invoice='$idInvoice'";
  $result = mysqli_query($conn, $query);

  if (!$result) {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
      exit();
  }
}

// Menangani penghapusan data
if (isset($_GET['id_invoice'])) {
  $idInvoice = $_GET['id_invoice'];

  $query = "DELETE FROM invoice WHERE id_invoice='$idInvoice'";
  $result = mysqli_query($conn, $query);

  if (!$result) {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
      exit();
  }
}

// Mengambil data dari tabel invoice
$query_select = "SELECT * FROM invoice";
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
  <title>SIMITRA - Invoice</title> <!-- EDIT NAMA -->
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
            <h1 class="h3 mb-0 text-gray-800">Invoice</h1> <!-- EDIT NAMA -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Penerimaan Jasa</a></li>
              <li class="breadcrumb-item active" aria-current="page">Invoice</li> <!-- EDIT NAMA -->
            </ol>
          </div>
          <!-- AWAL EDIT SESUAIKAN TABEL DATABASE -->
          <!-- Modal Tambah Data Invoice -->
          <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="addModalLabel">Tambah Data Invoice</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <form method="POST">
                              <div class="mb-3">
                                  <label for="id_invoice" class="form-label">ID Invoice:</label>
                                  <input type="text" class="form-control" id="id_invoice" name="id_invoice" required>
                              </div>
                              <div class="mb-3">
                                  <label for="tanggal_invoice" class="form-label">Tanggal Invoice:</label>
                                  <input type="date" class="form-control" id="tanggal_invoice" name="tanggal_invoice" required>
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
                                  <label for="nama_customer" class="form-label">Nama Customer:</label>
                                  <input type="text" class="form-control" id="nama_customer" name="nama_customer" required>
                              </div>
                              <div class="mb-3">
                                  <label for="alamat_customer" class="form-label">Alamat Customer:</label>
                                  <input type="text" class="form-control" id="alamat_customer" name="alamat_customer" required>
                              </div>
                              <div class="mb-3">
                                  <label for="id_sertif" class="form-label">ID Sertif:</label>
                                  <div class="input-group">
                                      <input type="text" class="form-control" id="id_sertif" name="id_sertif" required>
                                      <button type="button" onclick="displayDataOrder()" class="btn btn-warning" id="search_button">
                                          <img src="https://www.freeiconspng.com/uploads/search-icon-png-0.png" alt="Search" style="width: 20px; height: 20px;">
                                      </button>
                                  </div>
                              </div>
                              <div class="mb-3">
                                  <label for="no_bl" class="form-label">No BL:</label>
                                  <input type="text" class="form-control" id="no_bl" name="no_bl" required>
                              </div>
                              <div class="mb-3">
                                  <label for="shipper" class="form-label">Shipper:</label>
                                  <input type="text" class="form-control" id="shipper" name="shipper" required>
                              </div>
                              <div class="mb-3">
                                  <label for="destination" class="form-label">Destination:</label>
                                  <input type="text" class="form-control" id="destination" name="destination" required>
                              </div>
                              <div class="mb-3">
                                  <label for="commodity" class="form-label">Commodity:</label>
                                  <input type="text" class="form-control" id="commodity" name="commodity" required>
                              </div>
                              <div class="mb-3">
                                  <label for="stuffing_date" class="form-label">Stuffing Date:</label>
                                  <input type="date" class="form-control" id="stuffing_date" name="stuffing_date" required>
                              </div>
                              <div class="mb-3">
                                  <label for="closing_time" class="form-label">Closing Time:</label>
                                  <input type="datetime-local" class="form-control" id="closing_time" name="closing_time" required>
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
                                  <label for="applied_dose_rate" class="form-label">Dossage (g/m³):</label>
                                  <input type="number" class="form-control" id="applied_dose_rate" name="applied_dose_rate" required>
                              </div>
                              <div class="mb-3">
                                  <label for="treatment" class="form-label">Treatment:</label>
                                  <select class="form-select" id="treatment" name="treatment" required>
                                    <option value="">Pilih Treatment</option>
                                    <option value="FCL">FCL</option>
                                    <option value="LCL">LCL</option>
                                  </select>
                              </div>
                              <div class="mb-3">
                                  <label for="jumlah_order" class="form-label">Quantity:</label>
                                  <input type="number" class="form-control" id="jumlah_order" name="jumlah_order" required>
                              </div>
                              <div class="mb-3">
                                  <label for="volume" class="form-label">Volume:</label>
                                  <input type="text" class="form-control" id="volume" name="volume" required>
                              </div>
                              <div class="mb-3">
                                  <label for="container" class="form-label">Container:</label>
                                  <input type="text" class="form-control" id="container" name="container" required>
                              </div>
                              <div class="mb-3">
                                  <label for="id_data_standar" class="form-label">ID Data Standar:</label>
                                  <div class="input-group">
                                      <input type="text" class="form-control" id="id_data_standar" name="id_data_standar" required>
                                      <button type="button" onclick="displayDataOrder()" class="btn btn-warning" id="search_button">
                                          <img src="https://www.freeiconspng.com/uploads/search-icon-png-0.png" alt="Search" style="width: 20px; height: 20px;">
                                      </button>
                                  </div>
                              </div>
                              <div class="mb-3">
                                  <label for="harga_jual" class="form-label">Harga Jual:</label>
                                  <input type="number" class="form-control" id="harga_jual" name="harga_jual" required>
                              </div>
                              <div class="mb-3">
                                  <label for="total_penjualan" class="form-label">Total Penjualan:</label>
                                  <input type="number" class="form-control" id="total_penjualan" name="total_penjualan" required>
                              </div>
                              <div class="mb-3">
                                  <label for="ppn" class="form-label">PPN:</label>
                                  <input type="number" class="form-control" id="ppn" name="ppn">
                              </div>
                              <div class="mb-3">
                                  <label for="jumlah_dibayar" class="form-label">Jumlah Dibayar:</label>
                                  <input type="number" class="form-control" id="jumlah_dibayar" name="jumlah_dibayar" required>
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
          <!-- Modal Edit Data Invoice -->
          <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="editModalLabel">Edit Data Invoice</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <form method="POST">
                              <div class="mb-3">
                                  <label for="edit_id_invoice" class="form-label">ID Invoice:</label>
                                  <input type="text" class="form-control" id="edit_id_invoice" name="edit_id_invoice" readonly required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_tanggal_invoice" class="form-label">Tanggal Invoice:</label>
                                  <input type="date" class="form-control" id="edit_tanggal_invoice" name="edit_tanggal_invoice" required>
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
                                  <label for="edit_nama_customer" class="form-label">Nama Customer:</label>
                                  <input type="text" class="form-control" id="edit_nama_customer" name="edit_nama_customer" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_alamat_customer" class="form-label">Alamat Customer:</label>
                                  <input type="text" class="form-control" id="edit_alamat_customer" name="edit_alamat_customer" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_id_sertif" class="form-label">ID Sertif:</label>
                                  <div class="input-group">
                                      <input type="text" class="form-control" id="edit_id_sertif" name="edit_id_sertif" required>
                                      <button type="button" onclick="displayDataOrder()" class="btn btn-warning" id="search_button">
                                          <img src="https://www.freeiconspng.com/uploads/search-icon-png-0.png" alt="Search" style="width: 20px; height: 20px;">
                                      </button>
                                  </div>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_no_bl" class="form-label">No BL:</label>
                                  <input type="text" class="form-control" id="edit_no_bl" name="edit_no_bl" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_shipper" class="form-label">Shipper:</label>
                                  <input type="text" class="form-control" id="edit_shipper" name="edit_shipper" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_destination" class="form-label">Destination:</label>
                                  <input type="text" class="form-control" id="edit_destination" name="edit_destination" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_commodity" class="form-label">Commodity:</label>
                                  <input type="text" class="form-control" id="edit_commodity" name="edit_commodity" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_stuffing_date" class="form-label">Stuffing Date:</label>
                                  <input type="date" class="form-control" id="edit_stuffing_date" name="edit_stuffing_date" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_closing_time" class="form-label">Closing Time:</label>
                                  <input type="datetime-local" class="form-control" id="edit_closing_time" name="edit_closing_time" required>
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
                                  <label for="edit_applied_dose_rate" class="form-label">Dossage (g/m³):</label>
                                  <input type="number" class="form-control" id="edit_applied_dose_rate" name="edit_applied_dose_rate" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_treatment" class="form-label">Treatment:</label>
                                  <select class="form-select" id="edit_treatment" name="edit_treatment" required>
                                    <option value="">Pilih Treatment</option>
                                    <option value="FCL">FCL</option>
                                    <option value="LCL">LCL</option>
                                  </select>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_jumlah_order" class="form-label">Quantity:</label>
                                  <input type="number" class="form-control" id="edit_jumlah_order" name="edit_jumlah_order" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_volume" class="form-label">Volume:</label>
                                  <input type="text" class="form-control" id="edit_volume" name="edit_volume" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_container" class="form-label">Container:</label>
                                  <input type="text" class="form-control" id="edit_container" name="edit_container" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_id_data_standar" class="form-label">ID Data Standar:</label>
                                  <div class="input-group">
                                      <input type="text" class="form-control" id="edit_id_data_standar" name="edit_id_data_standar" required>
                                      <button type="button" onclick="displayDataOrder()" class="btn btn-warning" id="search_button">
                                          <img src="https://www.freeiconspng.com/uploads/search-icon-png-0.png" alt="Search" style="width: 20px; height: 20px;">
                                      </button>
                                  </div>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_harga_jual" class="form-label">Harga Jual:</label>
                                  <input type="number" class="form-control" id="edit_harga_jual" name="edit_harga_jual" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_total_penjualan" class="form-label">Total Penjualan:</label>
                                  <input type="number" class="form-control" id="edit_total_penjualan" name="edit_total_penjualan" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_ppn" class="form-label">PPN:</label>
                                  <input type="number" class="form-control" id="edit_ppn" name="edit_ppn">
                              </div>
                              <div class="mb-3">
                                  <label for="edit_jumlah_dibayar" class="form-label">Jumlah Dibayar:</label>
                                  <input type="number" class="form-control" id="edit_jumlah_dibayar" name="edit_jumlah_dibayar" required>
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
                  <h6 class="m-0 font-weight-bold text-primary">Invoice</h6> <!-- EDIT NAMA -->
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
                        <th>ID Invoice</th>
                        <th>Tanggal Invoice</th>
                        <th>ID Order</th>
                        <th>Nama Customer</th>
                        <th>Alamat Customer</th>
                        <th>ID Sertif</th>
                        <th>No BL</th>
                        <th>Shipper</th>
                        <th>Destination</th>
                        <th>Commodity</th>
                        <th>Stuffing Date</th>
                        <th>Closing Time</th>
                        <th>ID Recordsheet</th>
                        <th>Dossage (g/m³)</th>
                        <th>Treatment</th>
                        <th>Quantity</th>
                        <th>Volume</th>
                        <th>No Kontainer</th>
                        <th>ID Data Standar</th>
                        <th>Harga Jual</th>
                        <th>Total Penjualan</th>
                        <th>PPN</th>
                        <th>Jumlah Dibayar</th>
                        <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $query = "SELECT * FROM invoice";
                      $result = mysqli_query($conn, $query);
                      while ($data = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                          echo "<td>".$data['id_invoice']."</td>";
                          echo "<td>".$data['tanggal_invoice']."</td>";
                          echo "<td>".$data['id_order']."</td>";
                          echo "<td>".$data['nama_customer']."</td>";
                          echo "<td>".$data['alamat_customer']."</td>";
                          echo "<td>".$data['id_sertif']."</td>";
                          echo "<td>".$data['no_bl']."</td>";
                          echo "<td>".$data['shipper']."</td>";
                          echo "<td>".$data['destination']."</td>";
                          echo "<td>".$data['commodity']."</td>";
                          echo "<td>".$data['stuffing_date']."</td>";
                          echo "<td>".$data['closing_time']."</td>";
                          echo "<td>".$data['id_recordsheet']."</td>";
                          echo "<td>".$data['applied_dose_rate']."</td>";
                          echo "<td>".$data['treatment']."</td>";
                          echo "<td>".$data['jumlah_order']."</td>";
                          echo "<td>".$data['volume']."</td>";
                          echo "<td>".$data['container']."</td>";
                          echo "<td>".$data['id_data_standar']."</td>";
                          echo "<td>".number_format($data['harga_jual'], 2, ',', '.')."</td>";
                          echo "<td>".number_format($data['total_penjualan'], 2, ',', '.')."</td>";
                          echo "<td>".number_format($data['ppn'], 2, ',', '.')."</td>";
                          echo "<td>".number_format($data['jumlah_dibayar'], 2, ',', '.')."</td>";
                          echo "<td>";
                          echo "<button type='button' class='btn btn-success btn-sm' style='width: 30px; height: 30px;' data-bs-toggle='modal' data-bs-target='#editModal' onclick='openEditModal(\"".$data['id_invoice']."\", \"".$data['tanggal_invoice']."\", \"".$data['id_order']."\", \"".$data['nama_customer']."\", \"".$data['alamat_customer']."\", \"".$data['id_sertif']."\", \"".$data['no_bl']."\", \"".$data['shipper']."\", \"".$data['destination']."\", \"".$data['commodity']."\", \"".$data['stuffing_date']."\", \"".$data['closing_time']."\", \"".$data['id_recordsheet']."\", \"".$data['applied_dose_rate']."\", \"".$data['treatment']."\", \"".$data['jumlah_order']."\", \"".$data['volume']."\", \"".$data['container']."\", \"".$data['id_data_standar']."\", \"".$data['harga_jual']."\", \"".$data['total_penjualan']."\", \"".$data['ppn']."\", \"".$data['jumlah_dibayar']."\")'><i class='fas fa-edit'></i></button>";
                          echo "<button type='button' class='btn btn-danger btn-sm' style='width: 30px; height: 30px;' onclick='openDeleteModal(\"".$data['id_invoice']."\")'><i class='fas fa-trash'></i></button>";
                          echo "<a href='generate_pdf.php?id_invoice=".htmlspecialchars($data['id_invoice'])."' class='btn btn-primary btn-sm' style='width: 30px; height: 30px;' target='_blank' role='button'><i class='fas fa-print'></i></a>";
                          echo "<button type='button' class='btn btn-info btn-sm' style='width: 30px; height: 30px;' onclick='approveData(\"".$data['id_invoice']."\")'><i class='fas fa-check'></i></button>";
                          echo "</td>";                          
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
    function openEditModal(idInvoice, tanggalInvoice, idOrder, namaCustomer, alamatCustomer, idSertif, noBl, shipper, destination, commodity, stuffingdate, closingtime, idRecordsheet, appliedDoseRate, treatment, jumlahOrder, volume, container, idDataStandar, hargaJual, totalPenjualan, ppn, jumlahDibayar) {
        document.getElementById("edit_id_invoice").value = idInvoice;
        document.getElementById("edit_tanggal_invoice").value = tanggalInvoice;
        document.getElementById("edit_id_order").value = idOrder;
        document.getElementById("edit_nama_customer").value = namaCustomer;
        document.getElementById("edit_alamat_customer").value = alamatCustomer;
        document.getElementById("edit_id_sertif").value = idSertif;
        document.getElementById("edit_no_bl").value = noBl;
        document.getElementById("edit_shipper").value = shipper;
        document.getElementById("edit_destination").value = destination;
        document.getElementById("edit_commodity").value = commodity;
        document.getElementById("edit_stuffing_date").value = stuffingdate;
        document.getElementById("edit_closing_time").value = closingtime;
        document.getElementById("edit_id_recordsheet").value = idRecordsheet;
        document.getElementById("edit_applied_dose_rate").value = appliedDoseRate;
        document.getElementById("edit_treatment").value = treatment;
        document.getElementById("edit_jumlah_order").value = jumlahOrder;
        document.getElementById("edit_volume").value = volume;
        document.getElementById("edit_container").value = container;
        document.getElementById("edit_id_data_standar").value = idDataStandar;
        document.getElementById("edit_harga_jual").value = hargaJual;
        document.getElementById("edit_total_penjualan").value = totalPenjualan;
        document.getElementById("edit_ppn").value = ppn;
        document.getElementById("edit_jumlah_dibayar").value = jumlahDibayar;
    }

    function openDeleteModal(idInvoice) {
        var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'), {
            keyboard: false
        });
        deleteModal.show();
        
        // Tambahkan event listener pada tombol konfirmasi hapus
        document.getElementById('confirmDeleteBtn').onclick = function() {
            window.location.href = "?id_invoice=" + idInvoice;
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