<?php 
require 'function.php';
$host = "localhost";
$user = "root";
$pass = "";
$db   = "registrasi";

//koneksi kedatabase
$koneksi = mysqli_connect($host, $user, $pass, $db);

if(isset($_POST['register'])){
    if(daftar($_POST) > 0 ){
        echo "<script>
         alert('User Baru ditambahkan');
          </script>";
    }else{
        echo mysqli_error($koneksi);
    }

}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi</title>
    <link rel="shortcut icon" href="logo/cx.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <!--FROM-->
    <section class="vh-100" style="background-color: #ffffff;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="img/Wavy_Gen-01_Single-07.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="" method="post">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <span class="h1 fw-bold mb-0">REGISTRASI</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="text" name="username" class="form-control form-control-lg" id="username">
                    <label for="username">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password" class="form-control form-control-lg" id="password">
                    <label for="password">Password</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password2" class="form-control form-control-lg" id="password2">
                    <label for="password2">Confirmasi password</label>
                  </div>

                  <div class="pt-1 mb-4">
                  <button type="submit" name="register" class="btn btn-primary btn-lg btn-block">Registrasi</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!--AKHIR-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>