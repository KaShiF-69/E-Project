    <?php
        include ('connect.php');
        if(isset($_POST['sub'])){
            $name=$_POST['name'];
            $description=$_POST['description'];
            $quantity=$_POST['quantity'];
            $price=$_POST['price'];

            $image=$_FILES['image']['name'];
            $tmpimage=$_FILES['image']['tmp_name'];
            $folder="ProductsImg/";

            if(move_uploaded_file($tmpimage, $folder . $image)){

            
            $query="INSERT INTO inventory (item_name, item_description, quantity, cost_price, item_img) 
                    VALUES ('$name', '$description', '$quantity', '$price', '$image')";

            $run=mysqli_query($conn,$query);

                if($run){
                    echo "<script>alert('Product Inserted Successfully')</script>";
                }
                else{
                    echo "<script>alert('Product Not Inserted Successfully')</script>";
                }
            }else{
                    echo "<script>alert('Image not inserted')</script>";
                }
        }
        
    ?>