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
if (isset($_POST['kode_at']) && isset($_POST['jenis_at']) && isset($_POST['nama_at']) && isset($_POST['jumlah_at']) && isset($_POST['keberadaan_at']) && isset($_POST['tahun_perolehan']) && isset($_POST['umur_ekonomis']) && isset($_POST['harga_perolehan'])) {
  $kode_at = $_POST['kode_at'];
  $jenis_at = $_POST['jenis_at'];
  $nama_at = $_POST['nama_at'];
  $jumlah_at = $_POST['jumlah_at'];
  $keberadaan_at = $_POST['keberadaan_at'];
  $tahun_perolehan = $_POST['tahun_perolehan'];
  $umur_ekonomis = $_POST['umur_ekonomis'];
  $harga_perolehan = $_POST['harga_perolehan'];

  $query = "INSERT INTO keu_aset_tetap (kode_at, jenis_at, nama_at, jumlah_at, keberadaan_at, tahun_perolehan, umur_ekonomis, harga_perolehan) VALUES ('$kode_at', '$jenis_at', '$nama_at', '$jumlah_at', '$keberadaan_at', '$tahun_perolehan', '$umur_ekonomis', '$harga_perolehan')";
  $result = mysqli_query($conn, $query);

  if (!$result) {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
      exit();
  }
}

// Menangani pembaruan data
if (isset($_POST['edit_kode_at']) && isset($_POST['edit_jenis_at']) && isset($_POST['edit_nama_at']) && isset($_POST['edit_jumlah_at']) && isset($_POST['edit_keberadaan_at']) && isset($_POST['edit_tahun_perolehan']) && isset($_POST['edit_umur_ekonomis']) && isset($_POST['edit_harga_perolehan'])) {
  $kode_at = $_POST['edit_kode_at'];
  $jenis_at = $_POST['edit_jenis_at'];
  $nama_at = $_POST['edit_nama_at'];
  $jumlah_at = $_POST['edit_jumlah_at'];
  $keberadaan_at = $_POST['edit_keberadaan_at'];
  $tahun_perolehan = $_POST['edit_tahun_perolehan'];
  $umur_ekonomis = $_POST['edit_umur_ekonomis'];
  $harga_perolehan = $_POST['edit_harga_perolehan'];

  $query = "UPDATE keu_aset_tetap SET jenis_at='$jenis_at', nama_at='$nama_at', jumlah_at='$jumlah_at', keberadaan_at='$keberadaan_at', tahun_perolehan='$tahun_perolehan', umur_ekonomis='$umur_ekonomis', harga_perolehan='$harga_perolehan' WHERE kode_at='$kode_at'";
  $result = mysqli_query($conn, $query);

  if (!$result) {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
      exit();
  }
}

// Menangani penghapusan data
if (isset($_GET['kode_at'])) {
  $kode_at = $_GET['kode_at'];

  $query = "DELETE FROM keu_aset_tetap WHERE kode_at='$kode_at'";
  $result = mysqli_query($conn, $query);

  if (!$result) {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
      exit();
  }
}

