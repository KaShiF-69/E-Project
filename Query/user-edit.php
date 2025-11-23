<?php
include("connect.php");

// ------------------ FETCH USER DATA ------------------
if (isset($_GET['user_id'])) {
    $id = $_GET['user_id'];

    $query = "SELECT * FROM users WHERE user_id='$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $password = $row['password'];
        $role = $row['role'];
    } else {
        echo "<script>alert('User not found'); window.location.href='users-view.php';</script>";
        exit;
    }
}

// ------------------ UPDATE USER DATA ------------------
if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $password = $_POST['pass'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];

    $update = "UPDATE users 
               SET name='$name', email='$email', password='$password',
                   phone='$phone', role='$role'
               WHERE user_id='$id'";

    if (mysqli_query($conn, $update)) {
        echo "<script>
                alert('User updated successfully!');
                window.location.href='users-view.php';
              </script>";
        exit;
    } else {
        echo "<script>
                alert('Update failed. Please try again.');
                window.location.href='users-view.php';
              </script>";
    }
}
?>