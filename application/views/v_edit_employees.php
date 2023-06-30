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

    <div class="row mb-2 mx-3 mt-4">
        <div class="col-10">
            <h1 class="m-0">Update <?php echo $title ?></h1>
        </div>
    </div>

    <div class="container mt-5">
        <form action="<?php echo base_url() ?>index.php/Employees/update" method="post">
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label for="employeeNumber" class="col-sm-3 col-form-label">Employee Number</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="employeeNumber" value="<?php echo $result->employeeNumber; ?>" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="firstName" class="col-sm-3 col-form-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="firstName" value="<?php echo $result->firstName; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="lastName" class="col-sm-3 col-form-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="lastName" value="<?php echo $result->lastName; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="extension" class="col-sm-3 col-form-label">Extension</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="extension" value="<?php echo $result->extension; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" value="<?php echo $result->email; ?>">
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="mb-3 row">
                        <label for="officeCode" class="col-sm-2 col-form-label">Office Code</label>
                        <div class="col-sm-10">
                            <select name="officeCode" class="form-select">
                                <option><?php echo $result->officeCode ?></option>
                                <option>Pilih</option>
                                <?php foreach ($offices as $item) : ?>
                                    <option value="<?php echo $item->officeCode ?>">
                                        <?php echo $item->officeCode . ". " . $item->city . " : " . $item->addressLine1; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="reportsTo" class="col-sm-2 col-form-label">Reports to</label>
                        <div class="col-sm-10">
                            <select name="reportsTo" class="form-select">
                                <option><?php echo $result->reportsTo ?></option>
                                <option>Pilih</option>
                                <?php foreach ($employees as $item) : ?>
                                    <option value="<?php echo $item->employeeNumber ?>">
                                        <?php echo "[" . $item->employeeNumber . "] " . $item->firstName . " " . $item->lastName . " : " . $item->jobTitle ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jobTitle" class="col-sm-2 col-form-label">Job Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jobTitle" value="<?php echo $result->jobTitle; ?>">
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