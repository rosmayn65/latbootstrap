<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Latihan PPDB</title>

    <!--css-->
    <link rel="stylesheet" type="text/css" media="screen" href="/assets/css/bootstrap.min.css">
    <!--end css-->
</head>

<body>
    <!--header-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Rosmayani</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
      <li class="nav-item active">
        <a class="nav-link" href="form_arraypro.php">Latihan 1 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hal1.php">Halaman 1</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <!--end header-->

    <!--content-->
    <div class="container">
           <div class="row" style="padding:20px">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Formulir PPDB SMK ASSALAAM</div>
                        <div class="card-body">
                        <!--isi disini-->
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="nama" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat" class="form-control" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input type="radio" name="jk" value="perempuan" checked>Perempuan</label>
                                <input type="radio" name="jk" value="laki-laki">Laki-Laki</label>
                            </div>
                            <div class="form-group">
                                <label for="">Asal Sekolah</label>
                                <input type="text" name="as" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nilai Bahasa Indonesia</label>
                                <input type="number" name="bin" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nilai Matematika</label>
                                <input type="number" name="mtk" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nilai IPA</label>
                                <input type="number" name="ipa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nilai Bahasa Inggris</label>
                                <input type="number" name="bing" class="form-control">
                            </div>
                            <div class="form group">
                            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                            </div>
                        </form>
                        <?php
                            if (isset($_POST['simpan'])) {
                                $a = $_POST['nama'];
                                $b = $_POST['alamat'];
                                $c = $_POST['jk'];
                                $d = $_POST['as'];
                                $e = $_POST['bin'];
                                $f = $_POST['mtk'];
                                $g = $_POST['ipa'];
                                $h = $_POST['bing'];
                                $hasil=($e+$f+$g+$h)/4;
                            }
                        ?>
                        <!--end disini-->
                    </div>
                </div>
            </div>
                <div class="col-md-12" style="background:pink">
                <center>
                <h2>Hasil Formulir</h2>
                </center>
                <div class="table-responsive">
                   <table class="table">
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Asal Sekolah</th>
                            <th>Nilai Bahasa Indonesia</th>
                            <th>Nilai Matematika</th>
                            <th>Nilai IPA</th>
                            <th>Nilai Bahasa Inggris</th>
                            <th>Rata-Rata</th>
                            <th>Keterangan</th>
                        </tr>
                        <tr>
                            <td><?php echo $a?></td>
                            <td><?php echo $b?></td>
                            <td><?php echo $c?></td>
                            <td><?php echo $d?></td>
                            <td><?php echo $e?></td>
                            <td><?php echo $f?></td>
                            <td><?php echo $g?></td>
                            <td><?php echo $h?></td>
                            <td><?php echo $hasil; ?></td>
                            <td>
                            <?php if ($hasil>65) {
                                echo "Diterima";
                            }else{
                                echo "Tidak diterima";
                            }
                                ?>
                            </td>
                        </tr>
                  </table>
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