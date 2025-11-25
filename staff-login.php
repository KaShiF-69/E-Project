<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Login</title>
  <link href="css/createaccount.css" rel="stylesheet">
  <?php include("Links/header_links.php") ?>
</head>
<body>
  <?php include("Guest/spinner.php") ?>
  <?php include("Guest/navbar.php") ?>

  <!-- Create Account Section -->
  <section class="form-container">
    <div class="form-card">
      <h3>Staff Login</h3>
      <form action="" method="POST">
        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" class="form-control" name="mail" id="email" placeholder="Enter your email" required>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="pass" id="password" placeholder="Enter password" required>
        </div>

        <button type="submit" name="sub" class="btn btn-custom">Login</button>
      </form>
    </div>
  </section>

    <?php include("Links/footer_links.php") ?>
</body>
</html>


<?php include("Query/staff-login.php"); ?>