<!doctype html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrinkto-fit=no">
 <link rel="stylesheet" href="assets/css/bootstrap.css">
 <!-- <script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"
></script>
 <script
src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></s
cript> -->
<title>DTS-VSGA 2021 (JWD)</title>
</head>
<body>

<?php include 'header.php'; ?>
</br></br>
<div class="col-lg-8">
 <h2><b>Tabel DTS VSGA 2021</b></h2>
 <p>Tampil Data dari Data Base</p>
 <table class="table">
 <thead class="thead-dark">
 <tr>
 <th>Nomor</th>
 <th>Nama</th>
 <th>Tanggal Lahir</th>
 <th>Email</th>
 <th>Nomer Telpon</th>
 <th>Alamat</th>
 <th>Jenis Kelamin</th>
 <th>Aksi</th>
 </tr>
 </thead>
 <tbody>
 <?php
 include 'koneksi.php';
 $sql = "SELECT * FROM diri";
 $hasil = mysqli_query($conn,$sql);
 $nomer = 1;
 while($data = mysqli_fetch_array($hasil,MYSQLI_ASSOC)){
 ?>
 <tr>
 <td><?php echo $nomer++; ?></td>
 <td><?php echo $data['nama']; ?></td>
 <td><?php echo $data['lahir']; ?></td>
 <td><?php echo $data['email']; ?></td>
 <td><?php echo $data['telpon']; ?></td>
 <td><?php echo $data['alamat']; ?></td>
 <td><?php echo $data['kelamin']; ?></td>
 <td>
 <a class="btn btn-warning" href="edit.php?id=<?php echo $data['id'];
?>">Edit</a>
 <a class="btn btn-danger" href="hapus.php?id=<?php echo $data['id'];
?>">Hapus</a>
 </td>
 </tr>

 <?php
 }
 ?>
 </tbody>
 </table>

</div>
</br></br>
</body>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>