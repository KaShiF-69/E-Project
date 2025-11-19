
    
<!-- Team Start -->
    <div class="container-fluid overflow-hidden py-5">
        <div class="container">
            
            <div class="text-center wow fadeIn" data-wow-delay="0.2s">
                <h1 class="font-dancing-script text-primary">Team Members</h1>
                <h1 class="mb-5">Our Experienced Specialists</h1>
            </div>
            
    <div class="row g-4 team mb-4">
        
    <?php
        include('connect.php');
        $query="select * from staff";
        $run=mysqli_query($conn,$query);
        if(mysqli_num_rows($run)>0)
        {
            while($row=mysqli_fetch_array($run))
            {
        
    ?>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="TeamImg/<?php echo $row[2] ?>" alt="">
                                                                <?php // echo $row[2] ?>
                        <div class="team-overlay">
                            <p class="text-primary mb-1"><?php echo $row['profession'] ?></p>
                            <h4><?php echo $row['name'] ?></h4>
                        </div>
                    </div>
                </div>
                <?php
                
            }}
                ?>
            </div>
        </div>
    </div>
    <!-- Team End -->

    