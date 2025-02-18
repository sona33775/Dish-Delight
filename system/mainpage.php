<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        nav {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin: 0 15px;
        }

      

        nav ul li a:hover {
            color: #ff6347;
        }

        .section {
            text-align: center;
            padding: 50px;
            background-color: grey;
        }

        .section h1 {
            margin-bottom: 20px;
        }

        .gallery {
            display:flex;
            gap: 15px;
            padding: 20px;
            background-color: grey;
        }

        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: red;
        }
         .footer{
            text-align:center;
         }
    </style>
</head>
<body>
    <nav>
        <div class="logo">beauty parlour</div>
        <ul>
        <li><a href="logout.php">logout</a></li>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="add.php">Add products</a></li>
            <li><a href="table.php">view products</a></li>


        </ul>
    </nav>

    <section class="section" id="home">
        <h1>Welcome to the parlour</h1>
        <p>Beauty brings you more confidence</p>
    </section>

    <section class="gallery" id="gallery">
        <img src="beauty.jpg"  style= width:300px;height:300px;>
        <img src="beauty2.jpg" style= width:300px;height:300px;>
        <img src="beauty3.jpg" style= width:300px;height:300px;>
        <img src="beauty4.jpg" style= width:300px;height:300px;>
    </section>
    <div class="footer" style=background-color:grey; >
        <p>contact us</p>
        <p>sona33775@gmail.com</p>
        <p>phone no:9442360211</p>
    </div>

    
</body>
</html>
