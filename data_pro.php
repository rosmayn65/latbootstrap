<?php

session_start();
    if (isset($_SESSION['log'])) {
        # code...

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Diri</title>

    <link rel="stylesheet" type="text/css" media="screen" href="/assets/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">Rosmayani</span>
        <form class="form-inline my-2 my-lg-0" action="logout.php" method="POST">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
            </form>
    </nav>
    <div class="container">
       <div class="row justify-content-center">
            <div class="col-md-15">
                <div class="card border-primary">
                    <div class="card-header">Invoice Pembayaran</div>
                    <div class="card-body">
                    <form action="proses.php" method="post">
                    <?php
                        if (isset($_POST['simpan'])) {
                            /* Data 1 */
                            $jml = $_POST['jumlah_barang'];
                            $nama = $_POST['nama'];
                            $alamat = $_POST['alamat'];
                            $jk = $_POST['jk'];
                            $tanggal_beli = $_POST['tanggal_beli'];
                            /* Data 2 */
                            $nama_brg = $_POST['namab'];
                            $kode_brg = $_POST['kode'];
                            $jenis = $_POST['jenis_barang'];
                            $harga_satuan = $_POST['harga_satuan'];
                            $jmlh_brg = $_POST['jmlbrg'];
                            $total_hrg = [];
                            
                        } ?>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jumlah</th>
                                    <th>Tanggal Pembelian</th>
                                </tr>
                                <tr>
                                    <td><?php echo $nama; ?></td>
                                    <td><?php echo $alamat; ?></td>
                                    <td><?php echo $jk; ?></td>
                                    <td><?php echo $jml; ?></td>
                                    <td colspan="10"><?php $originalDate = $tanggal_beli;
                                                    echo $newDate = date("d M Y", strtotime($originalDate)); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="7" align="center"><b>Data Barang Yang Dibeli</b></td>
                                </tr>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Barang</th>
                                    <th>Kode Barang</th>
                                    <th>Jenis Barang</th>
                                    <th>Harga Satuan (Rp)</th>
                                    <th>Jumlah Barang</th>
                                    <th>Total Harga (Rp)</th>
                                </tr>
                                <?php
                                
                                for ($i=0; $i < $jml; $i++) { 
                                    $total_hrg[$i] = $jmlh_brg[$i]*$harga_satuan[$i];
                                ?>
                                    <tr>
                                        <td><?php echo $i+1; ?></td>
                                        <td><?php echo $nama_brg[$i]; ?></td>
                                        <td><?php echo $kode_brg[$i]; ?></td>
                                        <td><?php echo $jenis[$i]; ?></td>
                                        <td><?php echo $harga_satuan[$i]; ?></td>
                                        <td><?php echo $jmlh_brg[$i]; ?></td>
                                        <td><?php echo number_format($total_hrg[$i], 2, ',', '.'); ?></td>
                                        
                                    </tr>
                                
                                <?php
                                }
                                if (array_sum($total_hrg) > 500000) {
                                    $disk = "(20%)";
                                    $disc = 0.2;
                                } elseif (array_sum($total_hrg) > 250000) {
                                    $disk = "(10%)";
                                    $disc = 0.1;
                                }elseif (array_sum($total_hrg) > 150000) {
                                    $disk = "(5%)";
                                    $disc = 0.05;
                                }
                                $h_disc = array_sum($total_hrg)-(array_sum($total_hrg)*$disc);
                                ?>
                                <tr>
                                    <td colspan="7" align="center"><b>Total Pembayaran</b></td>
                                </tr>
                                <tr>
                                    <th>Sub Total</th>
                                    <td colspan="7" align="right">Rp. <?php echo number_format(array_sum($total_hrg), 0, ',', '.' ); ?></td>
                                </tr>
                                <tr>
                                    <th>Diskon</th>
                                    <td><?php echo $disk; ?></td>
                                    <td class="text-md-right" colspan="7">Rp. <?php echo number_format(array_sum($total_hrg)*$disc); ?></td>
                                </tr>
                                <tr>
                                    <th>Total Pembayaran</th>
                                    <td class="text-md-right" colspan="7">Rp. <?php echo array_sum($total_hrg)-(array_sum($total_hrg)*$disc); ?></td>
                                </tr><?php $h_bersih = array_sum($total_hrg)-(array_sum($total_hrg)*$disc); ?>
                                <tr>
                                    <td colspan="7" align="center"><b>Pembayaran</b></td>
                                </tr>
                            </table>
                            <form action="proses.php" method="POST">
                        <div class="form-group">
                        <label for="">Masukkan Jumlah Uang</label>
                        <input type="number" class="form-control" name="jml_uang" required>
                        </div>
                        <input type="hidden" name="jml" value="<?php echo $jmlh; ?>">
                        <input type="hidden" name="hargabersih" value="<?php echo $h_bersih; ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="simpan" class="btn btn-outline-primary">Bayar</button>
                    </div>
                    </form>
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