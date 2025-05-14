<?php
session_start();
include ("koneksi.php");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AbsenSI Karyawan</title>
  <link rel="icon" href="img/Fevicon.png" type="image/png">

  <!-- Bootstrap & Vendor CSS -->
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- Custom Style -->
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #007bff, #00c6ff);
      color: white;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .main-wrapper {
      max-width: 1100px;
      width: 100%;
      padding: 40px 30px;
      border-radius: 20px;
      background-color: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
    }

    .hero-text {
      flex: 1;
      padding-right: 30px;
    }

    .hero-text h1 {
      font-size: 2.8rem;
      font-weight: bold;
    }

    .hero-text p {
      font-size: 1.2rem;
      margin-top: 15px;
      margin-left: 45px;
    }

    .login-buttons {
      margin-top: 30px;
    }

    .login-buttons .btn {
      padding: 12px 24px;
      margin-right: 15px;
      font-size: 16px;
      border-radius: 8px;
    }

    .hero-image {
      flex: 1;
      text-align: center;
    }

    .hero-image img {
      max-width: 350px;
      width: 100%;
      border-radius: 20px;
    }

    @media (max-width: 768px) {
      .row {
        flex-direction: column-reverse;
        text-align: center;
      }

      .hero-text {
        padding: 0;
        margin-top: 30px;
      }

      .login-buttons .btn {
        display: block;
        margin: 10px auto;
      }

      .hero-image img {
        max-width: 280px;
      }
    }
  </style>
</head>
<body>
  <div class="main-wrapper">
    <div class="row">
      <div class="hero-text">
        <h1>Selamat Datang di AbsenSI Karyawan</h1>
        <p>Sistem informasi absensi karyawan yang modern, mudah, dan efisien.</p>
        <div class="login-buttons" style="margin-left: 45px;">
          <a href="login.php" target="_blank" class="btn btn-warning">Login Admin</a>
          <a href="karyawan/login_karyawan.php" target="_blank" class="btn btn-primary">Login Karyawan</a>
        </div>
      </div>
      <div class="hero-image">
        <img src="https://cdn-icons-png.flaticon.com/512/3063/3063827.png" alt="Absensi Ilustrasi">
      </div>
    </div>
  </div>

  <!-- Optional JS -->
  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
