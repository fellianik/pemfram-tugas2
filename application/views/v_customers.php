<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css') ?>">


</head>

<body>
    <?php require("welcome_message.php") ?>

    <div class="row mb-2 mx-3">
        <div class="col-10">
            <h1 class="m-0">Data <?php echo $title ?></h1>
        </div>
        <div class="col-2">
            <button class="btn btn-primary" onclick="window.location.href='<?php echo base_url('index.php/customers/addData') ?>';">Add <?php echo $title ?></button>
        </div>
    </div>

    <div class="table-responsive m-3">
        <table class="table table-bordered table-striped table-sm text-center table-hover align-middle">
            <thead class="table-dark align-middle">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Customer Number</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Contact name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">Postal code</th>
                    <th scope="col">Sales Rep Employee Number</th>
                    <th scope="col">credit Limit</th>
                    <th scope="col" class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 0;
                foreach ($customer as $key) {
                    $count = $count + 1;
                ?>
                    <tr>
                        <td>
                            <?php echo $count ?>
                        </td>
                        <td>
                            <?php echo $key->customerNumber ?>
                        </td>
                        <td>
                            <?php echo $key->customerName ?>
                        </td>
                        <td>
                            <?php echo $key->contactFirstName . ' ' . $key->contactLastName ?>
                        </td>
                        <td>
                            <?php echo $key->phone ?>
                        </td>
                        <td>
                            <?php echo $key->addressLine1 . ' ' . $key->addressLine2 ?>
                        </td>
                        <td>
                            <?php echo $key->city . ', ' . $key->state . ', ' . $key->country ?>
                        </td>
                        <td>
                            <?php echo $key->postalCode ?>
                        </td>
                        <td>
                            <?php echo $key->salesRepEmployeeNumber ?>
                        </td>
                        <td>
                            <?php echo $key->creditLimit ?>
                        </td>
                        <td class="justify-content-center">
                            <a class="btn btn-sm btn-primary" href="<?php echo site_url('Customers/edit/' . $key->customerNumber); ?>">Edit</a>
                            <a class="btn btn-sm btn-danger" href="<?php echo site_url('Customers/delete/' . $key->customerNumber); ?>">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="<?php echo base_url('assets/bootstrap.bundle.min.js.download') ?>"></script>
</body>

</html>