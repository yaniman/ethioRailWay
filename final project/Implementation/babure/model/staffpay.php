<?php
require "../controller/staffpayment.php";
class staffpay
{
    private $rid;
    private $pid;

    private $date;
    
    public function setter()
    {
        
        $this->ticketnumber=$_POST["reservation_id"];
        //$this->ticketnumber="ETHAddDir28129807";
        
          $this->pid=$_POST["pid"];
        
    }
    
    public function payticket()
    {
            $this->setter();
            $staff= new staffpayment;
         
          $result=$staff->pay($this->rid,$this->pid);
          $row["result"]=$result;   
          echo json_encode($row);
    }

}
$self=new staffpay;
$self->payticket();
?>