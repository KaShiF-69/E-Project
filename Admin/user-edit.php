<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Edit</title>
    <?php include("Admin/headerlink.php") ?>
    <?php include("Links/header_links.php") ?>
    <link href="css/createaccount.css" rel="stylesheet">
</head>

<body>
    <!-- Update Query -->
    <?php include("Query/user-edit.php") ?>

<section class="form-container mt-5 mx-5">
    <div class="form-card">

        <h3>User Details</h3>

        <form method="POST">
            <div class="container w-100">
                <div class="row">

                    <input type="hidden" name="id" value="<?php echo $id ?>">

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" value="<?php echo $name ?>" class="form-control" name="name">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" value="<?php echo $email ?>" class="form-control" name="mail">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Phone</label>
                        <input type="text" value="<?php echo $phone ?>" class="form-control" name="phone">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Password</label>
                        <input type="text" value="<?php echo $password ?>" class="form-control" name="pass">
                    </div>

                    <div class="mb-3 col-md-12">
                        <label class="form-label">Role</label>
                        <select name="role" class="form-select">
                            <option disabled>Choose a role</option>
                            <option value="user"  <?php echo ($role == 'user' ? 'selected' : ''); ?>>User</option>
                            <option value="staff" <?php echo ($role == 'staff' ? 'selected' : ''); ?>>Staff</option>
                            <option value="admin" <?php echo ($role == 'admin' ? 'selected' : ''); ?>>Admin</option>
                        </select>

                    </div>

                    <button type="submit" name="update" class="btn btn-custom">Update</button>

                </div>
            </div>
        </form>

    </div>
</section>

<?php include("Admin/footerlinks.php") ?>
<?php include("Links/footer_links.php") ?>

</body>
</html>