    <!-- Pricing Start -->
    <div class="container-fluid price px-0">
        
        <div class="row g-0">
            
            <div class="col-md-6">
                <div class="d-flex align-items-center h-100 bg-primary p-5">
                    <div class="wow fadeIn" data-wow-delay="0.3s">
                        <h1 class="font-dancing-script text-white">Pricing</h1>
                        <h1 class="mb-0">Beauty Salon</h1>
                        <h1 class="display-1 text-uppercase mb-5" style="letter-spacing: 10px;">Pricing</h1>
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-6">
                                <div class="text-center bg-dark p-5">
                                    <h4 class="text-white">Enjoy</h4>
                                    <h1 class="display-1 font-work-sans text-white">20%</h1>
                                    <p class="fs-2 text-white mb-0">Off</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <p>Enjoy 20% off our signature hair and beauty services — from precision haircuts to revitalising facials.
                                    Treat yourself to professional care, premium products and personalised styling. Book now while this limited-time offer lasts.</p>
                                <a class="btn btn-dark" href="">Get 20% Off</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="h-100 bg-dark p-5">
                    <?php
                include('connect.php');
                $query="select * from offers";
                $run=mysqli_query($conn,$query);
                if(mysqli_num_rows($run)>0)
                {
                while($row=mysqli_fetch_array($run))
                {
            ?>
                    <div class="price-item mb-3 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid flex-shrink-0" src="PricingImg/<?php echo $row[3] ?>" alt="error">
                        <div class="text-end px-4">
                            <h6 class="text-uppercase text-primary"><?php echo $row['offer_name'] ?></h6>
                            <h3 class="text-white font-work-sans mb-0"><?php echo $row['price']?>
                            </h3>
                        </div>
                    </div>
                    <?php
                
            }}
                ?>
                </div>
            </div>
            
        </div>
                
    </div>

    <!-- Pricing End -->