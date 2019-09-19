<?php
if (isset($_POST["proses"])) {
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Assalaam Book Store</title>

    <!--css-->
    <link rel="stylesheet" type="text/css" media="screen" href="/assets/css/bootstrap.min.css">
    <!--end css-->
</head>

<body>
    <!--header-->     
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">Rosmayani</span>
    </nav>
    <!--end header-->

    <!--content-->
    <div class="container">
           <div class="row" style="padding:20px">
                <div class="col-md-12">
                <center>
                <h2>Assalaam Book Store</h2>
                </center>
                    <div class="card">
                        <div class="card-header">Detail Pembelian Buku</div>
                        <div class="card-body">
                        <!--isi disini-->
                        <form action="output.php" method="post">
                            <div class="form-group">
                                <label for="">Judul Buku</label>
                                <input type="text" name="judulbuku" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Kode Buku</label>
                                <input type="text" name="kode" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Pengarang</label>
                                <input type="text" name="pengarang" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Buku</label>
                                <select name="jenisbuku" class="required" title="harus diisi">
                                <option value="novel">Novel</option><br>
                                <option value="fiksi">Fiksi</option><br>
                                <option value="cergam">Cergam</option><br>
                                <option value="horror">Horror</option><br>
                                <option value="komik">Komik</option><br>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Harga Buku</label>
                                <input type="number" name="hb" class="form-control">
                            </div>
                            <div class="form group">
                            <button type="text" name="proses" class="btn btn-outline-primary">Proses</button>
                            <button type="reset" name="reset" class="btn btn-outline-warning">Reset</button>
                            </div>
                        </form>
                        <!--end disini-->
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <!--end content-->

    <!--js-->
    <!--JQuery Pertama, selanjutnya bebas.js-->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>