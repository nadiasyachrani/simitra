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
if (isset($_POST['id_persediaan']) && isset($_POST['nama_persediaan']) && isset($_POST['tanggal_input']) && isset($_POST['harga_masuk']) && isset($_POST['jumlah_masuk']) && isset($_POST['total_masuk']) && isset($_POST['harga_keluar']) && isset($_POST['jumlah_keluar']) && isset($_POST['total_keluar']) && isset($_POST['harga_saldo']) && isset($_POST['jumlah_saldo']) && isset($_POST['total_saldo'])) {
  $idPersediaan = $_POST['id_persediaan'];
  $namaPersediaan = $_POST['nama_persediaan'];
  $tanggalInput = $_POST['tanggal_input'];
  $hargaMasuk = $_POST['harga_masuk'];
  $jumlahMasuk = $_POST['jumlah_masuk'];
  $totalMasuk = $_POST['total_masuk'];
  $hargaKeluar = $_POST['harga_keluar'];
  $jumlahKeluar = $_POST['jumlah_keluar'];
  $totalKeluar = $_POST['total_keluar'];
  $hargaSaldo = $_POST['harga_saldo'];
  $jumlahSaldo = $_POST['jumlah_saldo'];
  $totalSaldo = $_POST['total_saldo'];

  $query = "INSERT INTO kartu_persediaan (id_persediaan, nama_persediaan, tanggal_input, harga_masuk, jumlah_masuk, total_masuk, harga_keluar, jumlah_keluar, total_keluar, harga_saldo, jumlah_saldo, total_saldo) VALUES ('$idPersediaan', '$namaPersediaan', '$tanggalInput', '$hargaMasuk', '$jumlahMasuk', '$totalMasuk', '$hargaKeluar', '$jumlahKeluar', '$totalKeluar', '$hargaSaldo', '$jumlahSaldo', '$totalSaldo')";
  $result = mysqli_query($conn, $query);

  if (!$result) {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
      exit();
  }
}

// Menangani pembaruan data
if (isset($_POST['edit_id_persediaan']) && isset($_POST['edit_nama_persediaan']) && isset($_POST['edit_tanggal_input']) && isset($_POST['edit_harga_masuk']) && isset($_POST['edit_jumlah_masuk']) && isset($_POST['edit_total_masuk']) && isset($_POST['edit_harga_keluar']) && isset($_POST['edit_jumlah_keluar']) && isset($_POST['edit_total_keluar']) && isset($_POST['edit_harga_saldo']) && isset($_POST['edit_jumlah_saldo']) && isset($_POST['edit_total_saldo'])) {
  $idPersediaan = $_POST['edit_id_persediaan'];
  $namaPersediaan = $_POST['edit_nama_persediaan'];
  $tanggalInput = $_POST['edit_tanggal_input'];
  $hargaMasuk = $_POST['edit_harga_masuk'];
  $jumlahMasuk = $_POST['edit_jumlah_masuk'];
  $totalMasuk = $_POST['edit_total_masuk'];
  $hargaKeluar = $_POST['edit_harga_keluar'];
  $jumlahKeluar = $_POST['edit_jumlah_keluar'];
  $totalKeluar = $_POST['edit_total_keluar'];
  $hargaSaldo = $_POST['edit_harga_saldo'];
  $jumlahSaldo = $_POST['edit_jumlah_saldo'];
  $totalSaldo = $_POST['edit_total_saldo'];

  $query = "UPDATE kartu_persediaan SET nama_persediaan='$namaPersediaan', tanggal_input='$tanggalInput', harga_masuk='$hargaMasuk', jumlah_masuk='$jumlahMasuk', total_masuk='$totalMasuk', harga_keluar='$hargaKeluar', jumlah_keluar='$jumlahKeluar', total_keluar='$totalKeluar', harga_saldo='$hargaSaldo', jumlah_saldo='$jumlahSaldo', total_saldo='$totalSaldo' WHERE id_persediaan='$idPersediaan'";
  $result = mysqli_query($conn, $query);

  if (!$result) {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
      exit();
  }
}

// Menangani penghapusan data
if (isset($_GET['id_persediaan'])) {
  $idPersediaan = $_GET['id_persediaan'];

  $query = "DELETE FROM kartu_persediaan WHERE id_persediaan='$idPersediaan'";
  $result = mysqli_query($conn, $query);

  if (!$result) {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
      exit();
  }
}

