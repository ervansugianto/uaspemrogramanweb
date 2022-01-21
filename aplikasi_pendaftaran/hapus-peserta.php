<?php 
    include 'koneksi.php';

    if(isset($_GET['id'])){
        $delete = mysqli_query($conn, "DELETE FROM tb_pendaftaran WHERE id_pendaftran = '".$_GET['id']."' ");
        echo '<script>window.location="data-peserta.php"</script>';
    }
