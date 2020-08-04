<?php
require "../controller/cancel.php";
class cancelticket
{
    private $ticketnumber;
    private $phone;

    private $date;
    
    public function setter()
    {
        
        $this->ticketnumber=$_POST["ticketno"];
        //$this->ticketnumber="ETHAddDir28121406";
    }
    
    public function cancelti()
    {
            $this->setter();
            $can= new cancelt;
      
          $result=$can->getamount($this->ticketnumber);
          $row=$result->fetch_assoc();
          $pid=$row["p_id"];
          $amount["amount"]=$row["amount"];
         $result1=$can->cancel($this->ticketnumber,$pid);
             echo json_encode($amount);
             // create a new class that manages the the mypay api messages
    }

}
$self=new cancelticket;
$self->cancelti();
?>