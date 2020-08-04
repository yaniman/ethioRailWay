<?php
require_once "connection.php";
class staffpayment
{
    public $con;
     public function setter()
     {
      $this->con=new connection();
       $this->con->connect();   
     }
      
      public function pay($rid,$pid)
      {
          $via="cash";
          $status="active";
          $status1="paid";
          $reserver="staff";
        $this->setter();
         $query="update reservation set reserver='$reserver', status='$status' where r_id='$rid'";
        $result1=$this->con->conn->query($query);
        $query="update payment set via='$via', status='$status1' where p_id='$pid'";
        $result1=$this->con->conn->query($query);
        return $result1; 
      }
}
?>