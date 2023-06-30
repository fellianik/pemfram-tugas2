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
            <h1 class="m-0">Add <?php echo $title ?></h1>
        </div>
    </div>

    <div class="container mt-5">
        <form action="<?php echo base_url() ?>index.php/Products/createData" method="post">
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label for="productCode" class="col-sm-3 col-form-label">Product Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="productCode">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="productName" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="productName">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="productLine" class="col-sm-3 col-form-label">Product Line</label>
                        <div class="col-sm-9">
                            <select name="productLine" class="form-select">
                                <option selected>Pilih</option>
                                <?php foreach ($productlines as $item) : ?>
                                    <option value="<?php echo $item->productLine ?>">
                                        <?php echo $item->productLine; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="productScale" class="col-sm-3 col-form-label">Product Scale</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="productScale">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="productVendor" class="col-sm-3 col-form-label">Product Vendor</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="productVendor">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="productDescription" class="col-sm-3 col-form-label">Product Description</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="productDescription">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="quantityInStock" class="col-sm-3 col-form-label">Quantity In Stock</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="quantityInStock">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="buyPrice" class="col-sm-3 col-form-label">Buy Price</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="buyPrice">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="MSRP" class="col-sm-3 col-form-label">MSRP</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="MSRP">
                        </div>
                    </div>
                </div>


            </div>

            <div class="mb-3 row float-end">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Add Data</button>
                </div>
            </div>
        </form>
    </div>

    <script src="<?php echo base_url('assets/bootstrap.bundle.min.js.download') ?>"></script>
</body>

</html>