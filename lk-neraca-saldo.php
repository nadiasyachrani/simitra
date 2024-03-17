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

// Query untuk mengambil data nama akun
$sql = "SELECT nama_akun FROM keu_akun";
$result = $conn->query($sql);

// Mengisi dropdown dengan data nama akun
$nama_akun_options = '';
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $nama_akun_options .= '<option value="' . $row['nama_akun'] . '">' . $row['nama_akun'] . '</option>';
  }
}

// AWAL EDIT SESUAIKAN TABEL DATABASE
// Menangani penambahan data baru
if (
  isset($_POST['no_jurnal']) &&
  isset($_POST['tanggal_jurnal']) &&
  isset($_POST['no_bukti']) &&
  isset($_POST['uraian_jurnal']) &&
  isset($_POST['kode_akun_debit']) &&
  isset($_POST['nama_akun_debit']) &&
  isset($_POST['debet']) &&
  isset($_POST['kode_akun_kredit']) &&
  isset($_POST['nama_akun_kredit']) &&
  isset($_POST['kredit'])
) {
  $noJurnal = $_POST['no_jurnal'];
  $tanggalJurnal = $_POST['tanggal_jurnal'];
  $noBukti = $_POST['no_bukti'];
  $uraianJurnal = $_POST['uraian_jurnal'];
  $kodeAkunDebit = $_POST['kode_akun_debit'];
  $namaAkunDebit = $_POST['nama_akun_debit'];
  $debet = $_POST['debet'];
  $kodeAkunKredit = $_POST['kode_akun_kredit'];
  $namaAkunKredit = $_POST['nama_akun_kredit'];
  $kredit = $_POST['kredit'];

  // Insert into keu_jurnal
  $queryJurnal = "INSERT INTO keu_jurnal (no_jurnal, tanggal_jurnal, no_bukti, uraian_jurnal) VALUES ('$noJurnal', '$tanggalJurnal', '$noBukti', '$uraianJurnal')";
  $resultJurnal = mysqli_query($conn, $queryJurnal);

  if (!$resultJurnal) {
      echo "Error: " . $queryJurnal . "<br>" . mysqli_error($conn);
      exit();
  }

  // Insert into keu_detail_jurnal for debit
  $queryDetailJurnalDebit = "INSERT INTO keu_detail_jurnal (no_jurnal, kode_akun, nama_akun, debet) VALUES ('$noJurnal', '$kodeAkunDebit', '$namaAkunDebit', '$debet')";
  $resultDetailJurnalDebit = mysqli_query($conn, $queryDetailJurnalDebit);

  if (!$resultDetailJurnalDebit) {
      echo "Error: " . $queryDetailJurnalDebit . "<br>" . mysqli_error($conn);
      exit();
  }

  // Insert into keu_detail_jurnal for kredit
  $queryDetailJurnalKredit = "INSERT INTO keu_detail_jurnal (no_jurnal, kode_akun, nama_akun, kredit) VALUES ('$noJurnal', '$kodeAkunKredit', '$namaAkunKredit', '$kredit')";
  $resultDetailJurnalKredit = mysqli_query($conn, $queryDetailJurnalKredit);

  if (!$resultDetailJurnalKredit) {
      echo "Error: " . $queryDetailJurnalKredit . "<br>" . mysqli_error($conn);
      exit();
  }
}

