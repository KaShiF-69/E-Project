<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Salon Website Login" name="keywords">
  <meta content="Login" name="description">

  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      color: #555;
    }

    /* Navbar */
    .navbar {
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .navbar-brand {
      font-weight: 700;
      color: #c59d5f !important;
    }

    .nav-link {
      color: #000 !important;
      font-weight: 500;
      margin-right: 15px;
    }

    .nav-link:hover {
      color: #c59d5f !important;
    }

    /* Header Section */
    .page-header {
      background: url('https://images.unsplash.com/photo-1605460375648-278bcbd579a6?auto=format&fit=crop&w=1470&q=80') center center/cover no-repeat;
      padding: 100px 0;
      text-align: center;
      color: #fff;
      position: relative;
    }

    .page-header::before {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.4);
    }

    .page-header h1 {
      position: relative;
      z-index: 1;
      font-weight: 600;
    }

    .breadcrumb {
      justify-content: center;
      background: transparent;
      position: relative;
      z-index: 1;
    }

    /* Login Section */
    .login-section {
      padding: 80px 0;
      background-color: #fff;
    }

    .login-card {
      max-width: 500px;
      margin: auto;
      background: #fff;
      border: 1px solid #eee;
      border-top: 4px solid #c59d5f;
      border-radius: 10px;
      padding: 40px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
    }

    .login-card h3 {
      color: #000;
      margin-bottom: 30px;
      text-align: center;
      font-weight: 600;
    }

    .form-control {
      border-radius: 8px;
      border: 1px solid #ddd;
      padding: 10px 15px;
    }

    .btn-gold {
      background-color: #c59d5f;
      color: #fff;
      border: none;
      padding: 10px;
      border-radius: 8px;
      width: 100%;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .btn-gold:hover {
      background-color: #b28950;
    }

    /* Footer */
    footer {
      background-color: #111;
      color: #bbb;
      padding: 50px 0 20px;
    }

    footer h5 {
      color: #fff;
      margin-bottom: 20px;
    }

    footer a {
      color: #bbb;
      text-decoration: none;
    }

    footer a:hover {
      color: #c59d5f;
    }

    .footer-bottom {
      border-top: 1px solid #333;
      padding-top: 15px;
      margin-top: 20px;
      text-align: center;
      color: #777;
      font-size: 14px;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light py-3">
    <div class="container">
      <a class="navbar-brand" href="#">✂ Salone</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#">HOME</a></li>
          <li class="nav-item"><a class="nav-link" href="#">ABOUT</a></li>
          <li class="nav-item"><a class="nav-link" href="#">SERVICE</a></li>
          <li class="nav-item"><a class="nav-link" href="#">PRICE</a></li>
          <li class="nav-item"><a class="nav-link" href="#">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <div class="page-header">
    <h1>Login</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-light text-decoration-none">Home</a></li>
        <li class="breadcrumb-item text-light active" aria-current="page">Login</li>
      </ol>
    </nav>
  </div>

  <!-- Login Form -->
  <section class="login-section">
    <div class="container">
      <div class="login-card">
        <h3>Welcome Back</h3>
        <form action="" method="POST">
          <div class="mb-3">
            <input type="email" name="mail" class="form-control" placeholder="Email Address" required>
          </div>
          <div class="mb-3">
            <input type="password" name="pass" class="form-control" placeholder="Password" required>
          </div>
          <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
              <input type="checkbox" id="remember">
              <label for="remember" style="font-size: 14px;">Remember Me</label>
            </div>
            <a href="#" style="color: #c59d5f; font-size: 14px;">Forgot Password?</a>
          </div>
          <button type="submit" name="sub" class="btn-gold">Login</button>

          <p class="text-center mt-3 mb-0">
            Don’t have an account? <a href="create-account.html" style="color:#c59d5f;">Create one</a>
          </p>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <h5>✂ Salone</h5>
          <p>Aliquam sed elit erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
        </div>
        <div class="col-md-4 mb-4">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Our Services</a></li>
            <li><a href="#">Terms & Conditions</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-4">
          <h5>Newsletter</h5>
          <form class="d-flex">
            <input type="email" class="form-control me-2" placeholder="Enter your email">
            <button class="btn btn-gold" type="submit">→</button>
          </form>
        </div>
      </div>
      <div class="footer-bottom">
        © 2025 <b>Salone</b>. All Rights Reserved.
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
  include("connect.php");
  if(isset($_POST['sub'])){
      $email = $_POST['mail'];
      $password = $_POST['pass'];
      $query="Select * from users where email='$email' AND password='$password'";
      $run=mysqli_query($conn,$query);
      $row=mysqli_num_rows($run);
      if($row>0){
        while($data=mysqli_fetch_array($run)){
         if($data['role'] == "staff"){
            echo "<script>window.location.href='staffdash.php'</script>";
         }
         else if($data['role'] == "admin"){
            echo "<script>window.location.href='admindash.php'</script>";
         }
         else if($data['role'] == "user"){
            echo "<script>window.location.href='userdash.php'</script>";
         }
         else{
            echo "<script>alert('Invalid Role')</script>";
         }
        }
     
  }
}

?>