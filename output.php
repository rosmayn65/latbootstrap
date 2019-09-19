<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Detail Pembelian Buku</title>

    <link rel="stylesheet" type="text/css" media="screen" href="/assets/css/bootstrap.min.css">

</head>

<body>
    <!--header-->
    <nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Rosmayani</span>
    </nav>
    <!--end header-->

    <!--content-->
    <center>
    <h2>Assalaam Book Store</h2>
    </center>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-primary">
                    <div class="card-header">Invoice Pembayaran</div>

                    <div class="card-body">
                        <?php
                            if (isset($_POST['simpan'])) {
                                $jml = $_POST['jb'];
                                $nama = $_POST['nama'];
                                $alamat = $_POST['alamat'];
                                $jk = $_POST['jk'];
                                $tgl_beli = $_POST['tp'];

                                $judul = $_POST['judulbuku'];
                                $kode = $_POST['kode'];
                                $peng = $_POST['pengarang'];
                                $jenis_buku = $_POST['jenisbuku'];
                                $harga = $_POST['hb'];
                            } ?>
                            <div class="table-responsive-xl">
                            <table class="table">
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Jumlah</th>
                                <th colspan="2">Tanggal Pembelian</th>
                            </tr>
                            <tr>
                                <td><?php echo $nama?></td>
                                <td><?php echo $alamat?></td>
                                <td><?php echo $jk?></td>
                                <td><?php echo $jml?></td>
                                <td colspan="3"><?php $originalDate = $tanggal_beli;
                                    echo $newDate = date ("d M Y",strtotime($originalDate));?></td>
                            </tr>
                            <tr>
                                <td colspan="6" align="center" ><b>Total Pembayaran</b></td>
                            </tr>
                            <tr>
                                <th>Sub Total</th>
                                <td colspan="5" align="right">Rp. <?php echo number_format($sub_total, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <th>Diskon(<?php echo "$desc%"; ?>)</th>
                                <td colspan="5" align="right">Rp. <?php echo number_format($diskon, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <th>Total Pembayaran</th>
                                <td colspan="5" align="right">Rp. <?php echo number_format($total_pembayaran, 0, ',', '.') ?></td>
                            </tr>
                            </table>
                            </div>
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