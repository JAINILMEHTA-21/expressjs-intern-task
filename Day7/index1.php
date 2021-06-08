<?php
  session_start();

 include"connection.php";

  if(isset($_POST['submit']))
  {
    $email=$_POST['email'];
    $password=$_POST['password'];
  
    $query=mysqli_query($con,"SELECT * FROM users WHERE email='$email' AND password='$password'");

    if($row = mysqli_fetch_array($query)) {
      $_SESSION['email']=$email;
      $_SESSION['Password'] = $password;

      header('location:home.php');
    }else{

      header('location:index.php');
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
                
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form-control">
                
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>