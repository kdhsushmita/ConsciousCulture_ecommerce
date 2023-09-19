<?php
require './connection.php';
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(!empty($_POST['email'])&&!empty($_POST['password'])){
        $insert=loginlogout::login($email,$password);
    }
    else{
        echo "<script>
        alert('Fill all fields');
        </script> 
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img\logo.PNG" type="image/x-icon">
    <title>ConsciousCart-Login</title>
    <!-- style -->
    <link rel="stylesheet" href="css\loginstyle.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap\bootstrap.css">
    <script src="bootstrap\bootstrap.js"></script>
</head>
<body>
    <form action="login.php" class="container" method="POST">
        <div class="box">
            <div class="row">
                <div class="col-sm-5 col-xs-1 box1">
                    <div class="inline-text">
                        <h1>Login</h1>
                        <p>Get Access to your Orders, <br>
                            Wishlist and <br>
                            Recommendations</p>
                    </div>
                </div>
                <div class="col-sm-5 col-xs-1 box2">
                    <div class="user-id user-data">
                        <label for="email">Enter Email:</label> <br>
                        <input type="text" name="email" id="email" required>
                    </div>
                    <div class="user-id user-data">
                        <label for="password">Enter Password:</label> <br>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="user-id">
                        <p>By continuing, you agree to ConsciousCart's Term of Use and Privacy Policy.</p>
                    </div>
                    <div class="user-id button">
                        <input type="submit" value="Login" name="submit" id="submit">
                    </div>
                    <div class="user-id">
                        <p>OR</p>
                    </div>
                    <div class="user-id">
                        <div class="footer">
                            <a href="signup.php">New to ConsciousCart?Create an account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>