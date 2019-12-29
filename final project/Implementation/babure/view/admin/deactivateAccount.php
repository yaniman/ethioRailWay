<?php
session_start();
?>
<!DOCTYPE >
<html>
  <head>
    <title>
      Deactivate Account
    </title>
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css" type="text/css" />
  </head>

  <body>
    <nav
      class="navbar navbar-expand-sm bg-light navbar-light justify-content-end"
    >
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" href="createAccount.html">create account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Manage account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">View account activity</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">View travel activity</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Logout</a>
        </li>
      </ul>
    </nav>
    <div class="container">
      <form class="form1" method="POST" action="../../model/deactivateAccount.php">
      <label>id</label>
        <input type="text" class="form-control" name="id" value=<?php echo $_SESSION['staff_id'] ?>>
        <label>username</label>
        <input type="text" class="form-control" value=<?php echo $_SESSION['username'] ?>>
        <label>fullname</label>
        <input type="text" class="form-control"value=<?php echo $_SESSION['fullname'] ?>>
        <input type="submit" value="Deactivate" />
      </form>
    </div>
    <div class="card-footer">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab repellat
        atque a, reiciendis officia ea accusantium dolorem nulla alias fugit
        voluptatem rerum expedita amet sequi minima! Nobis voluptatum quibusdam
        dolorem?
      </p>
    </div>
  </body>
</html>
