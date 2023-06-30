<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css') ?>">


</head>

<body>
    <?php require("welcome_message.php") ?>

    <div class="row mb-2 mx-3 mt-4">
        <div class="col-10">
            <h1 class="m-0">Update <?php echo $title ?></h1>
        </div>
    </div>

    <div class="container mt-5">
        <form action="<?php echo base_url() ?>index.php/Products/update" method="post">
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label for="productCode" class="col-sm-3 col-form-label">Product Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="productCode" value="<?php echo $result->productCode; ?>" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="productName" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="productName" value="<?php echo $result->productName; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="productLine" class="col-sm-3 col-form-label">Product Line</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="productLine" value="<?php echo $result->productLine; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="productScale" class="col-sm-3 col-form-label">Product Scale</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="productScale" value="<?php echo $result->productScale; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="productVendor" class="col-sm-3 col-form-label">Product Vendor</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="productVendor" value="<?php echo $result->productVendor; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="productDescription" class="col-sm-3 col-form-label">Product Description</label>
                        <div class="col-sm-9">
                            <textarea name="productDescription" class="form-control" rows="3"><?php echo $result->productDescription; ?></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="quantityInStock" class="col-sm-3 col-form-label">Quantity In Stock</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="quantityInStock" value="<?php echo $result->quantityInStock; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="buyPrice" class="col-sm-3 col-form-label">Buy Price</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="buyPrice" value="<?php echo $result->buyPrice; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="MSRP" class="col-sm-3 col-form-label">MSRP</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="MSRP" value="<?php echo $result->MSRP; ?>">
                        </div>
                    </div>
                </div>


            </div>

            <div class="mb-3 row float-end">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
            </div>
        </form>
    </div>

    <script src="<?php echo base_url('assets/bootstrap.bundle.min.js.download') ?>"></script>
</body>

</html>