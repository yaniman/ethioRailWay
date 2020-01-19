<?php
require "../../controller/reportCon.php";
include "../../model/report.php";
$dis=new report;
?>
<?php
session_start();
if($_SESSION["username"]=="")
{
    header("location:../index.php?error=error2");
}
?>
<!DOCTYPE >
<html>
  <head>
    <title>
      Admin home
    </title>
    <link
      rel="stylesheet"
      href="../css/bootstrap/bootstrap.css"
      type="text/css"
    />
    <!-- <link href="../css/bootstrap/creative.min.css" rel="stylesheet" /> -->
  </head>

  <body>
    <nav
      class="navbar navbar-expand-sm bg-light navbar-light justify-content-end"
    >
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" href="adminHome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="manageAccount.php">Manage account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="displayReport.php">View report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Logout</a>
        </li>
      </ul>
    </nav>
    <div class="container">
      <table class="table-info table">
        <thead>
          <tr>
            <th>Parameter</th>
            <th>value</th>
          </tr>
          <tr>
            <td>
              Number of ethiopian citizens that use this automated system to
              reserve there tickets
            </td>
            <td><?php  echo $dis->userReport()[0];?></td>
          </tr>
          <tr>
            <td>
              Number of non ethiopian citizens that use this automated system to
              reserve there tickets
            </td>
            <td><?php  echo $dis->userReport()[1];?></td>
          </tr>
          <tr>
            <td>
              Number of ethiopian citizens that use this long distance train
            </td>
            <td><?php  echo $dis->citizenReport();?></td>
          </tr>
          <tr>
            <td>
              Number of non ethiopian citizens that use this long distance train
            </td>
            <td><?php  echo $dis->noncitizenReport();?></td>
          </tr>
          <tr>
            <td>Number of customers from Addis Ababa to DireDewa</td>
            <td><?php  echo $dis->arrivalDestinationReport()[0];?></td>
          </tr>

          <tr>
            <td>Number of customers from Addis Ababa to adama</td>
            <td><?php  echo $dis->arrivalDestinationReport()[1];?></td>
          </tr>
          <tr>
            <td>Number of customers from Addis Ababa to Djibuti</td>
            <td><?php  echo $dis->arrivalDestinationReport()[2];?></td>
          </tr>
          <tr>
            <td>Number of customers from Djibuti to DireDewa</td>
            <td><?php  echo $dis->arrivalDestinationReport()[3];?></td>
          </tr>
          <tr>
            <td>Number of customers from Djibuti to adama</td>
            <td><?php  echo $dis->arrivalDestinationReport()[4];?></td>
          </tr>
          <tr>
            <td>Number of customers from Djibuti to Addis Ababa</td>
            <td><?php  echo $dis->arrivalDestinationReport()[5];?></td>
          </tr>
        </thead>
      </table>
    </div>
    <footer class="bg-light py-5">
      <div class="container">
        <div class="small text-center text-muted">
          Copyright &copy; 2019 - Ethiopia Mekelle
        </div>
      </div>
    </footer>
  </body>
</html>
