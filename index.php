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
    <title>Index</title>
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
        <a class="nav-link" href="data_diri.php">Produk</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <form class="form-inline my-2 my-lg-0" action="logout.php" method="POST">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
            </form>
            </form>
        </div>
    </nav>
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding:25px; margin:25px">
                <div class="card">
                <div class="card-header"><br><br><br>
                <h1><center>Selamat Datang Di Aprils.tore</center></h1><br><br><br>
            </div>
            </div>
        </div>
    </div>

    <form action="hasil.php" method="post">

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