<?php
include "../model/payment.php";
class pay
{
    private $phone;
    private $fullname;
    private $transactionno;
    private $amount;
    public function Setter()
    {
        $this->phone=$_POST["phoneno"];
        $this->fullname=$_POST["fullname"];
        $this->transactionno=$_POST["t_no"];
        $this->amount=$_POST["total"];
    }
    public function checkpayment()
    {
        $this->Setter();
        $output=array();
        $payment=new payment;
        $result=$payment->mypayment($this->fullname,$this->phone,$this->transactionno);
        
        if($row=$result->fetch_assoc())
        {
            $output["payment_id"]=$row["p_id"];
            $output["result"]="successfully paid";
            $output["error"]=false;
            if($row["amount"]>=$this->amount)
            {
                $output["amountcheck"]=true;
            }
            else
            {
             $output["amountcheck"]=false;   
            }
        }
        else{
            $output["error"]=true;
        }
        echo json_encode($output);  
    }
}
$self=new pay;
$self->checkpayment();
?>