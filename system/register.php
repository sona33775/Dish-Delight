<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Form</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: pink;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .demo {
            background:pink;
            padding: 20px;
            border-radius: 10px;
            
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .input {
            width: 100%; 
            border: 2px solid #ccc;
            border-radius: 5px;
            padding: 10px;
          
        }

        .btn {
            background: blue;
            color: white;
            border: none;
            border-radius: 5px;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background: darkblue;
        }
    </style>
</head>
<body>
    <div class="demo">
        <h1>Register Form</h1>
        <form action="reg_action.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="input" id="name" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" class="input" id="phone_number" name="phone_number" placeholder="Phone Number" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="input" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="input" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</body>
</html>
