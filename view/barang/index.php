<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/dbinventory_refa/view/barang/">barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/dbinventory_refa/view/jenis/">jenis</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    
    <div class="container">
    <h1>Data barang</h1>
    <a href="tambah.php" class="btn btn-primary" width="20px">Tambah barang</a>
    <table border="1" class="table table-dark table-hover">
        <tr>
            <th>id barang </th>
            <th>nama barang</th>
            <th>id jenis</th>
            <th>harga</th>
            <th>stok</th>
            <th>aksi</th>
        </tr>
        <?php
            include '../../config/koneksi.php';
            $query = mysqli_query($conn,"SELECT * FROM barang");
            $no=1;
            if(mysqli_num_rows($query)){
                while($result=mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <td><?php echo $result['id_barang']?></td>
                        <td><?php echo $result['nama_barang']?></td>
                        <td><?php echo $result['id_jenis']?></td>
                        <td><?php echo $result['harga']?></td>
                        <td><?php echo $result['stok']?></td>
                        <td>
                            <a href="" class="btn btn-warning">Edit |</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php
                $no++;
                }
            } else{
                echo "Data kosong";
            }
            ?>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>
    
</body>
</html>