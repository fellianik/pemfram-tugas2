<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments</title>
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
        <form action="<?php echo base_url() ?>index.php/Payments/update" method="post">
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label for="customerNumber" class="col-sm-3 col-form-label">Customer Number</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="customerNumber" value="<?php echo $result->customerNumber; ?>" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="checkNumber" class="col-sm-3 col-form-label">Check Number</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="checkNumber" value="<?php echo $result->checkNumber; ?>" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="paymentDate" class="col-sm-3 col-form-label">Payment Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="paymentDate" value="<?php echo $result->paymentDate; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="amount" class="col-sm-3 col-form-label">Amount</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="amount" value="<?php echo $result->amount; ?>">
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