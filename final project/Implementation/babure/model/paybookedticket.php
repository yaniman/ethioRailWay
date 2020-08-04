<?php
require "../controller/paybooked.php";
class paybookedticket
{
    private $ticketnumber;
    private $pid;
    
    public function setter()
    {
        
        $this->ticketnumber=$_POST["ticketno"];
        //$this->ticketnumber="09876thj";
        // $this->pid=$_POST['pid'];
        //$this->pid="2";
    }
    public function paybookedti()
    {
            $this->setter();
            $viewt= new paybooked;
            $res=$viewt->getpaymentid($this->ticketnumber);
            $row=$res->fetch_assoc();
            $this->pid=$row["p_id"];
         $result=$viewt->pay($this->ticketnumber,$this->pid);
             
            //  if($row)
            //  {
            //     echo "successfully paid";
            //  }else
            //  {
            //     echo "error occured try again later";
            //  }
             $val["message"]=$result;
             echo json_encode($val);
    }

}
$self=new paybookedticket;
$self->paybookedti();
?>