<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offices</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css') ?>">


</head>

<body>
    <?php require("welcome_message.php") ?>

    <div class="row mb-2 mx-3">
        <div class="col-10">
            <h1 class="m-0">Data <?php echo $title ?></h1>
        </div>
        <div class="col">
            <button class="btn btn-primary" onclick="window.location.href='<?php echo base_url('index.php/offices/addData') ?>';">Add <?php echo $title ?></button>
        </div>
    </div>

    <div class="table-responsive m-3">
        <table class="table table-bordered table-striped table-sm text-center table-hover align-middle">
            <thead class="table-dark align-middle">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Office Code</th>
                    <th scope="col">City</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">State</th>
                    <th scope="col">Postal Code</th>
                    <th scope="col">Territory</th>
                    <th scope="col" class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 0;
                foreach ($office as $key) {
                    $count = $count + 1;
                ?>
                    <tr>
                        <td>
                            <?php echo $count ?>
                        </td>
                        <td>
                            <?php echo $key->officeCode ?>
                        </td>
                        <td>
                            <?php echo $key->city ?>
                        </td>
                        <td>
                            <?php echo $key->phone ?>
                        </td>
                        <td>
                            <?php echo $key->addressLine1 . ' ' . $key->addressLine2 ?>
                        </td>
                        <td>
                            <?php echo $key->state . ', ' . $key->country ?>
                        </td>
                        <td>
                            <?php echo $key->postalCode ?>
                        </td>
                        <td>
                            <?php echo $key->territory ?>
                        </td>
                        <td class="justify-content-center">
                            <a class="btn btn-sm btn-primary" href="<?php echo site_url('Offices/edit/' . $key->officeCode); ?>">Edit</a>
                            <a class="btn btn-sm btn-danger" href="<?php echo site_url('Offices/delete/' . $key->officeCode); ?>">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="<?php echo base_url('assets/bootstrap.bundle.min.js.download') ?>"></script>
</body>

</html>