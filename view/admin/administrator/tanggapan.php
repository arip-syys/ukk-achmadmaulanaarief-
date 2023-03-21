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


<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "") {
    header("location:../index.php");
}

?>


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
            <span class="d-none d-md-block dropdown-toggle ps-2">user</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>user</h6>
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
        <a class="nav-link collapsed" href="registrasi.php">
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
        <a class="nav-link " href="tanggapan.php">
          <i class="bi bi-envelope"></i>
          <span>Tanggapan</span>
        </a>
      </li>
      <!-- End registrasi -->



    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tanggapan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Halaman</li>
          <li class="breadcrumb-item active">Tanggapan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

      <div class="col-lg-12">

      <div class="card">
            <div class="card-body">
              <h5 class="text-center card-title">Riwayat Laporan</h5>
              
              <!-- Bordered Tabs Justified -->
              <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-home" type="button" role="tab" aria-controls="home" aria-selected="true">Proses</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Tervalidasi</button>
                </li>

              </ul>
              <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                <div class="tab-pane fade show active" id="bordered-justified-home" role="tabpanel" aria-labelledby="home-tab">
                
              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Tanggal Aduan</th>
                    <th scope="col">Judul Laporan</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                <?php $nomor = 1;
                $ambil = $koneksi->query("SELECT *FROM pengaduan WHERE status='validasi'");
                while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo date("d F Y", strtotime($pecah['tgl_pengaduan'])) ?></td>
                <td><?php echo $pecah["judul_laporan"] ?></td>
                <td><img src="../../masyarakat/0-<?php echo $pecah["foto"] ?>" width="100"></td>
                <td>
                    <a href="tanggapan-beri.php?id_pengaduan=<?=$pecah['id_pengaduan']?>" class="btn btn-primary">Beri Tanggapan</a>
                </td>
                </tr>
                <?php $nomor++; ?>
                <?php } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

                </div>
                <div class="tab-pane fade" id="bordered-justified-profile" role="tabpanel" aria-labelledby="profile-tab">

              <!-- Table with stripped rows -->
              <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Generate Laporan to PDF</label>
                  <div class="col-sm-10">
                  <a href="print.php?id_tanggapan=<?=$pecah['id_tanggapan']?>" target="_blank" class="btn btn-primary">Print</a>
                  </div>
              </div>

              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Tanggal Aduan</th>
                    <th scope="col">Tanggal Tanggapan</th>
                    <th scope="col">Judul Laporan</th>
                    <th scope="col">Tanggapan</th>
                    

                  </tr>
                </thead>
                <tbody>
                <?php $nomor = 1;
                $ambil = $koneksi->query("SELECT *FROM tanggapan");
                while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo date("d F Y", strtotime($pecah['tgl_pengaduan'])) ?></td>
                <td><?php echo date("d F Y", strtotime($pecah['tgl_tanggapan'])) ?></td>
                <td><?php echo $pecah["judul_laporan"] ?></td>
                <td><?php echo $pecah["tanggapan"] ?></td>

                </tr>
                <?php $nomor++; ?>
                <?php } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

                </div>

              </div><!-- End Bordered Tabs Justified -->

            </div>
          </div>

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