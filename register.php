<!DOCTYPE html>
<html lang="en">
  <head>

  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register &mdash; Web Pembayaran SPP</title>

  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.8/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.7.8/dist/sweetalert2.all.min.js"></script>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawesome-free/css/all.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/components.css">

</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="img/avatar/avatar-1.png" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-info">
              <div class="card-header"><h4>REGISTER</h4></div>

              <div class="card-body">
               <form action="" method="post">
      		 			<div class="form-group">

                           <div class="form-group">
                           <label for="namapetugas" class="form-label">Nama Petugas</label>
          
      		 				<div class="input-group">
      		 					<div class="input-group-prepend">
      		 					</div>
                                   <input type="text" name="nama_petugas" id="namapetugas" required class="form-control">
      		 				</div>
      		 			</div>

                           <label for="username" class="form-label">Username</label>
          
      		 				<div class="input-group">
      		 					<div class="input-group-prepend">
      		 					</div>
                                   <input type="text" name="username" id="username" required class="form-control">
      		 				</div>
      		 			</div>

               <div class="form-group">
               <label for="password" class="form-label">Password</label>
         				<div class="input-group">
         					<div class="input-group-prepend">
        		 					</div>
                                     <input type="password" name="password" id="password" required class="form-control">
        		 			</div>
        		 		</div>

                           <div class="form-group">
      		 				<label>Level Petugas</label>
      		 				<div class="input-group">
      		 					<div class="input-group-prepend">
      		 					</div>
                            <select name="level" id="level" class="form-control">
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                            </select>
      		 				</div>
      		 			</div>

                  <div class="form-group">
                    <button type="submit" name="register" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Register
                    </button>
                  </div>
                </form>

              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="bootstrap/jquery-3.3.1.min.js"></script>
  <script src="bootstrap/popper.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <script src="bootstrap/jquery.nicescroll.min.js"></script>
  <script src="bootstrap/moment.min.js"></script>
  <script src="bootstrap/stisla.js"></script>

  <!-- Template JS File -->
  <script src="bootstrap/scripts.js"></script>
  <script src="bootstrap/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="bootstrap/page/index.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>


<?php
if (isset($_POST['register'])) {
  $a = $_POST['nama_petugas'];
  $b = $_POST['username'];
  $c = $_POST['password'];
  $d = $_POST['level'];


  $konek = mysqli_connect("localhost", "root", "", "spp_iidzikhri");

  // query menyimpan data ke tabel petugas di database
  $qsimpan = mysqli_query($konek, "INSERT INTO tbl_petugas VALUES('','$b','$c','$a','$d')");

  // cek query apakah sudah berhasil tersimpan
  if ($qsimpan) {
    echo "<script>
    swal.fire({
      title: 'Register Berhasil. Silahkan Login',
      icon: 'success',
      showConfirmButton: true,
    }).then((result)=>{
      window.location.href='index.php'
    })</script>";
  } else {
    echo "<script>
    swal.fire({
      title: 'Registrasi Gagal',
      icon: 'error',
      showConfirmButton: true,
    }).then((result)=>{
      window.location.href='register Gagal'
    })</script>";
  }
}
?>
