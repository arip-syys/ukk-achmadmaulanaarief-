<!DOCTYPE html>
<html>
<head>
 <title>Generate Laporan Pengaduan Masyarakat</title>
</head>
<body>
 <style type="text/css">
 body{
 font-family: sans-serif;
 }
 table{
 margin: 20px auto;
 border-collapse: collapse;
 }
 table th,
 table td{
 border: 1px solid #3c3c3c;
 padding: 3px 8px;

 }
 a{
 background: blue;
 color: #fff;
 padding: 8px 10px;
 text-decoration: none;
 border-radius: 2px;
 }

    .tengah{
        text-align: center;
    }
 </style>
 <table>
 <tr>
 <th scope="col">No.</th>
                    <th scope="col">Tanggal Aduan</th>
                    <th scope="col">Tanggal Tanggapan</th>
                    <th scope="col">Judul Laporan</th>
                    <th scope="col">Tanggapan</th>
 </tr>
 <?php 
  $nomor = 1;
 // koneksi database
 $koneksi = mysqli_connect("localhost","root","","pengaduan_masyarakat");

 // menampilkan data pegawai
 $data = mysqli_query($koneksi,"SELECT *FROM tanggapan");
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
 <td><?php echo $nomor; ?></td>
                <td><?php echo date("d F Y", strtotime($d['tgl_pengaduan'])) ?></td>
                <td><?php echo date("d F Y", strtotime($d['tgl_tanggapan'])) ?></td>
                <td><?php echo $d["judul_laporan"] ?></td>
                <td><?php echo $d["tanggapan"] ?></td>
 </tr>
 <?php $nomor++; ?>
 <?php 
 }
 ?>
    </table>
    <script>
 window.print();
 </script>
</body>
</html>