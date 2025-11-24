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
        
        ?>

            <!-- PRODUCT CARD TEMPLATE (repeat 8 times) -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="product-card text-center">
                    <img src="ProductsImg/<?php echo $row[5] ?>" class="product-img" alt="Product">
                    <h5 class="product-title mt-3"><?php echo $row['item_name'] ?></h5>
                    <p class="product-price"><?php echo $row['cost_price'] ?>rs</p>
                    <a class="btn btn-dark" href="">Buy Now</a>
                </div>
            </div>
        <?php
                
                }
            }
        ?>

            <!-- <div class="col-12 col-sm-6 col-lg-3">
                <div class="product-card text-center">
                    <img src="https://via.placeholder.com/400x300" class="product-img" alt="Product">
                    <h5 class="product-title mt-3">Skin Glow Serum</h5>
                    <p class="product-price">$24.99</p>
                    <a class="btn btn-dark">Add to Cart</a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="product-card text-center">
                    <img src="https://via.placeholder.com/400x300" class="product-img" alt="Product">
                    <h5 class="product-title mt-3">Makeup Brush Set</h5>
                    <p class="product-price">$14.99</p>
                    <a class="btn btn-dark">Add to Cart</a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="product-card text-center">
                    <img src="https://via.placeholder.com/400x300" class="product-img" alt="Product">
                    <h5 class="product-title mt-3">Nail Polish Kit</h5>
                    <p class="product-price">$29.99</p>
                    <a class="btn btn-dark">Add to Cart</a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="product-card text-center">
                    <img src="https://via.placeholder.com/400x300" class="product-img" alt="Product">
                    <h5 class="product-title mt-3">Hair Straightener</h5>
                    <p class="product-price">$39.99</p>
                    <a class="btn btn-dark">Add to Cart</a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="product-card text-center">
                    <img src="https://via.placeholder.com/400x300" class="product-img" alt="Product">
                    <h5 class="product-title mt-3">Beauty Cream</h5>
                    <p class="product-price">$17.99</p>
                    <a class="btn btn-dark">Add to Cart</a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="product-card text-center">
                    <img src="https://via.placeholder.com/400x300" class="product-img" alt="Product">
                    <h5 class="product-title mt-3">Face Cleanser</h5>
                    <p class="product-price">$12.99</p>
                    <a class="btn btn-dark">Add to Cart</a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="product-card text-center">
                    <img src="https://via.placeholder.com/400x300" class="product-img" alt="Product">
                    <h5 class="product-title mt-3">Premium Shampoo</h5>
                    <p class="product-price">$49.99</p>
                    <a class="btn btn-dark">Add to Cart</a>
                </div>
            </div> -->

        </div>
    </div>