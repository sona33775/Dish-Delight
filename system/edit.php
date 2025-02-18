<?php
require("connection.php");
$id=$_REQUEST["pro"];
$res=$con->query("select * from `product` where `product`='$id'");
$row=$res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<style>
body {
    font-family: Arial, sans-serif;
    background-color:red;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.panel-body {
    background:red;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 20px;
    width: 100%;
    max-width: 400px;
}

.form-group {
    margin-bottom: 25px;
}

label {
    color: white;
}


input {
    width: 100%;
    padding: 10px;
  
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="file"] {
    padding: 6px;
    color:white;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #17a2b8;
    border: none;
    border-radius: 4px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    
}

button:hover {
    background-color: #138496;
    
}
</style>
<div class="panel-body">
    <h1 style="text-align:center; color:white;">product form</h1>
                            <div class="position-center">
                                <form action="update.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="product"  value="<?php echo $row["product"];?>">
                                
                                    <div class="form-group">
                                        <label> product name</label>
                                        <input type="text" class="form-control" name="product_name"  value="<?php echo $row["product_name"];?>">
                                    </div>
                                    <div class="form-group">
                                        <label>product type</label>
                                        <input type="text" class="form-control" name="product_type"  value="<?php echo $row["product_type"];?>">
                                    </div>
                                    <div class="form-group">
                                        <label>product price</label>
                                        <input type="text" class="form-control" name="product_price"  value="<?php echo $row["product_price"];?>">
                                    </div>
                                    <div class="form-group">
                                        <label>product image</label>
                                        <input type="file" class="form-control" name="product_image"  value="<?php echo $row["product_image"];?>">
                                        <img src="<?php echo "image-1/".$row["product_image"];?>"style=" width:100px;height:100px";>
                                    </div>
                                    <button type="submit" class="btn btn-info" >Submit</button>
                                </form>
                        
                            </div>

                        </div>