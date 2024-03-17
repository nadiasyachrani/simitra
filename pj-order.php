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
if (isset($_POST['id_order']) && isset($_POST['id_order_container']) && isset($_POST['tanggal_order']) && isset($_POST['id_customer']) && isset($_POST['nama_customer']) && isset($_POST['telp_customer']) && isset($_POST['alamat_customer']) && isset($_POST['pic']) && isset($_POST['phone_pic']) && isset($_POST['jumlah_order']) && isset($_POST['id_data_standar']) && isset($_POST['treatment']) && isset($_POST['volume']) && isset($_POST['place_fumigation']) && isset($_POST['stuffing_date']) && isset($_POST['container']) && isset($_POST['container_volume']) && isset($_POST['commodity']) && isset($_POST['vessel']) && isset($_POST['closing_time']) && isset($_POST['destination'])) {
  $idOrder = $_POST['id_order'];
  $idOrderContainer = $_POST['id_order_container'];
  $tanggalOrder = $_POST['tanggal_order'];
  $idCustomer = $_POST['id_customer'];
  $namaCustomer = $_POST['nama_customer'];
  $telpCustomer = $_POST['telp_customer'];
  $alamatCustomer = $_POST['alamat_customer'];
  $pic = $_POST['pic'];
  $phonePic = $_POST['phone_pic'];
  $jumlahOrder = $_POST['jumlah_order'];
  $idDataStandar = $_POST['id_data_standar'];
  $treatment = $_POST['treatment'];
  $volume = $_POST['volume'];
  $placeFumigation = $_POST['place_fumigation'];
  $stuffingDate = $_POST['stuffing_date'];
  $container = $_POST['container'];
  $containerVolume = $_POST['container_volume'];
  $commodity = $_POST['commodity'];
  $vessel = $_POST['vessel'];
  $closingTime = $_POST['closing_time'];
  $destination = $_POST['destination'];

  $query = "INSERT INTO data_order (id_order, id_order_container, tanggal_order, id_customer, nama_customer, telp_customer, alamat_customer, pic, phone_pic, jumlah_order, id_data_standar, treatment, volume, place_fumigation, stuffing_date, container, container_volume, commodity, vessel, closing_time, destination) VALUES ('$idOrder', '$idOrderContainer', '$tanggalOrder', '$idCustomer', '$namaCustomer', '$telpCustomer', '$alamatCustomer', '$pic', '$phonePic', '$jumlahOrder', '$idDataStandar', '$treatment', '$volume', '$placeFumigation', '$stuffingDate', '$container', '$containerVolume', '$commodity', '$vessel', '$closingTime', '$destination')";
  $result = mysqli_query($conn, $query);

  if (!$result) {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
      exit();
  }
}

