<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appointment</title>
  <link href="css/createaccount.css" rel="stylesheet">
  <?php include("Links/header_links.php") ?>
</head>

<body>
  <?php include("Guest/spinner.php") ?>
  <?php include("Guest/navbar.php") ?>

  <section class="form-container">
    <div class="form-card">
      <h3>Make Your Appointment</h3>
      <form method="POST">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name" required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" class="form-control" name="mail" id="email" placeholder="Enter your email" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Services</label>
            <select name="service" class="form-select" aria-label="Default select example">
                <option selected disabled>Choose a service</option>
                <option>Haircut</option>
                <option>Makeup</option>
                <option>Manicure</option>
                <option>Pedicure</option>
                <option>Massage</option>
                <option>Skin Care</option>
            </select>
        </div>

        <div class="mb-3">
          <label for="date" class="form-label">Preferred Date</label>
          <input type="date" class="form-control" name="date" id="date">
        </div>

        <div class="mb-3">
          <label for="time" class="form-label">Preferred Time</label>
          <input type="time" class="form-control" name="time">
        </div>

        <button type="submit" name="sub" class="btn btn-custom">Book</button>
      </form>

    </div>
  </section>

    <?php include("Query/appointment-book.php") ?>

  <!-- Footer -->
  <?php include("Guest/footer.php") ?>
  <?php include("Links/footer_links.php") ?>

</body>
</html>