// Menangani pembaruan data
if (isset($_POST['edit_no_jurnal']) && isset($_POST['edit_tanggal_jurnal']) && isset($_POST['edit_no_bukti']) && isset($_POST['edit_uraian_jurnal']) && isset($_POST['edit_kode_akun_debit']) && isset($_POST['edit_nama_akun_debit']) && isset($_POST['edit_debet']) && isset($_POST['edit_kode_akun_kredit']) && isset($_POST['edit_nama_akun_kredit']) && isset($_POST['edit_kredit'])) {
  $noJurnal = $_POST['edit_no_jurnal'];
  $tanggalJurnal = $_POST['edit_tanggal_jurnal'];
  $noBukti = $_POST['edit_no_bukti'];
  $uraianJurnal = $_POST['edit_uraian_jurnal'];
  $kodeAkunDebit = $_POST['edit_kode_akun_debit'];
  $namaAkunDebit = $_POST['edit_nama_akun_debit'];
  $debet = $_POST['edit_debet'];
  $kodeAkunKredit = $_POST['edit_kode_akun_kredit'];
  $namaAkunKredit = $_POST['edit_nama_akun_kredit'];
  $kredit = $_POST['edit_kredit'];

  // Update keu_jurnal
  $queryJurnal = "UPDATE keu_jurnal SET tanggal_jurnal='$tanggalJurnal', no_bukti='$noBukti', uraian_jurnal='$uraianJurnal' WHERE no_jurnal='$noJurnal'";
  $resultJurnal = mysqli_query($conn, $queryJurnal);

  if (!$resultJurnal) {
      echo "Error: " . $queryJurnal . "<br>" . mysqli_error($conn);
      exit();
  }

  // Update keu_detail_jurnal (baris pertama)
  $queryDetailJurnalDebit = "UPDATE keu_detail_jurnal SET kode_akun='$kodeAkunDebit', nama_akun='$namaAkunDebit', debet='$debet' WHERE no_jurnal='$noJurnal'";
  $resultDetailJurnalDebit = mysqli_query($conn, $queryDetailJurnalDebit);

  if (!$resultDetailJurnalDebit) {
      echo "Error: " . $queryDetailJurnalDebit . "<br>" . mysqli_error($conn);
      exit();
  }

  // Update keu_detail_jurnal (baris kedua)
  $queryDetailJurnalKredit = "UPDATE keu_detail_jurnal SET kode_akun='$kodeAkunKredit', nama_akun='$namaAkunKredit', kredit='$kredit' WHERE no_jurnal='$noJurnal'";
  $resultDetailJurnalKredit = mysqli_query($conn, $queryDetailJurnalKredit);

  if (!$resultDetailJurnalKredit) {
      echo "Error: " . $queryDetailJurnalKredit . "<br>" . mysqli_error($conn);
      exit();
  }
}

// Menangani penghapusan data
if (isset($_GET['no_jurnal'])) {
  $noJurnal = $_GET['no_jurnal'];

  // Delete from keu_detail_jurnal
  $queryDetailJurnal = "DELETE FROM keu_detail_jurnal WHERE no_jurnal='$noJurnal'";
  $resultDetailJurnal = mysqli_query($conn, $queryDetailJurnal);

  if (!$resultDetailJurnal) {
      echo "Error: " . $queryDetailJurnal . "<br>" . mysqli_error($conn);
      exit();
  }

  // Delete from keu_jurnal
  $queryJurnal = "DELETE FROM keu_jurnal WHERE no_jurnal='$noJurnal'";
  $resultJurnal = mysqli_query($conn, $queryJurnal);

  if (!$resultJurnal) {
      echo "Error: " . $queryJurnal . "<br>" . mysqli_error($conn);
      exit();
  }
}

// Mengambil data dari tabel keu_jurnal
$query_select_jurnal = "SELECT * FROM keu_jurnal";
$result_select_jurnal = mysqli_query($conn, $query_select_jurnal);

// Memeriksa apakah query berhasil dieksekusi
if (!$result_select_jurnal) {
    echo "Error: " . $query_select_jurnal . "<br>" . mysqli_error($conn);
    exit();
}

// Mengambil data dari tabel keu_detail_jurnal
$query_select_detail_jurnal = "SELECT * FROM keu_detail_jurnal";
$result_select_detail_jurnal = mysqli_query($conn, $query_select_detail_jurnal);

