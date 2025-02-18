<?php
session_start();
?>
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Responsive_table :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<style>
  /* General body styling */
  body {
    font-family: 'Roboto', sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
  }


  table.table {
    width: 100%;
    margin: 20px auto;
    border-collapse: collapse;
    background-color: #fff;
    
    border-radius: 8px;
    overflow: hidden;
  }

  table.table thead {
    background-color: #007bff;
    color: white;
  }

  table.table thead th {
    padding: 10px 15px;
    text-align: left;
    text-transform: uppercase;
    font-weight: bold;
    border-bottom: 2px solid #ddd;
  }

  table.table tbody tr:nth-child(odd) {
    background-color: #f9f9f9;
  }

  table.table tbody tr:hover {
    background-color: #f1f1f1;
  }

  table.table td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  table.table img {
    border-radius: 8px;
    border: 1px solid #ddd;
  }

  /* Link styling */
  a {
    color: #007bff;
    text-decoration: none;
  }


  /* Container styling */
  div {
    padding: 20px;
  }
</style>

<section id="container">

   
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <?php
require("conn.php");
$id = $_SESSION["user"]; 
$res = $con->query("SELECT * FROM `order` WHERE `user_id` = '$id'");
$count = $res->num_rows;
$counter = 0;

if ($count > 0) {

?>

       
    <h3 style="text-align:center">MY ORDERS</h3>
           
                <thead>
                    <tr>
                        <th>SL.NO</th>
                        <th data-breakpoints="xs">FOOD_NAME</th>
                        <th>FOOD_VARIETY</th>
                        <th>FOOD_PRICE</th>
                       
                        <th>FOOD QUANTITY</th>
                        <th>TOTAL PRICE</th>
                        <th>ACTIONS</th>
                       
           
                    </tr>
                </thead>
                <?php
                if($count>0)
                {
                    while($row=$res->fetch_assoc())
                    {
                        ?>
                       
                        <tr>
                        <td><?php echo ++$counter; ?></td>
                      
                            <td>
                                <?php echo $row["food_name"];?>
                            </td>
                            <td>
                                <?php echo $row["food_variety"];?>
                            </td>
                            <td>
                                <?php echo $row["food_price"];?>
                            </td> 

                            <td>
                                <?php echo $row["food_quantity"];?>
                            </td>
                            <td>
                                <?php echo $row["total_price"];?>
                            </td>
                        <?php  
                            echo '<td>';
                        if ($row["Status"] == 1) {
                            echo '<button style="color: white;background-color:green;font-size:17px;">Approved</button>';
                        } elseif ($row["Status"] == 2) {
                            echo '<button style="color: white;background-color:red;font-size:19px;">Rejected</button>';
                        } else {
                            echo '<button style="color: white;background-color:orange;font-size:20px;">Pending</button>';
                        }
                     echo'</td>';

                           ?> 


                 
                        </tr>
                    
                        <?php
                        }
                    }
                }
                    ?>
                    </table>
    </div>
  </div>
</div>
</section>


</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
