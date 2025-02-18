<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
          
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }

        thead {
            background-color: green;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
        }

        th {
            background-color:black;
            color: white;
           
        }

        tr {
            background-color: #f9f9f9;
        }

    </style>
</head>
<body>
    <table>
    <?php
        require("connection.php");
        $res=$con->query("select * from `product` ");
        $count=$res->num_rows;
       $counter = 0;

{
      
        ?>
       
        <thead>
            <tr>
                <th>SL.NO</th>
                <th>PRODUCT_NAME</th>
                <th>PRODUCT_TYPE</th>
                <th>PRODUCT_PRICE</th>
                <th>PRODUCT_IMAGE</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <?php
                if($count>0)
                {
                    while($row=$res->fetch_assoc())
                    {
                        ?>
        <tbody>
            <tr>
                <td><?php echo ++$counter; ?></td>
                <td><?php echo $row["product_name"]; ?></td>
                <td><?php echo $row["product_type"]; ?></td>
                <td><?php echo $row["product_price"]; ?></td>
                <td>
                    <img src="<?php echo "image-1/" . $row["product_image"]; ?>" alt="Product Image" style="width:100px; height:100px;">
                </td>
                <td>
                               
                               <a href="edit.php? pro=<?php echo $row["product"];?>">edit</a>
                               
                           </td>
                           
                           <td>
                               <a href="delete.php? delete=<?php echo $row["product"];?>" >delete</a>
                           </td>
            </tr>
        </tbody>
        <?php
                        }
                    }
                }
                    ?>
    </table>
</body>
</html>
