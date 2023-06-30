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

    <div class="row mb-2 mx-3">
        <div class="col-10">
            <h1 class="m-0">Data <?php echo $title ?></h1>
        </div>
        <div class="col">
            <button class="btn btn-primary" onclick="window.location.href='<?php echo base_url('index.php/products/addData') ?>';">Add <?php echo $title ?></button>
        </div>
    </div>

    <div class="table-responsive m-3">
        <table class="table table-bordered table-striped table-sm text-center table-hover align-middle">
            <thead class="table-dark align-middle">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Product Code</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Line</th>
                    <th scope="col">Product Scale</th>
                    <th scope="col">Product Vendor</th>
                    <th scope="col" class="col-4">Product Description</th>
                    <th scope="col">Quantity in stock</th>
                    <th scope="col">Buy Price</th>
                    <th scope="col">MSRP</th>
                    <th scope="col" class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 0;
                foreach ($product as $key) {
                    $count = $count + 1;
                ?>
                    <tr>
                        <td>
                            <?php echo $count ?>
                        </td>
                        <td>
                            <?php echo $key->productCode ?>
                        </td>
                        <td>
                            <?php echo $key->productName ?>
                        </td>
                        <td>
                            <?php echo $key->productLine ?>
                        </td>
                        <td>
                            <?php echo $key->productScale ?>
                        </td>
                        <td>
                            <?php echo $key->productVendor ?>
                        </td>
                        <td class="text-start">
                            <?php echo $key->productDescription ?>
                        </td>
                        <td>
                            <?php echo $key->quantityInStock ?>
                        </td>
                        <td>
                            <?php echo $key->buyPrice ?>
                        </td>
                        <td>
                            <?php echo $key->MSRP ?>
                        </td>
                        <td class="justify-content-center">
                            <a class="btn btn-primary" href="<?php echo site_url('Products/edit/' . $key->productCode); ?>">Edit</a>
                            <a class="btn btn-danger" href="<?php echo site_url('Products/delete/' . $key->productCode); ?>">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="<?php echo base_url('assets/bootstrap.bundle.min.js.download') ?>"></script>
</body>

</html>