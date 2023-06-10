<?php
session_start();
if (isset($_SESSION['user']) && isset($_SESSION['level'])) {
    header('Location:dashboard.php');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>

  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Web Pembayaran SPP</title>

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
              <div class="card-header"><h4>Silahkan Masuk</h4></div>

              <div class="card-body">
               <form action="" method="post">
      		 			<div class="form-group">
      		 				<label>Username</label>
      		 				<div class="input-group">
      		 					<div class="input-group-prepend">
      		 						<div class="input-group-text"><i class="fas fa-user"></i></div>
      		 					</div>
      		 				<input type="text" name="username" class="form-control" placeholder="Username" required="required">
      		 				</div>
      		 			</div>

               <div class="form-group">
         				<label>Password</label>
         				<div class="input-group">
         					<div class="input-group-prepend">
         						<div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
        		 					</div>
        		 				<input type="password" name="password" class="form-control" placeholder="Password" required="required">
        		 			</div>
        		 		</div>

                  <div class="form-group">
                    <button type="submit" name="login" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>

                <div>
                <p>Belum mempunyai akun? <a href="register.php">Register</a></p>
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

if(isset($_POST['login'])){
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $konek = mysqli_connect("localhost", "root", "", "spp_iidzikhri");
  $q = mysqli_query($konek,"SELECT * FROM tbl_petugas WHERE username='$user' AND password='$pass'");
  $quser = mysqli_fetch_array($q);
  if ($quser) {
    $_SESSION['user'] = $quser['username'];
    $_SESSION['level'] = $quser['level'];
    header('Location:dashboard.php');
  } else {
    echo "<script>
    swal.fire({
      title: 'Gagal Untuk Login',
      icon: 'error',
      showConfirmButton: true,
    }).then((result)=>{
      window.location.href='index.php'
    })</script>";
  }
}

?>
