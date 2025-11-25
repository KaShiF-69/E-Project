    <!-- Content Body Start -->
            <div class="content-body">

                <!-- Page Headings Start -->
                <div class="row justify-content-between align-items-center mb-10">

                    <!-- Page Heading Start -->
                    <div class="col-12 col-lg-auto mb-20">
                        <div class="page-heading">
                            <h3>Add <span>/ Item</span></h3>
                        </div>
                    </div><!-- Page Heading End -->
                </div><!-- Page Headings End -->

                <!-- Add or Edit Product Start -->
                <div class="add-edit-product-wrap col-12">

                    <div class="add-edit-product-form">
                        <form method="POST" enctype="multipart/form-data">

                            <h4 class="title">About Product/Item</h4>

                            <div class="row">
                                <div class="col-lg-6 col-12 mb-30">
                                    <input name="name" class="form-control" type="text" placeholder="Product Name / Title*">
                                </div>
                                <div class="col-lg-6 col-12 mb-30">
                                    <input name="description" class="form-control" type="text" placeholder="Product Description*">
                                </div>
                                <div class="col-lg-6 col-12 mb-30">
                                    <input name="quantity" class="form-control" type="text" placeholder="Product quantity*">
                                </div>
                                <div class="col-lg-6 col-12 mb-30">
                                    <input name="price" class="form-control" type="text" placeholder="Product Price*">
                                </div>
                                <div class="col-lg-12 col-12 mb-30">
                                    <input name="image" class="form-label form-control" type="file" placeholder="Product Image*">
                                </div>
                                
                            </div> 

                            <div class="row">
                                <div class="d-flex flex-wrap justify-content-end col mbn-10">
                                    <button name="sub" type="submit" class="button button-outline button-primary mb-10 ml-10 mr-0">
                                        Publish
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div><!-- Add or Edit Product End -->

            </div><!-- Content Body End -->

<?php include("Query/product-add.php"); ?>