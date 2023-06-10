<?php
session_start();
if (!isset($_SESSION['user']) && !isset($_SESSION['level'])) {
  header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPP</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.8/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.7.8/dist/sweetalert2.all.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: white;
            font-family: 'Barlow', sans-serif;
        }
    </style>
</head>

<body>

    <?php
    $konek = mysqli_connect("localhost", "root", "", "spp_iidzikhri");

    // include "template/menu.php";
    include "template/loading.php";
    

    $p = (empty($_GET['p'])) ? "" : $_GET['p'];
    if ($p == "") {
        include "pages/home.php";
    } elseif ($p == "home") {
        include "pages/home.php";
    } elseif ($p == "petugas") {
        include "pages/petugas.php";
    } elseif ($p == "kelas") {
        include "pages/kelas.php";
    } elseif ($p == "siswa") {
        include "pages/siswa.php";
    } elseif ($p == "spp") {
        include "pages/spp.php";
    } elseif ($p == "epetugas") {
        include "pages/edit_petugas.php";
    } elseif ($p == "espp") {
        include "pages/edit_spp.php";
    } elseif ($p == "ekelas") {
        include "pages/edit_kelas.php";
    } elseif ($p == "esiswa") {
        include "pages/edit_siswa.php";
    } elseif ($p == "login") {
        include "pages/login.php";
    } elseif ($p == "logout") {
        include "pages/logout.php";
    } elseif ($p == "cek_login") {
        include "pages/cek_login.php";
    } elseif ($p == "register") {
        include "pages/register.php";
    
    
    
    } else {
        echo "<h1 class='text-center mt-5 text-muted'>HALAMAN TIDAK DITEMUKAN</h1>";
    }

    ?>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>