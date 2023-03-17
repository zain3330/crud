<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form method="post" action="<?php echo base_url(); ?>Welcome/update/<?php echo $product->user_id; ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="name" class="form-control" id="user_name" name="user_name" aria-describedby="emailHelp"
                    placeholder="Enter Name" value="<?php echo $product->user_name ?>">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="user_email" name="user_email" aria-describedby="emailHelp"
                    placeholder="Enter email" value="<?php echo $product->user_email ?>">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="user_password" name="user_password"
                    placeholder="Password" value="<?php echo $product->user_password ?>">
            </div>


            <div class="modal-footer">

                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
    <?php
    print_r($product);

    ?>

</body>

</html>