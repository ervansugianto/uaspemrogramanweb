<?php
include 'koneksi.php';

$peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftran = '" . $_GET['id'] . "' ");
$p = mysqli_fetch_object($peserta);

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

    <!-- menambahkan fungsi print dengan js -->
    <script>
        window.print();
    </script>
</head>

<body>
    <h2>laporan</h2>
    <table border="0" class="tabel-data">
        <tr>
            <td>Kode Pendaftaran</td>
            <td>:</td>
            <td><?php echo $p->id_pendaftran ?></td>
        </tr>
        <tr>
            <td>Tahun Ajaran</td>
            <td>:</td>
            <td><?php echo $p->th_ajaran ?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><?php echo $p->jurusan ?></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><?php echo $p->nm_peserta ?></td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $p->tmp_lahir . ', ' . $p->tgl_lahir ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $p->jk ?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><?php echo $p->agama ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $p->almt_peserta ?></td>
        </tr>
    </table>
</body>

</html>