// Memeriksa apakah query berhasil dieksekusi
if (!$result_select_detail_jurnal) {
    echo "Error: " . $query_select_detail_jurnal . "<br>" . mysqli_error($conn);
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
  <title>SIMITRA - Neraca Saldo</title> <!-- EDIT NAMA -->
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
            <h1 class="h3 mb-0 text-gray-800">Neraca Saldo</h1> <!-- EDIT NAMA -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Laporan Keuangan</a></li>
              <li class="breadcrumb-item active" aria-current="page">Neraca Saldo</li> <!-- EDIT NAMA -->
            </ol>
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
                <h6 class="m-0 font-weight-bold text-primary">Neraca Saldo</h6>
                <div class="btn-group ml-auto" role="group" aria-label="Basic mixed styles example">
                  <!-- Tombol Filter Pilih BUlan dan Tahun dengan Icon -->
                  <div class="input-group">
                    <label for="bulan" class="mb-0 mr-2">Bulan:</label>
                    <select class="form-control-sm border-1" style="width: 120px; height: 30px;" id="bulan" onchange="filterData()">
                      <option value="">Pilih Bulan</option>
                      <option value="01">Januari</option>
                      <option value="02">Februari</option>
                      <option value="03">Maret</option>
                      <option value="04">April</option>
                      <option value="05">Mei</option>
                      <option value="06">Juni</option>
                      <option value="07">Juli</option>
                      <option value="08">Agustus</option>
                      <option value="09">September</option>
                      <option value="10">Oktober</option>
                      <option value="11">November</option>
                      <option value="12">Desember</option>
                    </select>
                    <label for="tahun" class="mb-0 mr-2 ml-2">Tahun:</label>
                    <select class="form-control-sm border-1" style="width: 120px; height: 30px;" id="tahun" onchange="filterData()">
                      <option value="">Pilih Tahun</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>
                      <option value="2024">2024</option>
                      <option value="2025">2025</option>
                    </select>
                    <button type="button" class="btn btn-secondary btn-sm" style="width: 60px; height: 30px;" onclick="filterData()">
                      Filter
                    </button>
                  </div>
                  <!-- Tombol Cetak Tabel dengan Icon -->
                  <div>
                    <button type="button" class="btn btn-sm btn-warning" style="width: 60px; height: 30px;" onclick="cetakTabel()">
                      Cetak
                    </button>
                  </div>
                </div>

                    <!-- Skrip JavaScript untuk Filter Tanggal dan Cetak Tabel -->
                    <script>
                    function filterData() {
                      var namaAkun = document.getElementById('namaAkun').value;
                      var tanggalMulai = document.getElementById('tanggalMulai').value;
                      var tanggalAkhir = document.getElementById('tanggalAkhir').value;

                      // Ambil semua baris data yang ada dalam tabel
                      var rows = document.querySelectorAll('#tabelData tr');

                      // Loop melalui setiap baris data
                      rows.forEach(function(row) {
                        var namaAkunCell = row.cells[0].innerText; // Ambil data nama akun dari sel pertama
                        var tanggalJurnalCell = row.cells[1].innerText; // Ambil data tanggal jurnal dari sel kedua

                        // Periksa apakah baris data harus ditampilkan atau disembunyikan berdasarkan filter
                        if ((namaAkun === '' || namaAkun === namaAkunCell) &&
                            (tanggalMulai === '' || tanggalJurnalCell >= tanggalMulai) &&
                            (tanggalAkhir === '' || tanggalJurnalCell <= tanggalAkhir)) {
                          row.style.display = ''; // Tampilkan baris data
                        } else {
                          row.style.display = 'none'; // Sembunyikan baris data
                        }
                      });
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
                          <th>Kode Akun</th>
                          <th>Nama Akun</th>
                          <th>Debet</th>
                          <th>Kredit</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                          $query = "SELECT keu_detail_jurnal.kode_akun, keu_detail_jurnal.nama_akun, keu_detail_jurnal.debet, keu_detail_jurnal.kredit FROM keu_jurnal INNER JOIN keu_detail_jurnal ON keu_jurnal.no_jurnal = keu_detail_jurnal.no_jurnal";
                          $result = mysqli_query($conn, $query);
                          while ($data = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>1110</span></td>"; 
                            echo "<td>Kas</span></td>"; 
                            echo "<td>20.000.000,00</span></td>"; 
                            echo "<td>20.000.000,00</span></td>"; 
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