<?php
require_once "dbconnection.php";
class payment
{
    public $con;
     public function setter()
     {
      $this->con=new connection();
       $this->con->connect();   
     }
      public function mypayment($fullname,$phoneno,$tno)
      {
          $this->setter();
       $query="select * from payment where fullname='$fullname' and phone_number='$phoneno' and transaction_number='$tno' and status='active'";
       //echo "query is".$query;
       $result=$this->con->conn->query($query);
       //echo $query;
       return $result;
      }
      public function decrease($pid,$am)
      {
        $this->setter();
        $query="update payment set amount='$am' where p_id='$pid'";
        $result=$this->con->conn->query($query);
      }
}
?>