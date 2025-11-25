<?php
include("connect.php");

// ------------------ FETCH DATA ------------------
if (isset($_GET['item_id'])) {
    $id = $_GET['item_id'];

    $query = "SELECT * FROM inventory WHERE item_id='$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $name = $row['item_name'];
        $description = $row['item_description'];
        $quantity = $row['quantity'];
        $reorder = $row['reorder_level'];
        $price = $row['cost_price'];
        $img = $row['item_img']; // only filename stored
    } else {
        echo "<script>alert('Product not found'); window.location.href='products-view.php';</script>";
        exit;
    }
}

// ------------------ UPDATE DATA ------------------
if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $reorder = $_POST['reorder'];
    $price = $_POST['price'];

    // IMAGE HANDLING
    $new_img = $_FILES['img']['name'];

    if (!empty($new_img)) {
        $tmp = $_FILES['img']['tmp_name'];
        $upload_path = "ProductsImg/" . $new_img;  // correct folder
        move_uploaded_file($tmp, $upload_path);
        $final_img = $new_img; // store only filename
    } else {
        $final_img = $_POST['old_img']; // keep old filename
    }

    $update = "UPDATE inventory 
               SET item_name='$name', 
                 item_description='$description',
                   quantity='$quantity', 
                   reorder_level='$reorder',
                   cost_price='$price', 
                   item_img='$final_img'
               WHERE item_id='$id'";

    if (mysqli_query($conn, $update)) {
        echo "<script>
                alert('Product updated successfully!');
                window.location.href='products-view.php';
              </script>";
        exit;
    } else {
        echo "<script>
                alert('Update failed. Please try again.');
                window.location.href='products-view.php';
              </script>";
    }
}
?>