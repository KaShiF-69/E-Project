<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Appointment</title>
    <?php include("Admin/headerlink.php") ?>
</head>
<body>
    <?php include("Admin/navbar.php") ?>
    <?php include("Admin/sideheader.php") ?>
                   <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3> Appointments <span>/ view</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="row">

                <!--Order List Start-->
                <div method="POST" class="col-12">
                    <div class="table-responsive">
                        <table class="table table-vertical-middle">
                            <thead>
                                <tr>
                                    <th>Appointment ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Service</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

    <?php
        include('connect.php');
        $query="select * from appointments order by appointment_id desc";
        $run=mysqli_query($conn,$query);
        if(mysqli_num_rows($run)>0)
        {
            while($row=mysqli_fetch_array($run))
            {
        
    ?>

                            <tbody>
                                <tr>
                                    <td><?php echo $row['appointment_id'] ?></td>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['service'] ?></td>
                                    <td><?php echo $row['date'] ?></td>
                                    <td><?php echo $row['time'] ?></td>
                                    <td><?php echo $row['status'] ?></td>
                                    <td class="action h4">
                                        <div class="table-action-buttons">

                                            <a class="delete button button-box button-xs button-danger"
                                                href="Admin/appointment-delete.php?appointment_id=<?php echo $row['appointment_id']; ?>"
                                                onclick="return confirm('Are you sure you want to delete this user?');">
                                                    <i class="zmdi zmdi-delete"></i>
                                            </a>
                                                    
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
    <?php
                
        }}
    ?>
                        </table>
                    </div>
                </div>
                <!--Order List End-->

            </div>

        </div><!-- Content Body End -->
    <?php // include("Admin/appointment-view.php") ?>
    <?php include("Admin/footer.php") ?>



    <?php include("Admin/footerlinks.php") ?>
</body>
</html>