// Mengambil data dari tabel kartu_persediaan
$query_select = "SELECT * FROM kartu_persediaan";
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
  <title>SIMITRA - Kartu Persediaan</title> <!-- EDIT NAMA -->
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
            <a class="collapse-item" href="standar-hpp.php">Standar HPP</a>
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
            <a class="collapse-item" href="hpp-sesungguhnya.php">HPP Sesunggguhnya</a>
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
            <a class="collapse-item" href="rekap-hpp.php">Rekap HPP Standar</a>
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
            <a class="collapse-item" href="laporan-hpp.php">Harga Pokok Penjualan</a>
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
            <h1 class="h3 mb-0 text-gray-800">Kartu Persediaan</h1> <!-- EDIT NAMA -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Operasional</a></li>
              <li class="breadcrumb-item active" aria-current="page">Kartu Persediaan</li> <!-- EDIT NAMA -->
            </ol>
          </div>

          <!-- AWAL EDIT SESUAIKAN TABEL DATABASE -->
          <!-- Modal Tambah Data -->
          <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Tambah Data Persediaan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="id_persediaan" class="form-label">ID Persediaan:</label>
                                <input type="text" class="form-control" id="id_persediaan" name="id_persediaan" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama_persediaan" class="form-label">Nama Persediaan:</label>
                                <input type="text" class="form-control" id="nama_persediaan" name="nama_persediaan" required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_input" class="form-label">Tanggal Input:</label>
                                <input type="date" class="form-control" id="tanggal_input" name="tanggal_input" required>
                            </div>
                            <div class="mb-3">
                                <label for="harga_masuk" class="form-label">Harga Masuk:</label>
                                <input type="number" class="form-control" id="harga_masuk" name="harga_masuk">
                            </div>
                            <div class="mb-3">
                                <label for="jumlah_masuk" class="form-label">Jumlah Masuk:</label>
                                <input type="number" class="form-control" id="jumlah_masuk" name="jumlah_masuk">
                            </div>
                            <div class="mb-3">
                                <label for="total_masuk" class="form-label">Total Masuk:</label>
                                <input type="number" class="form-control" id="total_masuk" name="total_masuk">
                            </div>
                            <div class="mb-3">
                                <label for="harga_keluar" class="form-label">Harga Keluar:</label>
                                <input type="number" class="form-control" id="harga_keluar" name="harga_keluar">
                            </div>
                            <div class="mb-3">
                                <label for="jumlah_keluar" class="form-label">Jumlah Keluar:</label>
                                <input type="number" class="form-control" id="jumlah_keluar" name="jumlah_keluar">
                            </div>
                            <div class="mb-3">
                                <label for="total_keluar" class="form-label">Total Keluar:</label>
                                <input type="number" class="form-control" id="total_keluar" name="total_keluar">
                            </div>
                            <div class="mb-3">
                                <label for="harga_saldo" class="form-label">Harga Saldo:</label>
                                <input type="number" class="form-control" id="harga_saldo" name="harga_saldo">
                            </div>
                            <div class="mb-3">
                                <label for="jumlah_saldo" class="form-label">Jumlah Saldo:</label>
                                <input type="number" class="form-control" id="jumlah_saldo" name="jumlah_saldo">
                            </div>
                            <div class="mb-3">
                                <label for="total_saldo" class="form-label">Total Saldo:</label>
                                <input type="number" class="form-control" id="total_saldo" name="total_saldo">
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
                        <h5 class="modal-title" id="editModalLabel">Edit Data Persediaan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="edit_id_persediaan" class="form-label">ID Persediaan:</label>
                                <input type="text" class="form-control" id="edit_id_persediaan" name="edit_id_persediaan" readonly required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_nama_persediaan" class="form-label">Nama Persediaan:</label>
                                <input type="text" class="form-control" id="edit_nama_persediaan" name="edit_nama_persediaan" required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_tanggal_input" class="form-label">Tanggal Input:</label>
                                <input type="date" class="form-control" id="edit_tanggal_input" name="edit_tanggal_input" required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_harga_masuk" class="form-label">Harga Masuk:</label>
                                <input type="number" class="form-control" id="edit_harga_masuk" name="edit_harga_masuk">
                            </div>
                            <div class="mb-3">
                                <label for="edit_jumlah_masuk" class="form-label">Jumlah Masuk:</label>
                                <input type="number" class="form-control" id="edit_jumlah_masuk" name="edit_jumlah_masuk">
                            </div>
                            <div class="mb-3">
                                <label for="edit_total_masuk" class="form-label">Total Masuk:</label>
                                <input type="number" class="form-control" id="edit_total_masuk" name="edit_total_masuk">
                            </div>
                            <div class="mb-3">
                                <label for="edit_harga_keluar" class="form-label">Harga Keluar:</label>
                                <input type="number" class="form-control" id="edit_harga_keluar" name="edit_harga_keluar">
                            </div>
                            <div class="mb-3">
                                <label for="edit_jumlah_keluar" class="form-label">Jumlah Keluar:</label>
                                <input type="number" class="form-control" id="edit_jumlah_keluar" name="edit_jumlah_keluar">
                            </div>
                            <div class="mb-3">
                                <label for="edit_total_keluar" class="form-label">Total Keluar:</label>
                                <input type="number" class="form-control" id="edit_total_keluar" name="edit_total_keluar">
                            </div>
                            <div class="mb-3">
                                <label for="edit_harga_saldo" class="form-label">Harga Saldo:</label>
                                <input type="number" class="form-control" id="edit_harga_saldo" name="edit_harga_saldo">
                            </div>
                            <div class="mb-3">
                                <label for="edit_jumlah_saldo" class="form-label">Jumlah Saldo:</label>
                                <input type="number" class="form-control" id="edit_jumlah_saldo" name="edit_jumlah_saldo">
                            </div>
                            <div class="mb-3">
                                <label for="edit_total_saldo" class="form-label">Total Saldo:</label>
                                <input type="number" class="form-control" id="edit_total_saldo" name="edit_total_saldo">
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
          <!-- AKHIR EDIT SESUAIKAN TABEL DATABASE -->

          <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Kartu Persediaan</h6> <!-- EDIT NAMA -->
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
        <th rowspan="2">ID Persediaan</th>
        <th rowspan="2">Nama Persediaan</th>
        <th colspan="3">Masuk</th>
        <th colspan="3">Keluar</th>
        <th colspan="3">Saldo</th>
        <th rowspan="2">Aksi</th>
    </tr>
    <tr>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
    </tr>
