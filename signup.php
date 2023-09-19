<?php
require './connection.php';
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(!empty($_POST['email'])&&!empty($_POST['password'])){
        $insert=loginlogout::inserting($email,$password);
        echo "<script>
        alert('Successfully Registered');
        window.location.href = 'index.php'; 
        </script> 
        ";
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
    <title>ConsciousCart-SignUp</title>
    <!-- style -->
    <link rel="stylesheet" href="css\loginstyle.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap\bootstrap.css">
    <script src="bootstrap\bootstrap.js"></script> 
</head>
<body>
    <form  class="container" method="post">
        <div class="box">
            <div class="row">
                <div class="col-sm-5 col-xs-1 box1">
                    <div class="inline-text">
                        <h1>Looks like you're <br>
                           new here.</h1>
                        <p>Sign up with your email <br>
                           address to get started.
                        </p>
                    </div>
                </div>
                <div class="col-sm-5 col-xs-1 box2">
                    <div class="user-id user-data">
                        <label for="email">Enter Email:</label> <br>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="user-id user-data">
                        <label for="password">Enter Email Password:</label> <br>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="user-id">
                        <p>By continuing, you agree to ConsciousCart's Term of Use and Privacy Policy.</p>
                    </div>
                    <div class="user-id button">
                        <input type="submit" value="Continue" name="submit" id="submit">
                    </div>
                    <div class="user-id">
                        <p>OR</p>
                    </div>
                    <div class="user-id button">
                        <a href="login.php">Existing User?Log in</a> 
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>