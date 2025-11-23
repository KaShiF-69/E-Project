           <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3> Registered <span>/ users</span></h3>
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
                                    <th>User ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

    <?php
        include('connect.php');
        $query="select * from users";
        $run=mysqli_query($conn,$query);
        if(mysqli_num_rows($run)>0)
        {
            while($row=mysqli_fetch_array($run))
            {
        
    ?>

                            <tbody>
                                <tr>
                                    <td><?php echo $row['user_id'] ?></td>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['phone'] ?></td>
                                    <td><?php echo $row['password'] ?></td>
                                    <td><?php echo $row['role'] ?></td>
                                    <td class="action h4">
                                        <div class="table-action-buttons">
                                            <a class="edit button button-box button-xs button-info" 
                                            href="user-edit.php?user_id=<?php echo $row['user_id']; ?>">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>

                                            <a class="delete button button-box button-xs button-danger"
                                                href="Admin/user-delete.php?user_id=<?php echo $row['user_id']; ?>"
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