<?php
require "../../controller/reportCon.php";
include "../../model/report.php";
$dis=new report;
?>
<!DOCTYPE >
<html>
  <head>
    <title>
      Admin home
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
          <a class="nav-link" href="searchAccount.html">Manage account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">View report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Logout</a>
        </li>
      </ul>
    </nav>
    <div class="container">
        <h5>Number of ethiopian citizens that use this automated system to reserve there tickets<?php  echo $dis->userReport()[0];?></h5>
        <h5>Number of ethiopian citizens that use this automated system to reserve there tickets<?php  echo $dis->userReport()[1];?></h5>
        <h5>Number of ethiopian citizens that use this long distance train<?php  echo $dis->citizenReport();?></h5>
        <h5>Number of ethiopian citizens that use this long distance train<?php  echo $dis->noncitizenReport();?></h5>
        <h4>Number of customers from one departure city to another</h4>
        <h6>Addis Ababa to adama<?php  echo $dis->arrivalDestinationReport()[0];?></h6>
        <h6>Addis Ababa to DireDewa<?php  echo $dis->arrivalDestinationReport()[1];?></h6>
        <h6>Addis Ababa to Djibuti<?php  echo $dis->arrivalDestinationReport()[2];?></h6>
        <h6>Djibuti to DireDewa<?php  echo $dis->arrivalDestinationReport()[3];?></h6>
        <h6>Djibuti to adama<?php  echo $dis->arrivalDestinationReport()[4];?></h6>
        <h6>Djibuti to Addis Ababa<?php  echo $dis->arrivalDestinationReport()[5];?></h6>
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
