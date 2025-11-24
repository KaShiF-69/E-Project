<?php include 'Query/admindash-count.php'; ?>

<!-- Content Body Start -->
<div class="content-body">

    <div class="row justify-content-between align-items-center mb-10">
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Dashboard</h3>
            </div>
        </div>
    </div>

    <!-- Dashboard Stats -->
    <div class="row">

        <!-- Total Users -->
        <div class="col-xlg-3 col-md-6 col-12 mb-30">
            <div class="top-report">
                <div class="head"><h4>Total Users</h4></div>
                <div class="content"><h2><?php echo $total_users; ?></h2></div>
                <div class="footer">
                    <div class="progess"><div class="progess-bar" style="width:80%;"></div></div>
                </div>
            </div>
        </div>

        <!-- Total Staff -->
        <div class="col-xlg-3 col-md-6 col-12 mb-30">
            <div class="top-report">
                <div class="head"><h4>Total Staff</h4></div>
                <div class="content"><h2><?php echo $total_staff; ?></h2></div>
                <div class="footer">
                    <div class="progess"><div class="progess-bar" style="width:75%;"></div></div>
                </div>
            </div>
        </div>

        <!-- Total Reviews -->
        <div class="col-xlg-3 col-md-6 col-12 mb-30">
            <div class="top-report">
                <div class="head"><h4>Total Reviews</h4></div>
                <div class="content"><h2><?php echo $total_reviews; ?></h2></div>
                <div class="footer">
                    <div class="progess"><div class="progess-bar" style="width:70%;"></div></div>
                </div>
            </div>
        </div>

        <!-- Contact Form Filled -->
        <div class="col-xlg-3 col-md-6 col-12 mb-30">
            <div class="top-report">
                <div class="head"><h4>Contact Forms Filled</h4></div>
                <div class="content"><h2><?php echo $total_contacts; ?></h2></div>
                <div class="footer">
                    <div class="progess"><div class="progess-bar" style="width:65%;"></div></div>
                </div>
            </div>
        </div>

    </div>

</div>
