<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Admin</title>
  <link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <style>
    body {
      background: linear-gradient(135deg, #007bff, #00c6ff);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', sans-serif;
    }

    .card {
      padding: 30px;
      border-radius: 15px;
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      width: 100%;
      max-width: 400px;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
    }

    .form-control {
      border-radius: 10px;
    }

    .btn-warning {
      border-radius: 10px;
    }
  </style>
</head>
<body>
  <div class="card">
    <h3 class="text-center mb-4 text-warning">Login Admin</h3>
    <form action="proses_login.php" method="post">
      <div class="mb-3">
        <label>Username</label>
        <input type="text" name="username" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-warning w-100">Login</button>
    </form>
  </div>

  <!-- Optional JS -->
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