// Menangani pembaruan data
if (isset($_POST['edit_id_order']) && isset($_POST['edit_id_order_container']) && isset($_POST['edit_tanggal_order']) && isset($_POST['edit_id_customer']) && isset($_POST['edit_nama_customer']) && isset($_POST['edit_telp_customer']) && isset($_POST['edit_alamat_customer']) && isset($_POST['edit_pic']) && isset($_POST['edit_phone_pic']) && isset($_POST['edit_jumlah_order']) && isset($_POST['edit_id_data_standar']) && isset($_POST['edit_treatment']) && isset($_POST['edit_volume']) && isset($_POST['edit_place_fumigation']) && isset($_POST['edit_stuffing_date']) && isset($_POST['edit_container']) && isset($_POST['edit_container_volume']) && isset($_POST['edit_commodity']) && isset($_POST['edit_vessel']) && isset($_POST['edit_closing_time']) && isset($_POST['edit_destination'])) {
  $idOrder = $_POST['edit_id_order'];
  $idOrderContainer = $_POST['edit_id_order_container'];
  $tanggalOrder = $_POST['edit_tanggal_order'];
  $idCustomer = $_POST['edit_id_customer'];
  $namaCustomer = $_POST['edit_nama_customer'];
  $telpCustomer = $_POST['edit_telp_customer'];
  $alamatCustomer = $_POST['edit_alamat_customer'];
  $pic = $_POST['edit_pic'];
  $phonePic = $_POST['edit_phone_pic'];
  $jumlahOrder = $_POST['edit_jumlah_order'];
  $idDataStandar = $_POST['edit_id_data_standar'];
  $treatment = $_POST['edit_treatment'];
  $volume = $_POST['edit_volume'];
  $placeFumigation = $_POST['edit_place_fumigation'];
  $stuffingDate = $_POST['edit_stuffing_date'];
  $container = $_POST['edit_container'];
  $containerVolume = $_POST['edit_container_volume'];
  $commodity = $_POST['edit_commodity'];
  $vessel = $_POST['edit_vessel'];
  $closingTime = $_POST['edit_closing_time'];
  $destination = $_POST['edit_destination'];

  $query = "UPDATE data_order SET id_order_container='$idOrderContainer', tanggal_order='$tanggalOrder', id_customer='$idCustomer', nama_customer='$namaCustomer', telp_customer='$telpCustomer', alamat_customer='$alamatCustomer', pic='$pic', phone_pic='$phonePic', jumlah_order='$jumlahOrder', id_data_standar='$idDataStandar', treatment='$treatment', volume='$volume', place_fumigation='$placeFumigation', stuffing_date='$stuffingDate', container='$container', container_volume='$containerVolume', commodity='$commodity', vessel='$vessel', closing_time='$closingTime', destination='$destination' WHERE id_order='$idOrder'";
  $result = mysqli_query($conn, $query);

  if (!$result) {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
      exit();
  }
}

// Menangani penghapusan data
if (isset($_GET['id_order'])) {
  $idOrder = $_GET['id_order'];

  $query = "DELETE FROM data_order WHERE id_order='$idOrder'";
  $result = mysqli_query($conn, $query);

  if (!$result) {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
      exit();
  }
}

