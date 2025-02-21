<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>tambah jenis</title>
</head>
<body>
    <div class="container">
    <h1>edit barang</h1>
    <?php 
    $id_barang=$_GET['id_barang'];
    include '../../config/koneksi.php';
    $query=mysqli_query($conn, "SELECT * FROM barang WHERE id_barang='$id_barang'");
    $result=mysqli_fetch_array($query);
    ?>
    <form action="proses_barang.php?id_barang=<?php echo $result['id_barang']?>" method="POST">
    <label for="exampleInputPassword1" class="form-label">id barang</label>
    <input type="number" value="<?php echo $result['id_barang']?>" name="id_barang" class="form-control" class="form-number" id="exampleInputPassword1">
<br>
<br>
    <label for="exampleInputPassword1" class="form-label">nama barang</label>
    <input type="text" value="<?php echo $result['nama_barang']?>" name="nama_barang" class="form-control" class="form-text" id="exampleInputPassword1">
<br>
<label for="exampleInputPassword1" class="form-label">id jenis</label>
    <input type="text" value="<?php echo $result['id_jenis']?>" name="id_jenis" class="form-control" class="form-text" id="exampleInputPassword1">
<br>

<label for="exampleInputPassword1" class="form-label">harga</label>
    <input type="number" value="<?php echo $result['harga']?>" name="harga" class="form-control" class="form-number" id="exampleInputPassword1">
<br>

<label for="exampleInputPassword1" class="form-label">stok</label>
    <input type="number" value="<?php echo $result['stok']?>" name="stok" class="form-control" class="form-number" id="exampleInputPassword1">
<br>
<button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>
