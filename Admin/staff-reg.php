        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Elegance Salon<span>/ Staff Register </span></h3>
                    </div>
                </div><!-- Page Heading End -->
            </div><!-- Page Headings End -->

            <!-- Add or Edit Product Start -->
            <div class="add-edit-product-wrap col-12">

                <div class="add-edit-product-form">
                    <form action="" method="POST" enctype="multipart/form-data">

                        <h4 class="title">Sign Up</h4>

                        <div class="row">
                            <div class="col-lg-6 col-12 mb-30">
                                <input name="name" class="form-control" type="text" placeholder="Name*">
                            </div>
                            <div class="col-lg-6 col-12 mb-30">
                                <input name="profession" class="form-control" type="text" placeholder="Profession*">
                            </div>
                            <div class="col-lg-6 col-12 mb-30">
                                <input name="mail" class="form-control" type="email" placeholder="Email*">
                            </div>
                            <div class="col-lg-6 col-12 mb-30">
                                <input name="pass" class="form-control" type="password" placeholder="Password*">
                            </div>
                            <div class="col-lg-6 col-12 mb-30">
                                <input name="phone" class="form-control" type="phone" placeholder="Phone*">
                            </div>
                            
                            <div class="col-lg-6 col-12 mb-30">
                                <input name="image" class="form-control" type="file">
                            </div>
                            <!-- <div class="col-12 mb-30"><textarea class="form-control" placeholder="Product Description*"></textarea></div> -->
                        </div> 
                        <!-- Button Group Start -->
                        <div class="row">
                            <div class="d-flex flex-wrap justify-content-end col mbn-10">
                                <button name="sub" class="button button-outline button-primary mb-10 ml-10 mr-0">Sign Up</button>
                            </div>
                        </div><!-- Button Group End -->

                    </form>
                </div>

            </div><!-- Add or Edit Product End -->

        </div><!-- Content Body End -->

<?php
    include ('connect.php');
    if(isset($_POST['sub'])){
        $name=$_POST['name'];
        $profession=$_POST['profession'];
        $phone=$_POST['phone'];
        $email=$_POST['mail'];
        $password=$_POST['pass'];
        
        $image=$_FILES['image']['name'];
        $tmpimage=$_FILES['image']['tmp_name'];
        $folder="TeamImg/";

        if(move_uploaded_file($tmpimage, $folder . $image)){

        
          $query="INSERT INTO staff (image, name, profession, phone, email, password) 
                  VALUES ('$image', '$name', '$profession', '$phone', '$email', '$password')";

          $run=mysqli_query($conn,$query);

          if($run){
              echo "<script>alert('Data Inserted Successfully')</script>";
          }
          else{
            echo "<script>alert('Data is not Inserted Successfully')</script>";
          }
        }else{
                echo "<script>alert(img not inserted)</script>";
              }
    }
    
?>