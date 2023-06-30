<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product lines</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css') ?>">


</head>

<body>
    <?php require("welcome_message.php") ?>

    <div class="row mb-2 mx-3 mt-4">
        <div class="col-10">
            <h1 class="m-0">Add <?php echo $title ?></h1>
        </div>
    </div>

    <div class="container mt-5">
        <form action="<?php echo base_url() ?>index.php/Productlines/createData" method="post">
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label for="productLine" class="col-sm-3 col-form-label">Product Line</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="productLine">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="textDescription" class="col-sm-3 col-form-label">Text Description</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" name="textDescription"></textarea>
                        </div>
                    </div>
                </div>


            </div>

            <div class="mb-3 row float-end">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Add Data</button>
                </div>
            </div>
        </form>
    </div>

    <script src="<?php echo base_url('assets/bootstrap.bundle.min.js.download') ?>"></script>
</body>

</html>