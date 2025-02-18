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

<form action="insert.php" method="post" enctype="multipart/form-data">
    <div class="demo">
        <label>Name:</label>
        <input type="text" id="name" name="uname" required>
    </div>
    
    <div class="demo">
        <label>Email:</label>
        <input type="email" id="email"name="email" required>
    </div>
    
    <div class="demo">
        <label>Password:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div class="demo">
        <label>Phone Number:</label>
        <input type="text" id="phone" name="phone_number" required>
    </div>

 <div class="demo">
        <label>Country:</label>
        <select id="country" name="country" required>
            <?php
		    require("conn.php");
            $name=$_REQUEST["name"];
			$res=$con->query("select * from `countries`");
            $count=$res->num_rows;
            if ($count > 0) {
                while ($row = $res->fetch_assoc()) 
                {
              
            ?>
           
            
            <option value=<?php echo $row["cont_id"] ?>>
               
                <?php
               
                echo $row["name"];
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
        <option >Select State</option>
    </select>
</div>     
         
          
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
                url: 'search_state.php',
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