</thead>
<tbody>
<?php
$query = "SELECT * FROM kartu_persediaan";
$result = mysqli_query($conn, $query);
while ($data = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td rowspan='2'>".$data['id_persediaan']."</td>";
    echo "<td rowspan='2'>".$data['nama_persediaan']."</td>";
    echo "<td>".$data['harga_masuk']."</td>";
    echo "<td>".$data['jumlah_masuk']."</td>";
    echo "<td>".$data['total_masuk']."</td>";
    echo "<td>".$data['harga_keluar']."</td>";
    echo "<td>".$data['jumlah_keluar']."</td>";
    echo "<td>".$data['total_keluar']."</td>";
    echo "<td>".$data['harga_saldo']."</td>";
    echo "<td>".$data['jumlah_saldo']."</td>";
    echo "<td>".$data['total_saldo']."</td>";
    echo "<td>";
    echo "<button type='button' class='btn btn-success btn-sm' data-bs-toggle='modal' data-bs-target='#editModal' onclick='openEditModal(\"".$data['id_persediaan']."\", \"".$data['nama_persediaan']."\", \"".$data['tanggal_input']."\", \"".$data['harga_masuk']."\", \"".$data['jumlah_masuk']."\", \"".$data['total_masuk']."\", \"".$data['harga_keluar']."\", \"".$data['jumlah_keluar']."\", \"".$data['total_keluar']."\", \"".$data['harga_saldo']."\", \"".$data['jumlah_saldo']."\", \"".$data['total_saldo']."\")'><i class='fas fa-edit'></i></button>";
    echo "<button type='button' class='btn btn-danger btn-sm' onclick='deleteData(\"".$data['id_persediaan']."\")'><i class='fas fa-trash'></i></button>";
    echo "</td>";
    echo "</tr>"; 
    echo "<tr>";
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
    function openEditModal(idPersediaan, namaPersediaan, tanggalInput, hargaMasuk, jumlahMasuk, totalMasuk, hargaKeluar, jumlahKeluar, totalKeluar, hargaSaldo, jumlahSaldo, totalSaldo) {
        document.getElementById("edit_id_persediaan").value = idPersediaan;
        document.getElementById("edit_nama_persediaan").value = namaPersediaan;
        document.getElementById("edit_tanggal_input").value = tanggalInput;
        document.getElementById("edit_harga_masuk").value = hargaMasuk;
        document.getElementById("edit_jumlah_masuk").value = jumlahMasuk;
        document.getElementById("edit_total_masuk").value = totalMasuk;
        document.getElementById("edit_harga_keluar").value = hargaKeluar;
        document.getElementById("edit_jumlah_keluar").value = jumlahKeluar;
        document.getElementById("edit_total_keluar").value = totalKeluar;
        document.getElementById("edit_harga_saldo").value = hargaSaldo;
        document.getElementById("edit_jumlah_saldo").value = jumlahSaldo;
        document.getElementById("edit_total_saldo").value = totalSaldo;
    }

    function deleteData(idKartuPersediaan) {
        if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
            window.location.href = "?id_persediaan=" + idPersediaan;
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
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
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