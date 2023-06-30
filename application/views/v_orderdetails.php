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

    <div class="row mb-2 mx-3">
        <div class="col-10">
            <h1 class="m-0">Data <?php echo $title ?></h1>
        </div>
        <div class="col">
            <button class="btn btn-primary" onclick="window.location.href='<?php echo base_url('index.php/orderdetails/addData') ?>';">Add <?php echo $title ?></button>
        </div>
    </div>

    <div class="table-responsive m-3">
        <table class="table table-bordered table-striped table-sm text-center table-hover align-middle">
            <thead class="table-dark align-middle">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Order Number</th>
                    <th scope="col">Product Code</th>
                    <th scope="col">Quantity Ordered</th>
                    <th scope="col">Price Each</th>
                    <th scope="col">Order Line Number</th>
                    <th scope="col" class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 0;
                foreach ($orderdetail as $key) {
                    $count = $count + 1;
                ?>
                    <tr>
                        <td>
                            <?php echo $count ?>
                        </td>
                        <td>
                            <?php echo $key->orderNumber ?>
                        </td>
                        <td>
                            <?php echo $key->productCode ?>
                        </td>
                        <td>
                            <?php echo $key->quantityOrdered ?>
                        </td>
                        <td>
                            <?php echo $key->priceEach ?>
                        </td>
                        <td>
                            <?php echo $key->orderLineNumber ?>
                        </td>
                        <td class="justify-content-center">
                            <a class="btn btn-sm btn-primary" href="<?php echo site_url('Orderdetails/edit/' . $key->orderNumber . "/" . $key->productCode); ?>">Edit</a>
                            <a class="btn btn-sm btn-danger" href="<?php echo site_url('Orderdetails/delete/' . $key->orderNumber . "/" . $key->productCode); ?>">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="<?php echo base_url('assets/bootstrap.bundle.min.js.download') ?>"></script>
</body>

</html>