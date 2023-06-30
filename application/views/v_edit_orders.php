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

    <div class="row mb-2 mx-3 mt-4">
        <div class="col-10">
            <h1 class="m-0">Update <?php echo $title ?></h1>
        </div>
    </div>

    <div class="container mt-5">
        <form action="<?php echo base_url() ?>index.php/Orders/update" method="post">
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label for="orderNumber" class="col-sm-3 col-form-label">Order Number</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="orderNumber" value="<?php echo $result->orderNumber; ?>" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="orderDate" class="col-sm-3 col-form-label">Order Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="orderDate" value="<?php echo $result->orderDate; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="requiredDate" class="col-sm-3 col-form-label">Required Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="requiredDate" value="<?php echo $result->requiredDate; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="shippedDate" class="col-sm-3 col-form-label">Shipped Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="shippedDate" value="<?php echo $result->shippedDate; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="status" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="status" value="<?php echo $result->status; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="comments" class="col-sm-3 col-form-label">Comments</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" name="comments" value="<?php echo $result->comments; ?>"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="customerNumber" class="col-sm-3 col-form-label">Customer Number</label>
                        <div class="col-sm-9">
                            <select name="customerNumber" class="form-select">
                                <option><?php echo $result->customerNumber; ?></option>
                                <option>Pilih</option>
                                <?php foreach ($customers as $item) : ?>
                                    <option value="<?php echo $item->customerNumber ?>">
                                        <?php echo "[" . $item->customerNumber . "] " . $item->customerName ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
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