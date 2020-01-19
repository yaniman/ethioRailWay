<?php
session_start();
if($_SESSION["username"]=="")
{
    header("location:index.php?error=error2");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Ethio Railway</title>

    <!-- CSS - Includes Bootstrap -->
    <link href="../view/css/bootstrap/creative.min.css" rel="stylesheet" />
    <!-- Bootstrap -->
  </head>

  <body id="page-top" style="overflow-x: hidden;">
    <!-- Navigation -->
    <nav
      class="navbar navbar-expand-lg navbar-light fixed-top py-3"
      id="mainNav"
    >
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"
          >Ethio-Railway</a
        >
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto my-2 my-lg-0">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Manage Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">View Report</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead">
      <div class="container h-100">
        <div
          class="row h-100 align-items-center justify-content-center text-center"
        >
          <div class="col-lg-10 align-self-end">
            <h1 class="text-uppercase text-white font-weight-bold">
              WelCome To Admin Page
            </h1>
            <hr class="divider my-4" />
          </div>
          <div class="col-lg-8 align-self-baseline">
            <p class="text-white-75 font-weight-light mb-5">
              The Addis Ababa–Djibouti Railway is a new standard gauge
              international railway that serves as the backbone of the new
              Ethiopian National Railway Network.
            </p>
          </div>
        </div>
      </div>
    </header>

    <!-- Footer -->
    <footer class="bg-light py-5">
      <div class="container">
        <div class="small text-center text-muted">
          Copyright &copy; 2019 - Ethiopia Mekelle
        </div>
      </div>
    </footer>
  </body>
</html>
