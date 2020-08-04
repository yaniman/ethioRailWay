<?php
include '../controller/seatfetch.php';

class seat
{
   private $departure_city;
   private $destination_city;
   private $departure_date;
   private $seatclass;
      public function Setter()
      {
          
             $this->departure_city=$_POST['departure'];
             $this->destination_city=$_POST['destination'];
             $this->departure_date=$_POST['date'];
             $this->seatclass=$_POST['seatclass'];
      }
      public function send()
      {
          $this->Setter();
          $seat=new seatfetch;
         $result= $seat->check($this->departure_city,$this->destination_city,$this->departure_date,$this->seatclass);
         $output=array();
         while($row=$result->fetch_assoc())
         {
            $output[]=$row["seat_number"];
            
         }
         
          echo json_encode($output);
      }

}

$self=new seat;
$self->send();
?>