<div class="container py-5">
    <div class="row g-4">
        
    <?php
        include('connect.php');
        $query="select * from inventory limit 8";
        $run=mysqli_query($conn,$query);
        if(mysqli_num_rows($run)>0)
        {
            while($row=mysqli_fetch_array($run))
            {
                $modalID = "modal".$row['item_id'];
    ?>

        <!-- PRODUCT CARD -->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="product-card text-center">
                <img src="ProductsImg/<?php echo $row[6] ?>" class="product-img" alt="Product">
                <h5 class="product-title mt-3"><?php echo $row['item_name'] ?></h5>
                <button type="button" class="btn btn-primary" 
                        data-bs-toggle="modal"
                        data-bs-target="#<?php echo $modalID; ?>">
                    Read More
                </button>
            </div>
        </div>

        <!-- MODAL -->
        <div class="modal fade" id="<?php echo $modalID; ?>" tabindex="-1" 
            aria-labelledby="<?php echo $modalID; ?>Label" aria-hidden="true">

        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title"><?php echo $row['item_name'] ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <div class="row g-3">

                    <!-- IMAGE -->
                    <div class="col-12 col-md-6 text-center">
                        <img src="ProductsImg/<?php echo $row[6] ?>" 
                            class="img-fluid modal-product-img"
                            alt="Product">
                    </div>

                    <!-- DETAILS -->
                    <div class="col-12 col-md-6">
                        <h5 class="mb-2"><?php echo $row['item_name'] ?></h5>
                        

                        <p class="text-muted mb-3">
                            <?php echo $row['item_description'] ?>
                        </p>
                        
                        <button type="button" class="btn btn-outline-secondary mt-2" 
                                data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>

            </div>
        </div>
        </div>

    <?php
            }
        }
    ?>
    </div>
</div>
