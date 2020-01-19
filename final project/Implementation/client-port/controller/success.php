<?php
include '../model/updatepayment.php';

class success
{
    public $pid;
    public $apipaymentid;
    public $ticketno;
    
    public function setter()
    {
        $this->pid=$_POST["pid"];
        $this->apipaymentid=$_POST["apipaymentid"];
        $this->ticketno=$_POST["ticketno"];
       
    }
    public function success()
    {
        $this->setter();
        $st=new updatepayment;
        $result=$st->updater($this->pid,$this->apipaymentid,$this->ticketno);
        // if($result)
        // {
            
        //     $this->emailsend($this->email);
        // }
        // else
        // {
        //     echo "Some error occured try again later";
        // } 
        if($result)
        {
            echo json_encode("successful");
        }
        else
        {
            echo json_encode("some error happened try again later");
        }
    }
 public function emailsend($email)
   {
     
     $to=$email;
     $subject='Reservation ';
     $message='';
     $headers="From:'$this->name' <'$this->email'>\r\n";
     
     $headers.="Content-type:text/html\r\n";
     mail($to,$subject,$message,$headers);
   }
}
$self=new success;
$self->success();
   ?>