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
if (isset($_POST['id_verifikasi']) && isset($_POST['id_order']) && isset($_POST['id_order_container']) && isset($_POST['tanggal_order']) && isset($_POST['id_customer']) && isset($_POST['nama_customer']) && isset($_POST['alamat_customer']) && isset($_POST['commodity']) && isset($_POST['stuffing_date']) && isset($_POST['closing_time']) && isset($_POST['waktu']) && isset($_POST['export_status']) && isset($_POST['destination']) && isset($_POST['import_status']) && isset($_POST['origin']) && isset($_POST['packing_status']) && isset($_POST['kondisi_status']) && isset($_POST['place_fumigation'])&& isset($_POST['kesimpulan'])) {
  // Mengambil nilai dari $_POST
  $idverifikasi = $_POST['id_verifikasi'];
  $idorder = $_POST['id_order'];
  $idordercontainer = $_POST['id_order_container'];
  $tanggalorder = $_POST['tanggal_order'];
  $idcustomer = $_POST['id_customer'];
  $namacustomer = $_POST['nama_customer'];
  $alamatcustomer = $_POST['alamat_customer'];
  $commodity = $_POST['commodity'];
  $stuffing_date = $_POST['stuffing_date'];
  $closingtime = $_POST['closing_time'];
  $waktu = $_POST['waktu'];
  $exportstatus = $_POST['export_status'];
  $destination = $_POST['destination'];
  $importstatus = $_POST['import_status'];
  $origin = $_POST['origin'];
  $packingstatus = $_POST['packing_status'];
  $kondisistatus = $_POST['kondisi_status'];
  $placefumigation = $_POST['place_fumigation'];
  $kesimpulan = $_POST['kesimpulan'];


// Menyiapkan statement SQL untuk insert data
$query = "INSERT INTO verifikasi_order (id_verifikasi,id_order, id_order_container,  tanggal_order, id_customer, nama_customer, alamat_customer, commodity, stuffing_date, closing_time, waktu, export_status, destination, import_status,origin, packing_status, kondisi_status, place_fumigation,kesimpulan) VALUES ('$idverifikasi', '$idorder', '$idordercontainer',  '$tanggalorder', '$idcustomer', '$namacustomer', '$alamatcustomer', '$commodity','$stuffing_date', '$closingtime','$waktu', '$exportstatus', '$destination', '$importstatus', '$origin', '$packingstatus', '$kondisistatus', '$placefumigation', '$kesimpulan')";
  $result = mysqli_query($conn, $query);


    if (!$result) {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
        exit();
    }
}

// Menangani pembaruan data
if (isset($_POST['edit_id_verifikasi']) && isset($_POST['edit_id_order']) && isset($_POST['edit_id_order_container']) && isset($_POST['edit_tanggal_order']) && isset($_POST['edit_id_customer']) && isset($_POST['edit_nama_customer']) && isset($_POST['edit_alamat_customer']) && isset($_POST['edit_commodity']) && isset($_POST['edit_stuffing_date']) && isset($_POST['edit_closing_time']) && isset($_POST['edit_waktu']) && isset($_POST['edit_export_status']) && isset($_POST['edit_destination']) && isset($_POST['edit_import_status']) && isset($_POST['edit_origin']) && isset($_POST['edit_packing_status']) && isset($_POST['edit_kondisi_status']) && isset($_POST['edit_place_fumigation'])&& isset($_POST['edit_kesimpulan'])) {  // Mengambil nilai dari $_POST
  $idverifikasi = $_POST['edit_id_verifikasi'];
  $idorder = $_POST['edit_id_order'];
  $idordercontainer = $_POST['edit_id_order_container'];
  $TanggalOrder = $_POST['edit_Tanggal_order'];
  $IdCustomer = $_POST['edit_id_customer'];
  $namacustomer = $_POST['edit_nama_customer'];
  $alamatcustomer = $_POST['edit_alamat_customer'];
  $commodity = $_POST['edit_commodity'];
  $stuffing_date = $_POST['edit_stuffing_date'];
  $closingtime = $_POST['edit_closing_time'];
  $waktu = $_POST['edit_waktu'];
  $exportstatus = $_POST['edit_export_status'];
  $destination = $_POST['edit_destination'];
  $importstatus = $_POST['edit_import_status'];
  $origin = $_POST['edit_origin'];
  $packingstatus = $_POST['edit_packing_status'];
  $kondisistatus = $_POST['edit_kondisi_status'];
  $placefumigation = $_POST['edit_place_fumigation'];
  $kesimpulan = $_POST['edit_kesimpulan'];  

  $query = "UPDATE INTO verifikasi_order (id_verifikasi,id_order, id_order_container,  tanggal_order, id_customer, nama_customer, alamat_customer, commodity, stuffing_date, closing_time, waktu, export_status, destination, import_status,origin, packing_status, kondisi_status, place_fumigation,kesimpulan) VALUES ('$idverifikasi', '$idorder', '$id_order_container',  '$tanggalorder', '$idcustomer', '$namacustomer', '$alamatcustomer', '$commodity','$stuffing_date', '$closingtime','$waktu', '$exportstatus', '$destination', '$importstatus', '$origin', '$packingstatus', '$kondisistatus', '$place_fumigation', '$kesimpulan')";
  $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
        exit();
    }
}