// Mengambil data dari tabel keu_aset_tetap
$query_select = "SELECT * FROM keu_aset_tetap";
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
  <title>SIMITRA - Aset Tetap</title> <!-- EDIT NAMA -->
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
            <h1 class="h3 mb-0 text-gray-800">Aset Tetap</h1> <!-- EDIT NAMA -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Akuntansi</a></li>
              <li class="breadcrumb-item active" aria-current="page">Aset Tetap</li> <!-- EDIT NAMA -->
            </ol>
          </div>
          <!-- AWAL EDIT SESUAIKAN TABEL DATABASE -->
          <!-- Modal Tambah Data -->
          <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="addModalLabel">Tambah Data Aset Tetap</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <form method="POST">
                              <div class="mb-3">
                                  <label for="kode_at" class="form-label">Kode Aset Tetap:</label>
                                  <input type="text" class="form-control" id="kode_at" name="kode_at" required>
                              </div>
                              <div class="mb-3">
                                  <label for="jenis_at" class="form-label">Jenis Aset Tetap:</label>
                                  <select class="form-select" id="jenis_at" name="jenis_at" required>
                                      <option value="">Pilih Jenis Aset Tetap</option>
                                      <option value="Tanah dan Bangunan">Tanah dan Bangunan</option>
                                      <option value="Kendaraan Bermotor">Kendaraan Bermotor</option>
                                      <option value="Inventaris Kantor">Inventaris Kantor</option>
                                      <option value="Peralatan dan Mesin">Peralatan dan Mesin</option>
                                  </select>
                              </div>
                              <div class="mb-3">
                                  <label for="nama_at" class="form-label">Nama Aset Tetap:</label>
                                  <input type="text" class="form-control" id="nama_at" name="nama_at" required>
                              </div>
                              <div class="mb-3">
                                  <label for="jumlah_at" class="form-label">Jumlah:</label>
                                  <input type="number" class="form-control" id="jumlah_at" name="jumlah_at" required>
                              </div>
                              <div class="mb-3">
                                  <label for="keberadaan_at" class="form-label">Keberadaan:</label>
                                  <select class="form-select" id="keberadaan_at" name="keberadaan_at" required>
                                      <option value="">Pilih Keberadaan Aset Tetap</option>
                                      <option value="Kantor">Kantor</option>
                                      <option value="Depo">Depo</option>
                                      <option value="PF">PF</option>
                                      <option value="PU">PU</option>
                                      <option value="AKK">AKK</option>
                                  </select>
                              </div>
                              <div class="mb-3">
                                  <label for="tahun_perolehan" class="form-label">Tahun Perolehan:</label>
                                  <input type="number" class="form-control" id="tahun_perolehan" name="tahun_perolehan" required>
                              </div>
                              <div class="mb-3">
                                  <label for="umur_ekonomis" class="form-label">Umur Ekonomis:</label>
                                  <input type="number" class="form-control" id="umur_ekonomis" name="umur_ekonomis" required>
                              </div>
                              <div class="mb-3">
                                  <label for="harga_perolehan" class="form-label">Harga Perolehan:</label>
                                  <input type="number" step="0.01" class="form-control" id="harga_perolehan" name="harga_perolehan" required>
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
                          <h5 class="modal-title" id="editModalLabel">Edit Data Aset Tetap</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <form method="POST">
                              <div class="mb-3">
                                  <label for="edit_kode_at" class="form-label">Kode Aset Tetap:</label>
                                  <input type="text" class="form-control" id="edit_kode_at" name="edit_kode_at" readonly required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_jenis_at" class="form-label">Jenis Aset Tetap:</label>
                                  <select class="form-select" id="edit_jenis_at" name="edit_jenis_at" required>
                                      <option value="">Pilih Jenis Aset Tetap</option>
                                      <option value="Tanah dan Bangunan">Tanah dan Bangunan</option>
                                      <option value="Kendaraan Bermotor">Kendaraan Bermotor</option>
                                      <option value="Inventaris Kantor">Inventaris Kantor</option>
                                      <option value="Peralatan dan Mesin">Peralatan dan Mesin</option>
                                  </select>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_nama_at" class="form-label">Nama Aset Tetap:</label>
                                  <input type="text" class="form-control" id="edit_nama_at" name="edit_nama_at" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_jumlah_at" class="form-label">Jumlah:</label>
                                  <input type="number" class="form-control" id="edit_jumlah_at" name="edit_jumlah_at" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_keberadaan_at" class="form-label">Keberadaan:</label>
                                  <select class="form-select" id="edit_keberadaan_at" name="edit_keberadaan_at" required>
                                      <option value="">Pilih Keberadaan Aset Tetap</option>
                                      <option value="Kantor">Kantor</option>
                                      <option value="Depo">Depo</option>
                                      <option value="PF">PF</option>
                                      <option value="PU">PU</option>
                                      <option value="AKK">AKK</option>
                                  </select>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_tahun_perolehan" class="form-label">Tahun Perolehan:</label>
                                  <input type="number" class="form-control" id="edit_tahun_perolehan" name="edit_tahun_perolehan" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_umur_ekonomis" class="form-label">Umur Ekonomis:</label>
                                  <input type="number" class="form-control" id="edit_umur_ekonomis" name="edit_umur_ekonomis" required>
                              </div>
                              <div class="mb-3">
                                  <label for="edit_harga_perolehan" class="form-label">Harga Perolehan:</label>
                                  <input type="number" step="0.01" class="form-control" id="edit_harga_perolehan" name="edit_harga_perolehan" required>
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
                  <h6 class="m-0 font-weight-bold text-primary">Aset Tetap</h6> <!-- EDIT NAMA -->
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
                        <th>Kode Aset Tetap</th>
                        <th>Jenis Aset Tetap</th>
                        <th>Nama Aset Tetap</th>
                        <th>Jumlah</th>
                        <th>Keberadaan</th>
                        <th>Tahun Perolehan</th>
                        <th>Umur Ekonomis</th>
                        <th>Harga Perolehan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $query = "SELECT * FROM keu_aset_tetap";
                      $result = mysqli_query($conn, $query);
                      while ($data = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                          echo "<td>".$data['kode_at']."</td>";
                          echo "<td>".$data['jenis_at']."</td>";
                          echo "<td>".$data['nama_at']."</td>";
                          echo "<td>".$data['jumlah_at']."</td>";
                          echo "<td>".$data['keberadaan_at']."</td>";
                          echo "<td>".$data['tahun_perolehan']."</td>";
                          echo "<td>".$data['umur_ekonomis']."</td>";
                          echo "<td>".number_format($data['harga_perolehan'], 2, ',', '.')."</td>";
                          echo "<td><span class='badge badge-success'>Aktif</span></td>";
                          echo "<td>";
                          echo "<button type='button' class='btn btn-success btn-sm' style='width: 30px; height: 30px;' data-bs-toggle='modal' data-bs-target='#editModal' onclick='openEditModal(\"".$data['kode_at']."\", \"".$data['jenis_at']."\", \"".$data['nama_at']."\", \"".$data['jumlah_at']."\", \"".$data['keberadaan_at']."\", \"".$data['tahun_perolehan']."\", \"".$data['umur_ekonomis']."\", \"".$data['harga_perolehan']."\")'><i class='fas fa-edit'></i></button>";
                          echo "<button type='button' class='btn btn-danger btn-sm' style='width: 30px; height: 30px;' onclick='openDeleteModal(\"".$data['kode_at']."\")'><i class='fas fa-trash'></i></button>";
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
    function openEditModal(kode_at, jenis_at, nama_at, jumlah_at, keberadaan_at, tahun_perolehan, umur_ekonomis, harga_perolehan) {
        document.getElementById("edit_kode_at").value = kode_at;
        document.getElementById("edit_jenis_at").value = jenis_at;
        document.getElementById("edit_nama_at").value = nama_at;
        document.getElementById("edit_jumlah_at").value = jumlah_at;
        document.getElementById("edit_keberadaan_at").value = keberadaan_at;
        document.getElementById("edit_tahun_perolehan").value = tahun_perolehan;
        document.getElementById("edit_umur_ekonomis").value = umur_ekonomis;
        document.getElementById("edit_harga_perolehan").value = harga_perolehan;
    }

    function openDeleteModal(kode_at) {
        var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'), {
            keyboard: false
        });
        deleteModal.show();
        
        // Tambahkan event listener pada tombol konfirmasi hapus
        document.getElementById('confirmDeleteBtn').onclick = function() {
            window.location.href = "?kode_at=" + kode_at;
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