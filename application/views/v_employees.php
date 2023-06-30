<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css') ?>">


</head>

<body>
    <?php require("welcome_message.php") ?>

    <div class="row mb-2 mx-3">
        <div class="col-10">
            <h1 class="m-0">Data <?php echo $title ?></h1>
        </div>
        <div class="col-2">
            <button class="btn btn-primary" onclick="window.location.href='<?php echo base_url('index.php/employees/addData') ?>';">Add <?php echo $title ?></button>
        </div>
    </div>

    <div class="table-responsive m-3">
        <table class="table table-bordered table-striped table-sm text-center table-hover align-middle">
            <thead class="table-dark align-middle">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Employee Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Extension</th>
                    <th scope="col">Email</th>
                    <th scope="col">Office Code</th>
                    <th scope="col">Report to</th>
                    <th scope="col">Job Title</th>
                    <th scope="col" class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 0;
                foreach ($employee as $key) {
                    $count = $count + 1;
                ?>
                    <tr>
                        <td>
                            <?php echo $count ?>
                        </td>
                        <td>
                            <?php echo $key->employeeNumber ?>
                        </td>
                        <td>
                            <?php echo $key->firstName . ' ' . $key->lastName ?>
                        </td>
                        <td>
                            <?php echo $key->extension ?>
                        </td>
                        <td>
                            <?php echo $key->email ?>
                        </td>
                        <td>
                            <?php echo $key->officeCode ?>
                        </td>
                        <td>
                            <?php echo $key->reportsTo ?>
                        </td>
                        <td>
                            <?php echo $key->jobTitle ?>
                        </td>
                        <td class="justify-content-center">
                            <a class="btn btn-sm btn-primary" href="<?php echo site_url('Employees/edit/' . $key->employeeNumber); ?>">Edit</a>
                            <a class="btn btn-sm btn-danger" href="<?php echo site_url('Employees/delete/' . $key->employeeNumber); ?>">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="<?php echo base_url('assets/bootstrap.bundle.min.js.download') ?>"></script>
</body>

</html>