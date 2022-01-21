<?php
include 'koneksi.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pendaftaran siswa olahraga</title>

    <!-- Link css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- bagian box formulir -->
    <section class="box-formulir">

        <h2>Pendaftaran Berhasil</h2>

        <div class="box">
            <h4>kode pendaftran anda adalah <?php echo $_GET['id'] ?></h4>

            <a href="cetak-bukti.php?id=<?php echo $_GET['id'] ?>" target="_blank" class="btn-cetak">Cetak Bukti Daftar</a>
        </div>

    </section>
</body>

</html>