<?php
include "../model/insert.php";
class insertpayment
{
    private $phone;
    private $fullname;
    private $transactionno;
    private $amount;
    public function Setter()
    {
        $this->phone=$_POST["phoneno"];
        $this->fullname=$_POST["fullname"];
        $this->amount=$_POST["amount"];
        $this->transactionno=substr($this->phone,1,8).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
    }
    public function insertpayment()
    {
        $this->Setter();
        $output=array();
        $payment=new insert;
        $result=$payment->add($this->fullname,$this->phone,$this->amount,$this->transactionno);
        $row=$result;
            $output["payment_id"]=$row;
    }
}
$self=new insertpayment;
$self->insertpayment();
?>