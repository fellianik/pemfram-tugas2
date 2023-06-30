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

    <div class="row mb-2 mx-3 mt-4">
        <div class="col-10">
            <h1 class="m-0">Update <?php echo $title ?></h1>
        </div>
    </div>

    <div class="container mt-5">
        <form action="<?php echo base_url() ?>index.php/Offices/update" method="post">
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label for="officeCode" class="col-sm-2 col-form-label">Office Code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="officeCode" value="<?php echo $result->officeCode; ?>" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="city" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="city" value="<?php echo $result->city; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="phone" value="<?php echo $result->phone; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="addressLine1" class="col-sm-2 col-form-label">Address Line 1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="addressLine1" value="<?php echo $result->addressLine1; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="addressLine2" class="col-sm-2 col-form-label">Address Line 2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="addressLine2" value="<?php echo $result->addressLine2; ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="state" class="col-sm-2 col-form-label">State</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="state" value="<?php echo $result->state; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="country" class="col-sm-2 col-form-label">Country</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="country" value="<?php echo $result->country; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="postalCode" class="col-sm-2 col-form-label">Postal Code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="postalCode" value="<?php echo $result->postalCode; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="territory" class="col-sm-2 col-form-label">Territory</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="territory" value="<?php echo $result->territory; ?>">
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