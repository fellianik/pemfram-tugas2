<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
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
        <form action="<?php echo base_url() ?>index.php/Orderdetails/update" method="post">
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label for="orderNumber" class="col-sm-3 col-form-label">Order Number</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="orderNumber" value="<?php echo $result->orderNumber; ?>" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="productCode" class="col-sm-3 col-form-label">Product Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="productCode" value="<?php echo $result->productCode; ?>" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="quantityOrdered" class="col-sm-3 col-form-label">Quantity Ordered</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="quantityOrdered" value="<?php echo $result->quantityOrdered; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="priceEach" class="col-sm-3 col-form-label">Price Each</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="priceEach" value="<?php echo $result->priceEach; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="orderLineNumber" class="col-sm-3 col-form-label">Order Line Number</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="orderLineNumber" value="<?php echo $result->orderLineNumber; ?>">
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