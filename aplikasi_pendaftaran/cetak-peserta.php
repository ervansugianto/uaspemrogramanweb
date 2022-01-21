<?php
include 'koneksi.php';



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak data peserta</title>

    <!-- Link css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- menambahkan fungsi print dengan js -->
    <script>
        window.print();
    </script>
</head>

<body>

    <h2>Bukti Pendaftaran</h2>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Id Pendaftaran</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $list_peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");
            while ($row = mysqli_fetch_array($list_peserta)) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row['id_pendaftran'] ?></td>
                    <td><?php echo $row['nm_peserta'] ?></td>
                    <td><?php echo $row['jk'] ?></td>
                    <td>
                        <a href="detail-peserta.php?id=<?php echo $row['id_pendaftran'] ?>">Detail</a> ||
                        <a href="hapus-peserta.php?id=<?php echo $row['id_pendaftran'] ?>" onclick="return confirm('Apakah Yakin Ingin Menghapus Data')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>