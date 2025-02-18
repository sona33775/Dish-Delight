


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            margin-top:100px;
            background:skyblue; 
            height: 100%;
            display: flex; 
            align-items: center;
            justify-content: center; 
           
        }
        .demo {
           
            background:skyblue;
            border-radius: 8px;
            margin: auto; 
            margin-top:50px;
            width: 300px; 
           
        }
        .input {
          
            width: 100%; 
            border: 1px solid ; 
            border-radius: 1px; 
        }
        .btn {
            width: 100%; 
            background-color:green; 
            border-radius: 5px; 
            border: 1px solid ;
            color: white; 
        }
      
    </style>
</head>
<body>
    <div class="container">
        <div class="demo">
        <form action="login-action.php" method="post" enctype="multipart/form-data">
                <h2 class="text-center">Login Form</h2>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="input" id="username" placeholder="username" name="username" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="input" id="password" name="password" placeholder="password" required>
                </div>
                <button type="submit" class="btn">Submit</button>
                <p style="text-align: center;">Don't have an account? <a href="register.php" style="color:red";>Register</a></p>
            </form>
        </div>
    </div>

    
</body>
</html>
