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
    <h1>edit jenis</h1>
    <?php 
    $id_jenis=$_GET['id_jenis'];
    include '../../config/koneksi.php';
    $query=mysqli_query($conn, "SELECT * FROM jenis WHERE id_jenis='$id_jenis'");
    $result=mysqli_fetch_array($query);
    ?>
    <form action="proses edit.php?id_jenis=<?php echo $result['id_jenis']?>" method="POST">
<br>
    <label for="exampleInputEmail1" class="form-label">id jenis</label>
    <input type="text" value="<?php echo $result['id_jenis']?>" name="id_jenis" class="form-control" class="form-text"id="exampleInputEmail1" aria-describedby="emailHelp">
<br>

    <label for="exampleInputPassword1" class="form-label">nama jenis</label>
    <input type="text" value="<?php echo $result['nama_jenis']?>" name="nama_jenis" class="form-control" class="form-text"id="exampleInputPassword1">
<br>
<button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>
