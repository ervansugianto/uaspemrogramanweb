<?php
session_start();
include 'koneksi.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beranda admin</title>

    <!-- Link css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- bagian header -->
    <header>
        <h1>Admin</h1>
        <ul>
            <li>
                <a href="beranda.php">Beranda</a>
            </li>
            <li>
                <a href="data-peserta.php">Data Peserta</a>
            </li>
            <li>
                <a href="keluar.php">Keluar</a>
            </li>
        </ul>
    </header>

    <!-- bagian conten -->
    <section class="content">
        <h2>Beranda</h2>
        <div class="box">
            <h3><?php echo $_SESSION['nama'] ?> Selamat Datang</h3>
        </div>
    </section>
</body>

</html>