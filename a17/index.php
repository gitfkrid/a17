<html>
<head>
<title>www.jti.com - Upload multi file menggunakan php mysqli</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"
></script>
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2 style="text-align: center;">UPLOAD MULTI FILE PHP</h2>
<form action="proses_act.php" method="post" enctype="multipart/form-data">
<div class="form-group">
<label>Foto :</label>
<input type="file" name="foto[]" required="required" multiple />
<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
</div>
<input type="submit" name="" value="Simpan" class="btn btn-primary">
</form>
</div>
</body>
</html>