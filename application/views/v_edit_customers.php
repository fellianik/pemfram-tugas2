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

    <div class="row mb-2 mx-3 mt-4">
        <div class="col-10">
            <h1 class="m-0">Update <?php echo $title ?></h1>
        </div>
    </div>

    <div class="container mt-5">
        <form action="<?php echo base_url() ?>index.php/Customers/update" method="post">
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label for="customerNumber" class="col-sm-3 col-form-label">Customer Number</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="customerNumber" value="<?php echo $result->customerNumber; ?>" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="customerName" class="col-sm-3 col-form-label">Customer Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="customerName" value="<?php echo $result->customerName; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="contactFirstName" class="col-sm-3 col-form-label">Contact First Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="contactFirstName" value="<?php echo $result->contactFirstName; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="contactLastName" class="col-sm-3 col-form-label">Contact Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="contactLastName" value="<?php echo $result->contactLastName; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="phone" value="<?php echo $result->phone; ?>">
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="mb-3 row">
                        <label for="addressLine1" class="col-sm-2 col-form-label">Address 1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="addressLine1" value="<?php echo $result->addressLine1; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="addressLine2" class="col-sm-2 col-form-label">Address 2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="addressLine2" value="<?php echo $result->addressLine2; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="city" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="city" value="<?php echo $result->city; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="state" class="col-sm-2 col-form-label">State</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="state" value="<?php echo $result->state; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="postalCode" class="col-sm-2 col-form-label">Postal Code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="postalCode" value="<?php echo $result->postalCode; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="country" class="col-sm-2 col-form-label">Country</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="country" value="<?php echo $result->country; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="salesRepEmployeeNumber" class="col-sm-3 col-form-label">Sales Rep Employee Number</label>
                <div class="col-sm-9">
                    <select name="salesRepEmployeeNumber" class="form-select">
                        <option selected><?php echo $result->salesRepEmployeeNumber ?></option>
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
                <label for="creditLimit" class="col-sm-3 col-form-label">Credit Limit</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="creditLimit" value="<?php echo $result->creditLimit ?>">
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