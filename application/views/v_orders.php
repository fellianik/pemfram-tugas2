<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css') ?>">


</head>

<body>
    <?php require("welcome_message.php") ?>

    <div class="row mb-2 mx-3">
        <div class="col-10">
            <h1 class="m-0">Data <?php echo $title ?></h1>
        </div>
        <div class="col">
            <button class="btn btn-primary" onclick="window.location.href='<?php echo base_url('index.php/orders/addData') ?>';">Add <?php echo $title ?></button>
        </div>
    </div>

    <div class="table-responsive m-3">
        <table class="table table-bordered table-striped table-sm text-center table-hover align-middle">
            <thead class="table-dark align-middle">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Order Number</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">Required Date</th>
                    <th scope="col">Shipped Date</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="col-3">Comments</th>
                    <th scope="col">Customer Number</th>
                    <th scope="col" class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 0;
                foreach ($order as $key) {
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
                            <?php echo $key->orderDate ?>
                        </td>
                        <td>
                            <?php echo $key->requiredDate ?>
                        </td>
                        <td>
                            <?php echo $key->shippedDate ?>
                        </td>
                        <td>
                            <?php echo $key->status ?>
                        </td>
                        <td>
                            <?php echo $key->comments ?>
                        </td>
                        <td>
                            <?php echo $key->customerNumber ?>
                        </td>
                        <td class="justify-content-center">
                            <a class="btn btn-sm btn-primary" href="<?php echo site_url('Orders/edit/' . $key->orderNumber); ?>">Edit</a>
                            <a class="btn btn-sm btn-danger" href="<?php echo site_url('Orders/delete/' . $key->orderNumber); ?>">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="<?php echo base_url('assets/bootstrap.bundle.min.js.download') ?>"></script>
</body>

</html>