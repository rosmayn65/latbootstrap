<?php
session_start();
if (isset($_POST['Login'])) {
    $a = $_POST['user'];
    $b = $_POST['pass'];
    //periksa login
    if ($a == "Rosmayani" && $b == "1234") {
        //menciptakan session
        $_SESSION['log'] = $a;
        //menuju ke halaman pemeriksaan session
        header('location:index.php');
    } else {
        die("username atau password anda salah 
        silahkan kembali login <a href=login.php> Login </a>");
    }
} else {
    ?>

    <html>

    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Pembelian Barang</title>
    <link rel="stylesheet" type="text/css" media="screen" href="/assets/css/bootstrap.min.css">
        <title>Login here...</title>
    </head>

    <body>
        <form action="" method="post">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-15">
                <div class="card border-primary">
                    <div class="card-header"><h2>Login here ...</h2></div>
                    <div class="card-body">
            Username : <input type="text" name="user"><br>
            Password : <input type="password" name="pass"><br>
            <input type="submit" name="Login" value="Log In">
        </form>
    </body>

    </html>
<?php
}
?>