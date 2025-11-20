    <!-- Reviews Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.2s">
                <h1 class="font-dancing-script text-primary">Reviews</h1>
                <h1 class="mb-5">What Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.3s">

    <?php
        include('connect.php');
        $query="select * from feedback";
        $run=mysqli_query($conn,$query);
        if(mysqli_num_rows($run)>0)
        {
            while($row=mysqli_fetch_array($run))
            {
    ?>
                <div class="text-center bg-light p-4">
                    <i class="fa fa-quote-left fa-3x mb-3"></i>
                    <p><?php echo $row['message'] ?></p>
                    <img class="img-fluid mx-auto border p-1 mb-3" src="ClientImg/<?php echo $row[4] ?>" alt="Img">
                    <h4 class="mb-1"><?php echo $row['client_name'] ?></h4>
                </div>
    <?php
                
            }
        }
    ?>
            </div>
        </div>
    </div>
    <!-- Reviews End -->