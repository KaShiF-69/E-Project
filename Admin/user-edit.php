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
    <section class="form-container mt-5 mx-5">
        <div class="form-card">
        <h3>User Details</h3>
        <form method="POST">
            <div class="container w-100">
                <div class="row">
                    <input type="text" name="id" value="<?php echo $id ?>" >

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Name</label>
                        <input type="name" value="<?php echo $name ?>" class="form-control" name="name">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="mail">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Phone</label>
                        <input type="phone" class="form-control" name="phone">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="pass">
                    </div>

                    <div class="mb-3 col-md-12">
                        <label class="form-label">Role</label>
                            <select name="role" class="form-select" aria-label="Default select example">
                                <option selected disabled>Choose a service</option>
                                <option value="1">user</option>
                                <option value="2">staff</option>
                                <option value="3">admin</option>
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

<?php
include("connect.php");
if(isset($_GET['update'])){
    $name=$_GET['name'];
    $email=$_GET['mail'];
    $phone=$_GET['phone'];
    $password=$_GET['pass'];
    $role=$_GET['role'];
    $id=$_GET['id'];
    $update_query="update users set name='$name', email='$email', password='$password', phone='$phone', role='$role' where user_id='$id'";
    $run=mysqli_query($conn,$update_query);
     if($run){
                echo "<script>
                        if(confirm('Data Updated! Do you want to open View page?'))
                        {window.location.href = 'user-view.php';}
                      </script>";

            }
    else{
        echo "<script>alert('Data not updated')</script>";
    }
}
?>