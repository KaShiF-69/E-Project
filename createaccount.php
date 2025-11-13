<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Account</title>

  <link href="css/createaccount.css" rel="stylesheet">
  <!-- Bootstrap 5.3 CDN -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->

  <!-- Google Font -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet"> -->

  <?php include("header_links.php") ?>
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

        <!-- <div class="mb-3">
          <label for="confirmPassword" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password" required>
        </div> -->

        <button type="submit" name="sub" class="btn btn-custom">Create Account</button>
      </form>

      <p class="text-center text-muted mt-3">
        Already have an account? <a href="login.php">Login here</a>
      </p>
    </div>
  </section>


    <?php include("footer_links.php") ?>
  <!-- Bootstrap JS -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>

<?php
    include("connect.php");
    if(isset($_POST['sub'])){
        $name = $_POST['name'];
        $email = $_POST['mail'];
        $password = $_POST['pass'];
        $phone = $_POST['phone'];
        $role="user";
        $query="insert into users(name,email,password,phone,role)values('$name','$email','$password','$phone','$role')";
        $run=mysqli_query($conn,$query);
        if($run){
            echo "<script>alert('Data Inserted')</script>";
        }else{
            echo "<script>alert('Data not Inserted')</script>";
        }
    }
?>

 