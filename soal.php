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
    
    <!--end header-->

    <!--content-->
    <div class="container">
           <div class="row" style="padding:20px">
                <div class="col-md-12">
                <center>
                <h2>Assalaam Book Store</h2>
                </center>
                    <div class="card">
                        <div class="card-header">Pembelian Buku</div>
                        <div class="card-body">
                        <!--isi disini-->
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="nama" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input type="radio" name="jk" value="lakilaki" checked>Laki-Laki</label>
                                <input type="radio" name="jk" value="perempuan">Perempuan</label>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Pembelian</label>
                                <input type="date" name="tp" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Buku</label>
                                <input type="number" name="jb" class="form-control">
                            </div>
                            <div class="form group">
                            <button type="hidden" name="proses" class="btn btn-outline-primary">Proses</button>
                            <button type="reset" name="reset" class="btn btn-outline-warning">Reset</button>
                            </div>
                        </form>
                        <?php
                            if (isset($_POST['proses'])) {
                                $a = $_POST['nama'];
                                $b = $_POST['alamat'];
                                $c = $_POST['jk'];
                                $d = $_POST['tp'];
                                $e = $_POST['jb'];
                            }
                        ?>
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