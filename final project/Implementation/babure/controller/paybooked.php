<?php
require "connection.php";
class paybooked{
    public $con;
     public function setter()
     {
      $this->con=new connection();
       $this->con->connect();   
     }
      public function pay($ticketno,$paymentid)
      {
          $status="active";
          $status1="paid";
          $via="cash";
          $this->setter();
       $query="update reservation set status='$status' where ticket_number='$ticketno'";
       //echo "query is".$query;
       $result=$this->con->conn->query($query);
        $query="update payment set status='$status1', via='$via' where p_id='$paymentid'";
    $result=$this->con->conn->query($query);
        
       //echo $query." ".$result;
       return $result;
      }
      public function getpaymentid($ticketno)
      {
        $this->setter();
        $query="select p_id from reservation where ticket_number='$ticketno'";
        $result=$this->con->conn->query($query);
        return $result;
      }
}
?>