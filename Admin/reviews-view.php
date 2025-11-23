           <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3> Customer <span>/ reviews</span></h3>
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
                                    <th>Review ID</th>
                                    <th>Client Name</th>
                                    <th>Message</th>
                                    <th>Client Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

    <?php
        include('connect.php');
        $query="select * from feedback";
        $run=mysqli_query($conn,$query);
        if(mysqli_num_rows($run)>0)
        {
            while($row=mysqli_fetch_array($run))
            {
        
    ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $row['feedback_id'] ?></td>
                                    <td><?php echo $row['client_name'] ?></td>
                                    <td style="word-wrap: break-word;overflow-wrap: break-word; white-space: normal;">
                                    <?php echo $row['message'] ?></td>
                                    <td><img src="ClientImg/<?php echo $row[4] ?>" alt="Img"></td>
                                    <td class="action h4">
                                        <div class="table-action-buttons">
                                            <!-- <a class="edit button button-box button-xs button-info" href="#">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a> -->
                                            <a class="delete button button-box button-xs button-danger" href="Admin/review-delete.php?feedback_id=<?php echo $row['feedback_id']; ?>
                                                " onclick="return confirm('Are you sure you want to delete this message?');">
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