<?php
require("conn.php");
$id = $_REQUEST["var"];
$res = $con->query("SELECT * FROM `food` WHERE `reg_no` = '$id'");
$row = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="row">


    <div class="col-lg-6 text-center">

        <img id="food_image" name="food_image" src="<?php echo 'admin/images-1/' . htmlspecialchars($row['food_image']); ?>" 
             alt="Food Image" 
             class="img-fluid rounded" 
             style="width: 300px; height: 400px; padding-top: 100px;">

    </div>
 
    <div class="col-lg-6" style="padding-top: 100px;">
       
    <form action="order_action.php" method="post" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo($row['reg_no']); ?>" name="reg_no">

            <div class="form-group mb-3">
                <label for="food_name">Food Name</label>
                <input type="text" class="form-control" id="food_name" name="food_name" value="<?php echo ($row['food_name']); ?>" required>
            </div>

            <div class="form-group mb-3">
                <label for="food_variety">Food Variety</label>
                <input type="text" class="form-control" id="food_variety" name="food_variety" value="<?php echo ($row['food_variety']); ?>" required>
            </div>

            <div class="form-group mb-3">
                <label for="food_price">Food Price</label>
                <input type="text" class="form-control" id="food_price" name="food_price" value="<?php echo ($row['food_price']); ?>" readonly>
            </div>

            <div class="form-group mb-3">
                <label for="food_quantity">Food Quantity</label>
                <input type="number" class="form-control" id="food_quantity" name="food_quantity" required>
            </div>

            <div class="form-group mb-3">
                <label for="total_price">Total Price</label>
                <input type="text" class="form-control" id="total_price" name="total_price" >
             </div>

            <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>
</div>

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#food_quantity').on('input', function () {
            const price = parseFloat($('#food_price').val());
            const quantity = parseFloat(this.value);
            const total = isNaN(price * quantity) ? 0 : price * quantity;
            $('#total_price').val(total.toFixed(2));
        });
    });
</script>
</body>
</html>
  