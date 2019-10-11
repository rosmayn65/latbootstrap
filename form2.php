<?php

session_start();
    if (isset($_SESSION['log'])) {
        # code...

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Pembelian</title>
    <link rel="stylesheet" type="text/css" media="screen" href="/assets/css/bootstrap.min.css">
</head>

<body>  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Rosmayani</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
        <a class="nav-item">
        <a class="nav-link" href="/">About</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <form class="form-inline my-2 my-lg-0" action="logout.php" method="POST">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
            </form>
        </div>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-primary">
                    <div class="card-header">Data Pembelian Barang</div>
                    <div class="card-body">
                        <form action="form3.php" method="post">
                            <?php
                            if (isset($_POST['simpan'])) {
                                $jml = $_POST['jumlah'];
                                $nama = $_POST['nama'];
                                $alamat = $_POST['alamat'];
                                $jk = $_POST['jk'];
                                $jmlh_brg = $_POST['jmlbrg'];
                                $tanggal_beli = $_POST['tanggal_beli'];
                                for ($a = 0; $a < $jml; $a++) { ?>
                                    <div class="form-group">
                                        <label for="">Nama Barang</label>
                                        <input type="text" class="form-control" name="namab[]" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kode Barang</label>
                                        <input type="text" class="form-control" name="kode[]" required></i>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jenis Barang</label>
                                        <select name="jenis_barang[]" id="" class="form-control" required>
                                            <option value="Makanan">Makanan</option>
                                            <option value="Minuman">Minuman</option>
                                            <option value="Sepatu">Sepatu</option>
                                            <option value="Aksesoris">Aksesoris</option>
                                            <option value="Elektronik">Elektronik</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Harga Satuan</label>
                                        <input type="number" class="form-control" name="harga_satuan[]" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jumlah Barang</label>
                                        <input type="text" class="form-control" name="jmlbrg[]" required>
                                    </div>
                                <?php } ?>
                                <input type="hidden" name="nama" value="<?php echo $nama; ?>">
                                <input type="hidden" name="alamat" value="<?php echo $alamat; ?>">
                                <input type="hidden" name="jk" value="<?php echo $jk; ?>">
                                <input type="hidden" name="tanggal_beli" value="<?php echo $tanggal_beli; ?>">
                                <input type="hidden" name="jumlah_barang" value="<?php echo $jml; ?>">
                                <div class="form-group">
                                    <button type="submit" name="simpan" class="btn btn-outline-primary">Proses</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                </div>
                        </form>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php } else {
        header("location:login.php");
    }
    
    ?>