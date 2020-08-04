<?php
require "../controller/viewticket.php";
class viewticketinfo
{
    private $ticketnumber;
    private $phone;

    private $date;
    
    public function setter()
    {
        
        $this->ticketnumber=$_POST["ticketno"];
        //$this->ticketnumber="ETHAddDir28129807";
        
          $this->phone=$_POST["phone"];
        //$this->phone="";
          $this->date=$_POST["date"];
        //$this->date="";
    }
    
    public function viewticket()
    {
            $this->setter();
            $viewt= new viewticket;
            if($this->ticketnumber=="")
    {
       $result=$viewt->viewticketinf1($this->phone,$this->date);
    }
    else
    {
          $result=$viewt->viewticketinf($this->ticketnumber);
    }
             $row=$result->fetch_assoc();
        
             echo json_encode($row);
    }

}
$self=new viewticketinfo;
$self->viewticket();
?>