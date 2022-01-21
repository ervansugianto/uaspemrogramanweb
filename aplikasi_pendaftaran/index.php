<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    // ambil 1 id terbesar dikolom id pendaftaran,lalu ambil 5 karakter saja di sebelah kanan
    $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftran, 5)) AS id FROM tb_pendaftaran");
    $d = mysqli_fetch_object($getMaxId);
    $generedId = 'p' . date('Y') . sprintf("%05s", $d->id + 1);
    echo $generedId;

    // proses insert
    $insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES(
        '" . $generedId . "',
        '" . date('Y,-m-d') . "',
        '" . $_POST['th_ajaran'] . "',
        '" . $_POST['jurusan'] . "',
        '" . $_POST['nm'] . "',
        '" . $_POST['tmp_lahir'] . "',
        '" . $_POST['tgl_lahir'] . "',
        '" . $_POST['jk'] . "',
        '" . $_POST['agama'] . "',
        '" . $_POST['alamat'] . "'
    )");

    if ($insert) {
        echo '<script>window.location="berhasil.php?id=' . $generedId . '"</script>';
    } else {
        echo 'huft' . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Peserta Olahraga</title>

    <!-- Link css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- bagian box formulir -->
    <section class="box-formulir">

        <h2>Formulir Pendaftaran Peserta Olahraga</h2>

        <!-- bagian form -->
        <form action="" method="POST">
            <div class="box">
                <table border="0" class="tabel-form">
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="th_ajaran" class="input-control" value="2022/2023" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>jurusan</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="jurusan">
                                <option value="">--Pilih--</option>
                                <option value="futsal">Futsal</option>
                                <option value="bola">Bola</option>
                                <option value="badminton">Badminton</option>
                                <option value="renang">Renang</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>

            <h3>Data Diri Calon Peserta Olahraga</h3>
            <div class="box">
                <table border="0" class="tabel-form">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nm" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tmp_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tgl_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jk" class="input-control" value="laki-laki"> laki-laki &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="jk" class="input-control" value="perempuan"> perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="agama">
                                <option value="">--Pilih--</option>
                                <option value="islam">Islam</option>
                                <option value="kristan">Kristan</option>
                                <option value="hindu">Hindu</option>
                                <option value="budha">Budha</option>
                                <option value="katolik">Katolik</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>
                            <textarea name="alamat" class="input-control" id="" cols="10" rows="2"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="daftar sekarang" class="btn-daftar">
                        </td>
                    </tr>
                </table>
            </div>
        </form>

    </section>
</body>

</html>