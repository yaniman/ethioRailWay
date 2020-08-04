<?php
require_once "connection.php";
class updatepayment
{
    public $con;
     public function setter()
     {
      $this->con=new connection();
       $this->con->connect();   
     }
     public function getid($tno)
     {
       $this->setter();
        $query="select p_id from reservation where ticket_number='$tno'";
       //echo "query is".$query;
       
       $result=$this->con->conn->query($query);
       return $result;
     }
      public function updater($pid,$api,$ticketno)
      {
          $via="mypayAPI";
          $status="paid";
          $statusR="active";
          $this->setter();
       $query="update payment set apipaymentid='$api', via='$via', status='$status' where p_id='$pid' ";
       //echo "query is".$query;
       
       $result=$this->con->conn->query($query);
       $query1="update reservation set status='$statusR' where ticket_number='$ticketno'";
        $result1=$this->con->conn->query($query1);
       return $result1;
      }
      
}
?>