<?php
require "connection.php";
class cancelt
{
     public $con;
     public function setter()
     {
      $this->con=new connection();
       $this->con->connect();   
     }
      public function cancel($parameter,$id)
       {
          $this->setter();
       $query="update reservation set status='canceled' where ticket_number='$parameter'";
       $result=$this->con->conn->query($query);
       $query1="update payment set status='canceled' where p_id='$id'";
       $result=$this->con->conn->query($query1);
       return $result;
      }
      public function getamount($parameter)
      {
          $this->setter();
       $query="select * from reservation rs join payment p where rs.p_id=p.p_id and rs.ticket_number='$parameter'";
       $result=$this->con->conn->query($query);
       return $result;
      }
}
?>