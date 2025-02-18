<?php
require("connection.php");
$id=$_REQUEST["var"];
$res=$con->query("select * from `users` where `user`='$id'");
$row=$res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <style>
        *{
            color:black;
        }
        body {         
            background-color:gray;
        }
        .demo {
            margin: auto;       
            width: 50%;
            margin-bottom: 20px;
        }
        label {
            display: flex;
            margin-bottom: 10px;
        }
        select, input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            
        }
        #btn {
            display: block;
            margin: 20px auto;
        }
       
    </style>
</head>
<body>
<h2 style="text-align: center;">Register Form</h2>

<form action="update2.php" method="post" enctype="multipart/form-data">
<input type="hidden" value="<?php echo $row["user"];?>" name="user">
                                   
    <div class="demo">

        <label>Name:</label>
        <input type="text" id="name" name="uname"  value="<?php echo $row["uname"];?>">
    </div>
    
    <div class="demo">
        <label>Email:</label>
        <input type="email" id="email"name="email"  value="<?php echo $row["email"];?>">
    </div>
    
    <div class="demo">
        <label>Password:</label>
        <input type="password" id="password" name="password"  value="<?php echo $row["password"];?>">
    </div>

    <div class="demo">
        <label>Phone Number:</label>
        <input type="text" id="phone" name="phone_number"  value="<?php echo $row["phone_number"];?>">
    </div>

 <div class="demo">
        <label>Country:</label>
        <select id="country" name="country" required>
    <?php
    require("connection.php");
    $country = $row["country"]; 
    $res1 = $con->query("SELECT * FROM `countries` where cont_id = $country");
    $count1 = $res1->num_rows;

    if ($count1 > 0) {
      
        while ($row1 = $res1->fetch_assoc()) {
            ?>
            <option value="<?php echo $row1["cont_id"]; ?>">
                <?php echo $row1["name"]; ?>
            </option>
            <?php
        }
    }
    ?>
    <?php

require("connection.php");
            $name=$_REQUEST["name"];
			$res1=$con->query("select * from `countries`");
            $count1=$res1->num_rows;
            if ($count1 > 0) {
                while ($row1 = $res1->fetch_assoc()) 
                {
              
            ?>
           
            
            <option value=<?php echo $row1["cont_id"] ?>>
               
                <?php
               
                echo $row1["name"];
               ?>
            </option>
                <?php
                }
            }
            ?>
</select>

</div>
    <div class="demo">
    <label>State:</label>
    <select id="state" name="state" required>
    <?php
    require("connection.php");
    $state = $row["state"]; 
    $res2 = $con->query("SELECT * FROM `states` where stat_id = $state");
    $count2 = $res2->num_rows;

    if ($count2 > 0) {
      
        while ($row2 = $res2->fetch_assoc()) {
            ?>
            <option value="<?php echo $row2["stat_id"]; ?>">
                <?php echo $row2["sname"]; ?>
            </option>
            <?php
        }
    }
    ?>
    </select>
   
</div>     
         
          


    <div>
        <button id="btn">Submit</button>
    </div>
    </form>

   <script type="text/javascript">
	$(document).ready(function() {
       
     $('#country').change(function() {
          
            var country = $('#country').val();
            //alert(country);

     $.ajax({
                url: 'user_search.php',
                type: 'POST',
                data: { country: country },
                success: function(result) {
                    
                    //alert(result); return false;
                   $('#state').html(result);
                }
            });
    });
});
</script>




</body>
</html>
