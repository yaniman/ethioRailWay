<?php
include '../model/amount.php';

class amountfetch
{
   private $ticketno;

   private $amount;
      public function Setter()
      {
          
             $this->ticketno=$_POST['ticketno'];
             
      }
      public function fetch()
      {
          $this->Setter();
          $am=new amount;
         $result= $am->get($this->ticketno);
         $output=array();
       $row=$result->fetch_assoc();
       if($row["amount"]!="" && $row["status"]=="booked"){
        $output["message"]=true;
        $output["amount"]=$row["amount"];
       }
       else
       {
         $output["message"]=false;
       } 
          echo json_encode($output);
      }

}

$self=new amountfetch;
$self->fetch();
?>