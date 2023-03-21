<?php
session_start();
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pengaduan Masyarakat</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../../assets/img/favicon.png" rel="icon">
  <link href="../../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="../../assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Pekat</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">Nama</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Nama</h6>
              <span>Administrator</span>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-heading">Halaman</li>

      <!-- Start registrasi -->
      <li class="nav-item">
        <a class="nav-link " href="registrasi.php">
          <i class="bi bi-card-list"></i>
          <span>Registrasi</span>
        </a>
      </li>
      <!-- End registrasi -->

      <!-- Start validasi -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="validasi.php">
          <i class="bi bi-patch-check"></i>
          <span>Validasi Laporan</span>
        </a>
      </li>
      <!-- End validasi -->

      <!-- Start registrasi -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="validasi-laporan.php">
          <i class="bi bi-envelope"></i>
          <span>Tanggapan</span>
        </a>
      </li>
      <!-- End registrasi -->

      <!-- Start generate laporan -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="generate-laporan.php">
          <i class="bi bi-file-text"></i>
          <span>Generate Laporan</span>
        </a>
      </li>
      <!-- End generate laporan -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Registrasi</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Halaman</li>
          <li class="breadcrumb-item active">Registrasi</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

      <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="text-center card-title">Registrasi</h5>

              <form class="row g-3 needs-validation" method="post" novalidate>
              <div class="col-12">
                      <label for="namaPetugas" class="form-label">Nama Petugas</label>
                      <input type="text" name="nama_petugas" class="form-control" id="namaPetugas" required placeholder="...">
                      <div class="invalid-feedback">Masukan Nama Petugas.</div>
                    </div>

                    <div class="col-12">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" name="username" class="form-control" id="username" required placeholder="...">
                      <div class="invalid-feedback">Masukan Username.</div>
                    </div>
                    
                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="text" name="password" class="form-control" id="password" required placeholder="...">
                      <div class="invalid-feedback">Masukan Password.</div>
                    </div>

                    <div class="col-12">
                      <label for="telp" class="form-label">No. Telp</label>
                      <input type="number" name="telp" class="form-control" id="telp" required placeholder="...">
                      <div class="invalid-feedback">Masukan No. telepon.</div>
                    </div>

                    <div class="col-12">
                      <label for="level" class="form-label">Level</label>
                        <select class="form-select" name="level" aria-label="Default select example">
                            <option selected>...</option>
                            <option value="administrator">Adminisatrator</option>
                            <option value="petugas">Petugas</option>
                        </select>
                    </div>

                    <div class="col-12 text-center">
                        <button type="submit" name="register" class="btn btn-primary">Registrasi</button>
                    </div>
                  </form>

<?php
if (isset($_POST["register"])) {
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];

$koneksi->query("INSERT INTO petugas
    (nama_petugas, username, password, telp, level)
    VALUES ('$nama_petugas','$username','$password','telp','$level')");
echo "<script> alert('Berhasil Registrasi');</script>";
echo "<script>location='registrasi.php';</script>";
}
?>
              
            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      UKK-AchmadMaulanaArief-A
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="../../../assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="../../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../../assets/vendor/chart.js/chart.umd.js"></script>
<script src="../../../assets/vendor/echarts/echarts.min.js"></script>
<script src="../../../assets/vendor/quill/quill.min.js"></script>
<script src="../../../assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="../../../assets/vendor/tinymce/tinymce.min.js"></script>
<script src="../../../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../../../assets/js/main.js"></script>

</body>

</html>