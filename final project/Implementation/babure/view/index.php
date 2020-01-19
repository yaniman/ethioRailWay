<?php
session_start();
$_SESSION["username"]="";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
    <style type="text/css">
      body {
        font: 14px sans-serif;
      }
      .wrapper {
        width: 350px;
        padding: 20px;
      }
    </style>
  </head>
  <body style="padding-top: 90px; padding-right: 0px; padding-left: 500px; ">
    <div class="wrapper">
      <h2 align="center">Login</h2>
      <br />
      <?php 
      $error;
          if(isset($_GET['error']))
          {
$error=$_GET["error"];
 if($error=="error1")
      {
        echo "<h4 class='alert-danger'>Incorrect username or password</h4>";
      }
      else
      if($error=="error2")
      {
        echo "<h4 class='alert-danger'>Must login first</h4>";
      }
      else
        if($error=="error3")
      {
        echo "<h4 class='alert-danger'>Account deactivated contact supervisor</h4>";
      }
          } 
     
        ?>
<div class="jumbotron">
      <p>Please fill in your credentials to login.</p>
      <form action="../model/login.php" method="POST">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" class="form-control" ">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" />
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Login" />
        </div>
      </form>
      </div>
    </div>
  </body>
</html>
