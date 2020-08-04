<?php
include '../model/updatepayment.php';

class success
{
    public $pid;
    public $apipaymentid;
    public $ticketno;
    
    public function setter()
    {
        //$this->pid=$_POST["pid"];
        $this->apipaymentid=$_POST["apipaymentid"];
        $this->ticketno=$_POST["ticketno"];
       
    }
    public function getpaymentid()
    {
        $this->setter();
        $st=new updatepayment;
        $result=$st->getid($this->ticketno);
        $row=$result->fetch_assoc();
        $this->pid=$row["p_id"];
        
    }
    public function successM()
    {
        $this->setter();
        $st=new updatepayment;
        $this->getpaymentid();
        $result=$st->updater($this->pid,$this->apipaymentid,$this->ticketno);
        // if($result)
        // {
            
        //     $this->emailsend($this->email);
        // }
        // else
        // {
        //     echo "Some error occured try again later";
        // } 
        $output=array();
        if($result)
        {
            $output[]="successful";
           
        }
        else
        {
            $output[]="some error happened try again later";
            
        }
        echo json_encode($output);
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
$self->successM();
   ?>