// Mengambil data dari tabel data_order
$query_select = "SELECT * FROM data_order";
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
  <title>SIMITRA - Data Order</title> <!-- EDIT NAMA -->
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
            </li>
          </ul>
        </nav>
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <!-- Your container content -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Order</h1> <!-- EDIT NAMA -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Penerimaan Jasa</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Order</li> <!-- EDIT NAMA -->
            </ol>
          </div>
          <!-- AWAL EDIT SESUAIKAN TABEL DATABASE -->
          <!-- Modal Tambah Data -->
          <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="addModalLabel">Tambah Data Order</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <form method="POST">
                              <div class="mb-3">
                                  <label for="id_order" class="form-label">ID Order:</label>
                                  <input type="text" class="form-control" id="id_order" name="id_order" required>
                              </div>
                              <div class="mb-3">
                                  <label for="id_order_container" class="form-label">ID Order Container:</label>
                                  <input type="text" class="form-control" id="id_order_container" name="id_order_container" required>
                              </div>
                              <div class="mb-3">
                                  <label for="tanggal_order" class="form-label">Tanggal Order:</label>
                                  <input type="date" class="form-control" id="tanggal_order" name="tanggal_order" required>
                              </div>
                              <div class="mb-3">
                                  <label for="id_customer" class="form-label">ID Customer:</label>
                                  <div class="input-group">
                                      <input type="text" class="form-control" id="id_customer" name="id_customer" required>
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
                                  <label for="telp_customer" class="form-label">Telepon Customer:</label>
                                  <input type="tel" class="form-control" id="telp_customer" name="telp_customer" required>
                              </div>
                              <div class="mb-3">
                                  <label for="alamat_customer" class="form-label">Alamat Customer:</label>
                                  <input type="text" class="form-control" id="alamat_customer" name="alamat_customer" required>
                              </div>
                              <div class="mb-3">
                                  <label for="pic" class="form-label">PIC:</label>
                                  <input type="text" class="form-control" id="pic" name="pic" required>
                              </div>
                              <div class="mb-3">
                                  <label for="phone_pic" class="form-label">Telepon PIC:</label>
                                  <input type="tel" class="form-control" id="phone_pic" name="phone_pic" required>
                              </div>
                              <div class="mb-3">
                                  <label for="jumlah_order" class="form-label">Jumlah Order:</label>
                                  <input type="number" class="form-control" id="jumlah_order" name="jumlah_order" required>
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
                                  <label for="treatment" class="form-label">Treatment:</label>
                                  <select class="form-select" id="treatment" name="treatment" required>
                                    <option value="">Pilih Treatment</option>
                                    <option value="FCL">FCL</option>
                                    <option value="LCL">LCL</option>
                                  </select>
                              </div>
                              <div class="mb-3">
                                  <label for="volume" class="form-label">Volume:</label>
                                  <input type="text" class="form-control" id="volume" name="volume" required>
                              </div>
                              <div class="mb-3">
                                  <label for="place_fumigation" class="form-label">Place Fumigation:</label>
                                  <input type="text" class="form-control" id="place_fumigation" name="place_fumigation" value="Depo Pelindo Semarang" required readonly>
                              </div>
                              <div class="mb-3">
                                  <label for="stuffing_date" class="form-label">Stuffing Date:</label>
                                  <input type="date" class="form-control" id="stuffing_date" name="stuffing_date" required>
                              </div>
                              <div class="mb-3">
                                  <label for="container" class="form-label">Container:</label>
                                  <input type="text" class="form-control" id="container" name="container" required>
                              </div>
                              <div class="mb-3">
                                  <label for="container_volume" class="form-label">Container Volume:</label>
                                  <input type="text" class="form-control" id="container_volume" name="container_volume" required>
                              </div>
                              <div class="mb-3">
                                  <label for="commodity" class="form-label">Commodity:</label>
                                  <input type="text" class="form-control" id="commodity" name="commodity" required>
                              </div>
                              <div class="mb-3">
                                  <label for="vessel" class="form-label">Vessel:</label>
                                  <input type="text" class="form-control" id="vessel" name="vessel" required>
                              </div>
                              <div class="mb-3">
                                  <label for="closing_time" class="form-label">Closing Time:</label>
                                  <input type="datetime-local" class="form-control" id="closing_time" name="closing_time" required>
                              </div>
                              <div class="mb-3">
                                  <label for="destination" class="form-label">Destination:</label>
                                  <input type="text" class="form-control" id="destination" name="destination" required>
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
                          <h5 class="modal-title" id="editModalLabel">Edit Data Detail Customer</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <form method="POST">
                              <div class="mb-3">
                                  <label for="edit_id_order" class="form-label">ID Order:</label>
                                  <input type="text" class="form-control" id="edit_id_order" name="edit_id_order" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_id_order_container" class="form-label">ID Order Container:</label>
                                  <input type="text" class="form-control" id="edit_id_order_container" name="edit_id_order_container" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_tanggal_order" class="form-label">Tanggal Order:</label>
                                  <input type="date" class="form-control" id="edit_tanggal_order" name="edit_tanggal_order" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_id_customer" class="form-label">ID Customer:</label>
                                  <div class="input-group">
                                      <input type="text" class="form-control" id="edit_id_customer" name="edit_id_customer" required>
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
                                  <label for="edit_telp_customer" class="form-label">Telepon Customer:</label>
                                  <input type="text" class="form-control" id="edit_telp_customer" name="edit_telp_customer" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_alamat_customer" class="form-label">Alamat Customer:</label>
                                  <input type="text" class="form-control" id="edit_alamat_customer" name="edit_alamat_customer" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_pic" class="form-label">PIC:</label>
                                  <input type="text" class="form-control" id="edit_pic" name="edit_pic" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_phone_pic" class="form-label">Telepon PIC:</label>
                                  <input type="text" class="form-control" id="edit_phone_pic" name="edit_phone_pic" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_jumlah_order" class="form-label">Jumlah Order:</label>
                                  <input type="number" class="form-control" id="edit_jumlah_order" name="edit_jumlah_order" required>
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
                                  <label for="edit_treatment" class="form-label">Treatment:</label>
                                      <select class="form-select" id="edit_treatment" name="edit_treatment" required>
                                        <option value="">Pilih Treatment</option>
                                        <option value="FCL">FCL</option>
                                        <option value="LCL">LCL</option>
                                      </select>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_volume" class="form-label">Volume:</label>
                                  <input type="text" class="form-control" id="edit_volume" name="edit_volume" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_place_fumigation" class="form-label">Place Fumigation:</label>
                                  <input type="text" class="form-control" id="edit_place_fumigation" name="edit_place_fumigation" value="Depo Pelindo Semarang" required readonly>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_stuffing_date" class="form-label">Stuffing Date:</label>
                                  <input type="date" class="form-control" id="edit_stuffing_date" name="edit_stuffing_date" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_container" class="form-label">Container:</label>
                                  <input type="text" class="form-control" id="edit_container" name="edit_container" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_container_volume" class="form-label">Container Volume:</label>
                                  <input type="text" class="form-control" id="edit_container_volume" name="edit_container_volume" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_commodity" class="form-label">Commodity:</label>
                                  <input type="text" class="form-control" id="edit_commodity" name="edit_commodity" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_vessel" class="form-label">Vessel:</label>
                                  <input type="text" class="form-control" id="edit_vessel" name="edit_vessel" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_closing_time" class="form-label">Closing Time:</label>
                                  <input type="datetime-local" class="form-control" id="edit_closing_time" name="edit_closing_time" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_destination" class="form-label">Destination:</label>
                                  <input type="text" class="form-control" id="edit_destination" name="edit_destination" required>
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
                  <h6 class="m-0 font-weight-bold text-primary">Data Order</h6> <!-- EDIT NAMA -->
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
                        <th>Id Order</th>
                        <th>Id Order Container</th>
                        <th>Tanggal Order</th>
                        <th>Id Customer</th>
                        <th>Nama Customer</th>
                        <th>Telp Customer</th>
                        <th>Alamat Customer</th>
                        <th>PIC</th>
                        <th>Phone PIC</th>
                        <th>Jumlah Order</th>
                        <th>Id Data Standar</th>
                        <th>Treatment</th>
                        <th>Volume</th>
                        <th>Place Fumigation</th>
                        <th>Stuffing Date</th>
                        <th>Container</th>
                        <th>Container Volume</th>
                        <th>Commodity</th>
                        <th>Vessel</th>
                        <th>Closing Time</th>
                        <th>Destination</th>
                        <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $query = "SELECT * FROM data_order";
                      $result = mysqli_query($conn, $query);

                      while ($data = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                          echo "<td>".$data['id_order']."</td>";
                          echo "<td>".$data['id_order_container']."</td>";
                          echo "<td>".$data['tanggal_order']."</td>";
                          echo "<td>".$data['id_customer']."</td>";
                          echo "<td>".$data['nama_customer']."</td>";
                          echo "<td>".$data['telp_customer']."</td>";
                          echo "<td>".$data['alamat_customer']."</td>";
                          echo "<td>".$data['pic']."</td>";
                          echo "<td>".$data['phone_pic']."</td>";
                          echo "<td>".$data['jumlah_order']."</td>";
                          echo "<td>".$data['id_data_standar']."</td>";
                          echo "<td>".$data['treatment']."</td>";
                          echo "<td>".$data['volume']."</td>";
                          echo "<td>".$data['place_fumigation']."</td>";
                          echo "<td>".$data['stuffing_date']."</td>";
                          echo "<td>".$data['container']."</td>";
                          echo "<td>".$data['container_volume']."</td>";
                          echo "<td>".$data['commodity']."</td>";
                          echo "<td>".$data['vessel']."</td>";
                          echo "<td>".$data['closing_time']."</td>";
                          echo "<td>".$data['destination']."</td>";
                          echo "<td>";
                          echo "<button type='button' class='btn btn-success btn-sm' style='width: 30px; height: 30px;' data-bs-toggle='modal' data-bs-target='#editModal' onclick='openEditModal(\"".$data['id_order']."\", \"".$data['id_order_container']."\", \"".$data['tanggal_order']."\", \"".$data['id_customer']."\", \"".$data['nama_customer']."\", \"".$data['telp_customer']."\", \"".$data['alamat_customer']."\", \"".$data['pic']."\", \"".$data['phone_pic']."\", \"".$data['jumlah_order']."\", \"".$data['id_data_standar']."\", \"".$data['treatment']."\", \"".$data['volume']."\", \"".$data['place_fumigation']."\", \"".$data['stuffing_date']."\", \"".$data['container']."\", \"".$data['container_volume']."\", \"".$data['commodity']."\", \"".$data['vessel']."\", \"".$data['closing_time']."\", \"".$data['destination']."\")'><i class='fas fa-edit'></i></button>";
                          echo "<button type='button' class='btn btn-danger btn-sm' style='width: 30px; height: 30px;' onclick='openDeleteModal(\"".$data['id_order']."\")'><i class='fas fa-trash'></i></button>";
                          echo "<a href='generate_pdf.php?id_order=".htmlspecialchars($data['id_order'])."' class='btn btn-primary btn-sm' style='width: 30px; height: 30px;' target='_blank' role='button'><i class='fas fa-print'></i></a>";
                          echo "<button type='button' class='btn btn-info btn-sm' style='width: 30px; height: 30px;' onclick='approveData(\"".$data['id_order']."\")'><i class='fas fa-check'></i></button>";
                          echo "<button type='button' class='btn btn-danger btn-sm' style='width: 30px; height: 30px;' onclick='rejectData(\"".$data['id_order']."\")'><i class='fas fa-times'></i></button>"; 
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
    function openEditModal(idOrder, idOrderContainer, tanggalOrder, idCustomer, namaCustomer, telpCustomer, alamatCustomer, pic, phonePic, jumlahOrder, idDataStandar, treatment, volume, placeFumigation, stuffingDate, container, containerVolume, commodity, vessel, closingTime, destination) {
        document.getElementById("edit_id_order").value = idOrder;
        document.getElementById("edit_id_order_container").value = idOrderContainer;
        document.getElementById("edit_tanggal_order").value = tanggalOrder;
        document.getElementById("edit_id_customer").value = idCustomer;
        document.getElementById("edit_nama_customer").value = namaCustomer;
        document.getElementById("edit_telp_customer").value = telpCustomer;
        document.getElementById("edit_alamat_customer").value = alamatCustomer;
        document.getElementById("edit_pic").value = pic;
        document.getElementById("edit_phone_pic").value = phonePic;
        document.getElementById("edit_jumlah_order").value = jumlahOrder;
        document.getElementById("edit_id_data_standar").value = idDataStandar;
        document.getElementById("edit_treatment").value = treatment;
        document.getElementById("edit_volume").value = volume;
        document.getElementById("edit_place_fumigation").value = placeFumigation;
        document.getElementById("edit_stuffing_date").value = stuffingDate;
        document.getElementById("edit_container").value = container;
        document.getElementById("edit_container_volume").value = containerVolume;
        document.getElementById("edit_commodity").value = commodity;
        document.getElementById("edit_vessel").value = vessel;
        document.getElementById("edit_closing_time").value = closingTime;
        document.getElementById("edit_destination").value = destination;
    }

    function openDeleteModal(idOrder) {
        var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'), {
            keyboard: false
        });
        deleteModal.show();
        
        // Tambahkan event listener pada tombol konfirmasi hapus
        document.getElementById('confirmDeleteBtn').onclick = function() {
            window.location.href = "?id_order=" + idOrder;
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