// Menangani penghapusan data
if (isset($_GET['id_verifikasi'])) {
    $idverifikasicontainer = $_GET['id_verifikasi'];

    $query = "DELETE FROM verifikasi_order WHERE id_verifikasi='$idverifikasi'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
        exit();
    }
}

// Mengambil data dari tabel data_harga
$query_select = "SELECT * FROM verifikasi_order";
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
  <title>SIMITRA - Verifikasi Order</title> <!-- EDIT NAMA -->
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
            <a class="collapse-item" href="harga-jasa.php">Harga Jasa</a>
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
            <h1 class="h3 mb-0 text-gray-800">Verifikasi Order</h1> <!-- EDIT NAMA -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Master</a></li>
              <li class="breadcrumb-item active" aria-current="page">Verifikasi Order</li> <!-- EDIT NAMA -->
            </ol>
          </div>
          <!-- AWAL EDIT SESUAIKAN TABEL DATABASE -->
<!-- Modal Tambah Data -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Input Verifikasi Order </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="mb-3">
                        <label for="id_verifikasi" class="form-label">ID Verifikasi:</label>
                        <input type="text" class="form-control" id="id_verifikasi" name="id_verifikasi" required>
                    </div>
                    <div class="mb-3">
                        <label for="id_order" class="form-label">ID Order:</label>
                        <input type="text" class="form-control" id="id_order" name="id_order" required>
                    </div>
                    <!-- Ganti input checkbox menjadi dropdown -->
                    <div class="mb-3">
                        <label for="waktu" class="form-label">Waktu:</label>
                        <select class="form-select" id="waktu" name="waktu" required>
                            <option value="">Pilih Waktu</option>
                            <option value="pagi">cukup</option>
                            <option value="siang">Tidak Cukup</option>
                      
                        </select>
                    </div>
                    <!-- Ganti input checkbox menjadi dropdown -->
                    <div class="mb-3">
                        <label for="export_status" class="form-label">Export Status:</label>
                        <select class="form-select" id="export_status" name="export_status" required>
                            <option value="">Pilih Export Status</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="destination" class="form-label">Destination:</label>
                        <input type="text" class="form-control" id="destination" name="destination" required>
                    </div>
                    <!-- Ganti input checkbox menjadi dropdown -->
                    <div class="mb-3">
                        <label for="import_status" class="form-label">Import Status:</label>
                        <select class="form-select" id="import_status" name="import_status" required>
                            <option value="">Pilih Import Status</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="origin" class="form-label">Origin:</label>
                        <input type="text" class="form-control" id="origin" name="origin" required>
                    </div>
                    <!-- Ganti input checkbox menjadi dropdown -->
                    <div class="mb-3">
                        <label for="packing_status" class="form-label">Packing Status:</label>
                        <select class="form-select" id="packing_status" name="packing_status" required>
                            <option value="">Pilih Packing Status</option>
                            <option value="packed">Packed</option>
                            <option value="unpacked">Unpacked</option>
                        </select>
                    </div>
                    <!-- Ganti input checkbox menjadi dropdown -->
                    <div class="mb-3">
                        <label for="kondisi_status" class="form-label">Kondisi Status:</label>
                        <select class="form-select" id="kondisi_status" name="kondisi_status" required>
                            <option value="">Pilih Kondisi Status</option>
                            <option value="good">Finish</option>
                            <option value="bad">Unfinish</option>
                        </select>
                    </div>
                    <!-- Ganti input checkbox menjadi dropdown -->
                    <div class="mb-3">
                        <label for="place_fumigation" class="form-label">Place Fumigation:</label>
                        <select class="form-select" id="place_fumigation" name="place_fumigation" required>
                            <option value="">Pilih Place Fumigation</option>
                            <option value="place1">Memenuhi Syarat</option>
                            <option value="place2">Tidak Memenuhi Syarat</option>
                        </select>
                    </div>
                    <!-- Ganti input checkbox menjadi dropdown -->
                    <div class="mb-3">
                        <label for="kesimpulan" class="form-label">Kesimpulan:</label>
                        <select class="form-select" id="kesimpulan" name="kesimpulan" required>
                            <option value="">Pilih Kesimpulan</option>
                            <option value="good">Bisa dilakukan Fumigasi</option>
                            <option value="bad">Tidak Bisa dilakukan Fumigasi</option>
                        </select>
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
                <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="proses_edit_data.php">
                    <input type="hidden" id="edit_id" name="edit_id" value="<?php echo $data['id']; ?>">

                    <div class="mb-3">
                        <label for="edit_id_verifikasi" class="form-label">ID Verifikasi:</label>
                        <input type="text" class="form-control" id="edit_id_verifikasi" name="edit_id_verifikasi" required value="<?php echo $data['id_verifikasi']; ?>">
                    </div>

                    <div class="mb-3">
                    <label for="edit_id_order" class="form-label">ID Order:</label>
                        <input type="text" class="form-control" id="edit_id_order" name="edit_id_order" required value="<?php echo $data['id_order']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="edit_id_customer" class="form-label">ID Customer:</label>
                        <input type="text" class="form-control" id="edit_id_customer" name="edit_id_customer" required value="<?php echo $data['id_customer']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="edit_waktu" class="form-label">Waktu:</label>
                        <select class="form-select" id="edit_waktu" name="edit_waktu" required>
                            <option value="">Pilih Waktu</option>
                            <option value="pagi" <?php if($data['waktu'] == 'pagi') echo 'selected'; ?>>Cukup</option>
                            <option value="siang" <?php if($data['waktu'] == 'siang') echo 'selected'; ?>>Tidak Cukup</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="edit_export_status" class="form-label">Export Status:</label>
                        <select class="form-select" id="edit_export_status" name="edit_export_status" required>
                            <option value="">Pilih Export Status</option>
                            <option value="yes" <?php if($data['export_status'] == 'yes') echo 'selected'; ?>>Yes</option>
                            <option value="no" <?php if($data['export_status'] == 'no') echo 'selected'; ?>>No</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="edit_destination" class="form-label">Destination:</label>
                        <input type="text" class="form-control" id="edit_destination" name="edit_destination" required>
                    </div>

                    <div class="mb-3">
                        <label for="edit_import_status" class="form-label">Import Status:</label>
                        <select class="form-select" id="edit_import_status" name="edit_import_status" required>
                            <option value="">Pilih Import Status</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="edit_origin" class="form-label">Origin:</label>
                        <input type="text" class="form-control" id="edit_origin" name="edit_origin" required>
                    </div>

                    <div class="mb-3">
                        <label for="edit_packing_status" class="form-label">Packing Status:</label>
                        <select class="form-select" id="edit_packing_status" name="edit_packing_status" required>
                            <option value="">Pilih Packing Status</option>
                            <option value="packed">Packed</option>
                            <option value="unpacked">Unpacked</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="edit_kondisi_status" class="form-label">Kondisi Status:</label>
                        <select class="form-select" id="edit_kondisi_status" name="edit_kondisi_status" required>
                            <option value="">Pilih Kondisi Status</option>
                            <option value="good">Finish</option>
                            <option value="bad">Unfinish</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="edit_place_fumigation" class="form-label">Place Fumigation:</label>
                        <select class="form-select" id="edit_place_fumigation" name="edit_place_fumigation" required>
                            <option value="">Pilih Place Fumigation</option>
                            <option value="place1">Memenuhi Syarat</option>
                            <option value="place2">Tidak Memenuhi Syarat</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="edit_kesimpulan" class="form-label">Kesimpulan:</label>
                        <select class="form-select" id="edit_kesimpulan" name="edit_kesimpulan" required>
                            <option value="">Pilih Kesimpulan</option>
                            <option value="good">Bisa dilakukan Fumigasi</option>
                            <option value="bad">Tidak Bisa dilakukan Fumigasi</option>
                        </select>
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

          <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Verifikasi Order</h6> <!-- EDIT NAMA -->
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
                         <th>ID verifikasi</th>
                         <th>ID order</th>
                         <th>ID order container</th>
                         <th>Tanggal order</th>
                          <th>ID Customer</th>
                          <th>Nama Customer</th>
                          <th>Alamat Order</th>
                          <th>Commodity</th>
                          <th>Stuffing Date</th>
                          <th>Closing Time</th>
                          <th>Waktu</th>
                         <th>Export Status</th>
                         <th>Destination</th>
                         <th>Import Status</th>
                          <th>Origin</th>
                          <th>Packing Status</th>
                          <th>Kondisi Status</th>
                          <th>Place Fumigation</th>
                          <th>Kesimpulan</th>
                          <th>Status</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php
    $query = "SELECT * FROM verifikasi_order";
    $result = mysqli_query($conn, $query);
    while ($data = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$data['id_verifikasi']."</td>";
        echo "<td>".$data['id_order']."</td>";
        echo "<td>".$data['id_order_container']."</td>";
        echo "<td>".$data['tanggal_order']."</td>";
        echo "<td>".$data['id_customer']."</td>";
        echo "<td>".$data['nama_customer']."</td>";
        echo "<td>".$data['alamat_customer']."</td>";
        echo "<td>".$data['commodity']."</td>";
        echo "<td>".$data['stuffing_date']."</td>";
        echo "<td>".$data['closing_time']."</td>";
        echo "<td>".$data['waktu']."</td>";
        echo "<td>".$data['export_status']."</td>";
        echo "<td>".$data['destination']."</td>";
        echo "<td>".$data['import_status']."</td>";
        echo "<td>".$data['origin']."</td>";
        echo "<td>".$data['packing_status']."</td>";
        echo "<td>".$data['kondisi_status']."</td>";
        echo "<td>".$data['place_fumigation']."</td>";
        echo "<td>".$data['kesimpulan']."</td>";
        echo "<td><span class='badge badge-success'>Delivered</span></td>";
        echo "<td>";
        echo "<button type='button' class='btn btn-success btn-sm' data-bs-toggle='modal' data-bs-target='#editModal' onclick='openEditModal(\"".$data['id_verifikasi']."\", \"".$data['id_order_container']."\", \"".$data['id_order']."\", \"".$data['nama_customer']."\", \"".$data['alamat_customer']."\"".$data['commodity']."\", \"".$data['stuffing_date']."\", \"".$data['closing_time']."\", \"".$data['waktu']."\", \"".$data['export_status']."\"".$data['destination']."\", \"".$data['import_status']."\", \"".$data['origin']."\", \"".$data['packing_status']."\", \"".$data['kondisi_status']."\"".$data['place_fumigation']."\", \"".$data['kesimpulan']."\")'><i class='fas fa-edit'></i></button>";
        echo "<button type='button' class='btn btn-danger btn-sm' onclick='deleteData(\"".$data['id_verifikasi']."\")'><i class='fas fa-trash'></i></button>";
        echo "<a href='generate_pdf.php?id_verifikasi_container=".htmlspecialchars($data['id_verifikasi'])."' class='btn btn-primary btn-sm' target='_blank' role='button'><i class='fas fa-print'></i></a>";
        echo "<button type='button' class='btn btn-success btn-sm' onclick='acceptData(\"".$data['id_verifikasi']."\")'><i class='fas fa-check'></i></button>";
        echo "<button type='button' class='btn btn-danger btn-sm' onclick='rejectData(\"".$data['id_verifikasi']."\")'><i class='fas fa-times'></i></button>";
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
    function openEditModal(idverifikasi, idverifikasicontainer, id_order_container, id_order, namacustomer, telpcustomer,jumlahorder,treatment,stuffing_date,iddatastandar) {
      document.getElementById("edit_id_verifikasi").value = idverifikasi;
      document.getElementById("edit_id_order").value = idorder;
      document.getElementById("edit_id_order_container").value = idordercontainer;
      document.getElementById("edit_tanggal_order").value = tanggalorder;
      document.getElementById("edit_id_customer").value = idcustomer;
      document.getElementById("edit_nama_customer").value = namacustomer;
      document.getElementById("edit_alamat_customer").value = alamatcustomer;
      document.getElementById("edit_commodity").value = commodity;
      document.getElementById("edit_stuffing_date").value = stuffingdate;
      document.getElementById("edit_closing_time").value = closingtime;
      document.getElementById("edit_waktu").value = waktu;
      document.getElementById("edit_export_status").value = exportstatus;
      document.getElementById("edit_destination").value = destination;
      document.getElementById("edit_import_status").value = importstatus;
      document.getElementById("edit_origin").value = origin;
      document.getElementById("edit_packing_status").value = packingstatus;
      document.getElementById("edit_kondisi_status").value = kondisistatus;
      document.getElementById("edit_place_fumigation").value = placefumigation;
      document.getElementById("edit_kesimpulan").value = kesimpulan;
    }

    function deleteData(idverifikasicontainer) {
      if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        window.location.href = "?id_verifikasi=" + idverifikasi;
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