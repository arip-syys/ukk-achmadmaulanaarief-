<?php
session_start();
include 'koneksi.php';
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
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">

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
include 'koneksi.php';
if (isset($_SESSION["masyarakat"])) : ?><?php
$id_masyarakat = $_SESSION["masyarakat"]['id_masyarakat'];
$ambil = $koneksi->query("SELECT *FROM masyarakat WHERE id_masyarakat='$id_masyarakat'");
$pecah = $ambil->fetch_assoc(); ?>
<?php else : ?>
<?php endif ?>

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
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION["masyarakat"]["nama"] ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION["masyarakat"]["nama"] ?></h6>
              <span>Masyarakat</span>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
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

      <!-- Starts laporan pengaduan -->
      <li class="nav-item">
        <a class="nav-link " data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Laporan Pengaduan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="buat-laporan.php" class="active">
              <i class="bi bi-circle"></i><span>Buat Laporan</span>
            </a>
          </li>
          <li>
            <a href="riwayat-laporan.php">
              <i class="bi bi-circle"></i><span>Riwayat Laporan</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End laporan pengaduan -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Laporan Pengaduan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Halaman</li>
          <li class="breadcrumb-item active">Buat Laporan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

      <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="text-center card-title">Buat Laporan</h5>

            <form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>
              <div>
                <input type="hidden" name="id_masyarakat" readonly value="<?php echo $_SESSION["masyarakat"]['id_masyarakat'] ?>">
              </div>
              <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">NIK</label>
                  <div class="col-sm-10">
                    <input type="number" name="nik" class="form-control" readonly value="<?php echo $_SESSION["masyarakat"]['nik'] ?>">
                  </div>
              </div>

              <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Judul Laporan</label>
                  <div class="col-sm-10">
                    <input type="text" name="judul_laporan" class="form-control">
                  </div>
              </div>

              <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Isi Laporan</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="isi_laporan" style="height: 100px"></textarea>
                  </div>
              </div>

              <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Foto</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="foto" type="file" id="formFile">
                  </div>
              </div>

              <div>
                <input type="hidden" name="status" readonly value="proses">
              </div>

              <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                  </div>
              </div>
            </form>

<?php
if (isset($_POST["tambah"])) {
$id_masyarakat = $_POST['id_masyarakat'];
$tgl_pengaduan = date("Y-m-d");
$nik = $_POST['nik'];
$judul_laporan = $_POST['judul_laporan'];
$isi_laporan = $_POST['isi_laporan'];
$status = $_POST['status'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$lokasi = '';
$nama_foto = rand(0,0).'-'.$foto;

move_uploaded_file($tmp, $lokasi.$nama_foto);


$koneksi->query("INSERT INTO pengaduan
    (id_masyarakat, tgl_pengaduan, nik, judul_laporan, isi_laporan, foto, status)
    VALUES ('$id_masyarakat','$tgl_pengaduan','$nik','$judul_laporan','$isi_laporan','$foto','$status')");
echo "<script> alert('Laporan Sudah Bertambah');</script>";
echo "<script>location='riwayat-laporan.php';</script>";
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
<script src="../../assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/vendor/chart.js/chart.umd.js"></script>
<script src="../../assets/vendor/echarts/echarts.min.js"></script>
<script src="../../assets/vendor/quill/quill.min.js"></script>
<script src="../../assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="../../assets/vendor/tinymce/tinymce.min.js"></script>
<script src="../../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../../assets/js/main.js"></script>

</body>

</html>