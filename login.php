<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background: linear-gradient(135deg, #9432d1, #c71035); 
            height: 100vh;
            display: flex; 
            align-items: center;
            justify-content: center; 
           
        }
        .demo {
            background: linear-gradient(135deg, #9432d1, #c71035);
            border-radius: 8px;
            margin: auto; 
            padding: 30px; 
            width: 400px; 
           
        }
        .form-control {
            width: 100%; 
            border: 1px solid #000000; 
            border-radius: 5px; 
        }
        .btn {
            width: 100%; 
            background-color: #096dd8; 
            border-radius: 5px; 
            border: 1px solid #000000;
            color: white; 
        }
      
    </style>
</head>
<body>
    <div class="container">
        <div class="demo">
        <form action="loginaction.php" method="post" enctype="multipart/form-data">
                <h2 class="text-center">Login</h2>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                </div>
                <button type="submit" class="btn">Submit</button>
                <p style="text-align: center;color: aliceblue;">Don't have an account? <a href="register.php">Register</a></p>
            </form>
        </div>
    </div>

    
</body>
</html>
