<?php
include '../model/seatfetch.php';

class routecheck
{
   private $departure_city;
   private $destination_city;
     private $seatclass;
      public function Setter()
      {
          
             $this->departure_city=$_POST['departure'];
             $this->destination_city=$_POST['destination'];
             
      }
      public function send()
      {
          $this->Setter();
          $seat=new seatfetch;
         $result= $seat->route($this->departure_city,$this->destination_city);
         $output;
         $row=$result->fetch_assoc();
         
            $output["route_id"]=$row["route_id"];
          echo json_encode($output);
      }

}

$self=new routecheck;
$self->send();
?>