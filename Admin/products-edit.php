<!-- Edit Query -->
<?php include("Query/product-edit.php"); ?>

<!-- PAGE UI -->
<div class="font-work-sans">

    <div class="container mt-5 py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">

                <div class="bg-white p-4 p-md-5 shadow rounded">

                    <h2 class="text-center font-playfair-display mb-4">
                        Edit Product
                    </h2>

                    <form method="POST" enctype="multipart/form-data">

                        <!-- Hidden Fields -->
                        <input name="id" type="hidden" value="<?php echo $id; ?>">
                        <input name="old_img" type="hidden" value="<?php echo $img; ?>">

                        <!-- Product Name -->
                        <div class="mb-3">
                            <label class="form-label font-playfair-display">Product Name</label>
                            <input name="name" value="<?php echo $name; ?>" type="text" class="form-control">
                        </div>

                        <!-- Quantity -->
                        <div class="mb-3">
                            <label class="form-label font-playfair-display">Quantity</label>
                            <input name="quantity" value="<?php echo $quantity; ?>" type="text" class="form-control">
                        </div>

                        <!-- Reorder Level -->
                        <div class="mb-3">
                            <label class="form-label font-playfair-display">Reorder Level</label>
                            <input name="reorder" value="<?php echo $reorder; ?>" type="text" class="form-control">
                        </div>

                        <!-- Cost Price -->
                        <div class="mb-3">
                            <label class="form-label font-playfair-display">Cost Price</label>
                            <input name="price" value="<?php echo $price; ?>" type="text" class="form-control">
                        </div>

                        <!-- Current Image -->
                        <div class="mb-3">
                            <label class="form-label font-playfair-display">Current Image</label>
                            <div class="mb-2">
                                <img src="ProductsImg/<?php echo $img; ?>" alt="Product Image" class="img-fluid rounded" style="max-height:150px;">
                            </div>
                        </div>

                        <!-- Upload New Image -->
                        <div class="mb-3">
                            <label class="form-label font-playfair-display">Upload New Image</label>
                            <input name="img" type="file" class="form-control">
                        </div>

                        <!-- Submit -->
                        <div class="text-center mt-4">
                            <button name="update" type="submit" class="btn btn-dark px-4 py-2">
                                Update Product
                            </button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

</div>