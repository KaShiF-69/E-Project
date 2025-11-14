<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Account</title>
  <link href="css/createaccount.css" rel="stylesheet">
  <?php include("Links/header_links.php") ?>
</head>

<body>
  <?php include("Guest/spinner.php") ?>
  <?php include("Guest/navbar.php") ?>

  <!-- Create Account Section -->
  <section class="form-container">
    <div class="form-card">
      <h3>Create Your Account</h3>
      <form action="#" method="POST">
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name" required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" class="form-control" name="mail" id="email" placeholder="Enter your email" required>
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">Phone Number</label>
          <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter your phone number" required>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="pass" id="password" placeholder="Enter password" required>
        </div>

        <button type="submit" name="sub" class="btn btn-custom">Create Account</button>
      </form>

      <p class="text-center text-muted mt-3">
        Already have an account? <a href="login.php">Login here</a>
      </p>
    </div>
  </section>
    <!-- Footer -->
      <?php include("Guest/footer.php") ?>

    <?php include("Links/footer_links.php") ?>

</body>
</html>

<?php include("Query/Register.php");?>