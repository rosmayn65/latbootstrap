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
        <a class="nav-link" href="form1.php">Services</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
        <a class="nav-item">
        <a class="nav-link" href="form3.php">Data Barang Yang Dibeli</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <a class="nav-link" href="login.php">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
            </form>
            <form class="form-inline my-2 my-lg-0">
            <a class="nav-link" href="logout.php">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
            </form>
            </form>
        </div>
    </nav>
    <form action="hasil.php" method="post">

    </div>

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

    <?php } else {
        header("location:logout.php");
    }
    
    ?>