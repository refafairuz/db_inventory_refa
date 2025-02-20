<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>tambah barang</title>
</head>
<body>
    <div>
    <h1>tambah barang</h1>
    <form action="simpan.php" method="post">
<br>
    <label for="exampleInputEmail1" class="form-label">id barang</label>
    <input type="input" name="id_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
<br>

    <label for="exampleInputPassword1" class="form-label">nama barang</label>
    <input type="input" name="nama_barang" class="form-control" id="exampleInputPassword1">
<br>
    <label for="exampleInputPassword1" class="form-label">id jenis</label>
    <input type="input" name="id_jenis" class="form-control" id="exampleInputPassword1">
<br>
    <label for="exampleInputPassword1" class="form-label">harga</label>
    <input type="input" name="harga" class="form-control" id="exampleInputPassword1">
<br>
    <label for="exampleInputPassword1" class="form-label">stok</label>
    <input type="input" name="stok" class="form-control" id="exampleInputPassword1">
<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</body>
</html>
