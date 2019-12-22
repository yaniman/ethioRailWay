<?php
include '../controller/dddReservationController.php';



class dddReservation
{
   private $departure_city;
   private $destination_city;
   private $departure_date;
      public function dddSetter()
      {
          session_start();
             $this->departure_city=$_POST['departure'];
             $this->destination_city=$_POST['destination'];
             $this->departure_date=$_POST['date'];
            //  $this->departure_city="AddisAbaba";
            // $this->destination_city="DireDewa";
            // $this->departure_date="kajsld";
      }
      public function send()
      {
          $this->dddSetter();
          $checkddd=new checkdd;
         $result= $checkddd->check($this->departure_city,$this->destination_city);
         $row=$result->fetch_assoc();
         $_SESSION['dt_id']=$row['dt_id'];
         header('location: test.php');
        //  echo $res->getterdt();
      }

}
$ddd=new dddReservation();
$ddd->send();

?>