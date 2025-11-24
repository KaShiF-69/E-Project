<!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="font-dancing-script text-primary">Our Services</h1>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4 g-md-0 text-center">

    <?php
        include('connect.php');
        $query="select * from offers";
        $run=mysqli_query($conn,$query);
        if(mysqli_num_rows($run)>0)
        {
            while($row=mysqli_fetch_array($run))
            {
        
    ?>

                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4 border-bottom border-end wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="img/haircut.png" alt="Icon">
                        <h3 class="mb-3"><?php echo $row['offer_name'] ?></h3>
                        <p class="mb-3"><?php echo $row['description'] ?></p>
                        <a class="btn btn-sm btn-primary text-uppercase" href="appointment.php">Book Now <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
    <?php
                
            }
        }
    ?>
            </div>
        </div>
    </div>
    <!-- Service End -->